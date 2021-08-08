<?php
/**
 * ---------------
 * Common Helper
 * ---------------
 */
if (!function_exists('get_references')) {
    function get_references($controller)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $references = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner')
            ->where('c_menus.controller', $controller)
            ->find_all('c_references.sort', 'asc');

        return $references;
    }
}

if (!function_exists('get_references_slug')) {
    function get_references_slug($slug)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $references = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner')
            ->where('c_menus.slug', $slug)
            ->find_all('c_references.sort', 'asc');

        return $references;
    }
}

if (!function_exists('get_references_dropdown')) {
    function get_references_dropdown($controller, $selected_id = 0)
    {        
        $html = '<select class="form-control" name="ref_type_id" tabindex="-1" aria-hidden="true">';
        $references = get_references($controller);
        foreach($references as $row){
            $selected = ($row->id == $selected_id) ? 'selected': '';
            $html .= '<option value="'.$row->id.'" '.$selected.'>'.$row->name.'</option>';
        }
        $html .= '</select>';
            
        return $html;
    }
}

if (!function_exists('get_flash')) {
    function get_flash($name)
    {
        $session = \Config\Services::session(); 
        return $session->getFlashdata($name);
    }
}

if (!function_exists('show_flash')) {
    function show_flash($message = 'message', $type="danger")
    {
        $response = '';
        if (!empty(get_flash($message))) {
            $response = '
                <div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>' . get_flash($message) . '</strong>
                </div>';
        }
        return $response;
    }
}

if (!function_exists('get_object_array')) {
    function get_object_array($objects, $field)
    {       
        $result = [];
        foreach($objects as $row){
            $result[] = strtoupper($row->$field);
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
