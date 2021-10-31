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
                <div><?= lang('Eksemplar.module') ?>
                    <div class="page-title-subheading"><?= lang('Eksemplar.info.list_all') ?>
                        <?= lang('Eksemplar.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('eksemplar') ?>"><i class="fa fa-home"></i>
                                <?= lang('Eksemplar.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Eksemplar.module') ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate">
            </i><?= lang('Eksemplar.label.table') ?> <?= lang('Eksemplar.module') ?>
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('eksemplar/create')):?>
                <a href="<?= base_url('eksemplar/create') ?>" class=" btn btn-success" title=""><i
                        class="fa fa-plus"></i> <?= lang('Eksemplar.action.add') ?> <?= lang('Eksemplar.module') ?> </a>
                <?php endif;?>
            </div>
        </div>
        <div class="container">
        <table id="subTable" style="width:100%">
           
        </table>
                </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_eksemplars" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('Eksemplar.field.no') ?> </th>
                        <th><input type="checkbox" name="checkAll" id="checkAll"></th>
                        <th><?= lang('Eksemplar.field.Barcode') ?></th>
                        <th><?= lang('Eksemplar.field.Tanggalpengadaan') ?></th>
                        <th><?= lang('Eksemplar.field.induk') ?></th>
                        <th><?= lang('Eksemplar.field.bibliografis') ?></th>
                        <th><?= lang('Eksemplar.field.active') ?></th>
                        <th><?= lang('Eksemplar.field.created_by') ?></th>

                        <th><?= lang('Eksemplar.label.action') ?></th>
                        <th>Proses</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; foreach ($eksemplars as $row) : ?>
                    <tr>
                        <td width="35"><?= $i++; ?></td>
                        <td><input type="checkbox" name="checkItem[]" id="checkItem" value="<?= $row->id ?>"></td>
                        <td width="200">
                            <?= _spec($row->NomorBarcode); ?> <br>
                        </td>
                        <td width="200">
                            <?= _spec($row->TanggalPengadaan); ?> <br>
                        </td>
                        <td width="200">
                            <?= _spec($row->NoInduk); ?> <br>
                        </td>
                        <td width="200">

                        </td>

                        <td width="50">
                            <input type="checkbox" class="apply-status"
                                data-href="<?= base_url('eksemplar/apply_status'); ?>" data-field="active"
                                data-id="<?=$row->id?>" <?= ($row->active == 1) ? 'checked' : '' ?> data-toggle="toggle"
                                data-onstyle="success">
                        </td>
                        <td width="100">
                            <span class="badge badge-info"><?= _spec($row->created_at); ?></span><br>
                            <span class="badge badge-info"><?= _spec($row->created_name); ?></span>
                        </td>
                        <td width="100">
                            <!-- Example split danger button -->
                            <div class="btn-group dropleft">
                                <button type="button" class="btn btn-danger">Proeses</button>
                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item btn-pilih" href="#">Cetak Label</a>
                                    <a href="<?=base_url('eksemplar/cetakLabel/' . $row->id);?>" data-toggle="tooltip" data-placement="top" title="Cetak Kartu" class="btn btn-lg btn-primary" ><i class="fa fa-print"></i>label</a>
                                    <a class="dropdown-item" href="#">Tampil di Opac</a>

                                    <!-- <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div> -->
                                </div>
                        </td>
                        <td width="35">
                            <?php if(is_allowed('eksemplar/read')):?>
                            <!-- <a href="<?= base_url('eksemplar/detail/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Detail Eksemplar" class="btn btn-xs btn-info show-data"><i class="pe-7s-note2 font-weight-bold"> </i></a> -->
                            <?php endif;?>
                            <?php if(is_allowed('eksemplar/update')):?>
                            <a href="<?= base_url('eksemplar/edit/' . $row->id) ?>" data-toggle="tooltip"
                                data-placement="top" title="Ubah Eksemplar"
                                class="btn btn-xs btn-warning mb-1 show-data"><i class="pe-7s-note font-weight-bold">
                                </i></a>
                            <?php endif;?>
                            <?php if(is_allowed('eksemplar/delete')):?>
                            <a href="javascript:void(0);" data-href="<?= base_url('eksemplar/delete/' . $row->id); ?>"
                                data-toggle="tooltip" data-placement="top" title="Hapus  rud"
                                class="btn btn-xs btn-danger remove-data"><i class="pe-7s-trash font-weight-bold">
                                </i></a>
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
    $(".btn-pilih").click(function() {
  

    $("#subTable").append(` <tbody>
                <tr>
                    <td>Piih sumber No. Panggil</td>
                    <td>
                        <div class="input-group">
                            <label class="radio-inline">
                                <input type="radio" name="optradio" id="katalog" value="Katalog" checked>Katalog
                            </label>
                            <label class="radio-inline" style="margin-left: 10px;">
                                <input type="radio" name="optradio" id="koleksi" value="collections">Koleksi
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pilih ukuran kertas</td>
                    <td>
                        <select class="form-control" id="ukuranKertas" name="ukuranKertas">
                            // <option value="label-roll">
                                // Kertas Label Roll
                                // </option>
                            <option value="a4">
                                Kertas A4
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Piih model</td>
                    <td>
                        <div id="label-model">
                            <select class="form-control" id="model_kertas" name="model_kertas">
                                <option value="a4-1">
                                    Model A4-1 (No. Panggil + Barcode)
                                </option>
                                <option value="a4-2">
                                    Model A4-2 (No. Panggil + Barcode)
                                </option>
                                <option value="a4-3">
                                    Model A4-3 (No. Panggil + Barcode + 1 Warna)
                                </option>
                                <option value="a4-4">
                                    Model A4-4 (No. Panggil + Barcode + 1 Warna)
                                </option>
                                <option value="a4-5">
                                    Model A4-5 (No. Panggil + Barcode)
                                </option>
                                // <option value="a4-6">
                                    // Model A4-6 (No. Panggil + Barcode)
                                    // </option>

                                </option>
                            </select>
                        </div>
                    </td>
                <tr>
                    <td>Piih format dokumen</td>
                    <td>
                        <select class="form-control" id="format_dokumen" name="format_dokumen">
                            <option value="pdf">
                                Portable Document Format (Pdf)
                            </option>
                        </select>
                    </td>
                </tr> `) ;


});
</script>
<script>
setDataTable('#tbl_eksemplars', disableOrderCols = [0, 7], defaultOrderCols = [6, 'desc'], autoNumber = true);
$('.dropdown-toggle').dropdown();
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