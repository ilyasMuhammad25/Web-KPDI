<?php

namespace App\Controllers;

class Home extends BaseController
{
	function __construct()
    {
		$this->language = \Config\Services::language();
		$this->language->setLocale(WEB_LANG);
	}

	public function index()
	{
		return redirect()->route('dashboard');
	}

	public function lang($lang = 'id')
    {
        $session = session();
        $session->remove('web_lang');
        $session->set('web_lang',$lang);
        return redirect()->to(previous_url());
    }
}
