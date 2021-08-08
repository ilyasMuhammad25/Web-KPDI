<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('anggota', ['namespace' => 'Anggota\Controllers'], function ($subroutes) {
	/*** Route Update for Anggota ***/
	$subroutes->add('', 'Anggota::index');
	$subroutes->add('index', 'Anggota::index');
	$subroutes->add('detail/(:any)', 'Anggota::detail/$1');
	$subroutes->add('create', 'Anggota::create');
	$subroutes->add('edit/(:any)', 'Anggota::edit/$1');
	$subroutes->add('delete/(:any)', 'Anggota::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Anggota::apply_status/$1');
	$subroutes->add('import', 'Anggota::import');
	$subroutes->add('do_init', 'Anggota::do_init');
	$subroutes->add('do_upload', 'Anggota::do_upload');
	$subroutes->add('do_delete', 'Anggota::do_delete');
	$subroutes->add('flip', 'Anggota::flip');
});

$routes->group('api/anggota', ['namespace' => 'Anggota\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Anggota ***/
	$subroutes->add('detail/(:any)', 'Anggota::detail/$1');
	$subroutes->add('create', 'Anggota::create');
	$subroutes->add('edit/(:any)', 'Anggota::edit/$1');
	$subroutes->add('delete/(:any)', 'Anggota::delete/$1');
});

$routes->group('anggota/perpanjangan', ['namespace' => 'Anggota\Controllers'], function ($subroutes) {
	/*** Route Update for Anggota ***/
	$subroutes->add('', 'Anggota::index');
	$subroutes->add('index', 'Anggota::index');
	$subroutes->add('detail/(:any)', 'Anggota::detail/$1');
	$subroutes->add('create', 'Anggota::create');
	$subroutes->add('edit/(:any)', 'Anggota::edit/$1');
	$subroutes->add('delete/(:any)', 'Anggota::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Anggota::apply_status/$1');
	$subroutes->add('import', 'Anggota::import');
	$subroutes->add('do_init', 'Anggota::do_init');
	$subroutes->add('do_upload', 'Anggota::do_upload');
	$subroutes->add('do_delete', 'Anggota::do_delete');
	$subroutes->add('flip', 'Anggota::flip');
});

$routes->group('anggota/keranjang', ['namespace' => 'Anggota\Controllers'], function ($subroutes) {
	/*** Route Update for Anggota ***/
	$subroutes->add('', 'Anggota::index');
	$subroutes->add('index', 'Anggota::index');
	$subroutes->add('detail/(:any)', 'Anggota::detail/$1');
	$subroutes->add('create', 'Anggota::create');
	$subroutes->add('edit/(:any)', 'Anggota::edit/$1');
	$subroutes->add('delete/(:any)', 'Anggota::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Anggota::apply_status/$1');
	$subroutes->add('import', 'Anggota::import');
	$subroutes->add('do_init', 'Anggota::do_init');
	$subroutes->add('do_upload', 'Anggota::do_upload');
	$subroutes->add('do_delete', 'Anggota::do_delete');
	$subroutes->add('flip', 'Anggota::flip');
});