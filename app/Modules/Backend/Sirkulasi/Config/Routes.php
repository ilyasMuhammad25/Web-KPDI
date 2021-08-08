<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('sirkulasi', ['namespace' => 'Sirkulasi\Controllers'], function ($subroutes) {
	/*** Route Update for Sirkulasi ***/
	$subroutes->add('', 'Sirkulasi::index');
	$subroutes->add('index', 'Sirkulasi::index');
	$subroutes->add('detail/(:any)', 'Sirkulasi::detail/$1');
	$subroutes->add('create', 'Sirkulasi::create');
	$subroutes->add('edit/(:any)', 'Sirkulasi::edit/$1');
	$subroutes->add('delete/(:any)', 'Sirkulasi::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Sirkulasi::apply_status/$1');
	$subroutes->add('do_init', 'Sirkulasi::do_init');
	$subroutes->add('do_upload', 'Sirkulasi::do_upload');
	$subroutes->add('do_delete', 'Sirkulasi::do_delete');
	$subroutes->add('flip', 'Sirkulasi::flip');
});

$routes->group('api/sirkulasi', ['namespace' => 'Sirkulasi\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Sirkulasi ***/
	$subroutes->add('detail/(:any)', 'Sirkulasi::detail/$1');
	$subroutes->add('create', 'Sirkulasi::create');
	$subroutes->add('edit/(:any)', 'Sirkulasi::edit/$1');
	$subroutes->add('delete/(:any)', 'Sirkulasi::delete/$1');
});

$routes->group('sirkulasi-peminjaman', ['namespace' => 'Sirkulasi\Controllers'], function ($subroutes) {
	/*** Route Update for Sirkulasi ***/
	$subroutes->add('', 'Sirkulasi::peminjaman_index');
	$subroutes->add('index', 'Sirkulasi::peminjaman_index');
	$subroutes->add('create', 'Sirkulasi::peminjaman_create');
	$subroutes->add('edit/(:any)', 'Sirkulasi::peminjaman_edit/$1');
});

$routes->group('sirkulasi-pengembalian', ['namespace' => 'Sirkulasi\Controllers'], function ($subroutes) {
	/*** Route Update for Sirkulasi ***/
	$subroutes->add('', 'Sirkulasi::pengembalian_index');
	$subroutes->add('index', 'Sirkulasi::pengembalian_index');
	$subroutes->add('create', 'Sirkulasi::pengembalian_create');
	$subroutes->add('edit/(:any)', 'Sirkulasi::pengembalian_edit/$1');
});

$routes->group('sirkulasi-perpanjangan', ['namespace' => 'Sirkulasi\Controllers'], function ($subroutes) {
	/*** Route Update for Sirkulasi ***/
	$subroutes->add('', 'Sirkulasi::perpanjangan_index');
	$subroutes->add('index', 'Sirkulasi::perpanjangan_index');
	$subroutes->add('create', 'Sirkulasi::perpanjangan_create');
	$subroutes->add('edit/(:any)', 'Sirkulasi::perpanjangan_edit/$1');
});

$routes->group('sirkulasi-pelanggaran', ['namespace' => 'Sirkulasi\Controllers'], function ($subroutes) {
	/*** Route Update for Sirkulasi ***/
	$subroutes->add('', 'Sirkulasi::pelanggaran_index');
	$subroutes->add('index', 'Sirkulasi::pelanggaran_index');
	$subroutes->add('create', 'Sirkulasi::pelanggaran_create');
	$subroutes->add('edit/(:any)', 'Sirkulasi::pelanggaran_edit/$1');
});