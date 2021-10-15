<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('lokasiperpustakaan', ['namespace' => 'LokasiPerpustakaan\Controllers'], function ($subroutes) {
	/*** Route Update for LokasiPerpustakaan ***/
	$subroutes->add('', 'LokasiPerpustakaan::index');
	$subroutes->add('index', 'LokasiPerpustakaan::index');
	$subroutes->add('detail/(:any)', 'LokasiPerpustakaan::detail/$1');
	$subroutes->add('create', 'LokasiPerpustakaan::create');
	$subroutes->add('edit/(:any)', 'LokasiPerpustakaan::edit/$1');
	$subroutes->add('delete/(:any)', 'LokasiPerpustakaan::delete/$1');
	$subroutes->add('apply_status/(:any)', 'LokasiPerpustakaan::apply_status/$1');
	$subroutes->add('do_init', 'LokasiPerpustakaan::do_init');
	$subroutes->add('do_upload', 'LokasiPerpustakaan::do_upload');
	$subroutes->add('do_delete', 'LokasiPerpustakaan::do_delete');
	$subroutes->add('flip', 'LokasiPerpustakaan::flip');
});

$routes->group('api/lokasiperpustakaan', ['namespace' => 'LokasiPerpustakaan\Controllers\Api'], function ($subroutes) {
	/*** Route Update for LokasiPerpustakaan ***/
	$subroutes->add('detail/(:any)', 'LokasiPerpustakaan::detail/$1');
	$subroutes->add('create', 'LokasiPerpustakaan::create');
	$subroutes->add('edit/(:any)', 'LokasiPerpustakaan::edit/$1');
	$subroutes->add('delete/(:any)', 'LokasiPerpustakaan::delete/$1');
});