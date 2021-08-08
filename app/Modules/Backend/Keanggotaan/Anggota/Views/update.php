<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?= $this->extend('hamkamannan\adminigniter\layout\backend\main'); ?>
<?= $this->section('style'); ?>
<?= $this->include('Anggota\Views\add_modal'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>


<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?= lang('Anggota.action.update') ?> <?= lang('Anggota.module') ?>
                    <div class="page-title-subheading"><?= lang('Anggota.form.complete_the_data') ?>.</div>
                </div>

            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>
                                <?= lang('Anggota.label.home') ?></a></li>
                        <li class="breadcrumb-item"><a
                                href="<?= base_url('anggota') ?>"><?= lang('Anggota.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Anggota.action.update') ?>
                            <?= lang('Anggota.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-md-12 tab-pane">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Update</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ambil Foto</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_pelanggaran') ?>">Data Pelanggaran</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_peminjaman') ?>">Data peminjaman</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_perpanjangan') ?>">Data Perpanjangan</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_sumbangan') ?>">Data Sumbangan</a></li>

                </ul>
            </div>
            <div class="main-card mb-3 card">
                <div class="card-header">


                </div>

                <form id="frm" class="col-md-12 mx-auto" method="post" action="">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name"><?= lang('Anggota.field.name') ?>*</label>
                                <div>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="<?= lang('Anggota.field.name') ?>"
                                        value="<?= set_value('name', $anggota->name); ?>" />
                                    <small class="info help-block text-muted"><?= lang('Anggota.field.name') ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group">

                                <div>
                                    <label><?=lang('Anggota.field.Jenisanggota')?></label>
                                    <select class="form-control" name="ref_jenisanggota" id="ref_jenisanggota"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="" disabled selected>
                                            <?=lang('Anggota.field.Jenisanggota')?></option>
                                        <?php foreach ($ref_jenisanggota as $row) : ?>
                                        <option placeholder="<?= lang('Anggota.field.name') ?> "
                                            value="<?= $row->id ?>">
                                            <?= $row->name ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label><?= lang('Anggota.field.Jenisidentitas') ?></label>
                                <select class="form-control" name="ref_identitas" id="ref_identitas" tabindex="-1"
                                    aria-hidden="true" placeholder="<?= lang('Anggota.field.Jenisidentitas') ?>">
                                    <option value="" disabled selected>
                                        <?= lang('Anggota.field.Jenisidentitas') ?></option>
                                    <?php foreach ($ref_identitas as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_identitas) ? 'selected':''?>>
                                        <?= $row->name ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label><?=lang('Anggota.field.Statusperkawinan')?></label>
                                <select class="form-control" name="ref_perkawinan" id="ref_perkawinan" tabindex="-1"
                                    aria-hidden="true">
                                    <?php foreach ($ref_perkawinan as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_perkawinan) ? 'selected':''?>>
                                        <?= $row->name ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Nomor Anggota</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_MemberNo" name="MemberNo"
                                        placeholder="NO anggota"
                                        value="<?= set_value('MemberNo', $anggota->MemberNo); ?>" />
                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label><?=lang('Anggota.field.Agama')?></label>
                                <select class="form-control" name="ref_agama" id="ref_agama" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="" disabled selected><?= lang('Anggota.field.Agama') ?>
                                    </option>
                                    <?php foreach ($ref_agama as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_agama) ? 'selected':''?>>
                                        <?= $row->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Nomor Identitas</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_IdentityNo" name="IdentityNo"
                                        placeholder="Nomor identitas"
                                        value="<?= set_value('IdentityNo',$anggota->IdentityNo); ?>" />
                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label><?= lang('Anggota.field.nomoridentitas') ?></label>
                                <select class="form-control" name="ref_unitkerja" id="ref_unitkerja" tabindex="-1"
                                    aria-hidden="true">
                                    <!-- <option value="" disabled selected><?= lang('Anggota.field.Unitkerja') ?></option> -->
                                    <?php foreach ($ref_unitkerja as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_unitkerja) ? 'selected':''?>>
                                        <?= $row->name ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name"><?=lang('anggota.field.Tempatlahir')?></label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_PlaceOfBirth"
                                        name="PlaceOfBirth" placeholder="Tempat Lahir"
                                        value="<?= set_value('PlaceOfBirth',$anggota->PlaceOfBirth); ?>" />
                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label><?=lang('Anggota.field.fakultas')?></label>
                                <select class="form-control" name="ref_fakultas" id="ref_fakultas" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="" disabled selected><?= lang('Anggota.field.fakultas') ?>
                                    </option>
                                    <?php foreach ($ref_fakultas as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_fakultas) ? 'selected':''?>>
                                        <?= $row->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name"><?=lang('Anggota.field.DateOfBirth')?></label>
                                <div>
                                    <input type="date" class="form-control" id="frm_create_DateOfBirth"
                                        name="DateOfBirth" placeholder="Tempat Lahir"
                                        value="<?= set_value('DateOfBirth',$anggota->DateOfBirth); ?>" />
                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="name"><?=lang('Anggota.field.Tanggalpendaftaran')?></label>
                                <div>
                                    <input type="date" class="form-control" id="frm_create_RegisterDate"
                                        name="RegisterDate" placeholder="Tempat Lahir"
                                        value="<?= set_value('RegisterDate',$anggota->DateOfBirth); ?>" />
                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Alamat</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_Address" name="Address"
                                        placeholder="Alamat" value="<?= set_value('Address',$anggota->Address); ?>" />
                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="name"><?=lang('Anggota.field.Masaberlaku')?></label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_DateOfBirth"
                                        name="DateOfBirth" placeholder=<?=lang('Anggota.field.Masaberlaku')?>
                                        value="<?= set_value('DateOfBirth'); ?>" />
                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name"><?=lang('Anggota.field.provinsi')?></label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_Provincy" name="Provincy"
                                        placeholder="<?=lang('Anggota.field.provinsi')?>"
                                        value="<?= set_value('Provincy',$anggota->Provincy); ?>" />
                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label><?=lang('Anggota.field.Statusanggota')?></label>
                                <select class="form-control" name="ref_Statusanggota" id="ref_Statusanggota"
                                    tabindex="-1" aria-hidden="true">
                                    <option value="" disabled selected>
                                        <?= lang('Anggota.field.Statusanggota') ?></option>
                                    <?php foreach ($ref_Statusanggota as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_Statusanggota) ? 'selected':''?>>
                                        <?= $row->name ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name"><?= lang('Anggota.field.city') ?></label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_City" name="City"
                                        placeholder="<?= lang('Anggota.field.city') ?>"
                                        value="<?= set_value('City',$anggota->City); ?>" />

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <label for="description"><?= lang('Anggota.field.description') ?> </label>
                            <div>
                                <textarea id="frm_create_description" name="description"
                                    placeholder="<?= lang('Anggota.field.description') ?> " rows="2"
                                    class="form-control autosize-input"
                                    style="min-height: 38px;"><?= set_value('description', $anggota->description) ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Kecamatan</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_kecamatan" name="kecamatan"
                                        placeholder="Kecamatan"
                                        value="<?= set_value('Kecamatan',$anggota->Kecamatan); ?>" />

                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="name"><?= lang('Anggota.field.Biayapendaftaran') ?></label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_BiayaPendaftaran"
                                        name="BiayaPendaftaran"
                                        placeholder=<?= lang('Anggota.field.Biayapendaftaran') ?>
                                        value="<?= set_value('BiayaPendaftaran',$anggota->BiayaPendaftaran); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Kelurahan</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_kelurahan" name="kelurahan"
                                        placeholder="Kelurahan"
                                        value="<?= set_value('Kelurahan',$anggota->Kelurahan); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">RT</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_RT" name="RT"
                                        placeholder="RT" value="<?= set_value('RT',$anggota->RT); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">RW</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_RW" name="RW"
                                        placeholder="RW" value="<?= set_value('RW',$anggota->RW); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">No Handphone</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_NoHp" name="NoHp"
                                        placeholder="Nomor Handphone"
                                        value="<?= set_value('NoHp',$anggota->NoHp); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label><?= lang('Anggota.field.Jeniskelamin') ?></label>
                                <select class="form-control" name="ref_jeniskelamin" id="ref_jeniskelamin" tabindex="-1"
                                    aria-hidden="true" placeholder="<?= lang('Anggota.field.Jeniskelamin') ?>">

                                    <?php foreach ($ref_jeniskelamin as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_jeniskelamin) ? 'selected':''?>>
                                        <?= $row->name ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label><?= lang('Anggota.field.Pendidikan') ?></label>
                                <select class="form-control" name="ref_pendidikan" id="ref_pendidikan" tabindex="-1"
                                    aria-hidden="true">
                                    <?php foreach ($ref_pendidikan as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_pendidikan) ? 'selected':''?>>
                                        <?= $row->name ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label><?=lang('anggota.field.Unitkerja')?></label>
                                <select class="form-control" name="ref_unitkerja" id="ref_unitkerja" tabindex="-1"
                                    aria-hidden="true">
                                    <?php foreach ($ref_unitkerja as $row) : ?>
                                    <option value="<?= $row->id ?>"
                                        <?=($row->id == $anggota->ref_unitkerja) ? 'selected':''?>>
                                        <?= $row->name ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Email</label>
                                <div>
                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email"
                                        value="<?= set_value('Email',$anggota->Email); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>

                    <h5>Data pekerjaan/Perguruan Tinggi/Sekolah</h5>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Nama Institusi</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_InstitutionName"
                                        name="InstitutionName" placeholder="Nama Institusi"
                                        value="<?= set_value('InstitutionName',$anggota->InstitutionName); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Alamat Institusi</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_InstitutionAddress"
                                        name="InstitutionAddress" placeholder="Alamat Institusi"
                                        value="<?= set_value('InstitutionAddress',$anggota->InstitutionAddress); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="name">Telepon Institusi</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_create_InstitutionPhone"
                                        name="InstitutionPhone" placeholder="Telepon Institusi"
                                        value="<?= set_value('InstitutionPhone',$anggota->InstitutionPhone); ?>" />

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"
                            name="submit"><?= lang('Anggota.action.save') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal -->


    <div class="card-body">
        <div id="infoMessage"><?= $message ?? ''; ?></div>
        <?= get_message('message'); ?>

    </div>

    <!-- <div class="viewmodal" style="display:none;"></div> -->

    <script>
    function upload() {
        $.ajax({
            type: "post",
            url: "<?=site_url('anggota/uploadfoto')?>",
            data: {
                name: name
            },
            dataType: "json",
            succcess: function(response) {
                if (response.sukses) {

                    $('#modalupload').modal('show')
                }

            },
            error: function(xhr, ajaxOptions, throwError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError)
            }
        });
    }
    </script>

    <?= $this->endSection('page'); ?>

    <?= $this->section('script'); ?>

    <?= $this->endSection('script'); ?>