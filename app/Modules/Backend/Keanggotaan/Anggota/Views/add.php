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


<div class="tab-content">
    <!-- Update -->
    <div class="active tab-pane" id="activity">
        <div class="app-main__inner">

            <div class="main-card mb-3 card">
                <div class="card-header">
                    <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form
                    <?= lang('Anggota.action.add') ?> <?= lang('Anggota.module') ?>
                </div>

                <div class="card-body">
                    <div id="infoMessage"><?= $message ?? ''; ?></div>
                    <?= get_message('message'); ?>

                    <!-- Form Field isian anggota -->

                    <form id="frm_create" class="col-md-12 mx-auto" method="post"
                        action="<?= base_url('anggota/create'); ?>">
                        <div class="mb-3 card card-border">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title">
                                    <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                                    Info Personal
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="name"><?= lang('Anggota.field.name') ?>*</label>
                                            <div>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="<?= lang('Anggota.field.name') ?>"
                                                    value="<?= set_value('name'); ?>" />
                                                <!-- <small class="info help-block text-muted"><?= lang('Anggota.field.name') ?></small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label><?= lang('Anggota.field.Jenisidentitas') ?></label>
                                            <select class="form-control" name="ref_identitas" id="ref_identitas"
                                                tabindex="-1" aria-hidden="true"
                                                placeholder="<?= lang('Anggota.field.Jenisidentitas') ?>">
                                                <option value="" disabled selected>
                                                    <?= lang('Anggota.field.Jenisidentitas') ?></option>
                                                <?php foreach ($ref_identitas as $row) : ?>
                                                <option value="<?= $row->id ?>"><?= $row->name ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="name">Nomor Identitas</label>
                                            <div>
                                                <input type="text" class="form-control" id="frm_create_IdentityNo"
                                                    name="IdentityNo" placeholder="Nomor identitas"
                                                    value="<?= set_value('IdentityNo'); ?>" />
                                                <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="name"><?=lang('anggota.field.Tempatlahir')?></label>
                                            <div>
                                                <input type="text" class="form-control" id="frm_create_PlaceOfBirth"
                                                    name="PlaceOfBirth" placeholder="Tempat Lahir"
                                                    value="<?= set_value('PlaceOfBirth'); ?>" />
                                                <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="position-relative form-group" id="tgl1">
                                            <label for="name"><?=lang('Anggota.field.DateOfBirth')?></label>
                                            <div>
                                                <!-- <input class="result" type="text" id="date-time" placeholder="Date Picker..."> -->
                                                <input type="text" class="form-control" id="date-time"
                                                    name="DateOfBirth" placeholder="Tanggal Lahir"
                                                    value="<?= set_value('DateOfBirth'); ?>" />
                                                <span class="input-group-addon"><span
                                                        class="glyphicon-calendar glyphicon"></span></span>
                                                <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label><?=lang('Anggota.field.Statusperkawinan')?></label>
                                            <select class="form-control" name="ref_perkawinan" id="ref_perkawinan"
                                                tabindex="-1" aria-hidden="true">
                                                <?php foreach ($ref_perkawinan as $row) : ?>
                                                <option value="<?= $row->id ?>"><?= $row->name ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label><?=lang('Anggota.field.Agama')?></label>
                                            <select class="form-control" name="ref_agama" id="ref_agama" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="" disabled selected><?= lang('Anggota.field.Agama') ?>
                                                </option>
                                                <?php foreach ($ref_agama as $row) : ?>
                                                <option value="<?= $row->id ?>"><?= $row->name ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label><?= lang('Anggota.field.Jeniskelamin') ?></label>
                                            <select class="form-control" name="ref_jeniskelamin" id="ref_jeniskelamin"
                                                tabindex="-1" aria-hidden="true"
                                                placeholder="<?= lang('Anggota.field.Jeniskelamin') ?>">

                                                <?php foreach ($ref_jeniskelamin as $row) : ?>
                                                <option value="<?= $row->id ?>"><?= $row->name ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h5>Kontak</h5>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="name">No Handphone</label>
                                            <div>
                                                <input type="text" class="form-control" id="frm_create_NoHp" name="NoHp"
                                                    placeholder="Nomor Handphone" value="<?= set_value('NoHp'); ?>" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="name">Email</label>
                                            <div>
                                                <input type="email" class="form-control" id="Email" name="Email"
                                                    placeholder="Email" value="<?= set_value('Email'); ?>" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- info anggota -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="accordion" class="accordion-wrapper mb-3">
                                        <div class="card">
                                            <div class="card-header-tab card-header">
                                                <button type="button" data-toggle="collapse"
                                                    data-target="#collapse_madatory" aria-expanded="true"
                                                    aria-controls="collapse_madatory"
                                                    class="text-left m-0 p-0 btn btn-link">
                                                    <h5 class="m-0 p-0">
                                                        <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                                                        Info Anggota
                                                    </h5>
                                                </button>
                                            </div>
                                            <div data-parent="#accordion" id="collapse_madatory" class="collapse"
                                                style="">


                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">Nomor Anggota</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_MemberNo" name="MemberNo"
                                                                        placeholder="NO anggota"
                                                                        value="<?= set_value('MemberNo'); ?>" />
                                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <div>
                                                                    <label><?=lang('Anggota.field.Jenisanggota')?></label>
                                                                    <select class="form-control" name="ref_jenisanggota"
                                                                        id="ref_jenisanggota" tabindex="-1"
                                                                        aria-hidden="true">
                                                                        <option value="" disabled selected>
                                                                            <?=lang('Anggota.field.Jenisanggota')?>
                                                                        </option>
                                                                        <?php foreach ($ref_jenisanggota as $row) : ?>
                                                                        <option value="<?= $row->id ?>">
                                                                            <?= $row->name ?>
                                                                        </option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label
                                                                    for="name"><?=lang('Anggota.field.Tanggalpendaftaran')?></label>
                                                                <div>
                                                                    <input type="date" class="form-control"
                                                                        id="frm_create_RegisterDate" name="RegisterDate"
                                                                        placeholder="Tempat Lahir"
                                                                        value="<?= set_value('RegisterDate'); ?>" />
                                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label
                                                                    for="name"><?=lang('Anggota.field.Masaberlaku')?></label>
                                                                <div>
                                                                    <input type="date" class="form-control"
                                                                        id="frm_create_DateOfBirth" name="EndDate"
                                                                        placeholder=<?=lang('Anggota.field.Masaberlaku')?>
                                                                        value="<?= set_value('EndDate'); ?>" />
                                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label><?=lang('Anggota.field.Statusanggota')?></label>
                                                                <select class="form-control" name="ref_Statusanggota"
                                                                    id="ref_Statusanggota" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="" disabled selected>
                                                                        <?= lang('Anggota.field.Statusanggota') ?>
                                                                    </option>
                                                                    <?php foreach ($ref_Statusanggota as $row) : ?>
                                                                    <option value="<?= $row->id ?>"> <?= $row->name ?>
                                                                    </option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label
                                                                    for="name"><?= lang('Anggota.field.Biayapendaftaran') ?></label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_BiayaPendaftaran"
                                                                        name="BiayaPendaftaran"
                                                                        placeholder=<?= lang('Anggota.field.Biayapendaftaran') ?>
                                                                        value="<?= set_value('BiayaPendaftaran'); ?>" />

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
                            <!-- end info anggota -->


                            <!-- info alamat -->
                            <div class="row">

                                <div class="col-md-12">
                                    <div id="accordion" class="accordion-wrapper mb-3">
                                        <div class="card">
                                            <div class="card-header-tab card-header">
                                                <button type="button" data-toggle="collapse"
                                                    data-target="#collapse_madatory1" aria-expanded="true"
                                                    aria-controls="collapse_madatory"
                                                    class="text-left m-0 p-0 btn btn-link">
                                                    <h5 class="m-0 p-0">
                                                        <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                                                        Info Alamat
                                                    </h5>
                                                </button>
                                            </div>
                                            <div data-parent="#accordion" id="collapse_madatory1" class="collapse"
                                                style="">


                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <h5>Alamat sesuai identitas</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <div class="position-relative form-group">
                                                                <label for="name">Alamat</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_Address" name="Address"
                                                                        placeholder="Alamat"
                                                                        value="<?= set_value('Address'); ?>" />
                                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label
                                                                    for="name"><?=lang('Anggota.field.provinsi')?></label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_Provincy" name="Provincy"
                                                                        placeholder="<?=lang('Anggota.field.provinsi')?>"
                                                                        value="<?= set_value('Provincy'); ?>" />
                                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label
                                                                    for="name"><?= lang('Anggota.field.city') ?></label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_City" name="City"
                                                                        placeholder="<?= lang('Anggota.field.city') ?>"
                                                                        value="<?= set_value('City'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">Kecamatan</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_kecamatan" name="kecamatan"
                                                                        placeholder="Kecamatan"
                                                                        value="<?= set_value('Kecamatan'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">Kelurahan</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_kelurahan" name="kelurahan"
                                                                        placeholder="Kelurahan"
                                                                        value="<?= set_value('Kelurahan'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">RT</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_RT" name="RT" placeholder="RT"
                                                                        value="<?= set_value('RT'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">RW</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_RW" name="RW" placeholder="RW"
                                                                        value="<?= set_value('RW'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <h5>Alamat domisili</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <input type="checkbox" class="" name="is_tnde" id="is_tnde"
                                                                value="1">
                                                            <label for="req_year">Centang jika alamat domisili sama
                                                                dengan alamat identitas</label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="position-relative form-group">
                                                                <label for="name">Alamat</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_Address" name="Address"
                                                                        placeholder="Alamat"
                                                                        value="<?= set_value('AddressNow');?>" />
                                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label
                                                                    for="name"><?=lang('Anggota.field.provinsi')?></label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_Provincy" name="ProvincyNow"
                                                                        placeholder="<?=lang('Anggota.field.provinsi')?>"
                                                                        value="<?= set_value('ProvincyNow'); ?>" />
                                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label
                                                                    for="name"><?= lang('Anggota.field.city') ?></label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_City" name="CityNow"
                                                                        placeholder="<?= lang('Anggota.field.city') ?>"
                                                                        value="<?= set_value('CityNow'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">Kecamatan</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_kecamatan" name="kecamatanNow"
                                                                        placeholder="Kecamatan"
                                                                        value="<?= set_value('KecamatanNow'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">Kelurahan</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_kelurahan" name="kelurahanNow"
                                                                        placeholder="Kelurahan"
                                                                        value="<?= set_value('KelurahanNow'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">RT</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_RT" name="RTNow" placeholder="RT"
                                                                        value="<?= set_value('RTNow'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label for="name">RW</label>
                                                                <div>
                                                                    <input type="text" class="form-control"
                                                                        id="frm_create_RW" name="RWNow" placeholder="RW"
                                                                        value="<?= set_value('RWNow'); ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <!-- end info almat -->

                                    <!-- info tambahan -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                <div class="card">
                                                    <div class="card-header-tab card-header">
                                                        <button type="button" data-toggle="collapse"
                                                            data-target="#collapse_madatory3" aria-expanded="true"
                                                            aria-controls="collapse_madatory"
                                                            class="text-left m-0 p-0 btn btn-link">
                                                            <h5 class="m-0 p-0">
                                                                <i
                                                                    class="header-icon lnr-layers icon-gradient bg-primary">
                                                                </i>
                                                                Info Tambahan
                                                            </h5>
                                                        </button>
                                                    </div>
                                                    <div data-parent="#accordion" id="collapse_madatory3"
                                                        class="collapse" style="">


                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-md-12">
                                                                    <h5>Pekerjaan</h5>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="position-relative form-group">
                                                                        <label><?=lang('anggota.field.Unitkerja')?></label>
                                                                        <select class="form-control"
                                                                            name="ref_unitkerja" id="ref_unitkerja"
                                                                            tabindex="-1" aria-hidden="true">
                                                                            <?php foreach ($ref_unitkerja as $row) : ?>
                                                                            <option value="<?= $row->id ?>">
                                                                                <?= $row->name ?>
                                                                            </option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="position-relative form-group">
                                                                        <label for="name">Nama Institusi</label>
                                                                        <div>
                                                                            <input type="text" class="form-control"
                                                                                id="frm_create_InstitutionName"
                                                                                name="InstitutionName"
                                                                                placeholder="Nama Institusi"
                                                                                value="<?= set_value('InstitutionName'); ?>" />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="position-relative form-group">
                                                                        <label for="name">Alamat Institusi</label>
                                                                        <div>
                                                                            <input type="text" class="form-control"
                                                                                id="frm_create_InstitutionAddress"
                                                                                name="InstitutionAddress"
                                                                                placeholder="Alamat Institusi"
                                                                                value="<?= set_value('InstitutionAddress'); ?>" />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="position-relative form-group">
                                                                        <label for="name">Telepon Institusi</label>
                                                                        <div>
                                                                            <input type="text" class="form-control"
                                                                                id="frm_create_InstitutionPhone"
                                                                                name="InstitutionPhone"
                                                                                placeholder="Telepon Institusi"
                                                                                value="<?= set_value('InstitutionPhone'); ?>" />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-12">
                                                                    <h5>Pendidikan</h5>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="position-relative form-group">
                                                                        <label><?= lang('Anggota.field.Pendidikan') ?></label>
                                                                        <select class="form-control"
                                                                            name="ref_pendidikan" id="ref_pendidikan"
                                                                            tabindex="-1" aria-hidden="true">
                                                                            <?php foreach ($ref_pendidikan as $row) : ?>
                                                                            <option value="<?= $row->id ?>">
                                                                                <?= $row->name ?>
                                                                            </option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- upload foto -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                <div class="card">
                                                    <div class="card-header-tab card-header">
                                                        <button type="button" data-toggle="collapse"
                                                            data-target="#collapse_madatory4" aria-expanded="true"
                                                            aria-controls="collapse_madatory"
                                                            class="text-left m-0 p-0 btn btn-link">
                                                            <h5 class="m-0 p-0">
                                                                <i
                                                                    class="header-icon lnr-layers icon-gradient bg-primary">
                                                                </i>
                                                                Upload Foto
                                                            </h5>
                                                        </button>
                                                    </div>
                                                    <div data-parent="#accordion" id="collapse_madatory4"
                                                        class="collapse" style="">


                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-row">
                                                                    <div class="col-md-12">
                                                                        <div class="position-relative form-group">
                                                                            <label for="file_image" class="">Foto
                                                                                Anggota</label>
                                                                            <div id="dropzone_file_image"
                                                                                class="dropzone"></div>
                                                                            <div id="dropzone_file_image_listed"></div>
                                                                            <div>
                                                                                <small
                                                                                    class="info help-block text-muted">Format
                                                                                    (JPG|PNG).
                                                                                    Max 10 MB</small>
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
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"
                                            name="submit"><?= lang('Anggota.action.save') ?></button>
                                    </div>
                    </form>
                    <!-- ambil foto -->
                    <!-- <div class="tab-pane" id="timeline">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="file_image" class="">Foto Anggota</label>
                                            <div id="dropzone_file_image" class="dropzone"></div>
                                            <div id="dropzone_file_image_listed"></div>
                                            <div>
                                                <small class="info help-block text-muted">Format (JPG|PNG).
                                                    Max 10 MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> -->




                </div>

                <!-- /.tab-content -->
            </div><!-- /.card-body -->

            <!-- /.nav-tabs-custom -->
        </div>
    </div>

    <?= $this->endSection('page'); ?>

    <?= $this->section('script'); ?>
    <script>
    Dropzone.autoDiscover = false;

    var dropzone_file_image = new Dropzone("#dropzone_file_image", {
        url: "<?= base_url('banner/do_upload') ?>", // /do_uploads if multiple
        paramName: "file", // files if multiple
        maxFiles: 1,
        maxFilesize: 10,
        addRemoveLinks: true,
        acceptedFiles: 'image/*',
        renameFile: function(file) {
            return new Date().getTime() + '_' + file.name.toLowerCase().replace(' ', '_');
        },
        accept: function(file, done) {
            console.log("uploaded");
            done();
        },
        init: function() {
            this.on("maxfilesexceeded", function(file) {
                console.log("max file");
            });
        },
        success: function(file, response) {
            console.log(file);
            console.log(response);
            // file.previewElement.querySelector("img").src = response.files[0].url;
            // file.previewElement.classList.add("dz-success");
            // var fileuploded = file.previewElement.querySelector("[data-dz-name]");
            // fileuploded.innerHTML = response.files[0].name;
            // file.name = response.files[0].name;

            var uuid = file.upload.uuid;
            var name = file.upload.filename;

            $('#dropzone_file_image_listed').append('<input type="hidden" name="file_image[' + uuid +
                ']" value="' + name + '" />');
        },
        removedfile: function(file) {
            console.log(file);
            var name = "";
            // var path = "<?= WRITEPATH . 'uploads/' ?>";
            var path = "D:/koding/inlislite/public/uploads/"
            if (file.upload !== undefined) {
                name = file.upload.filename;
            } else {
                name = file.name;
                path = "<?= ROOTPATH . 'public/uploads/anggota/' ?>";
            }

            $.ajax({
                type: 'POST',
                url: "<?= base_url('banner/do_delete') ?>",
                data: "name=" + name + "&path=" + path,
                dataType: 'html'
            });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) :
                void 0;
        }

    });
    </script>


    <script>
    $(function() {
        $('#date-time').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD'
        });
    });
    </script>
    <?= $this->endSection('script'); ?>