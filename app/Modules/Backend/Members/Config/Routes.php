<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('members', ['namespace' => 'Members\Controllers'], function ($subroutes) {
	/*** Route Update for Members ***/
	$subroutes->add('', 'Members::index');
	$subroutes->add('index', 'Members::index');
	$subroutes->add('detail/(:any)', 'Members::detail/$1');
	$subroutes->add('create', 'Members::create');
	$subroutes->add('edit/(:any)', 'Members::edit/$1');
	$subroutes->add('delete/(:any)', 'Members::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Members::apply_status/$1');
	$subroutes->add('do_init', 'Members::do_init');
	$subroutes->add('do_upload', 'Members::do_upload');
	$subroutes->add('do_delete', 'Members::do_delete');
	$subroutes->add('flip', 'Members::flip');
});

$routes->group('api/members', ['namespace' => 'Members\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Members ***/
	$subroutes->add('detail/(:any)', 'Members::detail/$1');
	$subroutes->add('create', 'Members::create');
	$subroutes->add('edit/(:any)', 'Members::edit/$1');
	$subroutes->add('delete/(:any)', 'Members::delete/$1');
});