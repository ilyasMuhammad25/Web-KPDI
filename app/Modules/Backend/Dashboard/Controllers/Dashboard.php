<?php

namespace Dashboard\Controllers;

class Dashboard extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;

    function __construct()
    {
        $this->userModel = new \hamkamannan\adminigniter\Modules\Core\User\Models\UserModel();
        $this->groupModel = new \hamkamannan\adminigniter\Modules\Core\Group\Models\GroupModel();

        $this->auth = \Myth\Auth\Config\Services::authentication();
        $this->authorize = \Myth\Auth\Config\Services::authorization();
        $this->session = service('session');
        helper(['form', 'url', 'auth', 'app', 'adminigniter']);
    }

    public function index()
    {
        if (! $this->auth->check() )
		{
			$this->session->set('redirect_url', current_url() );
			return redirect()->route('login');
		} 
        
        $this->data['title'] = 'Dashboard';
        $this->data['countUser'] = $this->userModel->countAll();
        $this->data['countGroup'] = $this->groupModel->countAll();
        $this->data['countActiveUser'] = count($this->userModel->where('active', 1)->findAll());
        $this->data['countInactiveUser'] = count($this->userModel->where('active', 0)->findAll());

        echo view('Dashboard\Views\index', $this->data);
    }

    public function highlight()
    {
        if (! $this->auth->check() )
		{
			// $this->session->set('redirect_url', current_url() );
			return redirect()->route('login');
		} 
        
        $this->data['title'] = 'Dashboard - Highlight';

        echo view('Dashboard\Views\highlight', $this->data);
    }

    public function roadmap()
    {
        if (! $this->auth->check() )
		{
			// $this->session->set('redirect_url', current_url() );
			return redirect()->route('login');
		} 
        
        $this->data['title'] = 'Dashboard - Roadmap';

        echo view('Dashboard\Views\roadmap', $this->data);
    }
}
