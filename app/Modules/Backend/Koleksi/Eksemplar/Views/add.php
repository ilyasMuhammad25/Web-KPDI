<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main'; ?>
<?= $this->extend($layout); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>


<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?= lang('Eksemplar.action.add') ?> <?= lang('Eksemplar.module') ?>
                    <div class="page-title-subheading"><?= lang('Eksemplar.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>
                                Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="<?= base_url('eksemplar') ?>"><?= lang('Eksemplar.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Eksemplar.action.add') ?>
                            <?= lang('Eksemplar.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form
            <?= lang('Eksemplar.action.add') ?> <?= lang('Eksemplar.module') ?>
        </div>
        <div class="card-body">
            <div id="infoMessage"><?= $message ?? ''; ?></div>
            <?= get_message('message'); ?>

            <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('eksemplar/create'); ?>">
                <div class="form-row">

                </div>
                <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('Eksemplar/create')):?>
                    <a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);" class=" btn btn-success" title="Pilih katalog"><i class="fa fa-book"></i> Pilih Katalog</a>
                <?php endif;?>
            </div>
                <!-- judul  -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion" class="accordion-wrapper mb-3">
                            <div class="card">
                                <div class="card-header-tab card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapse_madatory4"
                                        aria-expanded="true" aria-controls="collapse_madatory"
                                        class="text-left m-0 p-0 btn btn-link">
                                        <h5 class="m-0 p-0">
                                            <i class="header-icon lnr-layers icon-gradient bg-primary">
                                            </i>
                                            Judul
                                        </h5>
                                    </button>
                                </div>
                                <div data-parent="#accordion" id="collapse_madatory4" class="collapse" style="">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-10">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.JudulUtama') ?>*</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name"
                                                            placeholder="<?= lang('Eksemplar.field.JudulUtama') ?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-5">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.AnakJudul') ?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name"
                                                            placeholder="<?= lang('Eksemplar.field.AnakJudul') ?> " />
                                                        <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="position-relative form-group">
                                                    <label for="sort">Penanggung Jawab </label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_sort"
                                                            name="sort"
                                                            placeholder="<?= lang('Eksemplar.field.sort') ?> " />

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edisi koleksi -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion" class="accordion-wrapper mb-3">
                            <div class="card">
                                <div class="card-header-tab card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapse_madatory2"
                                        aria-expanded="true" aria-controls="collapse_madatory"
                                        class="text-left m-0 p-0 btn btn-link">
                                        <h5 class="m-0 p-0">
                                            <i class="header-icon lnr-layers icon-gradient bg-primary">
                                            </i>
                                            Cardex(Edisi Serial)
                                        </h5>
                                    </button>
                                </div>
                                <div data-parent="#accordion" id="collapse_madatory2" class="collapse" style="">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.Edisiserial') ?></label>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            id="frm_create_EDISISERIAL" name="EDISISERIAL"
                                                            placeholder="<?= lang('Eksemplar.field.Edisiserial') ?> "
                                                            value='<?= set_value('EDISISERIAL', '') ?>' required />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.Edisiserial') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label
                                                        for="name"><?= lang('Eksemplar.field.Tanggalserial') ?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name" value='<?= set_value('Tanggalserial', '') ?>'
                                                            placeholder="<?= lang('Eksemplar.field.Tanggalserial') ?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label
                                                        for="name"><?= lang('Eksemplar.field.Bahansertaan') ?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="Bahan_Sertaan"
                                                            value='<?= set_value('Bahan_Sertaan', '') ?>'
                                                            placeholder="<?= lang('Eksemplar.field.Bahansertaan') ?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label
                                                        for="sort"><?= lang('Eksemplar.field.Keteranganlain') ?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_sort"
                                                            name="sort"
                                                            placeholder="<?= lang('Eksemplar.field.Keteranganlain') ?> " />

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion" class="accordion-wrapper mb-3">
                            <div class="card">
                                <div class="card-header-tab card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapse_madatory3"
                                        aria-expanded="true" aria-controls="collapse_madatory"
                                        class="text-left m-0 p-0 btn btn-link">
                                        <h5 class="m-0 p-0">
                                            <i class="header-icon lnr-layers icon-gradient bg-primary">
                                            </i>
                                            Data Pengadaan
                                        </h5>
                                    </button>
                                </div>
                                <div data-parent="#accordion" id="collapse_madatory3" class="collapse" style="">
                                    <div class="card-body">
										<div class="col-md-12">
											<div class="form-row">
												<div class="col-md-4">
													<div class="input-group"><input type="number" name="jml_eksemplar" class="form-control" placeholder="Jumlah Eksemplar">
														<div class="input-group-append">
															<button class="btn btn-primary btn-generate" data-tbody="eksemplar-tbody">Generate</button>
														</div>
													</div>
												</div>
											</div>

											<div class="main-card mt-3 mb-3 card car-border">
												<div class="card-body">
													<table style="width: 100%;" id="eksemplar-tbl" class="table table-hover table-striped table-bordered">
														<thead>
															<tr>
																<th width="25%">Barcode</th>
																<th width="25%">Nomor Induk</th>
																<th width="25%">RFID</th>
																<th width="25%">Nomor Panggil</th>
															</tr>
														</thead>
														<tbody id="eksemplar-tbody">
														</tbody>
													</table>
												</div>
											</div>
										</div>

        


                                        <div class="row">
                                            <div class="col-4">
                                                <label for="varchar">Barcode</label>
                                                <input type="text" id="Barcode" class="form-control"
                                                    value="<?= BarcodeNumber_helper(); ?>" disabled>
                                            </div>
                                            <div class="col-4">
                                                <label for="varchar">No. Induk</label>
                                                <input type="text" class="form-control" value="<?= NoInduk_helper(); ?>"
                                                    disabled>
                                            </div>
                                            <div class="col-4">
                                                <label for="varchar">RFID</label>
                                                <input type="text" class="form-control" value="<?= RFID_helper(); ?>"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div id="container"></div>


                                        <!-- end -->

                                        <div class="form-row">

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label
                                                        for="name"><?= lang('Eksemplar.field.Jenissumber') ?>*</label>
                                                    <div>
                                                        <select class="form-control" name="ref_source" id="ref_source"
                                                            tabindex="-1" aria-hidden="true"
                                                            placeholder="<?=lang('Eksemplar.field.Jenissumber')?>">
                                                            <option value="" disabled selected>
                                                                <?=lang('Eksemplar.field.Jenissumber')?></option>
                                                            <?php foreach ($ref_source as $row): ?>
                                                            <option value="<?=$row->id?>"><?=$row->name?>
                                                            </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.Namasumber') ?></label>
                                                    <div>
                                                        <select class="form-control" name="ref_partner" id="ref_partner"
                                                            tabindex="-1" aria-hidden="true"
                                                            placeholder="<?=lang('Eksemplar.field.Namasumber')?>">
                                                            <option value="" disabled selected>
                                                                <?=lang('Eksemplar.field.Namasumber')?></option>
                                                            <?php foreach ($ref_partner as $row): ?>
                                                            <option value="<?=$row->id?>"><?=$row->name?>
                                                            </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.Bentukmedia') ?></label>
                                                    <div>
                                                        <select class="form-control" name="ref_media" id="ref_media"
                                                            tabindex="-1" aria-hidden="true"
                                                            placeholder="<?=lang('Eksemplar.field.Bentukmedia')?>">
                                                            <option value="" disabled selected>
                                                                <?=lang('Eksemplar.field.Bentukmedia')?></option>
                                                            <?php foreach ($ref_media as $row): ?>
                                                            <option value="<?=$row->id?>"><?=$row->name?>
                                                            </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.Akses') ?></label>
                                                    <div>
                                                        <select class="form-control" name="ref_status" id="ref_status"
                                                            tabindex="-1" aria-hidden="true"
                                                            placeholder="<?=lang('Eksemplar.field.Akses')?>">
                                                            <option value="" disabled selected>
                                                                <?=lang('Eksemplar.field.Akses')?></option>
                                                            <?php foreach ($ref_status as $row): ?>
                                                            <option value="<?=$row->id?>"><?=$row->name?>
                                                            </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label
                                                        for="name"><?= lang('Eksemplar.field.lokasiperpustakaan') ?></label>
                                                    <div>
                                                        <input type="number" class="form-control" id="frm_create_name"
                                                            name="Location_Library_id"
                                                            placeholder="<?= lang('Eksemplar.field.lokasiperpustakaan') ?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.lokasiruang') ?></label>
                                                    <div>
                                                        <input type="number" class="form-control" id="frm_create_name"
                                                            name="Location_id"
                                                            placeholder="<?= lang('Eksemplar.field.lokasiruang') ?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label
                                                        for="name"><?= lang('Eksemplar.field.Ketersediaan') ?></label>
                                                    <div>
                                                        <input type="number" class="form-control" id="frm_create_name"
                                                            name="ref_status"
                                                            placeholder="<?= lang('Eksemplar.field.Ketersediaan') ?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.Currency') ?></label>
                                                    <select class="form-control" name="ref_currency" id="ref_currency"
                                                        tabindex="-1" aria-hidden="true"
                                                        placeholder="<?=lang('Eksemplar.field.currency')?>">
                                                        <option value="" disabled selected>
                                                            <?=lang('Eksemplar.field.Currency')?></option>
                                                        <?php foreach ($ref_currency as $row): ?>
                                                        <option value="<?=$row->id?>"><?=$row->name?>
                                                        </option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.Price') ?></label>
                                                    <div>
                                                        <input type="number" class="form-control" id="frm_create_name"
                                                            name="price" <?= set_value('Price') ?>
                                                            placeholder="<?= lang('Eksemplar.field.Price') ?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name">Perjilid/Eksemplar</label>
                                                    <select class="search form-control" id="PriceType" name="PriceType">
                                                        <option value="Per jilid">
                                                            Per Jilid
                                                        </option>
                                                        <option value="Per eksemplar">
                                                            Per Eksemplar
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?= lang('Eksemplar.field.CallNumber') ?></label>
                                                    <div>
                                                        <input type="number" class="form-control" id="frm_create_name"
                                                            name="CallNumber" <?= set_value('CallNumber') ?>
                                                            placeholder="<?= lang('Eksemplar.field.CallNumber') ?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?= lang('Eksemplar.field.name') ?></small> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <input type="hidden" class="iCheck-square" name="IsOPAC" id="IsOPAC"
                                                value="0">
                                            <input type="checkbox" class="iCheck-square" name="IsOPAC" id="IsOPAC"
                                                value="1">
                                            <label class="  control-label">Tampil di OPAC</label>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description"><?= lang('Eksemplar.field.description') ?> </label>
                    <div>
                        <textarea id="frm_create_description" name="description"
                            placeholder="<?= lang('Eksemplar.field.description') ?> " rows="2"
                            class="form-control autosize-input"
                            style="min-height: 38px;"><?= set_value('description') ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"
                        name="submit"><?= lang('Eksemplar.action.save') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->include('Eksemplar\Views\pilihkatalog'); ?>
