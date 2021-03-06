<?php
	$request = \Config\Services::request();
	$request->uri->setSilent();
	$slug = $request->getVar('slug') ?? '';
	$slug_title = strtoupper($slug);
	$view = $request->getVar('view') ?? '';
	$view_title = strtoupper($view);

	if($view == 'is_cart'){
		$view_title = 'Keranjang';
	}

	if($view == 'is_quarantine'){
		$view_title = 'Karantina';
	}
?>

<?= $this->extend(config('Core')->layout_backend); ?>
<?= $this->section('style'); ?>
<style>

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
					<?= lang('Katalog.module') ?> 
					<div class="page-title-subheading"><?= lang('Katalog.info.list_all') ?>  <?= lang('Katalog.module') ?> </div>
				</div>
			</div>
			<div class="page-title-actions">
				<?=view('Katalog\Views\section\nav_bread', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => 'Daftar'))?>
			</div>
		</div>
	</div>

	<?=view('Katalog\Views\section\nav_list', array('slug' => $slug, 'view' => $view))?>

	<div class="main-card mb-3 card">
		<div class="card-header">
			<i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('Katalog.label.table') ?> <?= lang('Katalog.module') ?> 
			<div class="btn-actions-pane-right actions-icon-btn">
				<?php if(!empty($slug)):?>
					<?php if(is_allowed('katalog/create')):?>
						<a href="<?= base_url('katalog/create?slug='.$slug) ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('Katalog.action.add') ?> <?= lang('Katalog.module') ?> <?=$slug_title?></a>
					<?php endif;?>
				<?php endif;?>
			</div>
		</div>
		<div class="card-body table-responsive">
			<?= get_message('message'); ?>
			<table style="width: 100%;" id="tbl_katalogs" class="table table-hover table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						<th>BIBID</th>
						<th>Judul</th>
						<th>Pengarang</th>
						<th>Penerbitan</th>
						<th>Karantina</th>
						<th>Keranjang</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($katalogs as $row) : ?>
					<tr>
						<td width="35"></td>
						<td width="150">
							<?= _spec($row->bibid); ?> <br>
						</td>
						<td><?= _spec($row->title); ?></td>
						<td width="250"><?= _spec($row->author); ?></td>
						<td width="250"><?= _spec($row->publish_location); ?> : <?= _spec($row->publisher); ?>, <?= _spec($row->publish_year); ?></td>
						<td width="50">
							<input type="checkbox" class="apply-status" data-href="<?= base_url('katalog/apply_status'); ?>" data-field="is_quarantine" data-id="<?=$row->id?>" <?= ($row->is_quarantine == 1) ? 'checked' : '' ?> data-toggle="toggle" data-onstyle="success">
						</td>
						<td width="50">
							<input type="checkbox" class="apply-status" data-href="<?= base_url('katalog/apply_status'); ?>" data-field="is_cart" data-id="<?=$row->id?>" <?= ($row->is_cart == 1) ? 'checked' : '' ?> data-toggle="toggle" data-onstyle="success">
						</td>
						<td width="95">
							<?php if(is_allowed('katalog/update')):?>
								<a href="<?= base_url('katalog/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah Katalog" class="btn btn-warning show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
							<?php endif;?>

							<?php if(is_allowed('katalog/delete')):?>
								<a href="javascript:void(0);" data-href="<?= base_url('katalog/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Katalog" class="btn btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
							<?php endif;?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?= $this->endSection('page'); ?>
<?= $this->section('script'); ?>
<script>
	setDataTable('#tbl_katalogs', disableOrderCols = [0, 7], defaultOrderCols = [0, 'asc'], autoNumber = true);
	
	$("body").on("click", ".remove-data", function() {
	    var url = $(this).attr('data-href');
	    Swal.fire({
	        title: '<?= lang('App.swal.are_you_sure') ?>',
	        text: "<?= lang('App.swal.can_not_be_restored') ?>",
	        type: 'warning',
	        showCancelButton: true,
	        confirmButtonColor: '#3085d6',
	        cancelButtonColor: '#dd6b55',
	        confirmButtonText: '<?= lang('App.btn.yes') ?>',
	        cancelButtonText: '<?= lang('App.btn.no') ?>'
	    }).then((result) => {
	        if (result.value) {
	            window.location.href = url;
	        }
	    });
	    return false;
	});
</script>
<?= $this->endSection('script'); ?>