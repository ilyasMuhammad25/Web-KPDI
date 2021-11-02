<?php
if (!function_exists('get_worksheet_label')) {
	function get_worksheet_label($worksheet_id)
	{
		$alias_name = '';
		switch ($worksheet_id) {
			case OPAC_NASKAH_KUNO:
				$alias_name = OPAC_NASKAH_KUNO_LABEL;
				break;
			case OPAC_BUKU_LANGKA: // di nomor panggil 
				$alias_name = OPAC_BUKU_LANGKA_LABEL;
				break;
			case OPAC_PETA:
				$alias_name = OPAC_PETA_LABEL;
				break;
			case OPAC_FOTO_GAMBAR_LUKISAN:
				$alias_name = OPAC_FOTO_GAMBAR_LUKISAN_LABEL;
				break;
			case OPAC_MAJALAH_SURAT_KABAR_LANGKA:
				$alias_name = OPAC_MAJALAH_SURAT_KABAR_LANGKA_LABEL;
				break;
			case OPAC_MIKRO_FILM:
				$alias_name = OPAC_MIKRO_FILM_LABEL;
				break;
			case OPAC_SUMBER_LAINNYA:
				$alias_name = OPAC_SUMBER_LAINNYA_LABEL;
				break;
			default:
				$alias_name = OPAC_SEMUA_KOLEKSI_LABEL;
		}
		return $alias_name;
	}
}

if (!function_exists('get_worksheet_label2')) {
	function get_worksheet_label2($worksheet_name)
	{
		$alias_name = '';
		switch (strtoupper($worksheet_name)) {
			case 'MANUSKRIP':
				$alias_name = OPAC_NASKAH_KUNO_LABEL;
				break;
			case 'MONOGRAF': // di nomor panggil 
				$alias_name = OPAC_BUKU_LANGKA_LABEL;
				break;
			case 'BAHAN KARTOGRAFIS':
				$alias_name = OPAC_PETA_LABEL;
				break;
			case 'BAHAN CAMPURAN':
				$alias_name = OPAC_FOTO_GAMBAR_LUKISAN_LABEL;
				break;
			case 'TERBITAN BERKALA':
				$alias_name = OPAC_MAJALAH_SURAT_KABAR_LANGKA_LABEL;
				break;
			case 'SUMBER ELEKTRONIK':
				$alias_name = OPAC_SUMBER_LAINNYA_LABEL;
				break;
			case 'REKAMAN SUARA':
				$alias_name = OPAC_SUMBER_LAINNYA_LABEL;
				break;
			case 'BENTUK MIKRO':
				$alias_name = OPAC_MIKRO_FILM_LABEL;
				break;
			default:
				$alias_name = OPAC_SEMUA_KOLEKSI_LABEL;
		}
		return $alias_name;
	}
}

if (!function_exists('get_search_by_label')) {
	function get_search_by_label($search_id)
	{
		$alias_name = '';
		switch ($search_id) {
			case FORM_JUDUL:
				$alias_name = FORM_JUDUL_LABEL;
				break;
			case FORM_PENGARANG:
				$alias_name = FORM_PENGARANG_LABEL;
				break;
			case FORM_TAHUN:
				$alias_name = FORM_TAHUN_LABEL;
				break;
			case FORM_SUBJEK:
				$alias_name = FORM_SUBJEK_LABEL;
				break;
			case FORM_CATALOGID:
				$alias_name = FORM_CATALOGID_LABEL;
				break;
			case FORM_BIBID:
				$alias_name = FORM_BIBID_LABEL;
				break;
			default:
				$alias_name = FORM_JUDUL_LABEL;
		}
		return $alias_name;
	}
}

if (!function_exists('get_search_by_label2')) {
	function get_search_by_label2($search_id)
	{
		$alias_name = '';
		switch ($search_id) {
			case JUDUL:
				$alias_name = JUDUL_LABEL;
				break;
			case PENGARANG:
				$alias_name = PENGARANG_LABEL;
				break;
			case TAHUN:
				$alias_name = TAHUN_LABEL;
				break;
			case SUBJEK:
				$alias_name = SUBJEK_LABEL;
				break;
			case CATALOGID:
				$alias_name = CATALOGID_LABEL;
				break;
			case BIBID:
				$alias_name = BIBID_LABEL;
				break;
			default:
				$alias_name = '';
		}
		return $alias_name;
	}
}

