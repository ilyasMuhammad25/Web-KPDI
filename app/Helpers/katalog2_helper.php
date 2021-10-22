<?php

function getData(array $data)
{
    $db = \Config\Database::connect();
    $res = $db->table($data['table']);
    if (isset($data['distinct'])) {
        $res->distinct()
            ->select($data['distinct']['select']);
    }
    if (isset($data['select'])) {
        $res->select($data['select']);
    }
    if (isset($data['limit'])) {
        $res->limit($data['limit']['count'], $data['limit']['from']);
    }
    if (isset($data['like'])) {
        $res->groupStart();
        $res->like($data['like']);
        $res->groupEnd();
    }
    if (isset($data['orlike'])) {
        $res->groupStart();
        $res->orLike($data['orlike']);
        $res->groupEnd();
    }
    if (isset($data['where']) and count($data['where']) > 0) {
        $res->groupStart();
        if (count($data['where']) > 0) {
            foreach ($data['where'] as $where) {
                if (isset($where['value']))
                    $res->where($where['field'], $where['value']);
                else
                    $res->where($where['field'], null, false);
            }
        }
        if (isset($data['orwhere']) and count($data['orwhere']) > 0) {
            if (count($data['orwhere']) > 0) {
                foreach ($data['orwhere'] as $orwhere) {
                    if (isset($orwhere['value']))
                        $res->orWhere($orwhere['field'], $orwhere['value']);
                    else
                        $res->orWhere($orwhere['field'], null, false);
                }
            }
        }
        $res->groupEnd();
    }
    if (isset($data['orderBy'])) {
        if (isset($data['orderBy']['field']) and isset($data['orderBy']['sort']))
            $res->orderBy($data['orderBy']['field'], $data['orderBy']['sort']);
        else
            $res->orderBy($data['orderBy']['random']);
    }
    if (isset($data['join'])) {
        foreach ($data['join'] as $join) {
            $res->join($join['table'], $join['table'] . '.' . $join['child'] . '=' . $join['parent'], isset($join['type']) ? $join['type'] : '');
        }
    }
    if (isset($data['group'])) {
        $res->groupBy($data['group']);
    }
    // dd($res);
    // ->result_array(); // select jenisperpus, aplikasi from dataperpustakaan  limit 0,10
    // if (!$res->get()) {
    //     return $this->db->error();
    // }
    return $res->get();
}

function insertData(array $data, $table)
{
    $db = \Config\Database::connect();
    $isMultiarray = is_multi_array($data);
    if ($isMultiarray)
        $db->table($table)->insertBatch($data);
    else
        $db->table($table)->insert($data);
}

function is_multi_array($arr)
{
    rsort($arr);
    return isset($arr[0]) && is_array($arr[0]);
}

if (!function_exists('ControlNumber')) {
    function ControlNumber($id = null)
    {
        //get last control number
        if (!empty($id)) {
            // $query2 = $conn->query('SELECT t_catalog_ruas.`Value` AS MaxControlNumber FROM t_catalog_ruas WHERE t_catalog_ruas.`CatalogId` = "' . $id . '" AND t_catalog_ruas.`Tag` ="001" ');
            // $row = $query2->getRow()->MaxControlNumber;
            $row = getData([
                'table'     => 't_catalog_ruas',
                'select'    => "Value` AS max",
                'where'     => [
                    ['field' => 'Catalogid', 'value' => $id],
                    ['field' => 'Tag', 'value' => '001'],
                ]
            ])->getRowArray()['max'];

            $newControlNumber =  substr($row, 3);
        } else {
            // $query2 = $conn->query('SELECT MAX(REPLACE(ControlNumber,"INLIS", "")) AS MaxControlNumber FROM t_katalog WHERE ControlNumber LIKE "INLIS0%"');
            // $query2 = $conn->query('SELECT MAX(REGEXP_SUBSTR(ControlNumber,"[0-9]+")) AS MaxControlNumber FROM t_katalog WHERE ControlNumber LIKE "INLIS0%"');
            $row = getData([
                'table'     => 't_katalog',
                'select'    => 'MAX(REPLACE(ControlNumber,"INLIS", "")) AS max',
                'like'      => ['ControlNumber' => 'INLIS0']
            ])->getRowArray()['max'];


            if ($row >= 0) {
                $controlNumber = (int)preg_replace('/[^0-9]/', '', $row);
            }
            $newControlNumber =  'INLIS' . str_pad((int)$controlNumber + 1, 15, '0', STR_PAD_LEFT);
        }

        return $newControlNumber;
    }
}

if (!function_exists('BIBID')) {
    function BIBID($id = null)
    {
        if (!empty($id)) {
            // $query2 = $conn->query('SELECT t_catalog_ruas.`Value` AS MaxBibId FROM t_catalog_ruas WHERE t_catalog_ruas.`CatalogId` = "' . $id . '" AND t_catalog_ruas.`Tag` ="035" ');
            $row = getData([
                'table'     => 't_catalog_ruas',
                'select' => 'Value AS max',
                'where'  => [
                    ['field' => 'CatalogId', 'value' => $id],
                    ['field' => 'Tag', 'value' => '035'],
                ]
            ])->getRowArray()['max'];

            $newId =  substr($row, 3);
        } else {
            $yearMonth =  date('my');
            //get last control number

            // $query2 = $conn->query('SELECT SUBSTR(MAX(BIBID),"0010-' . $yearMonth . '") AS MaxBibId FROM t_katalog WHERE BIBID LIKE "0010-' . $yearMonth . '%" AND LENGTH(BIBID)=15');
            $row = getData([
                'table'     => 't_katalog',
                'select'    => "SUBSTR(MAX(BIBID),'0010-$yearMonth') AS max",
                'like'      => ['BIBID' => "0010-$yearMonth"],
                'where'     =>
                [
                    ['field' => 'LENGTH(BIBID)', 'value' => '15'],
                ]
            ])->getRowArray()['max'];




            // $newControlNumber =  '0010-' .yearMonth. str_pad((int)$controlNumber + 1, 15, '0', STR_PAD_LEFT);

            $maxId =  (int)$row + 1;
            $newId =  '0010-' . $yearMonth . str_pad($maxId, 6, '0', STR_PAD_LEFT);
        }
        return $newId;
    }
}

if (!function_exists('ArrImplode')) {
    function ArrImplode($post, $param)
    {
        $fixdata = (is_array($post) ?  implode($param, $post) : $post);

        return $fixdata;
    }
}

if (!function_exists('MultiArray')) {
    function MultiArray($post, $param)
    {
        foreach ($post as $value) {
            $fix[] = reset($value);
        }

        $combine = Implode($fix, $param);
        // var_dump($combine);
        // die;

        return $combine;
    }
}

if (!function_exists('Implode_Penerbit')) {
    function ImplodePenerbit($post, $var = null)
    {
        $arrPenerbit = '';
        foreach ($post as $key => $value) {
            $arrPenerbit .=  (!empty($var) ?  $value[$var] . ';' : implode(" ", $value) . ';');
        }

        return $arrPenerbit;
    }
}
