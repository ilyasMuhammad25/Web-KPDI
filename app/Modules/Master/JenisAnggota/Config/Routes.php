<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('jenisanggota', ['namespace' => 'JenisAnggota\Controllers'], function ($subroutes) {
	/*** Route Update for JenisAnggota ***/
	$subroutes->add('', 'JenisAnggota::index');
	$subroutes->add('index', 'JenisAnggota::index');
	$subroutes->add('detail/(:any)', 'JenisAnggota::detail/$1');
	$subroutes->add('create', 'JenisAnggota::create');
	$subroutes->add('edit/(:any)', 'JenisAnggota::edit/$1');
	$subroutes->add('delete/(:any)', 'JenisAnggota::delete/$1');
	$subroutes->add('apply_status/(:any)', 'JenisAnggota::apply_status/$1');
	$subroutes->add('do_init', 'JenisAnggota::do_init');
	$subroutes->add('do_upload', 'JenisAnggota::do_upload');
	$subroutes->add('do_delete', 'JenisAnggota::do_delete');
	$subroutes->add('flip', 'JenisAnggota::flip');
});

$routes->group('api/jenisanggota', ['namespace' => 'JenisAnggota\Controllers\Api'], function ($subroutes) {
	/*** Route Update for JenisAnggota ***/
	$subroutes->add('detail/(:any)', 'JenisAnggota::detail/$1');
	$subroutes->add('create', 'JenisAnggota::create');
	$subroutes->add('edit/(:any)', 'JenisAnggota::edit/$1');
	$subroutes->add('delete/(:any)', 'JenisAnggota::delete/$1');
});