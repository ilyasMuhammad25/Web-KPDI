<?php if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->get('tokoh-wanita', 'Page::figure', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('tokoh-wanita/(:any)', 'Page::figure_detail/$1', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('Beritas', 'Page::beritas', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('beritaDetail/(:any)', 'Page::beritaDetail/$1', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('visi-dan-misi', 'Page::visi_misi', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('karya-ilmiah/(:any)', 'Page::research_detail/$1', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('struktur-organisasi', 'Page::struktur_organisasi', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('artikel/(:any)', 'Page::article_detail/$1', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('koleksi-gambar', 'Page::picture', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('koleksi-gambar/(:any)', 'Page::picture_detail/$1', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('koleksi-rekaman', 'Page::record', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('koleksi-rekaman/(:any)', 'Page::record_detail/$1', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('organisasi', 'Page::organization', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('organisasi/(:any)', 'Page::organization_detail/$1', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('faqs', 'Page::faq', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('kontak-kami', 'Page::contact', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('sejarah-singkat', 'Page::sejarah_singkat', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('sisinfrastik', 'Page::sisinfrastik', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('installer', 'Page::installer', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('patch', 'Page::patch', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('source', 'Page::source', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('migrator', 'Page::migrator', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('oai', 'Page::oai', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('recording', 'Page::recording', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('sms', 'Page::sms', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('dukungan', 'Page::dukungan', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('panduan', 'Page::panduan', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);
$routes->get('bimtek', 'Page::bimtek', ['namespace' => 'App\Modules\Frontend\Page\Controllers']);


$routes->group('frontend/page', ['namespace' => 'App\Modules\Frontend\Page\Controllers'], function ($subroutes) {
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
