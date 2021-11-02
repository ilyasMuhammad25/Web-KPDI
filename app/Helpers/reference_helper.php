<?php
if (!function_exists('get_ref')) {
    function get_ref($controller)
    {        
        return get_ref_by_controller($controller);
    }
}

if (!function_exists('get_ref_by_controller')) {
    function get_ref_by_controller($controller)
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

if (!function_exists('get_ref_by_slug')) {
    function get_ref_by_slug($slug)
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

if (!function_exists('get_ref_by_controller_desc')) {
    function get_ref_by_controller_desc($controller, $desc)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $query = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner')
            ->where('c_menus.controller', $controller);

		if(!empty($desc)){
			$query->like('c_references.description',$desc);
		}

        $references = $query->find_all('c_references.sort', 'asc');

        return $references;
    }
}

if (!function_exists('get_ref_by_name')) {
    function get_ref_by_name($name)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $references = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner')
            ->where('UPPER(c_menus.name)', strtoupper($name))
            ->find_all('c_references.sort', 'asc');

        return $references;
    }
}

if (!function_exists('get_ref_dropdown')) {
    function get_ref_dropdown($controller, $selected_id = 0)
    {        
        $html = '<select class="form-control" name="ref_type_id" tabindex="-1" aria-hidden="true">';
        $references = get_ref_by_controller($controller);
        foreach($references as $row){
            $selected = ($row->id == $selected_id) ? 'selected': '';
            $html .= '<option value="'.$row->id.'" '.$selected.'>'.$row->name.'</option>';
        }
        $html .= '</select>';
            
        return $html;
    }
}

if (!function_exists('get_table_references')) {
    function get_table_references($table, $fields = 'id', $where = null)
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

if (!function_exists('get_dropdown2')) {
    function get_dropdown2($table, $where = null, $code = 'id', $barcode='NomorBarcode')
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table);

		$query = $baseModel->where('active',1);
		$query->select("$code as code");
		
		$query->select("$barcode as barcode");
        
		if(!empty($where)){
			$query->where($where);
		}

        return $query->orderBy($code)->get()->getResult();
    }
}