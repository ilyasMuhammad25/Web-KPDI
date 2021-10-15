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
                <div><?= lang('LokasiPerpustakaan.action.add') ?> <?= lang('LokasiPerpustakaan.module') ?>
                    <div class="page-title-subheading"><?= lang('LokasiPerpustakaan.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('lokasiperpustakaan') ?>"><?= lang('LokasiPerpustakaan.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('LokasiPerpustakaan.action.add') ?> <?= lang('LokasiPerpustakaan.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
            <div class="card-header">
                  <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?= lang('LokasiPerpustakaan.action.add') ?> <?= lang('LokasiPerpustakaan.module') ?>
            </div>
            <div class="card-body">
                  <div id="infoMessage"><?= $message ?? ''; ?></div>
                  <?= get_message('message'); ?>

                  <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('lokasiperpustakaan/create'); ?>">
                        <div class="form-row">
                              <div class="col-md-9">
                                    <div class="position-relative form-group">
                                          <label for="name"><?= lang('LokasiPerpustakaan.field.name') ?>*</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_name" name="name" placeholder="<?= lang('LokasiPerpustakaan.field.name') ?> " value="<?= set_value('name'); ?>" />
                                                <small class="info help-block text-muted"><?= lang('LokasiPerpustakaan.field.name') ?></small>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="position-relative form-group">
                                          <label for="sort"><?= lang('LokasiPerpustakaan.field.sort') ?> </label>
                                          <div>
                                                <input type="number" class="form-control" id="frm_create_sort" name="sort" placeholder="<?= lang('LokasiPerpustakaan.field.sort') ?> " value="<?= set_value('sort') ?>" />
                                                <small class="info help-block text-muted"><?= lang('LokasiPerpustakaan.field.sort') ?>  LokasiPerpustakaan</small>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="kode"><?= lang('LokasiPerpustakaan.field.kode') ?> </label>
                              <div>
                                    <input id="frm_create_kode" name="kode" placeholder="<?= lang('LokasiPerpustakaan.field.kode') ?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?= set_value('kode') ?> 
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="alamat"><?= lang('LokasiPerpustakaan.field.alamat') ?> </label>
                              <div>
                                    <input id="frm_create_alamat" name="alamat" placeholder="<?= lang('LokasiPerpustakaan.field.alamat') ?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?= set_value('alamat') ?> 
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="description"><?= lang('LokasiPerpustakaan.field.description') ?> </label>
                              <div>
                                    <textarea id="frm_create_description" name="description" placeholder="<?= lang('LokasiPerpustakaan.field.description') ?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?= set_value('description') ?></textarea>
                              </div>
                        </div>

                        <div class="form-group">
                              <button type="submit" class="btn btn-primary" name="submit"><?= lang('LokasiPerpustakaan.action.save') ?></button>
                        </div>
                  </form>
            </div>
    </div>
</div>


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->endSection('script'); ?>