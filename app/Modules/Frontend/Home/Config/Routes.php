<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->get('signup', 'Home::signup', ['namespace' => 'Home\Controllers']);
$routes->post('signup', 'Home::attemptSignup', ['namespace' => 'Home\Controllers']);
$routes->get('signin', 'Home::signin', ['namespace' => 'Home\Controllers']);
$routes->post('signin', 'Home::attemptSignin', ['namespace' => 'Home\Controllers']);
$routes->get('opac', 'Home::index', ['namespace' => 'Home\Controllers']);
$routes->get('search', 'Home::search', ['namespace' => 'Home\Controllers']);

$routes->group('home', ['namespace' => 'Home\Controllers'], function ($subroutes) {
	/*** Route Update for Home ***/
	$subroutes->add('', 'Home::index');
	$subroutes->add('param/(:any)', 'Home::param/$1');
	$subroutes->add('index', 'Home::index');
	$subroutes->add('search', 'Home::search');
	$subroutes->add('anggota', 'Home::anggota');
	$subroutes->add('detail/(:any)', 'Home::detail/param/$1');
	$subroutes->add('ip', 'Home::ip');
	$subroutes->add('json', 'Home::json');
	$subroutes->add('datatables', 'Home::datatables');
	$subroutes->add('param', 'Home::param');
});

