<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('contact', ['namespace' => 'Contact\Controllers'], function ($subroutes) {
	/*** Route Update for Contact ***/
	$subroutes->add('', 'Contact::index');
	$subroutes->add('contact', 'Contact::index');
	$subroutes->add('index', 'Contact::index');
	$subroutes->add('detail/(:any)', 'Contact::detail/$1');
	$subroutes->add('edit/(:any)', 'Contact::edit/$1');
	$subroutes->add('create', 'Contact::create');
	$subroutes->add('delete/(:any)', 'Contact::delete/$1');
	$subroutes->add('do_init', 'Contact::do_init');
	$subroutes->add('do_upload', 'Contact::do_upload');
	$subroutes->add('do_delete', 'Contact::do_delete');
	$subroutes->add('flip', 'Contact::flip');
});

$routes->group('api/contact', ['namespace' => 'Contact\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Contact ***/
	$subroutes->add('', 'Contact::index');
	$subroutes->add('index', 'Contact::index');
	$subroutes->add('detail/(:any)', 'Contact::detail/$1');
	$subroutes->add('edit/(:any)', 'Contact::edit/$1');
	$subroutes->add('create', 'Contact::create');
	$subroutes->add('delete/(:any)', 'Contact::delete/$1');
});
