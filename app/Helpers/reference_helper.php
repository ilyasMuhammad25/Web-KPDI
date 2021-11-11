<?php
if (!function_exists('get_string_after')) {
	function get_string_after($string, $start)
	{
		$string_arr = explode($start, $string);
		return $string_arr[1];
	}
}

if (!function_exists('get_string_between')) {
	function get_string_between($string, $start, $end)
	{
		$string = ' ' . $string;
		$ini = strpos($string, $start);
		if ($ini == 0)
			return '';
		$ini += strlen($start);
		$len = strpos($string, $end, $ini) - $ini;
		return substr($string, $ini, $len);
	}
}

if (!function_exists('get_ref_id')) {
    function get_ref_id($ref_value, $ref_field = 'name', $menu_value = null, $menu_field = 'controller')
    {        
		$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $query = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner');

		$query->where('UPPER(c_references.'.$ref_field.')', strtoupper($ref_value));
		if(!empty($menu_value)){
			$query->where('UPPER(c_menus.'.$menu_field.')', strtoupper($menu_value));
		}
            
		$data = $query->get()->getRow();

		return $data->id ?? 0;
    }
}

if (!function_exists('get_ref_value')) {
    function get_ref_value($ref_id, $menu_value = null, $menu_field = 'controller')
    {        
		$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $query = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner');

		$query->where('c_references.id', $ref_id);
		if(!empty($menu_value)){
			$query->where('UPPER(c_menus.'.$menu_field.')', strtoupper($menu_value));
		}
            
		$data = $query->get()->getRow();

		return $data->name ?? '';
    }
}

if (!function_exists('get_ref')) {
    function get_ref($menu_value, $menu_field = 'controller')
    {        
		$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $query = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner');
			
		$query->where('UPPER(c_menus.'.$menu_field.')', strtoupper($menu_value));

		$data = $query->find_all('c_references.sort', 'asc');
		
        return $data;
    }
}

if (!function_exists('get_ref_dropdown')) {
    function get_ref_dropdown($menu_value, $menu_field = 'controller', $selected_id = 0)
    {        
        $html = '<select class="form-control" name="ref_type_id" tabindex="-1" aria-hidden="true">';
        foreach(get_ref($menu_value, $menu_field) as $row){
            $selected = ($row->id == $selected_id) ? 'selected': '';
            $html .= '<option value="'.$row->id.'" '.$selected.'>'.$row->name.'</option>';
        }
        $html .= '</select>';
            
        return $html;
    }
}

if (!function_exists('get_ref_table')) {
    function get_ref_table($table, $fields = 'id', $where = null)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table);
        $query = $baseModel->select($fields);
		if(!empty($where)){
			$query->where($where);
		}

        return $query->get()->getResult();
    }
}

if (!function_exists('get_dropdown')) {
    function get_dropdown($table, $where = null, $code = 'id', $text = 'name')
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table);

		$query = $baseModel->where('active',1);
		$query->select("$code as code");
		$query->select("$text as text");
        
		if(!empty($where)){
			$query->where($where);
		}

        return $query->orderBy($code)->get()->getResult();
    }
}