<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>
<section class="breadcrumb_area" style="padding-top: 90px; padding-bottom:80px">
	<img class="p_absolute bl_left" src="<?=base_url('themes/opac')?>/img/v.svg" alt="">
	<img class="p_absolute bl_right" src="<?=base_url('themes/opac')?>/img/home_one/b_leaf.svg" alt="">
	<img class="p_absolute star" src="<?=base_url('themes/opac')?>/img/home_one/banner_bg.png" alt="">
	<img class="p_absolute wave_shap_one" src="<?=base_url('themes/opac')?>/img/blog-classic/shap_01.png" alt="">
	<img class="p_absolute wave_shap_two" src="<?=base_url('themes/opac')?>/img/blog-classic/shap_02.png" alt="">
	<img class="p_absolute one wow fadeInRight" src="<?=base_url('themes/opac')?>/img/home_one/b_man_two.png" alt="">
	<img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="<?=base_url('themes/opac')?>/img/home_one/flower.png" alt="">
	<div class="container">
		<div class="doc_banner_content">
			<form action="<?=base_url('home/search')?>" class="header_search_form">
				<div>
					<h3 class="wow fadeInUp text-white text-center">Apa yang kamu cari?</h3>
					<p class="wow fadeInUp text-center" data-wow-delay="0.2s">Temukan koleksi yang kamu inginkan di sini</p>
				<div>
				<div class="header_search_form_info">
					<div class="form-group">
						<div class="input-wrapper" style="max-width:none">
							<i class="icon_search"></i>
							<input type='search' id="pDataItem" autocomplete="off" name="pDataItem" placeholder="Masukkan kata kunci ..." value="<?=$request->getVar('pDataItem')?>" />
							<select class="custom-select" name="pType" id="pType">
								<option value="Title" <?=($request->getVar('pType')) == 'Title'? 'selected':''?>>Judul </option>
								<option value="Author" <?=($request->getVar('pType')) == 'Author' ? 'selected':''?>>Pengarang </option>
								<option value="Subject" <?=($request->getVar('pType')) == 'Subject' ? 'selected':''?>>Subjek </option>
								<option value="ISBN" <?=($request->getVar('pType')) == 'ISBN' ? 'selected':''?>>ISBN/ISMN/ISSN </option>
							</select>
						</div>
						<!-- <button type="submit" class="header_form_submit">Cari</button> -->
					</div>
				</div>
				<div class="header_search_keyword text-center">
					<span class="header-search-form__keywords-label">Kata kunci terkini</span>
					<ul class="list-unstyled">
						<li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Bung Karno</a></li>
						<li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Sejarah Indonesia</a></li>
						<li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">Pra Kemerdekaan</a></li>
					</ul>
				</div>
			</form>
		</div>
	</div>
</section>