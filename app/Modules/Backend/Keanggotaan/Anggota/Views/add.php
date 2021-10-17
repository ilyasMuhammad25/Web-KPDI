<?php
$request = \Config\Services::request();
$request->uri->setSilent();

  
$field_to_show=array('field1,field2,field3,field4,field5');
$display='block';
?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main';?>
<?=$this->extend($layout);?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>


<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?= lang('Anggota.action.update') ?> <?= lang('Anggota.module') ?>
                    <div class="page-title-subheading"><?= lang('Anggota.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>"><i class="fa fa-home"></i> <?=lang('Anggota.label.home')?></a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('anggota')?>"><?=lang('Anggota.module')?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?=lang('Anggota.action.update')?> <?=lang('Anggota.module')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
		<div class="card-header-tab card-header">
			<div class="card-header-title">
				<i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i>
				Tambah Anggota
			</div>
		</div>
		<div class="card-body">
				<div id="infoMessage"><?=$message ?? '';?></div>
				<?=get_message('message');?>

				<?= $this->include("Anggota\Views\section\personal"); ?>

		</div>
    </div>
</div>

<?=$this->endSection('page');?>

<?=$this->section('script');?>
<script>
$('.select2').select2();
</script>
<script> 
    Dropzone.autoDiscover = false;
	var checkboxes = $('#is_similar');

	checkboxes.on('ifChanged', function(event){
		if(checkboxes.filter(':checked').length == checkboxes.length) {
			$('#AddressNow').val($('#Address').val());
		} else {
			alert('uncheck');
		}
	});

	var file_template = setDropzone('dropzone_file_image', 'anggota', '.jpg,.jpeg,.png', 1, 10);
</script>
<script>
		$( document ).ready(function() {
		$('#Provincy').change(function() {
			var propinsi_id = $(this).val();
			var uriParam = '?propinsi_id='+propinsi_id;
			getDropdown('City', uriParam, 'Pilih', false, false);
		});
	});
</script>
<?=$this->endSection('script');?>
