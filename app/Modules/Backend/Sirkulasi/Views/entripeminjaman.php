<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?= $this->extend('hamkamannan\adminigniter\layout\backend\main'); ?>
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
                <div><?= lang('Sirkulasi.action.add') ?> <?= lang('Sirkulasi.peminjaman') ?>
                    <div class="page-title-subheading"><?= lang('Sirkulasi.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('sirkulasi') ?>"><?= lang('Sirkulasi.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Sirkulasi.action.add') ?> <?= lang('Sirkulasi.peminjaman') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
            <div class="card-header">
                  <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?= lang('Sirkulasi.action.add') ?> <?= lang('Sirkulasi.peminjaman') ?>
            </div>
            <div class="card-body">
                  <div id="infoMessage"><?= $message ?? ''; ?></div>
                  <?= get_message('message'); ?>

                  <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('sirkulasi/create'); ?>">
                        <div class="form-row">
                              <div class="col-md-9">
                                    <div class="position-relative form-group">
                                          <label for="name"><?= lang('Sirkulasi.field.name') ?>*</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_name" name="name" placeholder="<?= lang('Sirkulasi.field.name') ?> " value="<?= set_value('name'); ?>" />
                                                <small class="info help-block text-muted"><?= lang('Sirkulasi.field.name') ?></small>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="position-relative form-group">
                                          <label for="sort"><?= lang('Sirkulasi.field.sort') ?> </label>
                                          <div>
                                                <input type="number" class="form-control" id="frm_create_sort" name="sort" placeholder="<?= lang('Sirkulasi.field.sort') ?> " value="<?= set_value('sort') ?>" />
                                                <small class="info help-block text-muted"><?= lang('Sirkulasi.field.sort') ?>  Sirkulasi</small>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="form-row">
                              <div class="col-md-9">
                                    <div class="position-relative form-group">
                                          <label for="noanggota"><?= lang('Sirkulasi.field.noanggota') ?>*</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_noanggota" name="noanggota" placeholder="<?= lang('Sirkulasi.field.noanggota') ?> " value="<?= set_value('noanggota'); ?>" />
                                                <small class="info help-block text-muted"><?= lang('Sirkulasi.field.noanggota') ?></small>
                                          </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="col-md-12">
                                    <div class="position-relative form-group">
                                          <label for="noanggota"><?= lang('Sirkulasi.field.nobarcode') ?>*</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_nobarcode" name="nobarcode" placeholder="<?= lang('Sirkulasi.field.nobarcode') ?> " value="<?= set_value('nobarcode'); ?>" />
                                                <small class="info help-block text-muted"><?= lang('Sirkulasi.field.nobarcode') ?></small>
                                          </div>
                                          </div>
                                                            

                        <div class="form-group">
                              <button type="submit" class="btn btn-primary" name="submit"><?= lang('Sirkulasi.action.save') ?></button>
                        </div>
                  </form>
            </div>
    
</div>


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->endSection('script'); ?>