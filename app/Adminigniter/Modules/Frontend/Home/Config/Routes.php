<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('home', ['namespace' => 'App\Adminigniter\Modules\Frontend\Home\Controllers'], function ($subroutes) {
	/*** Route Update for Home ***/
	$subroutes->add('', 'Home::index');
	$subroutes->add('param/(:any)', 'Home::param/$1');
	$subroutes->add('index', 'Home::index');
	$subroutes->add('index2', 'Home::index2');
	$subroutes->add('index3', 'Home::index3');
	$subroutes->add('welcome', 'Home::welcome');
	$subroutes->add('ip', 'Home::ip');
	$subroutes->add('json', 'Home::json');
	$subroutes->add('datatables', 'Home::datatables');

});

