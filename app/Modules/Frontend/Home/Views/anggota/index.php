<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?= $this->extend('Core\layout\frontend\search\index'); ?>
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
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page"><b>Keanggotaan Online</b></li>
						</ol>
					</nav>
				</div>
				<div class="col-sm-5">
					<a href="#" class="date"><i class="icon_clock_alt"></i><?=date('Y-m-d h:n:s')?></a>
				</div>
			</div>
		</div>
	</section>
	<section class="doc_documentation_area" id="sticky_doc">
		<div class="overlay_bg"></div>
		<div class="container custom_container">
			<div class="row">
				<div class="col-lg-12">
					Halaman Copyan dari backend
					<?= $this->include("Home\Views\anggota\pendaftaran"); ?>
				</div>
			</div>
		</div>
	</section>
<?= $this->endSection('page'); ?>
