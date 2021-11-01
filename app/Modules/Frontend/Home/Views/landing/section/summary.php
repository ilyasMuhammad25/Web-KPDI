<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$worksheets = get_worksheet_summary();
?>

<section class="doc_features_area">
	<img class="doc_features_shap" src="<?=base_url('themes/opac')?>/img/new/shap_white.png" alt="">
	<div class="container">
		<div class="doc_features_inner">
			<?php foreach($worksheets as $row):?>
			<div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
				<img src="<?=base_url('themes/opac')?>/img/new/icon8.png" alt="">
				<div class="media-body">
					<a href="<?=base_url('home/search?pDataItem=&pType=&pLembarkerja='.$row->id)?>">
						<h4><?=$row->name?></h4>
					</a>
					<p><?=$row->total?> Koleksi</p>
				</div>
			</div>
			<?php endforeach;?>
			<!-- <div class="see_more_item collapse-wrap">
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
			</a> -->
		</div>
	</div>
</section>