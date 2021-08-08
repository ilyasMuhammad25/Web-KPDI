<?php 
namespace Config;

class Auth extends \Myth\Auth\Config\Auth
{
	public $defaultUserGroup = 'user';

	public $views = [
		'login'           => 'Core\Views\auth\login',
		'register'        => 'Core\Views\auth\register',
		'forgot'          => 'Core\Views\auth\forgot',
		'reset'           => 'Core\Views\auth\reset',
		'emailForgot'     => 'Core\Views\auth\emails\forgot',
		'emailActivation' => 'Core\Views\auth\emails\activation',
	];

	public $allowRegistration = true;
	public $requireActivation = false; 
	public $activeResetter = false;
	public $allowRemembering = true;
	
	public $passwordValidators = [
		'Myth\Auth\Authentication\Passwords\CompositionValidator',
		'Myth\Auth\Authentication\Passwords\NothingPersonalValidator',
		'Myth\Auth\Authentication\Passwords\DictionaryValidator',
		'Myth\Auth\Authentication\Passwords\PwnedValidator',
	];
}
