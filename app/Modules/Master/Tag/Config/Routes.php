<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('tag', ['namespace' => 'Tag\Controllers'], function ($subroutes) {
	/*** Route Update for Tag ***/
	$subroutes->add('', 'Tag::index');
	$subroutes->add('index', 'Tag::index');
	$subroutes->add('detail/(:any)', 'Tag::detail/$1');
	$subroutes->add('create', 'Tag::create');
	$subroutes->add('edit/(:any)', 'Tag::edit/$1');
	$subroutes->add('delete/(:any)', 'Tag::delete/$1');
	$subroutes->add('apply_status/(:any)', 'Tag::apply_status/$1');
	$subroutes->add('do_init', 'Tag::do_init');
	$subroutes->add('do_upload', 'Tag::do_upload');
	$subroutes->add('do_delete', 'Tag::do_delete');
	$subroutes->add('flip', 'Tag::flip');
});

$routes->group('api/tag', ['namespace' => 'Tag\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Tag ***/
	$subroutes->add('detail/(:any)', 'Tag::detail/$1');
	$subroutes->add('create', 'Tag::create');
	$subroutes->add('edit/(:any)', 'Tag::edit/$1');
	$subroutes->add('delete/(:any)', 'Tag::delete/$1');
	$subroutes->add('field_data_delete/(:any)', 'Tag::field_data_delete/$1');
	$subroutes->add('field_indicator1_delete/(:any)', 'Tag::field_indicator1_delete/$1');
	$subroutes->add('field_indicator2_delete/(:any)', 'Tag::field_indicator2_delete/$1');
});