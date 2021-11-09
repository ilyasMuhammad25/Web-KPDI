<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$katalogModel = new \Katalog\Models\KatalogModel();
$katalogs = $katalogModel->orderBy('title','asc')->get()->getResult();
?>

<?=$this->extend(config('Core')->layout_backend);?>
<?=$this->section('style');?>
<?=$this->endSection('style');?>

<?=$this->section('page');?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-albums icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?=lang('Eksemplar.action.edit')?> <?=lang('Eksemplar.module')?>
                    <div class="page-title-subheading"><?=lang('Eksemplar.form.complete_the_data')?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>"><i class="fa fa-home"></i>
                                Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="<?=base_url('eksemplar')?>"><?=lang('Eksemplar.module')?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?=lang('Eksemplar.action.edit')?>
                            <?=lang('Eksemplar.module')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-pencil icon-gradient bg-plum-plate"> </i> Form
            <?=lang('Eksemplar.action.edit')?> <?=lang('Eksemplar.module')?>
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if (is_allowed('Eksemplar/create')): ?>
                	<a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);" class=" btn btn-success" title="Pilih katalog"><i class="fa fa-th-list"></i> Pilih Katalog</a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <div id="infoMessage"><?=$message ?? '';?></div>
            <?=get_message('message');?>

            <form id="frm_edit" method="post" action="<?=base_url('eksemplar/edit/'.$eksemplar->id);?>">
				<?= $this->include('Eksemplar\Views\section\update\judul'); ?>
				<?= $this->include('Eksemplar\Views\section\update\koleksi'); ?>
				<?= $this->include('Eksemplar\Views\section\update\pengadaan'); ?>

                <div class="form-group">
                    <label for="description"><?=lang('Eksemplar.field.description')?> </label>
                    <div>
                        <textarea name="description" placeholder="<?=lang('Eksemplar.field.description')?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?=set_value('description',$eksemplar->description)?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit"><?=lang('Eksemplar.action.save')?></button>
                </div>
            </form>
        </div>
    </div>
</div>




<?=$this->endSection('page');?>

<?=$this->section('script');?>

<?=$this->include('Eksemplar\Views\katalog_modal');?>

<script>
	$( document ).ready(function() {
		$(".btn-generate").click();

		$('#location_library_id').change(function() {
			var id = $(this).val();
			var uriParam = '?Lokasi_perpustakaan_id='+id;
			getDropdown('location_room_id', uriParam, '-Pilih-', false, false);
		});
	});
</script>

<script>
$('.select2').select2({theme: "bootstrap4",});

$("body").on("click", ".select-data", function() {
	var catalog_id = $(this).data('catalog_id');
    var title_arr = $(this).data('title').split(';');

	$('#catalog_id').val(catalog_id);
	$('#title').val(title_arr[0]);
	$('#title2').val(title_arr[1]);
	$('#title3').val(title_arr[2]);

	$('#modal_create').modal('hide');
	return false;
});
</script>
<?=$this->endSection('script');?>