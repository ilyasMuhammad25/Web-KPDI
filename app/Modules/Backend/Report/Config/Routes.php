<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('report', ['namespace' => 'Report\Controllers'], function ($subroutes) {
	/*** Route Update for Report ***/
	$subroutes->add('', 'Report::index');
	$subroutes->add('index', 'Report::index');
	$subroutes->add('logs', 'Report::logs');
	$subroutes->add('logs_export', 'Report::logs_export');
	$subroutes->add('visitors', 'Report::visitors');
	$subroutes->add('visitors_export', 'Report::visitors_export');
});