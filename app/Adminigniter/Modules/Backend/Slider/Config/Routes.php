<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('slider', ['namespace' => 'App\Adminigniter\Modules\Backend\Slider\Controllers'], function ($subroutes) {
	/*** Route Update for Slider ***/
	$subroutes->add('', 'Slider::index');
	$subroutes->add('slider', 'Slider::index');
	$subroutes->add('index', 'Slider::index');
	$subroutes->add('detail/(:any)', 'Slider::detail/$1');
	$subroutes->add('edit/(:any)', 'Slider::edit/$1');
	$subroutes->add('create', 'Slider::create');
	$subroutes->add('delete/(:any)', 'Slider::delete/$1');
	$subroutes->add('enable/(:any)', 'Slider::enable/$1');
	$subroutes->add('disable/(:any)', 'Slider::disable/$1');
	$subroutes->add('do_init', 'Slider::do_init');
	$subroutes->add('do_upload', 'Slider::do_upload');
	$subroutes->add('do_delete', 'Slider::do_delete');
	$subroutes->add('flip', 'Slider::flip');
});

$routes->group('api/slider', ['namespace' => 'App\Adminigniter\Modules\Backend\Slider\Controllers\Api'], function ($subroutes) {
	/*** Route Update for Slider ***/
	$subroutes->add('detail/(:any)', 'Slider::detail/$1');
	$subroutes->add('edit/(:any)', 'Slider::edit/$1');
	$subroutes->add('create', 'Slider::create');
	$subroutes->add('delete/(:any)', 'Slider::delete/$1');
});