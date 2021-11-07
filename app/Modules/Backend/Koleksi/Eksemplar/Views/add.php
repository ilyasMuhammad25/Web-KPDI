<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('t_catalog');
$katalogs = $baseModel
    ->find_all('name', 'asc');
    // dd($katalog);
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
                	<a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);" class=" btn btn-success" title="Pilih katalog"><i class="fa fa-book"></i> Pilih Katalog</a>
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
                    <button type="submit" class="btn btn-primary"
                        name="submit"><?=lang('Eksemplar.action.save')?></button>
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
		$('#Provincy').change(function() {
			var Lokasi_perpustakaan_id = $(this).val();
			var uriParam = '?Lokasi_perpustakaan_id='+Lokasi_perpustakaan_id;
			getDropdown('City', uriParam, 'Pilih', false, false);
		});
	});
</script>

<script>
$('.select2').select2();
$(".btn-pilih").click(function() {
    var id = $(this).data('id');
    var judul = $(this).data('judul');
    var penanggungjawab = $(this).data('penanggungjawab');

    $('#frm_create_name').val(judul);
    $('#penanggungjawab').val(penanggungjawab);
    $('#catalog_id').val(id);

    $('#modal_create').modal('hide');
});

$(".btn-generate").click(function() {
    var exemplar = $('#jml_eksemplar').val();
    var index = Date.now();
    var tbody = $(this).data('tbody');

    var prefix_no_barcode = "<?=get_parameter('prefix_no_barcode', 'BRCD')?>";
    var prefix_rfid = "<?=get_parameter('prefix_rfid', 'RFID')?>";

    var no_barcode = "<?=BarcodeNumber_helper()?>";
    var no_induk = "<?=NoInduk_helper()?>";
    var rfid = "<?=RFID_helper()?>";
    var no_panggil = "";

    $('#' + tbody).empty();
    for (let i = 0; i < exemplar; i++) {
        no_panggil = rfid;
        $('#' + tbody).append(`
				<tr>
					<td><input name="no_barcode[` + i + `]" type="text" class="form-control barcode" value="` + prefix_no_barcode + '' + pad(no_barcode, 7) + `" readonly></td>
					<td><input name="no_induk[` + i + `]" type="text" class="form-control barcode" value="` + no_induk + `" readonly></td>
					<td><input name="rfid[` + i + `]" type="text" class="form-control barcode" value="` + prefix_rfid + '' + pad(rfid,7) + `" readonly></td>
					<td><input name="no_panggil[` + i + `]" type="text" class="form-control barcode" value="` + prefix_rfid + '' +pad(no_panggil, 7) + `"></td>
				</tr>
			`);

        no_barcode++;
        no_induk++;
        rfid++;
    }
});
</script>
<?=$this->endSection('script');?>