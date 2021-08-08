<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}
$routes->group('uigniter', ['namespace' => 'Uigniter\Controllers'], function ($subroutes) {
	/*** Route Update for Uigniter ***/
	$subroutes->add('', 'Uigniter::index');
	$subroutes->add('uigniter', 'Uigniter::index');
	$subroutes->add('index', 'Uigniter::index');
	$subroutes->add('dashboards/(:any)', 'Uigniter::dashboards/$1');
	$subroutes->add('applications/(:any)', 'Uigniter::applications/$1');
	$subroutes->add('elements/(:any)', 'Uigniter::elements/$1');
	$subroutes->add('components/(:any)', 'Uigniter::components/$1');
	$subroutes->add('tables/(:any)', 'Uigniter::tables/$1');
	$subroutes->add('widgets/(:any)', 'Uigniter::widgets/$1');
	$subroutes->add('forms/(:any)', 'Uigniter::forms/$1');
	$subroutes->add('charts/(:any)', 'Uigniter::charts/$1');
	$subroutes->add('membership/(:any)', 'Uigniter::membership/$1');
});
