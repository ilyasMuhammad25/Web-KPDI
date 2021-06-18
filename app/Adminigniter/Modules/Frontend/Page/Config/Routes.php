<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

// $routes->get('tokoh-wanita', 'Page::figure', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('tokoh-wanita/(:any)', 'Page::figure_detail/$1', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('buku', 'Page::book', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('buku/(:any)', 'Page::book_detail/$1', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('karya-ilmiah', 'Page::research', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('karya-ilmiah/(:any)', 'Page::research_detail/$1', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('artikel', 'Page::article', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('artikel/(:any)', 'Page::article_detail/$1', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('koleksi-gambar', 'Page::picture', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('koleksi-gambar/(:any)', 'Page::picture_detail/$1', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('koleksi-rekaman', 'Page::record', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('koleksi-rekaman/(:any)', 'Page::record_detail/$1', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('organisasi', 'Page::organization', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('organisasi/(:any)', 'Page::organization_detail/$1', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('faqs', 'Page::faq', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('kontak-kami', 'Page::contact', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('pra-kemerdekaan', 'Page::history_before', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('pasca-kemerdekaan', 'Page::history_after', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('flip', 'Page::flip', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);
// $routes->get('search', 'Page::search', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers']);

$routes->group('frontend/page', ['namespace' => 'App\Adminigniter\Modules\Frontend\Page\Controllers'], function ($subroutes) {
	/*** Route Update for Page ***/
	$subroutes->add('', 'Page::index');
	$subroutes->add('index', 'Page::index');
	$subroutes->add('institutional', 'Page::institutional');
	$subroutes->add('services', 'Page::services');
	$subroutes->add('collections', 'Page::collections');
	$subroutes->add('faq', 'Page::faq');
	$subroutes->add('news', 'Page::news');
	$subroutes->add('announcement', 'Page::announcement');
	$subroutes->add('event', 'Page::event');
	
	
	$subroutes->add('about', 'Page::about');
	$subroutes->add('about/(:any)', 'Page::about/$1');
	$subroutes->add('contact', 'Page::contact');
	$subroutes->add('blog', 'Page::blog');
	$subroutes->add('blog_detail', 'Page::blog_detail');
	$subroutes->add('gallery', 'Page::gallery');
});
