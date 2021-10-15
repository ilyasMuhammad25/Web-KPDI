<?php
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

        $data = db_get_single("auth_groups","name = '{$group}'");
        return $data->id;
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
/**
 * ---------------
 * DB Helper
 * ---------------
 */
if (!function_exists('get_last')) {
    function get_last($ref_table, $where = null)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($ref_table);
        $query = $baseModel->orderBy('id','desc');
        
        if(!empty($where)){
            $query->where($where);
        }

        $data = $query->limit(1)->row(); 

        return $data;
    }
}

if (!function_exists('get_first')) {
    function get_first($ref_table, $where = null)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($ref_table);
        $query = $baseModel->orderBy('id','asc');
        
        if(!empty($where)){
            $query->where($where);
        }

        $data = $query->limit(1)->row(); 

        return $data;
    }
}

if (!function_exists('get_doc_number')) {
    function get_doc_number($table_name, $field_name = 'id', $prefix = 'AJU-', $zero_length = 4)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        $data = $baseModel->selectMax($field_name)->row(); 

        $counter = (empty($data)) ? 1 : $data->{$field_name} + 1;
        $doc_number = strtoupper($prefix).str_pad($counter , $zero_length , "0" , STR_PAD_LEFT);

        return $doc_number;
    }
}

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
 * Common Helper
 * ---------------
 */
if (!function_exists('get_visitor')) {
    function get_visitor()
    {
        $site_visitor_mode = get_parameter('site-visitor-mode', 0);
        if ($site_visitor_mode == 0) {
            $visitor = get_parameter('site-visitor');
            $visitor++;
            set_parameter('site-visitor', $visitor);
            return get_parameter('site-visitor');
        } else {
            set_ip_info();
            return count_visitor();
        }
    }
}

if (!function_exists('count_visitor')) {
    function count_visitor()
    {
        $visitorModel = new \App\Models\VisitorModel();
        $visitors = $visitorModel->findAll();
        $sum = 0;
        foreach ($visitors as $row) {
            $sum += $row->hits;
        }
        return $sum;
    }
}

if (!function_exists('rest_url')) {
    function rest_url($uri = '')
    {        
		$base_url = base_url($uri);
		$rest_url = getenv('app.restURL');

		if(!empty($rest_url)){
			$base_url = $rest_url. '/'. $uri;
		}
		
        return $base_url;
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

if (!function_exists('pd')) {
    function pd($object)
    {
        print_r($object);
        die();
        return true;
    }
}

/**
 * ---------------
 * Global Helper
 * ---------------
 */
if (!function_exists('get_page')) {
    function get_page($slug = null)
    {
        $pageModel = new \Page\Models\PageModel();
        $page = $pageModel->where('slug', $slug)->row();

        return $page;
    }
}

if (!function_exists('get_option')) {
    function get_option($param_name = null)
    {
        return get_parameter($param_name);
    }
}

if (!function_exists('send_email')) {
    function send_email($to = '', $subject = '', $data = [])
    {
        $mail = new PHPMailer(true);
        $status = false;
		$messages = '';
        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.googlemail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'balisaauction.dev@gmail.com'; // silahkan ganti dengan alamat email Anda
            $mail->Password   = 'password2021!!'; // silahkan ganti dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom('balisaauction.dev@gmail.com', 'P4TO'); // silahkan ganti dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo('balisaauction.dev@gmail.com', 'P4TO'); // silahkan ganti dengan alamat email Anda
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = view('auth/notifEmail', $data);
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $status = $mail->send();
			$message = 'Email Sent';
        } catch (Exception $e) {
            $messages =  "Send Email failed. Error: " . $mail->ErrorInfo;
            $status = false;
        }

		$response = array(
			'status'=> $status,
			'message' => $message,
		);

		return $response;
    }
}

?>
