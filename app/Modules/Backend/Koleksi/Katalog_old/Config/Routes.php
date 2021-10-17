<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('katalog', ['namespace' => 'Katalog\Controllers'], function ($subroutes) {
	/*** Route Update for Katalog ***/
	$subroutes->add('', 'Katalogs::index');
	$subroutes->add('index', 'Katalog::index');
	$subroutes->add('detail/(:any)', 'Katalog::detail/$1');
	$subroutes->add('create', 'Katalog::create');
	$subroutes->add('edit/(:any)', 'Katalog::edit/$1');
	$subroutes->add('delete/(:any)', 'Katalog::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Katalog::apply_status/$1');
	$subroutes->add('do_init', 'Katalog::do_init');
	$subroutes->add('do_upload', 'Katalog::do_upload');
	$subroutes->add('do_delete', 'Katalog::do_delete');
	$subroutes->add('flip', 'Katalog::flip');
	$subroutes->add('partial', 'Katalog::showpartial');
});

$routes->group('api/katalog', ['namespace' => 'Katalog\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Katalog ***/
	$subroutes->add('detail/(:any)', 'Katalog::detail/$1');
	$subroutes->add('create', 'Katalog::create');
	$subroutes->add('edit/(:any)', 'Katalog::edit/$1');
	$subroutes->add('delete/(:any)', 'Katalog::delete/$1');
});

$routes->group('katalog-rda', ['namespace' => 'Katalog\Controllers'], function ($subroutes) {
	/*** Route Update for Katalog ***/
	$subroutes->add('', 'Katalog::rda_index');
	$subroutes->add('index', 'Katalog::rda_index');
	$subroutes->add('detail/(:any)', 'Katalog::rda_detail/$1');
	$subroutes->add('create', 'Katalog::rda_create');
	$subroutes->add('edit/(:any)', 'Katalog::rda_edit/$1');
});

$routes->group('katalog-aacr', ['namespace' => 'Katalog\Controllers'], function ($subroutes) {
	/*** Route Update for Katalog ***/
	$subroutes->add('', 'Katalog::aacr_index');
	$subroutes->add('index', 'Katalog::aacr_index');
	$subroutes->add('detail/(:any)', 'Katalog::aacr_detail/$1');
	$subroutes->add('create', 'Katalog::aacr_create');
	$subroutes->add('create/action', 'Katalog::aacr_create_action');
	$subroutes->add('edit/(:any)', 'Katalog::aacr_edit/$1');
});
