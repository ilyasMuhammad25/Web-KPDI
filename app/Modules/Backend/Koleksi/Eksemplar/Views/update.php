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
                <div><?= lang('Eksemplar.action.update') ?> <?= lang('Eksemplar.module') ?>
                    <div class="page-title-subheading"><?= lang('Eksemplar.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>
                                <?= lang('Eksemplar.label.home') ?></a></li>
                        <li class="breadcrumb-item"><a
                                href="<?= base_url('eksemplar') ?>"><?= lang('Eksemplar.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Eksemplar.action.update') ?>
                            <?= lang('Eksemplar.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form
            <?= lang('Eksemplar.action.update') ?> <?= lang('Eksemplar.module') ?>
        </div>
        <div class="card-body">
            <div id="infoMessage"><?= $message ?? ''; ?></div>
            <?= get_message('message'); ?>

            <form id="frm_create" class="col-md-12" method="post" action="<?=base_url('eksemplar/edit');?>">
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
                                <div data-parent="#accordion" id="collapse_madatory4" class="collapse show" style="">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.JudulUtama')?>*</label>
                                                    <div>
                                                        <input type="hidden" name="catalog_id" id="catalog_id" value="">
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name"
                                                            placeholder="<?=lang('Eksemplar.field.JudulUtama')?> "
                                                            readonly />
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.AnakJudul')?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name"
                                                            placeholder="<?=lang('Eksemplar.field.AnakJudul')?> "
                                                            readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="sort">Penanggung Jawab </label>
                                                    <div>
                                                        <input type="text" class="form-control" id="penanggungjawab"
                                                            name="sort" placeholder="<?=lang('Eksemplar.field.sort')?> "
                                                            readonly />

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
                                                    <label for="name"><?=lang('Eksemplar.field.Edisiserial')?></label>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            id="frm_create_EDISISERIAL" name="EDISISERIAL"
                                                            placeholder="<?=lang('Eksemplar.field.Edisiserial')?> "
                                                            value='<?=set_value('EDISISERIAL', '')?>' />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?=lang('Eksemplar.field.Edisiserial')?></small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.Tanggalserial')?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name" value='<?=set_value('Tanggalserial', '')?>'
                                                            placeholder="<?=lang('Eksemplar.field.Tanggalserial')?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?=lang('Eksemplar.field.name')?></small> -->
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.Bahansertaan')?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="Bahan_Sertaan"
                                                            value='<?=set_value('Bahan_Sertaan', '')?>'
                                                            placeholder="<?=lang('Eksemplar.field.Bahansertaan')?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?=lang('Eksemplar.field.name')?></small> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label
                                                        for="sort"><?=lang('Eksemplar.field.Keteranganlain')?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_sort"
                                                            name="sort"
                                                            placeholder="<?=lang('Eksemplar.field.Keteranganlain')?> " />

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

                                        <div class="form-row">
                                            <div class="col-md-3">
                                                <div class="position-relative form-group">
                                                    <strong> <label
                                                            for="name"><?=lang('Eksemplar.field.Barcode')?></label></strong>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name"
                                                            value="<?= set_value('Nomorbarcode',$eksemplar->NomorBarcode); ?>"
                                                            placeholder="<?=lang('Eksemplar.field.Barcode')?> "
                                                            readonly />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="position-relative form-group">
                                                    <strong> <label
                                                            for="name"><?=lang('Eksemplar.field.induk')?></label></strong>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name"
                                                            value="<?= set_value('NoInduk',$eksemplar->NoInduk); ?>"
                                                            placeholder="<?=lang('Eksemplar.field.AnakJudul')?> "
                                                            readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="position-relative form-group">
                                                    <strong> <label
                                                            for="name"><?=lang('Eksemplar.field.RFID')?></label></strong>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="name"
                                                            value="<?= set_value('RFID',$eksemplar->RFID); ?>"
                                                            placeholder="<?=lang('Eksemplar.field.RFID')?> " readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="position-relative form-group">
                                                    <strong> <label for="sort"><?=lang('Eksemplar.field.CallNumber')?>
                                                        </label></strong>
                                                    <div>
                                                        <input type="text" class="form-control" id="penanggungjawab"
                                                            name="sort"
                                                            value="<?= set_value('CallNumber',$eksemplar->CallNumber); ?>"
                                                            placeholder="<?=lang('Eksemplar.field.CallNumber')?> "
                                                            readonly />

                                                    </div>
                                                </div>


                                            </div>
                                        </div>



                                        <!-- end -->

                                        <div class="form-row">

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.Jenissumber')?>*</label>
                                                    <div>
                                                        <select class="form-control" name="ref_source" id="ref_source"
                                                            tabindex="-1" aria-hidden="true"
                                                            placeholder="<?=lang('Eksemplar.field.Jenissumber')?>">
                                                            <option value="1" selected>
                                                                <?=lang('Eksemplar.field.Jenissumber')?></option>
                                                            <?php foreach ($ref_source as $row): ?>
                                                            <option value="<?= $row->id ?>"
                                                                <?=($row->id == $eksemplar->ref_source) ? 'selected':''?>>
                                                                <?= $row->name ?>
                                                            </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.Namasumber')?></label>
                                                    <div>
                                                        <select class="form-control" name="ref_partner" id="ref_partner"
                                                            tabindex="-1" aria-hidden="true"
                                                            placeholder="<?=lang('Eksemplar.field.Namasumber')?>">
                                                            <option value="1" selected>
                                                                <?=lang('Eksemplar.field.Namasumber')?></option>
                                                            <?php foreach ($ref_partner as $row): ?>
                                                                  <option value="<?= $row->id ?>"
                                                                <?=($row->id == $eksemplar->ref_partner) ? 'selected':''?>>
                                                                <?= $row->name ?>
                                                            </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.Bentukmedia')?></label>
                                                    <div>
                                                        <select class="form-control" name="ref_media" id="ref_media"
                                                            tabindex="-1" aria-hidden="true"
                                                            placeholder="<?=lang('Eksemplar.field.Bentukmedia')?>">
                                                            <option value="1" selected>
                                                                <?=lang('Eksemplar.field.Bentukmedia')?></option>
                                                            <?php foreach ($ref_media as $row): ?>
                                                                  <option value="<?= $row->id ?>"
                                                                <?=($row->id == $eksemplar->ref_media) ? 'selected':''?>>
                                                                <?= $row->name ?>
                                                            </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.Akses')?></label>
                                                    <div>
                                                        <select class="form-control" name="ref_status" id="ref_status"
                                                            tabindex="-1" aria-hidden="true"
                                                            placeholder="<?=lang('Eksemplar.field.Akses')?>">
                                                            <option value="1" selected>
                                                                <?=lang('Eksemplar.field.Akses')?></option>
                                                            <?php foreach ($ref_status as $row): ?>
                                                                  <option value="<?= $row->id ?>"
                                                                <?=($row->id == $eksemplar->ref_status) ? 'selected':''?>>
                                                                <?= $row->name ?>
                                                            </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label
                                                        for="name"><?=lang('Eksemplar.field.lokasiperpustakaan')?></label>
                                                    <div>
                                                        <input type="number" class="form-control" id="frm_create_name"
                                                            name="Location_Library_id"
                                                            placeholder="<?=lang('Eksemplar.field.lokasiperpustakaan')?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?=lang('Eksemplar.field.name')?></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.lokasiruang')?></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="frm_create_name"
                                                            name="Location_id"
                                                            placeholder="<?=lang('Eksemplar.field.lokasiruang')?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?=lang('Eksemplar.field.name')?></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.Ketersediaan')?></label>
                                                    <select class="form-control" name="ref_currency" id="ref_currency"
                                                        tabindex="-1" aria-hidden="true"
                                                        placeholder="<?=lang('Eksemplar.field.currency')?>">
                                                        <option value="1" selected>
                                                            <?=lang('Eksemplar.field.Currency')?></option>
                                                        <?php foreach ($ref_currency as $row): ?>
                                                        <option value="<?=$row->id?>"><?=$row->name?>
                                                        </option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="name"><?=lang('Eksemplar.field.Currency')?></label>
                                                    <select class="form-control" name="ref_currency" id="ref_currency"
                                                        tabindex="-1" aria-hidden="true"
                                                        placeholder="<?=lang('Eksemplar.field.currency')?>">
                                                        <option value="1" selected>
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
                                                    <label for="name"><?=lang('Eksemplar.field.Price')?></label>
                                                    <div>
                                                        <input type="number" class="form-control" id="frm_create_name"
                                                            name="Price" value="0"
                                                            placeholder="<?=lang('Eksemplar.field.Price')?> " />
                                                        <!-- <small
                                                            class="info help-block text-muted"><?=lang('Eksemplar.field.name')?></small> -->
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
                    <label for="description"><?=lang('Eksemplar.field.description')?> </label>
                    <div>
                        <textarea id="frm_create_description" name="description"
                            placeholder="<?=lang('Eksemplar.field.description')?> " rows="2"
                            class="form-control autosize-input"
                            style="min-height: 38px;"><?=set_value('description')?></textarea>
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


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->endSection('script'); ?>