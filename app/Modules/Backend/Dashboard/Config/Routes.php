<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('dashboard', ['namespace' => 'Dashboard\Controllers'], function ($subroutes) {
	/*** Route Update for Dashboard ***/
	$subroutes->add('', 'Dashboard::index');
	$subroutes->add('dashboard', 'Dashboard::index');
	$subroutes->add('index', 'Dashboard::index');
	$subroutes->add('highlight', 'Dashboard::highlight');
	$subroutes->add('roadmap', 'Dashboard::roadmap');
});
