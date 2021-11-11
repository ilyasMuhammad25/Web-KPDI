<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$katalogModel = new \Katalog\Models\KatalogModel();
$katalogs = $katalogModel
  ->select('t_catalog.*')
  ->where('active', 1)
  ->where('is_opac', 1)
  ->where('is_feature', 1)
  ->orderBy('created_at', 'desc')
  ->limit(4)
  ->get()
  ->getResult();
?>

<section class="doc_testimonial_area pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="main_title">
					<h2 class="h_title wow fadeInUp">Koleksi Unggulan</h2>
				</div>
				<div class="doc_testimonial_slider">
					<?php foreach ($katalogs as $row): ?>
						<div class="item">
							<h3><a href="<?=base_url('home/search?catalog_id='.$row->id)?>"><?=character_limiter($row->title, 80)?></a></h3>
							<div class="name"><?=character_limiter($row->publisher, 80)?>, <span><?=character_limiter($row->author)?></span></div>
						</div>
					<?php endforeach;?>
					
				</div>
			</div>
			<div class="col-lg-6">
				<div class="doc_img_slider">
					<?php foreach ($katalogs as $row): ?>
						<?php
							$default = base_url('uploads/default/no_cover.jpg');
							$image = base_url('uploads/katalog/thumb_' . $row->file_image);
							if (empty($row->file_image)) {
							$image = $default;
							}
						?>
						<div class="item">
							<img class="dot" src="<?=base_url('themes/opac')?>/img/new/dot.png" alt="">
							<div class="round one"></div>
							<div class="round two"></div>
							<img src="<?=$image?>" onerror="this.onerror=null;this.src='<?=$default?>';" class="w-50 rounded" style="opacity:0.95">
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</section>