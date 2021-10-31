<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('eksemplar', ['namespace' => 'Eksemplar\Controllers'], function ($subroutes) {
	/*** Route Update for Eksemplar ***/
	$subroutes->add('', 'Eksemplar::index');
	$subroutes->add('index', 'Eksemplar::index');
	$subroutes->add('detail/(:any)', 'Eksemplar::detail/$1');
	$subroutes->add('create', 'Eksemplar::create');
	$subroutes->add('cetakLabel/(:any)', 'Eksemplar::cetakLabel/$1');
	$subroutes->add('edit/(:any)', 'Eksemplar::edit/$1');
	$subroutes->add('delete/(:any)', 'Eksemplar::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Eksemplar::apply_status/$1');
	$subroutes->add('do_init', 'Eksemplar::do_init');
	$subroutes->add('do_upload', 'Eksemplar::do_upload');
	$subroutes->add('do_delete', 'Eksemplar::do_delete');
	$subroutes->add('flip', 'Eksemplar::flip');

	$subroutes->add('karantina', 'Eksemplar::karantina_index');
	$subroutes->add('keranjang', 'Eksemplar::keranjang_index');
});

$routes->group('api/eksemplar', ['namespace' => 'Eksemplar\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Eksemplar ***/
	$subroutes->add('detail/(:any)', 'Eksemplar::detail/$1');
	$subroutes->add('create', 'Eksemplar::create');
	$subroutes->add('edit/(:any)', 'Eksemplar::edit/$1');
	$subroutes->add('delete/(:any)', 'Eksemplar::delete/$1');
});
