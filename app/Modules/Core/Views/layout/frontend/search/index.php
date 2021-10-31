<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?=base_url('themes/opac')?>/img/ico.png" type="image/x-icon">
		<?= $this->include('Core\layout\frontend\search\partial\style'); ?>
		<?= $this->renderSection('style'); ?>
		<title>OPAC</title>
	</head>
	<body class="doc wide-container" data-spy="scroll" data-target="#navbar-example3" data-scroll-animation="true" data-offset="70">
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="round_spinner">
					<div class="spinner"></div>
					<div class="text">
						<img src="<?=base_url('themes/opac')?>/img/spinner_logo.png" alt="">
						<h4><span>OPAC</span></h4>
					</div>
				</div>
				<h2 class="head">Memuat Halaman</h2>
				<p></p>
			</div>
		</div>
		<div class="body_wrapper">
			<?= $this->include('Core\layout\frontend\search\partial\header'); ?>
			<?= $this->include('Core\layout\frontend\search\partial\header_mobile'); ?>
			<?= $this->include('Core\layout\frontend\search\partial\breadcrumb'); ?>
			<?= $this->renderSection('page'); ?>
			<?= $this->include('Core\layout\frontend\search\partial\footer'); ?>
		</div>
		<!-- tolltip modal here -->
		<a id="back-to-top" title="Back to Top"></a>
		<?= $this->include('Core\layout\frontend\search\partial\script'); ?>
		<?= $this->renderSection('script'); ?>
	</body>
</html>