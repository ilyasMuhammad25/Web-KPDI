<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('catalog', ['namespace' => 'Catalog\Controllers'], function ($subroutes) {
	/*** Route Update for Catalog ***/
	$subroutes->add('', 'Catalog::index');
	$subroutes->add('index', 'Catalog::index');
	$subroutes->add('detail/(:any)', 'Catalog::detail/$1');
	$subroutes->add('create', 'Catalog::create');
	$subroutes->add('edit/(:any)', 'Catalog::edit/$1');
	$subroutes->add('delete/(:any)', 'Catalog::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Catalog::apply_status/$1');
	$subroutes->add('do_init', 'Catalog::do_init');
	$subroutes->add('do_upload', 'Catalog::do_upload');
	$subroutes->add('do_delete', 'Catalog::do_delete');
	$subroutes->add('flip', 'Catalog::flip');
});

$routes->group('api/catalog', ['namespace' => 'Catalog\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Catalog ***/
	$subroutes->add('detail/(:any)', 'Catalog::detail/$1');
	$subroutes->add('create', 'Catalog::create');
	$subroutes->add('edit/(:any)', 'Catalog::edit/$1');
	$subroutes->add('delete/(:any)', 'Catalog::delete/$1');
});