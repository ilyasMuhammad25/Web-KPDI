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
							<li class="breadcrumb-item active" aria-current="page">Buku tamu</li>
						</ol>
					</nav>
				</div>
				<div class="col-sm-5">
					<a href="#" class="date"><i class="icon_clock_alt"></i><?=date('Y-m-d h:n:s')?></a>
				</div>
			</div>
		</div>
	</section>

    <section class="recommended_topic_area">
            <div class="container">
                <div class="recommended_topic_inner">
                    <img class="doc_shap_one" src="img/new/shap.png" alt="">
                    <div class="doc_round one" data-parallax='{"x": -80, "y": -100, "rotateY":0}'></div>
                    <div class="doc_round two" data-parallax='{"x": -10, "y": 70, "rotateY":0}'></div>
                    <div class="doc_title text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Buku tamu</h2>
                  
                        <div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="email"   style="margin: auto;
  width: 60%;
  border: 3px solid #4446D7;
  padding: 10px;" class="form-control" id="exampleFormControlInput1" placeholder="Masuka Nomor Anggota">
</div>
                        
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.2s">
                                <img src="img/new/smile.png" alt="">
                                <a href="#">
                                    <h3>Literatur</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Sastra</a></li>
                                    <li><a href="#">Kepustakaan</a></li>
                                    <li><a href="#">Pustakawan</a></li>
                                    <li><a href="#">Literasi</a></li>
                                    <li><a href="#">Novel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.3s">
                                <img src="img/new/house.png" alt="">
                                <a href="#">
                                    <h3>Komputer</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Computer Science</a></li>
                                    <li><a href="#">Programming</a></li>
                                    <li><a href="#">Database</a></li>
                                    <li><a href="#">Internet</a></li>
                                    <li><a href="#">Website</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.4s">
                                <img src="img/new/doc.png" alt="">
                                <a href="#">
                                    <h3>Kesehatan</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Kedokteran</a></li>
                                    <li><a href="#">Covid-19</a></li>
                                    <li><a href="#">Biologi</a></li>
                                    <li><a href="#">Mental Health</a></li>
                                    <li><a href="#">Psikologi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.5s">
                                <img src="img/new/bag.png" alt="">
                                <a href="#">
                                    <h3>Ilmu Terapan</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Biografi</a></li>
                                    <li><a href="#">Sejarah</a></li>
                                    <li><a href="#">Akuntansi</a></li>
                                    <li><a href="#">Manajemen</a></li>
                                    <li><a href="#">Keuangan</a></li>
                                </ul>
                            </div>
                        </div>
               
                    <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="question_text">Want to know more or have a<br> Question?
                        </a>
                    </div> -->
                </div>
            </div>
        </section>
<?= $this->endSection('page'); ?>
