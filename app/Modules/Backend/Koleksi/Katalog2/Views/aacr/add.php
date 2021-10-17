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
                              <i class="pe-7s-photo icon-gradient bg-strong-bliss"></i>
                        </div>
                        <div>Entri Katalog
                              <div class="page-title-subheading"><?= lang('Koleksi.form.complete_the_data') ?>.</div>
                        </div>
                  </div>
                  <div class="page-title-actions">
                        <nav class="" aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('koleksi') ?>"><?= lang('Koleksi.module') ?></a></li>
                                    <li class="active breadcrumb-item" aria-current="page"><?= lang('Koleksi.action.add') ?> <?= lang('Koleksi.module') ?></li>
                              </ol>
                        </nav>
                  </div>
            </div>
      </div>
      <form id="form-app">
            <div class="main-card mb-3 card">
                  <div class="card-header">
                        <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> AACR
                  </div>
                  <div class="card-body">
                        <div class="card mb-3">
                              <div class="card-body">
                                    <div id="infoMessage"><?= $message ?? ''; ?></div>
                                    <?= get_message('message'); ?>
                                    <div class="btn btn-group">
                                          <button class="btn btn-success">Salin Judul</button>
                                          <button class="btn btn-info">Salin Katalog</button>
                                    </div>
                                    <div class="text-right mb-3">
                                          <button id="btn-marc" class="btn btn-secondary">Tampilkan MARC</button>
                                    </div>

                                    <div class="form-group row">
                                          <label for="recipient-name" class="col-md-2 col-form-label">Jenis Bahan</label>
                                          <div class="col-md-10">
                                                <select name="material-type" class="form-control" id="opt_material_type">
                                                      <option></option>
                                                      <option value="1">Value</option>
                                                      <option value="2">Value1</option>
                                                      <option value="3">Value2</option>
                                                      <option value="4">Value3</option>
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
                              <!-- Judul -->
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <h4 class="card-title">Judul</h4>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Judul Utama</label>
                                                <input type="text" class="form-control" id="main-title" name="main-title" placeholder="Judul Utama">
                                                <small id="main-title-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Anak Judul</label>
                                                <input type="text" class="form-control" id="child-title" name="child-title" placeholder="Anak Judul">
                                                <small id="child-title-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Penanggung Jawab</label>
                                                <input type="text" class="form-control" id="handled" name="handled" placeholder="Penanggung Jawab">
                                                <small id="handled-feedback" class="text-danger"></small>
                                          </div>
                                          <!-- <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Variasi Bentuk Judul</label>
                                          <div class="input-group">
                                                <input type="text" class="form-control" id="variation-title" name="variation-title" placeholder="Variasi Bentul Judul">
                                                <small id="variation-title-feedback" class="text-danger"></small><button id="add-variation-title" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                          </div>
                                    </div> -->
                                          <!-- <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Judul Asli</label>
                                          <div class="input-group">
                                                <input type="text" class="form-control" id="original-title" name="original-title" placeholder="Judul Asli">
                                                <small id="original-title-feedback" class="text-danger"></small>
                                                <div class="input-group-append">
                                                      <button id="add-original-title" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                                </div>
                                          </div>
                                    </div> -->
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Judul Sebelumnya</label>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="previous-title" name="previous-title" placeholder="Judul Sebelumnya">
                                                      <small id="previous-title-feedback" class="text-danger"></small>
                                                      <div class="input-group-append">
                                                            <button id="add-previous-title" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <!-- end of Judul -->

                              <!-- Tajuk Pengarang -->
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <h4 class="card-title">Tajuk Pengarang</h4>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Tajuk Pengarang Utama</label>
                                                <div class="row">
                                                      <div class="col-md-2">
                                                            <select name="opt-main-creator" class="form-control" id="opt_main_creator">
                                                                  <option></option>
                                                                  <option value="1">Main Creator 1</option>
                                                                  <option value="2">Main Creator 2</option>
                                                                  <option value="3">Main Creator 3</option>
                                                            </select>
                                                      </div>
                                                      <div class="col-md-10">
                                                            <input type="text" class="form-control" id="main-creator" name="main-creator" placeholder="Tajuk Pengarang Utama">
                                                            <small id="main-creator-feedback" class="text-danger"></small>
                                                      </div>
                                                </div>

                                                <div class="input-radio p-2 bg-light">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-main-creator" value="0" checked="">
                                                                              Nama Depan
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-main-creator" value="1">
                                                                              Nama Belakang
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-main-creator" value="2">
                                                                              Nama Keluarga
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Tajuk Pengarang Tambahan</label>
                                                <div class="row">
                                                      <div class="col-md-2">
                                                            <select name="opt-addititon-creator" class="form-control" id="opt_addition_creator">
                                                                  <option></option>
                                                                  <option value="1">Value</option>
                                                                  <option value="2">Value1</option>
                                                            </select>
                                                      </div>
                                                      <div class="col-md-10">
                                                            <input type="text" class="form-control" id="addition-creator" name="addition-creator" placeholder="Tajuk Pengarang Tambahan">
                                                            <small id="addition-creator-feedback" class="text-danger"></small>
                                                      </div>
                                                </div>
                                                <div class="input-radio p-2 bg-light">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-addition-creator" value="0" checked="">
                                                                              Nama Depan
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-addition-creator" value="1">
                                                                              Nama Belakang
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-addition-creator"="2">
                                                                              Nama Keluarga
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <!-- end of Tajuk Pengarang -->

                              <!-- Publisher -->
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <h4 class="card-title">Penerbitan/Publikasi</h4>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Tempat</label>
                                                <input type="text" class="form-control" id="place" name="place" placeholder="Tempat Terbit">
                                                <small id="place-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Penerbit</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Penerbit">
                                                <small id="name-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Tahun</label>
                                                <input type="text" class="form-control" id="year" name="year" placeholder="Tahun Terbit">
                                                <small id="year-feedback" class="text-danger"></small>
                                          </div>

                                          <div class="divider"></div>

                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Frekuensi Saat Ini</label>
                                                <input type="text" class="form-control" id="current-frequency" name="current-frequency" placeholder="Frekuensi Saat Ini">
                                                <small id="current-frequency-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Frekuensi Publikasi Sebelumnya</label>
                                                <input type="text" class="form-control" id="previous-frequency" name="previous-frequency" placeholder="Frekuensi Publikasi Sebelumnya">
                                                <small id="previous-frequency-feedback" class="text-danger"></small>
                                          </div>
                                    </div>
                              </div>
                              <!-- end of Publisher -->

                              <!-- Description -->
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <h4 class="card-title">Deskripsi Fisik</h4>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Jumlah Halaman</label>
                                                <input type="text" class="form-control" id="page" name="page" placeholder="Jumlah Halaman">
                                                <small id="page-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Ket. Ilustarsi</label>
                                                <input type="text" class="form-control" id="ilustration" name="ilustration" placeholder="Ket. Ilustrasi">
                                                <small id="ilustration-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Dimensi</label>
                                                <input type="text" class="form-control" id="dimention" name="dimention" placeholder="Dimensi">
                                                <small id="dimention-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Bahan Sertaan</label>
                                                <input type="text" class="form-control" id="accompanying-material" name="accompanying-material" placeholder="Bahan Sertaan">
                                                <small id="accompanying-material-feedback" class="text-danger"></small>
                                          </div>
                                    </div>
                              </div>
                              <!-- end of Description -->

                              <!-- Detail 1 -->
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <!-- <h4 class="card-title">Deskripsi Fisik</h4> -->
                                          <!-- <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Jenis isi</label>
                                          <input type="text" class="form-control" id="content-type" name="content-type" placeholder="Jenis Isi">
                                          <small id="content-type-feedback" class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Jenis Media</label>
                                          <input type="text" class="form-control" id="media-type" name="media-type" placeholder="Jenis Media">
                                          <small id="media-type-feedback" class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Jenis Wadah</label>
                                          <input type="text" class="form-control" id="receptacle-type" name="receptacle-type" placeholder="Jenis Wadah">
                                          <small id="receptacle-type-feedback" class="text-danger"></small>
                                    </div> -->
                                          <div id="subject-append">
                                                <div id="subject-input" class="form-group  subject-input">
                                                      <label for="recipient-name" class="col-form-label">Subjek</label>
                                                      <div class="row">
                                                            <div class="col-md-2">
                                                                  <select name="subject[tag[]]" class="form-control dropdown-subject">
                                                                        <option></option>
                                                                        <option value="1">Value</option>
                                                                        <option value="2">Value1</option>
                                                                        <option value="3">Value2</option>
                                                                        <option value="4">Value3</option>
                                                                  </select>
                                                            </div>
                                                            <div class="col-md-10 input-group">
                                                                  <input type="text" class="form-control" id="subject" name="subject[desc[]]" placeholder="Subjek">
                                                                  <small id="subject-feedback" class="text-danger"></small>
                                                                  <div class="input-group-append">
                                                                        <button id="add-subject" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">No. Klas DDC</label>
                                                <input type="text" class="form-control" id="class-ddc" name="class-ddc" placeholder="DeweyNo">
                                                <small id="class-ddc-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">No. Panggil</label>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="callno[]" name="original-title" placeholder="No. Panggil">
                                                      <small id="original-title-feedback" class="text-danger"></small>
                                                      <div class="input-group-append">
                                                            <button id="callnumber" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">ISSN</label>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="issn[]" name="original-title" placeholder="ISSN">
                                                      <small id="original-title-feedback" class="text-danger"></small>
                                                      <div class="input-group-append">
                                                            <button id="add-issn" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <!-- end of Detail 1 -->

                              <!-- Catatan -->
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <h4 class="card-title">Catatan</h4>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Catatan</label>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="note" name="note[]" placeholder="Tajuk Pengarang Utama">
                                                      <small id="note-feedback" class="text-danger"></small>
                                                      <div class="input-group-append">
                                                            <button id="add-note" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                                      </div>
                                                </div>

                                                <div class="input-radio p-2 bg-light">
                                                      <div class="row">
                                                            <div class="col-sm-4 py-1">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-note" value="0" checked="">
                                                                              Abstrak/Anotasi
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-4 py-1">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-note" value="1">
                                                                              Catatan Disertasi
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-4 py-1">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-note" value="2">
                                                                              Catatan Bibliografi
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-4 py-1">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-note" value="2">
                                                                              Rincian Isi
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-4 py-1">
                                                                  <div class="form-check">
                                                                        <label class="form-check-label">
                                                                              <input class="form-check-input" type="radio" name="radio-note" value="2">
                                                                              Catatan Umum
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>

                                    </div>
                              </div>
                              <!-- end of Catatan -->

                              <!-- Detail 2 -->
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Bahasa</label>
                                                <select name="opt-language" class="form-control opt">
                                                      <option value="1">### - Tidak Tersedia</option>
                                                      <option value="2">ara - Arab</option>
                                                      <option value="3">chi - Cina</option>
                                                      <option value="4">dut - Belanda</option>
                                                </select>
                                                <small id="language-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Bentuk Karya Tulis</label>
                                                <select name="paper-form" class="form-control opt">
                                                      <option value="1">0 - Bukan Fiksi atau Tidak Didefinisikan</option>
                                                      <option value="2">1 - Fiksi</option>
                                                      <option value="3">d - Drama</option>
                                                      <option value="4">dut - Belanda</option>
                                                </select>
                                                <small id="paper-form-feedback" class="text-danger"></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Kelompok Sasaran</label>
                                                <select name="target-group" class="form-control opt">
                                                      <option value="1"># - Tidak Diketahui</option>
                                                      <option value="2">d - Remaja</option>
                                                      <option value="3">e- Dewasa</option>
                                                </select>
                                                <small id="target-group-feedback" class="text-danger"></small>
                                          </div>
                                    </div>
                              </div>
                              <!-- end of Detail 2 -->

                              <!-- Lokasi -->
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <h4 class="card-title">Lokasi Koneksi Daring</h4>
                                          <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Lokasi Koneksi Daring</label>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="location" name="location[]" placeholder="Lokasi Koneksi Daring">
                                                      <small id="location-feedback" class="text-danger"></small>
                                                      <div class="input-group-append">
                                                            <button id="add-location" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <!-- end of Lokasi -->

                              <div class="row">
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
                  </div>
            </div>


      </form>
</div>


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/hndrk/select2-init.js') ?>"></script>
<script src="<?= base_url('assets/js/hndrk/catalog.js') ?>"></script>

<?= $this->endSection('script'); ?>