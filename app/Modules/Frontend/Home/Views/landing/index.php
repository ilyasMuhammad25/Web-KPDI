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
	<?= $this->include('Home\Views\landing\section\summary'); ?>
	<?= $this->include('Home\Views\landing\section\collection'); ?>
	<?= $this->include('Home\Views\landing\section\feature'); ?>
<?= $this->endSection('page'); ?>
<?= $this->section('script'); ?>
<script>
$('#collections').slick({
	dots: true,
	autoplay:true,
	infinite: false,
	speed: 300,
	slidesToShow: 4,
	slidesToScroll: 4,
	responsive: [
		{
		breakpoint: 1024,
		settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		}
		},
		{
		breakpoint: 600,
		settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		}
		},
		{
		breakpoint: 480,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
});
</script>
<?= $this->endSection('script'); ?>
