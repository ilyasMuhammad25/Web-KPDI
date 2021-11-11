<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('katalog', ['namespace' => 'Katalog\Controllers'], function ($subroutes) {
	/*** Route Update for Katalog ***/
	$subroutes->add('', 'Katalog::index');
	$subroutes->add('index', 'Katalog::index');
	$subroutes->add('karantina', 'Katalog::index_quarantine');
	$subroutes->add('keranjang', 'Katalog::index_cart');
	$subroutes->add('detail/(:any)', 'Katalog::detail/$1');
	$subroutes->add('create', 'Katalog::create');
	$subroutes->add('create_marc', 'Katalog::create_marc');
	$subroutes->add('edit/(:any)', 'Katalog::edit/$1');
	$subroutes->add('delete/(:any)', 'Katalog::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Katalog::apply_status/$1');
	$subroutes->add('do_init', 'Katalog::do_init');
	$subroutes->add('do_upload', 'Katalog::do_upload');
	$subroutes->add('do_delete', 'Katalog::do_delete');
	$subroutes->add('flip', 'Katalog::flip');
});

$routes->group('api/katalog', ['namespace' => 'Katalog\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Katalog ***/
	$subroutes->add('detail/(:any)', 'Katalog::detail/$1');
	$subroutes->add('create', 'Katalog::create');
	$subroutes->add('edit/(:any)', 'Katalog::edit/$1');
	$subroutes->add('delete/(:any)', 'Katalog::delete/$1');
});