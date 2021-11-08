<?php
	$request = \Config\Services::request();
	$request->uri->setSilent();
	$worksheet = $request->getVar('worksheet') ?? '1';
	$marc = $request->getVar('marc') ?? '0';
	$slug = $request->getVar('slug') ?? 'rda';
	$slug_title = strtoupper($slug);
?>

<?= $this->extend(config('Core')->layout_backend); ?>
<?= $this->section('style'); ?>
<style>
.input-group > .select2-container--bootstrap4 {
    width: auto;
    flex: 1 1 auto;
}

.input-group > .select2-container--bootstrap4 .select2-selection--single {
    height: 100%;
    line-height: inherit;
    padding: 0.5rem 1rem;
}

.no-border-radius > .select2-container--bootstrap4 .select2-selection--single {
	border-top-right-radius: 0 !important;
	border-bottom-right-radius: 0 !important;
	border-bottom-left-radius: 0 !important;
}

</style>
<?= $this->endSection('style'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">
				<div class="page-title-icon">
					<i class="pe-7s-notebook icon-gradient bg-strong-bliss"></i>
				</div>
				<div>
					<?= lang('Katalog.action.add') ?> <?= lang('Katalog.module') ?> <?=$slug_title?>
					<div class="page-title-subheading"><?= lang('Katalog.form.complete_the_data') ?>.</div>
				</div>
			</div>
			<div class="page-title-actions">
				<?=view('Katalog\Views\section\nav_bread', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => 'Entri'))?>
			</div>
		</div>
	</div>

	<?=view('Katalog\Views\section\nav_add', array('slug' => $slug))?>

	<div class="main-card mb-3 card">
		<div class="card-header">
			<i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?= lang('Katalog.action.add') ?> <?= lang('Katalog.module') ?>
			<div class="btn-actions-pane-right actions-icon-btn">
				<div class="btn btn-group" style="padding-left:0">
					<a href="<?= base_url('katalog/create?slug='.$slug.'&worksheet='.$worksheet.'&marc=0') ?>" class="btn btn-<?=($request->getVar('marc') == 0) ? 'success':'secondary'?>" title=""><i class="fa fa-list"></i> Tampilan Form Sederhana</a>
					<a href="<?= base_url('katalog/create?slug='.$slug.'&worksheet='.$worksheet.'&marc=1') ?>" class="btn btn-<?=($request->getVar('marc') == 1) ? 'success':'secondary'?>" title=""><i class="fa fa-code"></i> Tampilan Form MARC </a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div id="infoMessage"><?= $message ?? ''; ?></div>
			<?= get_message('message'); ?>

			<?=view('Katalog\Views\section\worksheet', array('worksheet'=> $worksheet, 'slug'=> $slug, 'marc'=> $marc, 'action' => base_url('katalog/create')))?>

			<form id="form-app" method="post" action="<?= base_url('katalog/create'); ?>">				
				<input type="hidden" name="slug" value="<?=$slug?>">
				<input type="hidden" name="worksheet" value="<?=$worksheet?>">
				<input type="hidden" id="marc" name="marc" value="<?=$marc?>">
				<input type="hidden" id="id" name="id">

				<?=view('Katalog\Views\section\judul', array('slug' => $slug))?>

				<?= $this->include('Katalog\Views\section\tajuk_pengarang'); ?>
				<?= $this->include('Katalog\Views\section\penerbitan_publikasi'); ?>
				<?=view('Katalog\Views\section\deskripsi_fisik', array('slug' => $slug))?>
				<?= $this->include('Katalog\Views\section\detail_subjek'); ?>
				<?= $this->include('Katalog\Views\section\catatan'); ?>
				<?= $this->include('Katalog\Views\section\rincian'); ?>
				<?= $this->include('Katalog\Views\section\lokasi_koneksi_daring'); ?>
				
				<div class="form-group">
					<label for="opac">Tampil di Opac?</label>
					<div>
						<div class="widget-content p-0">
							<input type="checkbox" class="apply-status-opac" name="opac" data-toggle="toggle" data-onstyle="success" data-on="Ya" data-off="Tidak">
						</div>
					</div>
				</div>
				<br>

				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i> <?= lang('Katalog.action.save') ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<?= $this->endSection('page'); ?>
<?= $this->section('script'); ?>
<?= $this->include('Katalog\Views\add_script'); ?>
<script>
	$('.select2').select2({theme: "bootstrap4",});
	$(".tags").select2({
		allowClear: true,
		tags: true,
		tokenSeparators: [';']
	});
</script>
<?= $this->endSection('script'); ?>