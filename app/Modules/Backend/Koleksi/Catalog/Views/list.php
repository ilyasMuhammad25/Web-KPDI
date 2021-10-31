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
					<?= lang('Catalog.module') ?> 
					<div class="page-title-subheading"><?= lang('Catalog.info.list_all') ?>  <?= lang('Catalog.module') ?> </div>
				</div>
			</div>
			<div class="page-title-actions">
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Catalog') ?>"><i class="fa fa-home"></i> <?= lang('Catalog.label.home') ?></a></li>
						<li class="active breadcrumb-item" aria-current="page"><?= lang('Catalog.module') ?> </li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<div class="main-card mb-3 card">
		<div class="card-header">
			<i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('Catalog.label.table') ?> <?= lang('Catalog.module') ?> 
			<div class="btn-actions-pane-right actions-icon-btn">
				<?php if(is_allowed('catalog/create')):?>
				<a href="<?= base_url('catalog/create') ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('Catalog.action.add') ?> <?= lang('Catalog.module') ?> </a>
				<?php endif;?>
			</div>
		</div>
		<div class="card-body table-responsive">
			<?= get_message('message'); ?>
			<table style="width: 100%;" id="tbl_catalogs" class="table table-hover table-striped table-bordered">
				<thead>
					<tr>
						<th><?= lang('Catalog.field.no') ?> </th>
						<th>BIBID</th>
						<th>Judul</th>
						<th>Pengarang</th>
						<th>Penerbitan</th>
						<th><?= lang('Catalog.label.action') ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($catalogs as $row) : ?>
					<tr>
						<td width="35"></td>
						<td width="150">
							<?= _spec($row->BIBID); ?> <br>
						</td>
						<td><?= _spec($row->Title); ?></td>
						<td width="250"><?= _spec($row->Author); ?></td>
						<td width="250"><?= _spec($row->PublishLocation); ?> : <?= _spec($row->Publisher); ?>, <?= _spec($row->PublishYear); ?></td>
						<td width="90">
							<?php if(is_allowed('catalog/read')):?>
							<!-- <a href="<?= base_url('catalog/detail/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Detail Catalog" class="btn btn-info show-data"><i class="pe-7s-note2 font-weight-bold"> </i></a> -->
							<?php endif;?>
							<?php if(is_allowed('catalog/update')):?>
							<a href="<?= base_url('catalog/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah Catalog RDA" class="btn btn-warning show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
							<?php endif;?>
							<?php if(is_allowed('catalog/delete')):?>
							<a href="javascript:void(0);" data-href="<?= base_url('catalog/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Catalog RDA" class="btn btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
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
	setDataTable('#tbl_catalogs', disableOrderCols = [0, 5], defaultOrderCols = [1, 'desc'], autoNumber = true);
	
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