<?php
	$request = \Config\Services::request();
	$request->uri->setSilent();
	$slug = $request->getVar('slug') ?? ' '; //double space
	$slug_title = strtoupper($slug);
	$view = $request->getVar('view') ?? 'is_cart';
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
					<?= lang('Katalog.module') ?> - <?=$view_title?>
					<div class="page-title-subheading"><?= lang('Katalog.info.list_all') ?>  <?= lang('Katalog.module') ?> </div>
				</div>
			</div>
			<div class="page-title-actions">
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('katalog') ?>"><i class="fa fa-home"></i> <?= lang('Katalog.label.home') ?></a></li>
						<li class="breadcrumb-item" aria-current="page"><?= lang('Katalog.module') ?> </li>
						<li class="active breadcrumb-item" aria-current="page"> <?=$view_title?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>

	<?=view('Katalog\Views\section\nav_list', array('slug' => $slug, 'view' => $view))?>

	<div class="main-card mb-3 card">
		<div class="card-header">
			<i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('Katalog.label.table') ?> <?= lang('Katalog.module') ?> 
			<div class="btn-actions-pane-right actions-icon-btn">

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
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($katalogs as $row) : ?>
					<tr>
						<td width="35"></td>
						<td width="150">
							<?= _spec($row->BIBID); ?> <br>
						</td>
						<td><?= _spec($row->Title); ?></td>
						<td width="250"><?= _spec($row->Author); ?></td>
						<td width="250"><?= _spec($row->PublishLocation); ?> : <?= _spec($row->Publisher); ?>, <?= _spec($row->PublishYear); ?></td>
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
	setDataTable('#tbl_katalogs', disableOrderCols = [0, 5], defaultOrderCols = [0, 'asc'], autoNumber = true);
	
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