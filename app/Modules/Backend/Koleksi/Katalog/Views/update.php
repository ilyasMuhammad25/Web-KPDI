<?php
	$request = \Config\Services::request();
	$request->uri->setSilent();
	$worksheet = $request->getVar('worksheet') ?? $catalog->worksheet_id;
	$marc = $request->getVar('marc') ?? '0';
	$slug = $request->getVar('slug') ?? 'rda';
	$slug_title = strtoupper($slug);
?>

<?= $this->extend(config('Core')->layout_backend); ?>
<?= $this->section('style'); ?>
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
					<?= lang('Katalog.action.edit') ?> <?= lang('Katalog.module') ?> <?=$slug_title?>
					<div class="page-title-subheading"><?= lang('Katalog.form.complete_the_data') ?>.</div>
				</div>
			</div>
			<div class="page-title-actions">
				<?=view('Katalog\Views\section\nav_bread', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => 'Ubah'))?>
			</div>
		</div>
	</div>

	<div class="main-card mb-3 card">
		<div class="card-header">
			<i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?= lang('Katalog.action.edit') ?> <?= lang('Katalog.module') ?>
			<div class="btn-actions-pane-right actions-icon-btn">
				<div class="btn btn-group" style="padding-left:0">
				</div>
			</div>
		</div>
		<div class="card-body">
			<div id="infoMessage"><?= $message ?? ''; ?></div>
			<?= get_message('message'); ?>

			<?=view('Katalog\Views\section\worksheet', array('worksheet'=> $worksheet, 'slug'=> $slug, 'marc'=> $marc, 'action' => base_url('katalog/edit/'.$catalog->id)))?>

			<form id="form-app" method="post" action="<?= base_url('katalog/edit/'.$catalog->id); ?>">				
				<input type="hidden" name="slug" value="<?=$slug?>">
				<input type="hidden" name="worksheet" value="<?=$worksheet?>">
				<input type="hidden" id="marc" name="marc" value="<?=$marc?>">
				<input type="hidden" id="id" name="id">

				<?=view('Katalog\Views\section\edit\judul', array('slug' => $slug))?>
				<?=view('Katalog\Views\section\edit\tajuk_pengarang', array('slug' => $slug))?>
				<?=view('Katalog\Views\section\edit\penerbitan_publikasi', array('slug' => $slug))?>
				<?=view('Katalog\Views\section\edit\deskripsi_fisik', array('slug' => $slug))?>
				<?=view('Katalog\Views\section\edit\subjek', array('slug' => $slug))?>
				<?=view('Katalog\Views\section\edit\catatan', array('slug' => $slug))?>
				<?=view('Katalog\Views\section\edit\rincian', array('slug' => $slug))?>
				<?=view('Katalog\Views\section\edit\lokasi_daring', array('slug' => $slug))?>

				<div>
					<input type="hidden" class="iCheck-square" name="is_opac" id="is_opac" value="0">
					<input type="checkbox" class="iCheck-square" name="is_opac" id="is_opac" value="1">
					<label class="control-label">&nbsp; Tampil di OPAC</label>
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
<?= $this->include('Katalog\Views\section\edit\judul_script'); ?>
<?= $this->include('Katalog\Views\section\edit\tajuk_pengarang_script'); ?>
<?= $this->include('Katalog\Views\section\edit\subjek_script'); ?>
<?= $this->include('Katalog\Views\section\edit\lokasi_daring_script'); ?>
<?= $this->include('Katalog\Views\section\edit\catatan_script'); ?>
<script>
	$('.select2').select2({theme: "bootstrap4",});
	$(".tags").select2({
		allowClear: true,
		tags: true,
		tokenSeparators: [';']
	});
</script>
<?= $this->endSection('script'); ?>