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
    function db_get_all($table_name = null, $where = null, $by = "id", $order = 'desc')
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
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

/**
 * ---------------
 * Auth Helper
 * ---------------
 */

if (!function_exists('get_users')) {
    function get_users($group_id = null)
    {        
        if(!empty($group_id)){
            $users_groups = db_get_all("auth_groups_users","group_id = {$group_id}","user_id");
            $user_id_arr = array();
            foreach($users_groups as $row){
                array_push($user_id_arr, $row->user_id);
            }
            array_unique($user_id_arr);

            $user_id_str = implode(",", $user_id_arr);
            $users = db_get_all("users", "id in ({$user_id_str})");
            return $users;
        } else {
            $users = db_get_all("users",null,"id");
            return $users;
        }
    }
}

if (!function_exists('get_user_group_id')) {
    function get_user_group_id($user_id = null)
    {
        if(empty($user_id)){
            $user_id = user_id();
        }
        
        $group = db_get_single("auth_groups_users","user_id = {$user_id}");
        return $group->group_id;
    }
}

if (!function_exists('get_user_group_ids')) {
    function get_user_group_ids($user_id = null)
    {
        if(empty($user_id)){
            $user_id = user_id();
        }
        
        $groups = db_get_all("auth_groups_users","user_id = {$user_id}");

        return $groups;
    }
}

if (!function_exists('get_group_id')) {
    function get_group_id($group)
    {
        if (is_numeric($group))
        {
            return (int)$group;
        }

        $group = db_get_single("auth_groups","name = '{$group}'");
        return $group->id;
    }
}

if (!function_exists('get_group')) {
    function get_group($group_id = null)
    {
        if(empty($group_id)){
            $group_id = get_user_group_id();
        }

        $group = db_get_single("auth_groups","id = {$group_id}");
        return $group;
    }
}

if (!function_exists('get_user_id')) {
    function get_user_id()
    {
        $user_id = user_id();
        return $user_id;
    }
}

if (!function_exists('get_user')) {
    function get_user($user_id = null)
    {
        if(empty($user_id)){
            $user = user();
        } else {
            $user = db_get_single('users', 'id=' . $user_id);
        }

        return $user;
    }
}

if (!function_exists('is_admin')) {
    function is_admin($user_id = null)
    {
        $auth = \Myth\Auth\Config\Services::authentication();

        if ($auth->check()){
            if (empty($user_id)) {
                $user_id = $auth->id();
            }
            return is_member('admin', $user_id);
        } 

        return false;
    }
}

if (!function_exists('logged_in')) {
    function logged_in()
    {
        $auth = \Myth\Auth\Config\Services::authentication();
        return $auth->check();
    }
}


if (!function_exists('get_ref')) {
  function get_ref($ref_name = '')
  {
      $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
      $baseModel->setTable('c_references');
      $results = $baseModel
      ->select('c_references.*')
      ->join('c_menus','c_menus.id = c_references.menu_id', 'inner')
      ->where('c_menus.name',$ref_name)
      ->find_all('c_references.sort', 'asc');
      return $results;
  }
}
if (!function_exists('getClientIpAddress')) {

function getClientIpAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //Checking IP From Shared Internet
    {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //To Check IP is Pass From Proxy
    {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}
}

