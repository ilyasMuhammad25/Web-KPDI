<?php

namespace Uigniter\Controllers;

class Uigniter extends \App\Controllers\BaseController
{
	function __construct()
    {
        helper('adminigniter');
    }

	public function index()
	{
		$this->dashboards('crm');
	}

	// Menu - Dashboard
	public function dashboards($page = 'crm')
	{
		$data['class_sidebar'] = '';
		$data['title'] = 'Dashboards - ' . ucfirst($page);
		echo view('Uigniter\page\dashboards\\' . $page, $data);
	}

	// Menu - Application
	public function applications($page = 'mailbox')
	{
		$data['class_sidebar'] = 'closed-sidebar';
		$data['title'] = 'Applications - ' . ucfirst($page);
		echo view('Uigniter\page\applications\\' . $page, $data);
	}

	// UI Components - Elements
	public function elements($page = 'buttons_standard')
	{
		$data['class_sidebar'] = '';
		$data['title'] = 'Elements - ' . ucfirst($page);
		echo view('Uigniter\page\elements\\' . $page, $data);
	}

	// UI Components - Components
	public function components($page = 'tabs')
	{
		$data['class_sidebar'] = 'closed-sidebar';
		$data['title'] = 'Components - ' . ucfirst($page);
		echo view('Uigniter\page\components\\' . $page, $data);
	}

	// UI Components - Tables
	public function tables($page = 'data_tables')
	{
		$data['class_sidebar'] = 'closed-sidebar';
		$data['title'] = 'Tables - ' . ucfirst($page);
		echo view('Uigniter\page\tables\\' . $page, $data);
	}

	// Widgets
	public function widgets($page = 'chart_boxes')
	{
		$data['class_sidebar'] = '';
		$data['title'] = 'Widgets - ' . ucfirst($page);
		echo view('Uigniter\page\widgets\\' . $page, $data);
	}

	// Form - Elements
	public function forms($page = 'controls')
	{
		$data['class_sidebar'] = '';
		$data['title'] = 'Forms - ' . ucfirst($page);
		echo view('Uigniter\page\forms\\' . $page, $data);
	}

	// Charts 
	public function charts($page = 'chartjs')
	{
		$data['class_sidebar'] = 'closed-sidebar';
		$data['title'] = 'Charts - ' . ucfirst($page);
		echo view('Uigniter\page\charts\\' . $page, $data);
	}

	// Accounts 
	public function membership($page = 'login')
	{
		$data['class_sidebar'] = 'closed-sidebar';
		$data['title'] = 'Membership - ' . ucfirst($page);
		echo view('Uigniter\page\membership\\' . $page, $data);
	}
}
