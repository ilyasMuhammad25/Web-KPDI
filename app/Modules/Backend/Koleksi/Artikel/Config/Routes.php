<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('artikel', ['namespace' => 'Artikel\Controllers'], function ($subroutes) {
	/*** Route Update for Artikel ***/
	$subroutes->add('', 'Artikel::index');
	$subroutes->add('index', 'Artikel::index');
	$subroutes->add('detail/(:any)', 'Artikel::detail/$1');
	$subroutes->add('create', 'Artikel::create');
	$subroutes->add('edit/(:any)', 'Artikel::edit/$1');
	$subroutes->add('delete/(:any)', 'Artikel::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Artikel::apply_status/$1');
	$subroutes->add('do_init', 'Artikel::do_init');
	$subroutes->add('do_upload', 'Artikel::do_upload');
	$subroutes->add('do_delete', 'Artikel::do_delete');
	$subroutes->add('flip', 'Artikel::flip');
});

$routes->group('api/artikel', ['namespace' => 'Artikel\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Artikel ***/
	$subroutes->add('detail/(:any)', 'Artikel::detail/$1');
	$subroutes->add('', 'Artikel::index');
	$subroutes->add('create', 'Artikel::create');
	// $subroutes->add('ajaxedit', 'Artikel::ajaxedit');
	// $subroutes->add('create', 'Artikel::create');
	$subroutes->add('category_create', 'Artikel::category_create');
	$subroutes->add('upload_file', 'Artikel::upload_file');
	$subroutes->add('edit/(:any)', 'Artikel::edit/$1');
	$subroutes->add('ajaxedit/(:any)', 'Artikel::ajaxedit/$1');
	$subroutes->add('delete/(:any)', 'Artikel::delete/$1');
});