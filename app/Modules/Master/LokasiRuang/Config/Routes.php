<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('lokasiruang', ['namespace' => 'LokasiRuang\Controllers'], function ($subroutes) {
	/*** Route Update for LokasiRuang ***/
	$subroutes->add('', 'LokasiRuang::index');
	$subroutes->add('index', 'LokasiRuang::index');
	$subroutes->add('detail/(:any)', 'LokasiRuang::detail/$1');
	$subroutes->add('create', 'LokasiRuang::create');
	$subroutes->add('edit/(:any)', 'LokasiRuang::edit/$1');
	$subroutes->add('delete/(:any)', 'LokasiRuang::delete/$1');
	$subroutes->add('apply_status/(:any)', 'LokasiRuang::apply_status/$1');
	$subroutes->add('do_init', 'LokasiRuang::do_init');
	$subroutes->add('do_upload', 'LokasiRuang::do_upload');
	$subroutes->add('do_delete', 'LokasiRuang::do_delete');
	$subroutes->add('flip', 'LokasiRuang::flip');
});

$routes->group('api/lokasiruang', ['namespace' => 'LokasiRuang\Controllers\Api'], function ($subroutes) {
	/*** Route Update for LokasiRuang ***/
	$subroutes->add('detail/(:any)', 'LokasiRuang::detail/$1');
	$subroutes->add('create', 'LokasiRuang::create');
	$subroutes->add('edit/(:any)', 'LokasiRuang::edit/$1');
	$subroutes->add('delete/(:any)', 'LokasiRuang::delete/$1');
});