<script>
	$(".btn-generate").click(function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<tr>
				<td><input name="no_barcode" type="text" class="form-control barcode" value="<?=BarcodeNumber_helper(); ?>" disabled></td>
				<td><input name="no_induk" type="text" class="form-control barcode" value="<?=NoInduk_helper(); ?>" disabled></td>
				<td><input name="rfid" type="text" class="form-control barcode" value="<?=RFID_helper(); ?>" disabled></td>
				<td><input name="no_panggil" type="text" class="form-control barcode" value="" disabled></td>
			</tr>
		`);
	});



$(document).ready(function() {
    // var html = [];       
    var i;
    $('#jml_eksemplar').change(function() {
        var JumEks = $("#jml_eksemplar").val();
        var lastNumber = $("#Barcode").val().match(/(\d+)/);
        var container = document.getElementById("container");

        while (container.hasChildNodes()) {
            container.removeChild(container.firstChild);
        }

        for (i = 1; i < JumEks; i++) {
            // BRCD && RFID
            var sum = Number(lastNumber[0]) + Number(i);
            var str = "" + sum;
            var pad = "00000000000";
            var BRCD = "BRCD" + pad.substring(0, pad.length - str.length) + str;
            var RFID = "RFID" + pad.substring(0, pad.length - str.length) + str;
            // alert("BRCD"+ans);return;
            var d = new Date();
            var n = d.getFullYear();
            var padNoInduk = "00000";
            var noInduk = n + "-" + padNoInduk.substring(0, padNoInduk.length - str.length) + str;

            // Append a node with a random text
            $("#container").append(
                '<div id="form-reapet">' +
                '<div class="form-row">' +
                '<div class="col-4">' +
                '<label for="varchar">Barcode</label>' +
                '<input type="text" class="form-control" value="' + BRCD + '" disabled>' +
                '</div>' +
                '<div class="col-4">' +
                '<label for="varchar">No. Induk</label>' +
                '<input type="text" class="form-control" value="' + noInduk + '" disabled>' +
                '</div>' +
                '<div class="col-4">' +
                '<label for="varchar">RFID</label>' +
                '<input type="text" class="form-control" value="' + RFID + '" disabled>' +
                '</div>' +
                '</div>' +
                '</div>'
            );
        }
    });

    // $(document).on('click', '.remove-judul',function() {
    //     var button_id = $(this).attr('id');
    //     // alert("$('#tajuk-pengarang'"+button_id+").remove()");        
    //     $('#judul-sebelumnya'+button_id).remove();
    // });
});
</script>
<?= $this->endSection('script'); ?>