
<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?= $this->extend('Core\layout\frontend\main'); ?>
<?= $this->section('style'); ?>
<style>
	.header_search_form .custom-select {
		min-width: 220px !important;
	}
</style>
<?= $this->endSection('style'); ?>
<?= $this->section('page'); ?>
	<section class="page_breadcrumb">
		<div class="container custom_container">
			<div class="row">
				<div class="col-sm-7">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>">Beranda</a></li>
							<!-- <li class="breadcrumb-item"><a href="#">Docs</a></li> -->
							<li class="breadcrumb-item active" aria-current="page">Hasil Pencarian &nbsp;  <b><i><?=$request->getVar('pDataItem')?></i></b></li>
						</ol>
					</nav>
				</div>
				<div class="col-sm-5">
					<a href="#" class="date"><i class="icon_clock_alt"></i><?=date('Y-m-d h:n:s')?></a>
				</div>
			</div>
		</div>
	</section>
	<section class="breadcrumb_area_three">
        <div class="container">
            <div class="breadcrumb_content">
                <h1>How to create Google account with WordPress</h1>
                <div class="single_post_author">
                    <!-- <img class="author_img" src="img/blog-single/author_single.jpg" alt=""> -->
                    <div class="text">
                        <a href="#"><h4>Jason Response</h4></a>
                        <div class="post_tag">
                            <a href="#">2020</a>
                           
                            <a class="c_blue" href="#">Komputer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="doc_documentation_area" id="sticky_doc">
		<div class="overlay_bg"></div>
		<div class="container custom_container">
			<div class="row">
				<div class="col-lg-9 col-md-8 doc-middle-content" style="padding-left:5px; padding-right:30px;">
					<div class="blog_single_info">
                        <div class="blog_single_item">
                           
                            <div class="media comment_author">
                                <img class="img_rounded" src="img/deskripsi/dummy-cover.jpg" alt="">
                                <div class="media-body">
                                    <div class="comment_info">
                                        <ul class="single_list">
                                            <li>Judul : How to create Google account with WordPress</li>
                                            <li>Jenis Bahan : Monograf</li>
                                            <li>Pengarang : Jason Response</li>
                                            <li>Penerbitan : Gramedia</li>
                                            <li>Deskripsi Fisik	: xxiv, 390 hlm. : ilus. ; 21 cm.</li>
                                            <li>ISBN : 979414585</li>
                                            <li>Subjek : <a href="#">Komputer</a> - <a href="#">Pemrograman</a></li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>

                            <a class="toggle_btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Ringkasan</a>
                            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                <div class="card card-body toggle_body"> A short rod of wood or plastic sewn to one side of a coat or other garment, pushed through a hole or loop on the other side and twisted so as to act as a fastener. Switch from one effect, feature, or state to another by using a toggle. </div>
                            </div>

                           
                        </div>
                      
                        <div class="blog_related_post">
                            <h2 class="c_head">Koleksi Terkait</h2>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="img/deskripsi/dummy-cover.jpg" alt="">
                                        <div class="grid_post_content">
                                            <div class="post_tag">
                                                <a href="#">Pengarang</a>
                                                <a class="c_blue" href="#">Komputer</a>
                                            </div>
                                            <a href="#">
                                                <h4 class="b_title">70 Best Startups You Need to Watch Out for</h4>
                                            </a>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="img/deskripsi/dummy-cover.jpg" alt="">
                                        <div class="grid_post_content">
                                            <div class="post_tag">
                                                <a href="#">Pengarang</a>
                                                <a class="c_blue" href="#">Programming</a>
                                            </div>
                                            <a href="#">
                                                <h4 class="b_title">How to Connect Google With WordPress</h4>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="img/deskripsi/dummy-cover.jpg" alt="">
                                        <div class="grid_post_content">
                                            <div class="post_tag">
                                                <a href="#">Pengarang</a>
                                                <a class="c_blue" href="#">Security</a>
                                            </div>
                                            <a href="#">
                                                <h4 class="b_title">10 WordPress Security Issues And How to Fix</h4>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

				<div class="col-lg-3 col-md-4 doc_right_mobile_menu">
					<div class="widget categorie_widget">
						<h4 class="c_head">Kategori Koleksi</h4>
						<ul class="list-unstyled categorie_list">
							<li><a href="#">Buku/Monograf <span>(12)</span></a></li>
							<li><a href="#">Terbitan Berkala <span>(8)</span></a></li>
							<li><a href="#">Sumber Elektronik<span>(3)</span></a></li>
							<li><a href="#">Bentuk Mikro <span>(4)</span></a></li>
							<li><a href="#">Bahan Campuran<span>(12)</span></a></li>
							<li><a href="#">Rekaman Suara<span>(15)</span></a></li>
							<li><a href="#">Braille <span>(10)</span></a></li>
							<li><a href="#">Rekaman Video<span>(5)</span></a></li>
						</ul>
					</div>

					<div class="widget recent_news_widget">
						<h4 class="c_head">Karya Lain dari Pengarang</h4>
						<div class="media recent_post_item">
							<img src="img/blog-single/news_01.jpg" alt="">
							<div class="media-body">
								<a href="#">
									<h5>Is It Worth Buying A Premium Form Builder.</h5>
								</a>
								<div class="entry_post_date">2020</div>
							</div>
						</div>
						<div class="media recent_post_item">
							<img src="img/blog-single/news_02.jpg" alt="">
							<div class="media-body">
								<a href="#">
									<h5>10 Classic Summer Vacations</h5>
								</a>
								<div class="entry_post_date">2018</div>
							</div>
						</div>
						<div class="media recent_post_item">
							<img src="img/blog-single/news_03.jpg" alt="">
							<div class="media-body">
								<a href="#">
									<h5>How To Easily Add weForms Widget Using Elementor</h5>
								</a>
								<div class="entry_post_date">2010</div>
							</div>
						</div>
						<div class="media recent_post_item">
							<img src="img/blog-single/news_04.jpg" alt="">
							<div class="media-body">
								<a href="#">
									<h5>How to Create GDPR Consent Form In WordPress</h5>
								</a>
								<div class="entry_post_date">1998</div>
							</div>
						</div>
					</div>
					
					<div class="widget tag_widget">
						<h4 class="c_head">Subjek Terkait</h4>
						<ul class="list-unstyled w_tag_list">
							<li><a href="#">Design</a></li>
							<li><a href="#">Apps</a></li>
							<li><a href="#">Photography</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Docy</a></li>
							<li><a href="#">WordPress</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">DocAll</a></li>
							<li><a href="#">Magento</a></li>
							<li><a href="#">Doc Design</a></li>
							<li><a href="#">ui/ux</a></li>
							<li><a href="#">Docs</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<?= $this->endSection('page'); ?>
