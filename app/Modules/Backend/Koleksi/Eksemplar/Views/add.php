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
                <div><?=lang('Eksemplar.action.add')?> <?=lang('Eksemplar.module')?>
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
                        <li class="active breadcrumb-item" aria-current="page"><?=lang('Eksemplar.action.add')?>
                            <?=lang('Eksemplar.module')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form
            <?=lang('Eksemplar.action.add')?> <?=lang('Eksemplar.module')?>
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if (is_allowed('Eksemplar/create')): ?>
                	<a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);" class=" btn btn-success" title="Pilih katalog"><i class="fa fa-th-list"></i> Pilih Katalog</a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <div id="infoMessage"><?=$message ?? '';?></div>
            <?=get_message('message');?>

            <form id="frm_create" class="col-md-12" method="post" action="<?=base_url('eksemplar/create');?>">
				<?= $this->include('Eksemplar\Views\section\add\judul'); ?>
				<?= $this->include('Eksemplar\Views\section\add\koleksi'); ?>
				<?= $this->include('Eksemplar\Views\section\add\pengadaan'); ?>

                <div class="form-group">
                    <label for="description"><?=lang('Eksemplar.field.description')?> </label>
                    <div>
                        <textarea id="frm_create_description" name="description" placeholder="<?=lang('Eksemplar.field.description')?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?=set_value('description')?></textarea>
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
<<<<<<< HEAD
		$( document ).ready(function() {
		$('#Location_Library').change(function() {
=======
	$( document ).ready(function() {
<<<<<<< HEAD
		$(".btn-generate").click();

		$('#location_library_id').change(function() {
			var id = $(this).val();
			var uriParam = '?Lokasi_perpustakaan_id='+id;
			getDropdown('location_room_id', uriParam, '-Pilih-', false, false);
=======
		$('#Provincy').change(function() {
>>>>>>> 9aaf98bc4a79137eaf029ec78f87f05c45bb9dd4
			var Lokasi_perpustakaan_id = $(this).val();
			var uriParam = '?Lokasi_perpustakaan_id='+Lokasi_perpustakaan_id;
			getDropdown('Location_id', uriParam, 'Pilih', false, false);
>>>>>>> 4e816188edb277cbd06a0c227da92d514b6ccc3f
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

$(".btn-generate").click(function() {
    var exemplar = $('#generate_no').val();
    var index = Date.now();
    var tbody = $(this).data('tbody');

    var prefix_barcode_no = "<?=get_parameter('prefix_barcode_no', 'BRCD')?>";
    var prefix_rfid = "<?=get_parameter('prefix_rfid', 'RFID')?>";

    var barcode_no = "<?=get_barcode_no()?>";
    var register_no = "<?=get_register_no()?>";
    var rfid = "<?=get_rfid()?>";
    var call_no = "";

    $('#' + tbody).empty();
    for (let i = 0; i < exemplar; i++) {
        call_no = rfid;
        $('#' + tbody).append(`
				<tr>
					<td><input name="barcode_no[` + i + `]" type="text" class="form-control barcode" value="` + prefix_barcode_no + '' + pad(barcode_no, 7) + `" readonly></td>
					<td><input name="register_no[` + i + `]" type="text" class="form-control barcode" value="` + register_no + `" readonly></td>
					<td><input name="rfid[` + i + `]" type="text" class="form-control barcode" value="` + prefix_rfid + '' + pad(rfid,7) + `" readonly></td>
					<td><input name="call_no[` + i + `]" type="text" class="form-control barcode" value="` + prefix_rfid + '' +pad(call_no, 7) + `"></td>
				</tr>
			`);

		barcode_no++;
        register_no++;
        rfid++;
    }
});
</script>
<?=$this->endSection('script');?>