<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->get('profil_anggota', 'Anggota::profile', ['namespace' => 'Anggota\Controllers']);
$routes->post('profil_anggota', 'Anggota::edit', ['namespace' => 'Anggota\Controllers']);

$routes->group('anggota', ['namespace' => 'Anggota\Controllers'], function ($subroutes) {
	/*** Route Update for Anggota ***/
	$subroutes->add('', 'Anggota::index');
	$subroutes->add('index', 'Anggota::index');
	$subroutes->add('profile', 'Anggota::profile');
	$subroutes->add('index_json', 'Anggota::index_json');
	$subroutes->add('keranjang', 'Anggota::keranjang');
	$subroutes->add('index_datatables', 'Anggota::index_datatables');
	$subroutes->add('ajaxDataTables', 'Anggota::ajaxDataTables');
	$subroutes->add('json', 'Anggota::json');
	$subroutes->add('ajaxDataAnggota', 'Anggota::ajaxDataAnggota');
	$subroutes->add('detail/(:any)', 'Anggota::detail/$1');
	$subroutes->add('create', 'Anggota::create');
	$subroutes->add('edit', 'Anggota::edit');
	$subroutes->add('edit/(:any)', 'Anggota::edit/$1');
	$subroutes->add('edit/(:any)/(:any)', 'Anggota::edit/$1/$2');
	$subroutes->add('delete/(:any)', 'Anggota::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Anggota::apply_status/$1');
	$subroutes->add('do_init', 'Anggota::do_init');
	$subroutes->add('do_upload', 'Anggota::do_upload');
	$subroutes->add('do_delete', 'Anggota::do_delete');
	$subroutes->add('flip', 'Anggota::flip');
	$subroutes->add('D_pelanggaran', 'Anggota::D_pelanggaran');
	$subroutes->add('D_peminjaman', 'Anggota::D_peminjaman');
	$subroutes->add('D_perpanjangan', 'Anggota::D_perpanjangan');
	$subroutes->add('D_sumbangan', 'Anggota::D_sumbangan');
	$subroutes->add('import', 'Anggota::import');
	$subroutes->add('cetakKartu/(:any)', 'Anggota::cetakKartu/$1');
});

$routes->group('api/anggota', ['namespace' => 'Anggota\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Anggota ***/
	$subroutes->add('', 'Anggota::index');
	$subroutes->add('detail/(:any)', 'Anggota::detail/$1');
	$subroutes->add('create', 'Anggota::create');
	$subroutes->add('edit/(:any)', 'Anggota::edit/$1');
	$subroutes->add('delete/(:any)', 'Anggota::delete/$1');
	$subroutes->add('cities', 'Anggota::cities');
});