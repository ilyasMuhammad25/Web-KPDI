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

if (!function_exists('is_display2')) {
    function is_display2($table_name = 't_banner', $field_name = 'name')
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