<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?php $core = config('Core');
$layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main'; ?>
<?= $this->extend($layout); ?>
<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url("assets/vendors/select2/css/select2-bootstrap.css") ?>">

<style>
      #position-fixed {
            background: rgba(0, 0, 0, 0.4);
            z-index: 99;
      }
</style>
<div id="spinner" class="d-none">
      <div id="position-fixed" class="position-fixed d-flex align-items-center justify-content-center w-100 h-100">
            <div class="spinner-grow text-muted"></div>
            <div class="spinner-grow text-primary"></div>
            <div class="spinner-grow text-success"></div>
      </div>
</div>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>


<div class="app-main__inner">
      <div class="app-page-title">
            <div class="page-title-wrapper">
                  <div class="page-title-heading">
                        <div class="page-title-icon">
                              <i class="fa fa-book icon-gradient bg-strong-bliss"></i>
                        </div>
                        <div>Tambah Katalog
                              <div class="page-title-subheading"><?= lang('Katalog.form.complete_the_data') ?>.</div>
                        </div>
                  </div>
                  <div class="page-title-actions">
                        <nav class="" aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('katalog-aacr') ?>"><?= lang('Katalog.module') ?></a></li>
                                    <li class="active breadcrumb-item" aria-current="page"><?= lang('Katalog.action.add') ?> <?= lang('Katalog.module') ?></li>
                              </ol>
                        </nav>
                  </div>
            </div>
      </div>
      <form id="form-app" method="POST" enctype="multipart/form-data">
            <div class="p-3">
                  <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i>
                  <h4>AACR</h4>
            </div>
            <!-- <div class="main-card mb-3 card">
                  <div class="card-header">
                  </div>
                  <div class="card-body"> -->
            <div class="card mb-3">
                  <div class="card-body">
                        <div id="infoMessage"><?= $message ?? ''; ?></div>
                        <?= get_message('message'); ?>
                        <div class="row mb-3">
                              <div class="col-md-6">
                                    <div class="btn btn-group">
                                          <button class="btn btn-success">Salin Judul</button>
                                          <button class="btn btn-info">Salin Katalog</button>
                                    </div>
                              </div>
                              <div class="col-md-6 mt-1">
                                    <div class="text-right">
                                          <button id="btn-marc" class="btn btn-secondary">Tampilkan MARC</button>
                                    </div>
                              </div>
                        </div>

                        <div class="form-group row">
                              <label for="recipient-name" class="col-md-2 col-form-label">Jenis Bahan</label>
                              <div class="col-md-10">
                                    <select name="worksheet" class="form-control opt" id="worksheet" data-placeholder="Pilih Jenis Bahan">
                                          <option></option>
                                          <?php foreach ($worksheets as $worksheet) :  ?>
                                                <option value="<?= $worksheet['ID'] ?>"><?= $worksheet['Name'] ?></option>
                                          <?php endforeach;  ?>
                                    </select>
                                    <small id="name-feedback" class="text-danger"></small>
                              </div>
                        </div>
                        <div class="form-group" hidden>
                              <label for="recipient-name" class="col-form-label">ID</label>
                              <input type="text" class="form-control" id="id" name="id">
                              <small id="id-feedback" class="text-danger"></small>
                        </div>
                  </div>
            </div>

            <div id="form-body" data-type="simple">
                  <?= $this->include('Katalog\Views\partial\simple') ?>

                  <div class="row px-1 py-3">
                        <div class="col md-6">
                              <!-- display opac -->
                              <div class="form-group">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"> Tampil Di OPAC <i class="input-helper"></i></label>
                                    </div>
                              </div>
                              <!-- end of display opac -->
                        </div>
                        <div class="col md-6 text-right">
                              <button type="submit" class="btn btn-success">Submit</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                  </div>
            </div>
            <!-- </div>
            </div> -->
      </form>
</div>


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/hndrk/select2-init.js') ?>"></script>
<script src="<?= base_url('assets/js/hndrk/catalog.js') ?>"></script>

<?= $this->endSection('script'); ?>