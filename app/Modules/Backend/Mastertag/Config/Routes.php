<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('mastertag', ['namespace' => 'Mastertag\Controllers'], function ($subroutes) {
	/*** Route Update for Mastertag ***/
	$subroutes->add('', 'Mastertag::index');
	$subroutes->add('index', 'Mastertag::index');
	$subroutes->add('detail/(:any)', 'Mastertag::detail/$1');
	$subroutes->add('create', 'Mastertag::create');
	$subroutes->add('edit/(:any)', 'Mastertag::edit/$1');
	$subroutes->add('delete/(:any)', 'Mastertag::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Mastertag::apply_status/$1');
	$subroutes->add('do_init', 'Mastertag::do_init');
	$subroutes->add('do_upload', 'Mastertag::do_upload');
	$subroutes->add('do_delete', 'Mastertag::do_delete');
	$subroutes->add('flip', 'Mastertag::flip');
});

$routes->group('api/mastertag', ['namespace' => 'Mastertag\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Mastertag ***/
	$subroutes->add('detail/(:any)', 'Mastertag::detail/$1');
	$subroutes->add('create', 'Mastertag::create');
	$subroutes->add('edit/(:any)', 'Mastertag::edit/$1');
	$subroutes->add('delete/(:any)', 'Mastertag::delete/$1');
});