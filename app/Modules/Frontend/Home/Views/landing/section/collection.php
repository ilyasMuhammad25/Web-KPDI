<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$katalogModel = new \Katalog\Models\KatalogModel();
$katalogs = $katalogModel
  ->select('t_katalog.*')
  ->where('active', 1)
  ->orderBy('created_at', 'asc')
  ->limit(12)
  ->get()
  ->getResult();
?>

<section class="recommended_topic_area pt-0 pb-5">
	<div class="container">
		<div class="recommended_topic_inner pt-0">
			<img class="doc_shap_one" src="img/new/shap.png" alt="">
			<div class="doc_round one" data-parallax='{"x": -80, "y": -100, "rotateY":0}'></div>
			<div class="doc_round two" data-parallax='{"x": -10, "y": 70, "rotateY":0}'></div>
			<div class="doc_title text-center">
				<h2 class="wow fadeInUp" data-wow-delay="0.2s">Koleksi Terbaru</h2>
				<p class="wow fadeInUp" data-wow-delay="0.4s">Kumpulan koleksi terbaru yang bisa kamu akses
				</p>
			</div>
			<div class="row" id="collections">
				<?php foreach ($katalogs as $row): ?>
					<?php
						$default = base_url('uploads/default/no_cover.jpg');
						$image = base_url('uploads/katalog/thumb_' . $row->CoverURL);
						if (empty($row->CoverURL)) {
						$image = $default;
						}
					?>
	
						<div class="course-item p-2">
							<div class="course-thumb">
								<img alt="featured project" src="<?=$image?>" onerror="this.onerror=null;this.src='<?=$default?>';" class="w-100 rounded" style="opacity:0.95">
							</div>
							<div class="content text-left flip">
								<p class="pt-3" style="font-size: 18px;line-height: 30px;color: #232361;font-weight: 400;"><?=character_limiter($row->Title, 80)?></p>
							</div>
						</div>
			
				<?php endforeach;?>
			</div>
			
		</div>
	</div>
</section>

