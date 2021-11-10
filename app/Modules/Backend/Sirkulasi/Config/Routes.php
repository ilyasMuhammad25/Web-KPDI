<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->group('sirkulasi', ['namespace' => 'Sirkulasi\Controllers'], function ($subroutes) {
	/*** Route Update for Sirkulasi ***/
	$subroutes->add('', 'Sirkulasi::index');
	$subroutes->add('index', 'Sirkulasi::index');
	$subroutes->add('detail/(:any)', 'Sirkulasi::detail/$1');
	$subroutes->add('create', 'Sirkulasi::create');

	$subroutes->add('create_loan', 'Sirkulasi::create_loan');
	$subroutes->add('create_return', 'Sirkulasi::create_return');
	$subroutes->add('create_extend', 'Sirkulasi::create_extend');
	$subroutes->add('create_penalty', 'Sirkulasi::create_penalty');

	$subroutes->add('process_return/(:any)', 'Sirkulasi::process_return/$1');
	$subroutes->add('process_extend/(:any)', 'Sirkulasi::process_extend/$1');
	$subroutes->add('process_penalty/(:any)', 'Sirkulasi::process_penalty/$1');
	$subroutes->add('cart_insert/(:any)', 'Sirkulasi::cart_insert/$1');
	$subroutes->add('cart_remove/(:any)', 'Sirkulasi::cart_remove/$1');
	$subroutes->add('cart_destroy', 'Sirkulasi::cart_destroy');

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