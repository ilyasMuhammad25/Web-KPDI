<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$katalogModel = new \Katalog\Models\KatalogModel();
$query = $katalogModel
    ->where('t_katalog.active',1);

$count_items = $query->countAllResults(false);

if(!empty($keyword)){
    $query->groupStart();
    $query->like('t_katalog.title', $keyword);
    $query->groupEnd();
    $count_items = $query->countAllResults(false);
    // dd($count_items);
} 

$items = $query
    ->select('t_katalog.*')
    ->orderBy('t_katalog.created_at', 'desc')
    ->paginate(10, 'katalogs');

$pager = $query->pager;
?>

<section class="doc_features_area">
	<img class="doc_features_shap" src="<?=base_url('themes/opac')?>/img/new/shap_white.png" alt="">
	<div class="container">
		<div class="doc_features_inner">
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon1.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Monograf</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon2.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Terbitan Berkala</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon3.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Manuskrip</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon4.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Film</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon5.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Musik</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon6.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Rekaman Video</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon7.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Rekaman Suara</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon8.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Bahan Kartografis</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon9.png" alt="">
				<div class="media-body">
					<a href="#">
						<h4>Braille</h4>
					</a>
					<p>245 Posts</p>
				</div>
			</div>
			<div class="see_more_item collapse-wrap">
				<div class="media doc_features_item">
					<img src="<?=base_url('themes/opac')?>/img/new/icon7.png" alt="">
					<div class="media-body">
						<a href="#">
							<h4>Sumber Elektronik</h4>
						</a>
						<p>245 Posts</p>
					</div>
				</div>
				<div class="media doc_features_item">
					<img src="<?=base_url('themes/opac')?>/img/new/icon8.png" alt="">
					<div class="media-body">
						<a href="#">
							<h4>Sumber Elektronik Berkala</h4>
						</a>
						<p>245 Posts</p>
					</div>
				</div>
				<div class="media doc_features_item">
					<img src="<?=base_url('themes/opac')?>/img/new/icon9.png" alt="">
					<div class="media-body">
						<a href="#">
							<h4>Bentuk Mikro</h4>
						</a>
						<p>245 Posts</p>
					</div>
				</div>
			</div>
			<a href="#more-features" class="collapse-btn see_btn">
				<i class="arrow_carrot-down_alt2"></i>
				<span class="text">Tampilkan lebih lanjut</span>
			</a>
		</div>
	</div>
</section>