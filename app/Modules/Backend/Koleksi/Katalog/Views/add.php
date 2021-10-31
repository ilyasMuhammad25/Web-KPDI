<?php
	$request = \Config\Services::request();
	$request->uri->setSilent();
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
					<?= lang('Katalog.action.add') ?> <?= lang('Katalog.module') ?>
					<div class="page-title-subheading"><?= lang('Katalog.form.complete_the_data') ?>.</div>
				</div>
			</div>
			<div class="page-title-actions">
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('katalog') ?>"><?= lang('Katalog.module') ?></a></li>
						<li class="active breadcrumb-item" aria-current="page"><?= lang('Katalog.action.add') ?> <?= lang('Katalog.module') ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<div class="main-card mb-3 card">
		<div class="card-header">
			<i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?= lang('Katalog.action.add') ?> <?= lang('Katalog.module') ?>
		</div>
		<div class="card-body">
			<div id="infoMessage"><?= $message ?? ''; ?></div>
			<?= get_message('message'); ?>
			<form id="form-app" class="col-md-12 mx-auto" method="post" action="<?= base_url('katalog/create'); ?>">
				<div class="card mb-3">
					<div class="card-header">
						<div class="btn btn-group" style="padding-left:0">
							<button class="btn btn-success">Salin Judul</button>
							<button class="btn btn-info">Salin Katalog</button>
						</div>
						<div class="btn-actions-pane-right actions-icon-btn">
							<?php if(is_allowed('katalog/create')):?>
								<a href="<?= base_url('katalog/create?form=marc') ?>" class=" btn btn-secondary" title=""><i class="fa fa-code"></i> Tampilkan MARC </a>
							<?php endif;?>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-12">
								<div class="position-relative form-group">
									<label for="worksheet">Jenis Bahan</label>
									<div>
										<select name="worksheet" class="form-control select2" id="worksheet" data-placeholder="Pilih Jenis Bahan" style="width:100%;">
											<option></option>
											<?php foreach (get_dropdown('t_worksheets') as $row) :  ?>
											<option value="<?= $row->code ?>"><?= $row->text ?></option>
											<?php endforeach;  ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" class="form-control" id="id" name="id">
					</div>
				</div>

				<?= $this->include('Katalog\Views\section\judul'); ?>
				<?= $this->include('Katalog\Views\section\tajuk_pengarang'); ?>
				<?= $this->include('Katalog\Views\section\penerbitan_publikasi'); ?>
				<?= $this->include('Katalog\Views\section\deskripsi_fisik'); ?>
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
	$('.select2').select2();
	$(".tags").select2({
		allowClear: true,
		tags: true,
		tokenSeparators: [';']
	});
</script>
<?= $this->endSection('script'); ?>