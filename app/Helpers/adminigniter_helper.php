<?php
if (!function_exists('is_display')) {
    function is_display($table_name = 't_banner', $field_name = 'name')
    {
        $result = false;
        $default = 'name';
        $columns_str = str_replace(' ','',get_parameter($table_name.'_columns',$default));
        $columns_arr = explode(',',$columns_str);
        if(in_array($field_name, $columns_arr)){
            $result = true;
        }

        return $result;
    }
}

/**
 * ---------------
 * DB Helper
 * ---------------
 */
if (!function_exists('db_get_single')) {
    function db_get_single($table_name = null, $where = false)
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        return $baseModel->get_single($where);
    }
}

if (!function_exists('db_get_all')) {
    function db_get_all($table_name = null, $where = null, $by = "id", $order = 'desc', $limit = null)
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        if(!empty($limit)){
            $baseModel->limit($limit);
        }
        return $baseModel->get_all($where, $by, $order);
    }
}

if (!function_exists('db_count_all')) {
    function db_count_all($table_name = null)
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        return $baseModel->count_all();
    }
}

if (!function_exists('db_count')) {
    function db_count($table_name = null, $where = null)
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        return $baseModel->count($where);
    }
}
