<?php
if(!function_exists('display_menu_frontend')) {
    function display_menu_frontend($parent, $level = 1) {
        $request = \Config\Services::request();
        $request->uri->setSilent();
		$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();

		$query = $baseModel->query("SELECT a.id, a.icon, a.name, a.controller, a.type, a.category_id, deriv.childs 
			FROM `c_menus` a LEFT OUTER JOIN (
				SELECT parent, COUNT(*) AS childs 
					FROM `c_menus` GROUP BY parent
				) deriv ON a.id = deriv.parent WHERE  a.parent= " . $parent." and a.active = 1 and a.category_id = '2' 
			ORDER BY `sort` ASC");
		$result = $query->getResult();

        $ret = '';
        if ($result) {
            if (($level > 1) AND ($parent > 0) ) {
                $ret .= '<ul class="dropdown">';
            } else {
                $ret = '';
            }

            $class_li = 'menu-item ';
            $class_a = ' ';

            foreach ($result as $row) {
				$link = base_url($row->controller);
                $active = (strtolower($request->uri) == strtolower($link)) ? 'active' : '';
                
                if($level > 1){
                    $class_li = '';
                    $class_a = '';
                } 

                if ($row->childs > 0) {
                    $ret .= '<li class="'.$class_li.' child">';
                    $ret .= '<a href="#" class="'.$class_a.'">'.$row->name.'</a>';
                    $ret .= display_menu_frontend($row->id, $level + 1);
                    $ret .= '</li>';
                } else {
                    $ret .= '<li class="'.$class_li.''.$active.'">';
                    $ret .= '<a href="'.$link.'" class="'.$class_a.'">'.$row->name.'</a>';
                    $ret .= '</li>';
                }
            }
            if ($level > 1) {
                $ret .= '</ul>';
            }

        }
        return $ret;
    }
}