if (!function_exists('ControlNumber')) {
    function ControlNumber($id = null)
    {
        //get last control number
        if (!empty($id)) {
            // $query2 = $conn->query('SELECT t_katalog_ruas.`Value` AS MaxControlNumber FROM t_katalog_ruas WHERE t_katalog_ruas.`CatalogId` = "' . $id . '" AND t_katalog_ruas.`Tag` ="001" ');
            // $row = $query2->getRow()->MaxControlNumber;
            $row = getData([
                'table'     => 't_katalog_ruas',
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

if (!function_exists('getRuas')) {
    function getRuas($key, $value, $katalog_id = null)
    {
		$column = array();
		switch ($key) {
			case 'ControlNumber':
				$column = [
					'tag'           => '001',
					'indicator1'    => null,
					'indicator2'    => null,
					'katalog_id' 	=> $katalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case 'BIBID':
				$column = [
					'tag'           => '035',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case '005':
				$column = [
					'tag'           => $key,
					'indicator1'    => null,
					'indicator2'    => null,
					'katalog_id' 	=> $katalog_id,
					'value'        	=> "$value"
				];
				break;
			case 'issn':
				foreach ($value as $issn) :
					$column = [
						'tag'           => '022',
						'indicator1'    => '0',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $issn"
					];

				endforeach;
				break;
			case 'class-ddc':
				$column = [
					'tag'           => '082',
					'indicator1'    => null,
					'indicator2'    => null,
					'katalog_id' 	=> $katalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case 'callnumber':
				foreach ($value as $callno) :
					$column = [
						'tag'           => '084',
						'indicator1'    => '0',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $callno"
					];

				endforeach;
				break;
			case 'author':
				$column = [
					'tag'           => '100',
					'indicator1'    => '0',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> '$a ' . $value['100']
				];
				break;
			case 'additional-author':
				foreach ($value['input'] as $additionalAuthor) :
					$column = [
						'tag'           => '700',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $additionalAuthor"
					];

				endforeach;
				break;
			case 'title':
				$currentValue = '';
				foreach ($value as $i => $title) :
					$currentValue .= "\$$i $title ";
				endforeach;
				$column = [
					'tag'           => '245',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> $currentValue
				];
				break;
			case 'previous-title':
				foreach ($value as $prev) :
					$column = [
						'tag'           => '247',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $prev"
					];

				endforeach;
				break;
			case 'publisher':
				$currentValue = '';
				foreach ($value as $i => $pub) :
					$currentValue .= "\$$i $pub ";
				endforeach;
				$column = [
					'tag'           => '260',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> rtrim($currentValue)
				];
				break;
			case 'physical-description':
				$currentValue = '';
				foreach ($value as $i => $phy) :
					$currentValue .= "\$$i $phy ";
				endforeach;
				$column = [
					'tag'           => '300',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> rtrim($currentValue)
				];
				break;
	
			case 'frequency':
				foreach ($value as $i => $freq) :
					$column = [
						'tag'           => $i == 'current' ? '310' : '321',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $freq"
					];

				endforeach;
				break;
	
			case 'notes':
				foreach ($value['input'] as $i => $note) :
					$column = [
						'tag'           => '520',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $note"
					];

				endforeach;
				break;
	
			case 'subject':
				foreach ($value['desc'] as $i => $subject) :
					$column = [
						'tag'           => '600',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $subject"
					];

				endforeach;
				break;
	
			case 'location':
				foreach ($value as $i => $location) :
					$column = [
						'tag'           => '856',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $location"
					];

				endforeach;
				break;
	
			default:
				'do nothing';
				break;
		}

		return $column;
    }
    
}

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
            $row = getData([
                'table'     => 't_katalog_ruas',
                'select'    => "Value` AS max",
                'where'     => [
                    ['field' => 'Catalogid', 'value' => $id],
                    ['field' => 'Tag', 'value' => '001'],
                ]
            ])->getRowArray()['max'];

            $newControlNumber =  substr($row, 3);
        } else {
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
            $row = getData([
                'table'     => 't_katalog_ruas',
                'select' => 'value AS max',
                'where'  => [
                    ['field' => 'katalog_id', 'value' => $id],
                    ['field' => 'tag', 'value' => '035'],
                ]
            ])->getRowArray()['max'];

            $newId =  substr($row, 3);
        } else {
            $yearMonth =  date('my');
            $row = getData([
                'table'     => 't_katalog',
                'select'    => "SUBSTR(MAX(BIBID),'0010-$yearMonth') AS max",
                'like'      => ['BIBID' => "0010-$yearMonth"],
                'where'     =>
                [
                    ['field' => 'LENGTH(BIBID)', 'value' => '15'],
                ]
            ])->getRowArray()['max'];

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
