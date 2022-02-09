<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('bukutamu', ['namespace' => 'Bukutamu\Controllers'], function ($subroutes) {
	/*** Route Update for Bukutamu ***/
	$subroutes->add('', 'Bukutamu::index');
	$subroutes->add('index', 'Bukutamu::index');
	$subroutes->add('detail/(:any)', 'Bukutamu::detail/$1');
	$subroutes->add('create', 'Bukutamu::create');
	$subroutes->add('edit/(:any)', 'Bukutamu::edit/$1');
	$subroutes->add('delete/(:any)', 'Bukutamu::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Bukutamu::apply_status/$1');
	$subroutes->add('do_init', 'Bukutamu::do_init');
	$subroutes->add('do_upload', 'Bukutamu::do_upload');
	$subroutes->add('do_delete', 'Bukutamu::do_delete');
	$subroutes->add('flip', 'Bukutamu::flip');
});

$routes->group('api/bukutamu', ['namespace' => 'Bukutamu\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Bukutamu ***/
	$subroutes->add('detail/(:any)', 'Bukutamu::detail/$1');
	$subroutes->add('create', 'Bukutamu::create');
	$subroutes->add('edit/(:any)', 'Bukutamu::edit/$1');
	$subroutes->add('delete/(:any)', 'Bukutamu::delete/$1');
});