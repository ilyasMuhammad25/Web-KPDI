<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('sirkulasi', ['namespace' => 'Sirkulasi\Controllers'], function ($subroutes) {
	/*** Route Update for Sirkulasi ***/
	$subroutes->add('', 'Sirkulasi::index');
	$subroutes->add('index', 'Sirkulasi::index');
	$subroutes->add('detail/(:any)', 'Sirkulasi::detail/$1');
	$subroutes->add('create', 'Sirkulasi::create');
	$subroutes->add('create_peminjaman', 'Sirkulasi::create_peminjaman');
	$subroutes->add('createpengembalian', 'Sirkulasi::createpengembalian');
	$subroutes->add('perpanjangan', 'Sirkulasi::perpanjangan');
	$subroutes->add('listpeminjaman', 'Sirkulasi::listpeminjaman');
	$subroutes->add('listpengembalian', 'Sirkulasi::listpengembalian');
	$subroutes->add('editpengembalian', 'Sirkulasi::editpengembalian');
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
	$subroutes->add('eksemplar/(:any)', 'Sirkulasi::eksemplar/$1');
	$subroutes->add('loan_items/(:any)', 'Sirkulasi::loan_items/$1');
});