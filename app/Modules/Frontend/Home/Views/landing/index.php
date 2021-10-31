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
<?= $this->endSection('script'); ?>
