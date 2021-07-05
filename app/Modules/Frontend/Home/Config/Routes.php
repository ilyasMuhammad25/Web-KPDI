<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('home', ['namespace' => 'Home\Controllers'], function ($subroutes) {
	/*** Route Update for Home ***/
	$subroutes->add('', 'Home::index');
	$subroutes->add('param/(:any)', 'Home::param/$1');
	$subroutes->add('index', 'Home::index');
	$subroutes->add('ip', 'Home::ip');
	$subroutes->add('json', 'Home::json');
	$subroutes->add('datatables', 'Home::datatables');
	$subroutes->add('param', 'Home::param');
});

