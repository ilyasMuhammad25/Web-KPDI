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
                <div><?= lang('Artikel.action.add') ?> <?= lang('Artikel.module') ?>
                    <div class="page-title-subheading"><?= lang('Artikel.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('artikel') ?>"><?= lang('Artikel.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Artikel.action.add') ?> <?= lang('Artikel.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
            <div class="card-header">
                  <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?= lang('Artikel.action.add') ?> <?= lang('Artikel.module') ?>
            </div>
            <div class="card-body">
                  <div id="infoMessage"><?= $message ?? ''; ?></div>
                  <?= get_message('message'); ?>

                  <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('artikel/create'); ?>">
                        <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Judul*</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_name" name="judul" placeholder="Judul " value="<?= set_value('judul'); ?>" />
                                                <small class="info help-block text-muted"></small>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="position-relative form-group">
                                          <label for="name">Tahun Terbit</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_name" name="tahun_terbit" placeholder="Tahun terbit " value="<?= set_value('tahun_terbit'); ?>" />
                                                <small class="info help-block text-muted"></small>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="position-relative form-group">
                                          <label for="bahasa">Bahasa</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_name" name="bahasa" placeholder="Bahasa " value="<?= set_value('bahasa'); ?>" />
                                                <small class="info help-block text-muted"></small>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-md-9">
                                    <div class="position-relative form-group">
                                          <label for="name">Upload File</label>
                                          <div>
                                                
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="description"><?= lang('Artikel.field.description') ?> </label>
                              <div>
                                    <textarea id="frm_create_description" name="description" placeholder="<?= lang('Artikel.field.description') ?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?= set_value('description') ?></textarea>
                              </div>
                        </div>

                        <div class="form-group">
                              <button type="submit" class="btn btn-primary" name="submit"><?= lang('Artikel.action.save') ?></button>
                        </div>
                  </form>
            </div>
    </div>
</div>


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->endSection('script'); ?>