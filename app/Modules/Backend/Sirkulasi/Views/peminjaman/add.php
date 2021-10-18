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
                <div><?= lang('Sirkulasi.action.add') ?> <?= lang('Sirkulasi.module') ?>
                    <div class="page-title-subheading"><?= lang('Sirkulasi.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>
                                Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="<?= base_url('sirkulasi') ?>"><?= lang('Sirkulasi.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Sirkulasi.action.add') ?>
                            <?= lang('Sirkulasi.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form
            <?= lang('Sirkulasi.action.add') ?> <?= lang('Sirkulasi.module') ?>
        </div>
        <div class="card-body">
            <div id="infoMessage"><?= $message ?? ''; ?></div>
            <?= get_message('message'); ?>

            <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('sirkulasi/create'); ?>">
                <div class="form-row">

                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="hidden" name="t_anggota_id" id="t_anggota_id" value="">
                            <input type="text" name="jml_eksemplar" id="frm_create_MemberNo" class="form-control"
                                placeholder="Nomor Anggota">
                            <div class="input-group-append">
                            <a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);" class="mb-2 mr-2 btn btn-pill btn-warning" title="<?= lang('User.btn.profile.update') ?>"><i class="fa fa-edit"></i> cari anggota</a>
                            </div>
                        </div>
                    </div>

                </div><br>
                <!-- data anggota -->
                



                <div class="form-row mt-4">

                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="hidden" name="t_anggota_id" id="t_anggota_id" value="">
                            <input type="text" name="jml_eksemplar" id="frm_create_MemberNo" class="form-control"
                                placeholder="Nomor Barcode">
                            <div class="input-group-append">

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Launch demo modal
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="description"><?= lang('Sirkulasi.field.description') ?> </label>
                    <div>
                        <textarea id="frm_create_description" name="description"
                            placeholder="<?= lang('Sirkulasi.field.description') ?> " rows="2"
                            class="form-control autosize-input"
                            style="min-height: 38px;"><?= set_value('description') ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"
                        name="submit"><?= lang('Sirkulasi.action.save') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

                                <a data-toggle="modal" data-target="#modal_edit" href="javascript:void(0);" class="mb-2 mr-2 btn btn-pill btn-warning" title="<?= lang('User.btn.profile.update') ?>"><i class="fa fa-edit"></i> <?= lang('User.btn.profile.update') ?></a>
                                <a data-toggle="modal" data-target="#modal_edit2" href="javascript:void(0);" class="mb-2 mr-2 btn btn-pill btn-warning" title="<?= lang('User.btn.profile.update') ?>"><i class="fa fa-edit"></i> <?= lang('User.btn.profile.update') ?></a>
                                <a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);" class="mb-2 mr-2 btn btn-pill btn-warning" title="<?= lang('User.btn.profile.update') ?>"><i class="fa fa-edit"></i> 123</a>



<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->include('Sirkulasi\Views\peminjaman\update_modal'); ?>




<?= $this->endSection('script'); ?>