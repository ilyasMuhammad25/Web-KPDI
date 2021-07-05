<?php

namespace Home\Controllers;

use DataTables\DataTables;

class Home extends \hamkamannan\adminigniter\Controllers\BaseController
{
	function __construct()
    {
		helper('adminigniter');
	}
	public function index()
	{
		$this->data['title'] = 'Home';
		echo view('Home\Views\index', $this->data);
	}

	public function ip() {
		$ip = get_ip_address();
		echo $ip;

		$ip_info = get_ip_info($ip);
		dd($ip_info);
	}

	public function json()
	{
		$data = DataTables::use('c_parameters')
			->make(true);

		return $data;

		// return DataTables::use('c_users')
		// 	->join('c_groups', 'c_users.id = c_groups.id', 'INNER JOIN')
		// 	->where(['c_users.active' => '1'])
		// 	// ->hideColumns(['password'])
		// 	->rawColumns(['address'])
		// 	->select('c_users.username, c_users.first_name, c_users.last_name, c_users.phone, c_users.email, c_users.address, c_groups.name as group_name')
		// 	// ->addColumn('action', function($data) {
		// 	// 	return '<a href="/edit/'.$data->id.'">edit</a>';
		// 	// })
		// 	->make(true); //true = json, false = object
	}

	public function datatables()
	{
		$this->data['title'] = 'DataTables';
		echo view('Home\Views\datatables', $this->data);
	}
	
	public function param($name)
	{
		echo get_parameter($name);
	}
}
