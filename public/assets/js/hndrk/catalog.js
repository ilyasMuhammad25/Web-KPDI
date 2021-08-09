$(document).ready(function () {
  var simple = `
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
                              </div>`;

  var marc = `
<table class="table table-hover table-striped table-borderless">
                              <thead>
                                    <tr>
                                          <th width="5%">&nbsp;</th>
                                          <th width="5%">Tag</th>
                                          <th width="30%">Name</th>
                                          <th width="9%">Indikator1</th>
                                          <th width="9%">Indikator2</th>
                                          <th width="42%">Isi</th>
                                    </tr>
                              </thead>
                              <tbody>


                                    <tr id="001">
                                          <td></td>
                                          <td>001</td>
                                          <td><input type="hidden" value="" id="Ruasid_001" name="Ruasid[001]" size="3">Nomor Kendali</td>
                                          <td></td>
                                          <td></td>
                                          <td>
                                                <input type="hidden" id="Tags_001" name="Tags[001]" value="001" class="item"><span class="" id="status_001">
                                                      <input type="hidden" id="message_001" value="Nomor Kendali tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" maxlength="30" id="TagsValue_001" name="TagsValue[001]" value="">
                                                      </div>
                                                      <div id="error_001" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="005">
                                          <td></td>
                                          <td>005</td>
                                          <td><input type="hidden" value="" id="Ruasid_005" name="Ruasid[005]" size="3">Tanggal Dan Jam Pemakaian Terakhir</td>
                                          <td></td>
                                          <td></td>
                                          <td>
                                                <input type="hidden" id="Tags_005" name="Tags[005]" value="005" class="item"><span class="" id="status_005">
                                                      <input type="hidden" id="message_005" value="Tanggal Dan Jam Pemakaian Terakhir tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" maxlength="16" id="TagsValue_005" name="TagsValue[005]" value="">
                                                      </div>
                                                      <div id="error_005" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="006">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>006</td>
                                          <td><input type="hidden" value="" id="Ruasid_006" name="Ruasid[006]" size="3">Karakteristik Bahan Sertaan - Umum</td>
                                          <td></td>
                                          <td></td>
                                          <td>
                                                <input type="hidden" id="Tags_006" name="Tags[006]" value="006" class="item"><span class="" id="status_006">
                                                      <input type="hidden" id="message_006" value="Karakteristik Bahan Sertaan - Umum tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" maxlength="20" id="TagsValue_006" name="TagsValue[006]" value="">
                                                      </div>
                                                      <div id="error_006" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="007">
                                          <td></td>
                                          <td>007</td>
                                          <td><input type="hidden" value="" id="Ruasid_007" name="Ruasid[007]" size="3">Ruas Tetap Deskripsi Fisik (Keterangan Umum)</td>
                                          <td></td>
                                          <td></td>
                                          <td>
                                                <input type="hidden" id="Tags_007" name="Tags[007]" value="007" class="item"><span class="" id="status_007">
                                                      <input type="hidden" id="message_007" value="Ruas Tetap Deskripsi Fisik (Keterangan Umum) tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" maxlength="40" id="TagsValue_007" name="TagsValue[007]" value="taffffff"><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#tagfixed-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_007" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="008">
                                          <td></td>
                                          <td>008</td>
                                          <td><input type="hidden" value="" id="Ruasid_008" name="Ruasid[008]" size="3">Unsur Data Yang Panjangnya Tetap</td>
                                          <td></td>
                                          <td></td>
                                          <td>
                                                <input type="hidden" id="Tags_008" name="Tags[008]" value="008" class="item"><span class="" id="status_008">
                                                      <input type="hidden" id="message_008" value="Unsur Data Yang Panjangnya Tetap tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" maxlength="40" id="TagsValue_008" name="TagsValue[008]" value=""><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#tagfixed-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_008" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="020_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>020</td>
                                          <td><input type="hidden" value="" id="Ruasid_020_0" name="Ruasid[020][0]" size="3">ISBN</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_020_0" name="Indicator1[020][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_020_0" name="Indicator2[020][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_020_0" name="Tags[020][0]" value="020_0" class="item"><span class="" id="status_020_0">
                                                      <input type="hidden" id="message_020_0" value="ISBN tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_020_0" name="TagsValue[020][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_020_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="035_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>035</td>
                                          <td><input type="hidden" value="" id="Ruasid_035_0" name="Ruasid[035][0]" size="3">BIB-ID (Nomor kendali dari sistem lain)</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_035_0" name="Indicator1[035][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_035_0" name="Indicator2[035][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_035_0" name="Tags[035][0]" value="035_0" class="item"><span class="" id="status_035_0">
                                                      <input type="hidden" id="message_035_0" value="BIB-ID (Nomor kendali dari sistem lain) tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_035_0" name="TagsValue[035][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_035_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="040">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>040</td>
                                          <td><input type="hidden" value="" id="Ruasid_040" name="Ruasid[040]" size="3">Sumber Pengkatalogan</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_040" name="Indicator1[040]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_040" name="Indicator2[040]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_040" name="Tags[040]" value="040" class="item"><span class="" id="status_040">
                                                      <input type="hidden" id="message_040" value="Sumber Pengkatalogan tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_040" name="TagsValue[040]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_040" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="041_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>041</td>
                                          <td><input type="hidden" value="" id="Ruasid_041_0" name="Ruasid[041][0]" size="3">Kode Bahasa</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_041_0" name="Indicator1[041][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_041_0" name="Indicator2[041][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_041_0" name="Tags[041][0]" value="041_0" class="item"><span class="" id="status_041_0">
                                                      <input type="hidden" id="message_041_0" value="Kode Bahasa tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_041_0" name="TagsValue[041][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_041_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="043">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>043</td>
                                          <td><input type="hidden" value="" id="Ruasid_043" name="Ruasid[043]" size="3">Kode Wilayah</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_043" name="Indicator1[043]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_043" name="Indicator2[043]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_043" name="Tags[043]" value="043" class="item"><span class="" id="status_043">
                                                      <input type="hidden" id="message_043" value="Kode Wilayah tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_043" name="TagsValue[043]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_043" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="082_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>082</td>
                                          <td><input type="hidden" value="" id="Ruasid_082" name="Ruasid[082]" size="3">Nomor Panggil Desimal Dewey (DDC)</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_082_0" name="Indicator1[082][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_082_0" name="Indicator2[082][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_082_0" name="Tags[082][0]" value="082_0" class="item"><span class="" id="status_082_0">
                                                      <input type="hidden" id="message_082_0" value="Nomor Panggil Desimal Dewey (DDC) tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_082_0" name="TagsValue[082][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_082_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="084_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>084</td>
                                          <td><input type="hidden" value="" id="Ruasid_084" name="Ruasid[084]" size="3">Nomor Klasifikasi Lainnya</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_084_0" name="Indicator1[084][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_084_0" name="Indicator2[084][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_084_0" name="Tags[084][0]" value="084_0" class="item"><span class="" id="status_084_0">
                                                      <input type="hidden" id="message_084_0" value="Nomor Klasifikasi Lainnya tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" onfocus="AutoCopyCallNumberAdvance(this);" id="TagsValue_084_0" name="TagsValue[084][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_084_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="090_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>090</td>
                                          <td><input type="hidden" value="" id="Ruasid_090_0" name="Ruasid[090][0]" size="3">Nomor Panggil Lokal</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_090_0" name="Indicator1[090][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_090_0" name="Indicator2[090][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_090_0" name="Tags[090][0]" value="090_0" class="item"><span class="" id="status_090_0">
                                                      <input type="hidden" id="message_090_0" value="Nomor Panggil Lokal tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_090_0" name="TagsValue[090][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_090_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="100">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>100</td>
                                          <td><input type="hidden" value="" id="Ruasid_100" name="Ruasid[100]" size="3">Entri Utama -- Nama Orang</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_100" name="Indicator1[100]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_100" name="Indicator2[100]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_100" name="Tags[100]" value="100" class="item"><span class="" id="status_100">
                                                      <input type="hidden" id="message_100" value="Entri Utama -- Nama Orang tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control tajukpengarang" onkeyup="AutoCompleteOn(this,'pengarang');" id="TagsValue_100" name="TagsValue[100]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_100" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="110">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>110</td>
                                          <td><input type="hidden" value="" id="Ruasid_110" name="Ruasid[110]" size="3">Entri Utama Nama Badan Korporasi</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_110" name="Indicator1[110]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_110" name="Indicator2[110]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_110" name="Tags[110]" value="110" class="item"><span class="" id="status_110">
                                                      <input type="hidden" id="message_110" value="Entri Utama Nama Badan Korporasi tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control tajukpengarang" onkeyup="AutoCompleteOn(this,'pengarang');" id="TagsValue_110" name="TagsValue[110]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_110" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="111">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>111</td>
                                          <td><input type="hidden" value="" id="Ruasid_111" name="Ruasid[111]" size="3">Entri Utama -- Nama Pertemuan</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_111" name="Indicator1[111]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_111" name="Indicator2[111]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_111" name="Tags[111]" value="111" class="item"><span class="" id="status_111">
                                                      <input type="hidden" id="message_111" value="Entri Utama -- Nama Pertemuan tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_111" name="TagsValue[111]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_111" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="130">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>130</td>
                                          <td><input type="hidden" value="" id="Ruasid_130" name="Ruasid[130]" size="3">Entri Utama - Judul Seragam</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_130" name="Indicator1[130]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_130" name="Indicator2[130]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_130" name="Tags[130]" value="130" class="item"><span class="" id="status_130">
                                                      <input type="hidden" id="message_130" value="Entri Utama - Judul Seragam tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_130" name="TagsValue[130]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_130" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="240">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>240</td>
                                          <td><input type="hidden" value="" id="Ruasid_240" name="Ruasid[240]" size="3">Judul Seragam</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_240" name="Indicator1[240]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_240" name="Indicator2[240]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_240" name="Tags[240]" value="240" class="item"><span class="" id="status_240">
                                                      <input type="hidden" id="message_240" value="Judul Seragam tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_240" name="TagsValue[240]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_240" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="245">
                                          <td></td>
                                          <td>245</td>
                                          <td><input type="hidden" value="" id="Ruasid_245" name="Ruasid[245]" size="3">Pernyataan Judul</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_245" name="Indicator1[245]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_245" name="Indicator2[245]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_245" name="Tags[245]" value="245" class="item"><span class="required" id="status_245">
                                                      <input type="hidden" id="message_245" value="Pernyataan Judul tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_245" name="TagsValue[245]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_245" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="250">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>250</td>
                                          <td><input type="hidden" value="" id="Ruasid_250" name="Ruasid[250]" size="3">Pernyataan Edisi</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_250" name="Indicator1[250]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_250" name="Indicator2[250]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_250" name="Tags[250]" value="250" class="item"><span class="" id="status_250">
                                                      <input type="hidden" id="message_250" value="Pernyataan Edisi tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_250" name="TagsValue[250]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_250" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="264_0">
                                          <td></td>
                                          <td>264</td>
                                          <td><input type="hidden" value="" id="Ruasid_264" name="Ruasid[264]" size="3">Penerbitan/Produksi/Hak Cipta</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_264_0" name="Indicator1[264][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_264_0" name="Indicator2[264][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_264_0" name="Tags[264][0]" value="264_0" class="item"><span class="required" id="status_264_0">
                                                      <input type="hidden" id="message_264_0" value="Penerbitan/Produksi/Hak Cipta tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_264_0" name="TagsValue[264][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_264_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="300">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>300</td>
                                          <td><input type="hidden" value="" id="Ruasid_300" name="Ruasid[300]" size="3">Deskripsi Fisik</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_300" name="Indicator1[300]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_300" name="Indicator2[300]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_300" name="Tags[300]" value="300" class="item"><span class="" id="status_300">
                                                      <input type="hidden" id="message_300" value="Deskripsi Fisik tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_300" name="TagsValue[300]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_300" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="336_0">
                                          <td></td>
                                          <td>336</td>
                                          <td><input type="hidden" value="" id="Ruasid_336" name="Ruasid[336]" size="3">Jenis Konten</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_336_0" name="Indicator1[336][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_336_0" name="Indicator2[336][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_336_0" name="Tags[336][0]" value="336_0" class="item"><span class="required" id="status_336_0">
                                                      <input type="hidden" id="message_336_0" value="Jenis Konten tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_336_0" name="TagsValue[336][0]" value="$a $2 rdacontent"><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_336_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="337_0">
                                          <td></td>
                                          <td>337</td>
                                          <td><input type="hidden" value="" id="Ruasid_337" name="Ruasid[337]" size="3">Media Type</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_337_0" name="Indicator1[337][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_337_0" name="Indicator2[337][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_337_0" name="Tags[337][0]" value="337_0" class="item"><span class="required" id="status_337_0">
                                                      <input type="hidden" id="message_337_0" value="Media Type tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_337_0" name="TagsValue[337][0]" value="$a $2 rdamedia"><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_337_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="338_0">
                                          <td></td>
                                          <td>338</td>
                                          <td><input type="hidden" value="" id="Ruasid_338" name="Ruasid[338]" size="3">Carrier Type</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_338_0" name="Indicator1[338][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_338_0" name="Indicator2[338][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_338_0" name="Tags[338][0]" value="338_0" class="item"><span class="required" id="status_338_0">
                                                      <input type="hidden" id="message_338_0" value="Carrier Type tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_338_0" name="TagsValue[338][0]" value="$a $2 rdacarrier"><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_338_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="440_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>440</td>
                                          <td><input type="hidden" value="" id="Ruasid_440_0" name="Ruasid[440][0]" size="3">Pernyataan Seri/Entri Tambahan - Judul</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_440_0" name="Indicator1[440][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_440_0" name="Indicator2[440][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_440_0" name="Tags[440][0]" value="440_0" class="item"><span class="" id="status_440_0">
                                                      <input type="hidden" id="message_440_0" value="Pernyataan Seri/Entri Tambahan - Judul tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_440_0" name="TagsValue[440][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_440_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="490_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>490</td>
                                          <td><input type="hidden" value="" id="Ruasid_490_0" name="Ruasid[490][0]" size="3">Pernyataan Seri</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_490_0" name="Indicator1[490][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_490_0" name="Indicator2[490][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_490_0" name="Tags[490][0]" value="490_0" class="item"><span class="" id="status_490_0">
                                                      <input type="hidden" id="message_490_0" value="Pernyataan Seri tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_490_0" name="TagsValue[490][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_490_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="500_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>500</td>
                                          <td><input type="hidden" value="" id="Ruasid_500" name="Ruasid[500]" size="3">Catatan Umum</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_500_0" name="Indicator1[500][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_500_0" name="Indicator2[500][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_500_0" name="Tags[500][0]" value="500_0" class="item"><span class="" id="status_500_0">
                                                      <input type="hidden" id="message_500_0" value="Catatan Umum tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_500_0" name="TagsValue[500][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_500_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="502">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>502</td>
                                          <td><input type="hidden" value="" id="Ruasid_502" name="Ruasid[502]" size="3">Catatan Disertasi</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_502" name="Indicator1[502]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_502" name="Indicator2[502]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_502" name="Tags[502]" value="502" class="item"><span class="" id="status_502">
                                                      <input type="hidden" id="message_502" value="Catatan Disertasi tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_502" name="TagsValue[502]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_502" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="504">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>504</td>
                                          <td><input type="hidden" value="" id="Ruasid_504" name="Ruasid[504]" size="3">Catatan Bibliografi</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_504" name="Indicator1[504]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_504" name="Indicator2[504]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_504" name="Tags[504]" value="504" class="item"><span class="" id="status_504">
                                                      <input type="hidden" id="message_504" value="Catatan Bibliografi tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_504" name="TagsValue[504]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_504" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="505">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>505</td>
                                          <td><input type="hidden" value="" id="Ruasid_505" name="Ruasid[505]" size="3">Catatan Isi</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_505" name="Indicator1[505]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_505" name="Indicator2[505]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_505" name="Tags[505]" value="505" class="item"><span class="" id="status_505">
                                                      <input type="hidden" id="message_505" value="Catatan Isi tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_505" name="TagsValue[505]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_505" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="520_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>520</td>
                                          <td><input type="hidden" value="" id="Ruasid_520" name="Ruasid[520]" size="3">Catatan Ringkasan, Isi, dsb</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_520_0" name="Indicator1[520][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_520_0" name="Indicator2[520][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_520_0" name="Tags[520][0]" value="520_0" class="item"><span class="" id="status_520_0">
                                                      <input type="hidden" id="message_520_0" value="Catatan Ringkasan, Isi, dsb tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_520_0" name="TagsValue[520][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_520_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="521_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>521</td>
                                          <td><input type="hidden" value="" id="Ruasid_521_0" name="Ruasid[521][0]" size="3">Catatan Kelompok Pembaca</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_521_0" name="Indicator1[521][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_521_0" name="Indicator2[521][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_521_0" name="Tags[521][0]" value="521_0" class="item"><span class="" id="status_521_0">
                                                      <input type="hidden" id="message_521_0" value="Catatan Kelompok Pembaca tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_521_0" name="TagsValue[521][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_521_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="600_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>600</td>
                                          <td><input type="hidden" value="" id="Ruasid_600" name="Ruasid[600]" size="3">Entri Tambahan Subjek-Nama orang</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_600_0" name="Indicator1[600][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_600_0" name="Indicator2[600][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_600_0" name="Tags[600][0]" value="600_0" class="item"><span class="" id="status_600_0">
                                                      <input type="hidden" id="message_600_0" value="Entri Tambahan Subjek-Nama orang tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control tajukpengarang" onkeyup="AutoCompleteOn(this,'pengarang');" id="TagsValue_600_0" name="TagsValue[600][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_600_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="610_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>610</td>
                                          <td><input type="hidden" value="" id="Ruasid_610_0" name="Ruasid[610][0]" size="3">Entri Tambahan Subjek-Nama Badan Korporasi</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_610_0" name="Indicator1[610][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_610_0" name="Indicator2[610][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_610_0" name="Tags[610][0]" value="610_0" class="item"><span class="" id="status_610_0">
                                                      <input type="hidden" id="message_610_0" value="Entri Tambahan Subjek-Nama Badan Korporasi tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_610_0" name="TagsValue[610][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_610_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="611_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>611</td>
                                          <td><input type="hidden" value="" id="Ruasid_611_0" name="Ruasid[611][0]" size="3">Entri Tambahan Subjek-Nama Pertemuan</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_611_0" name="Indicator1[611][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_611_0" name="Indicator2[611][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_611_0" name="Tags[611][0]" value="611_0" class="item"><span class="" id="status_611_0">
                                                      <input type="hidden" id="message_611_0" value="Entri Tambahan Subjek-Nama Pertemuan tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_611_0" name="TagsValue[611][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_611_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="630_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>630</td>
                                          <td><input type="hidden" value="" id="Ruasid_630_0" name="Ruasid[630][0]" size="3">Entri Tambahan Subjek-Judul Seragam</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_630_0" name="Indicator1[630][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_630_0" name="Indicator2[630][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_630_0" name="Tags[630][0]" value="630_0" class="item"><span class="" id="status_630_0">
                                                      <input type="hidden" id="message_630_0" value="Entri Tambahan Subjek-Judul Seragam tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_630_0" name="TagsValue[630][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_630_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="650_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>650</td>
                                          <td><input type="hidden" value="" id="Ruasid_650" name="Ruasid[650]" size="3">Entri Tambahan Subjek-Topik</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_650_0" name="Indicator1[650][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_650_0" name="Indicator2[650][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_650_0" name="Tags[650][0]" value="650_0" class="item"><span class="" id="status_650_0">
                                                      <input type="hidden" id="message_650_0" value="Entri Tambahan Subjek-Topik tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control tajuksubyek" onkeyup="AutoCompleteOn(this,'subyek');" id="TagsValue_650_0" name="TagsValue[650][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_650_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="651_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>651</td>
                                          <td><input type="hidden" value="" id="Ruasid_651" name="Ruasid[651]" size="3">Entri Tambahan Subjek-Nama Geografis</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_651_0" name="Indicator1[651][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_651_0" name="Indicator2[651][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_651_0" name="Tags[651][0]" value="651_0" class="item"><span class="" id="status_651_0">
                                                      <input type="hidden" id="message_651_0" value="Entri Tambahan Subjek-Nama Geografis tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control tajuksubyek" onkeyup="AutoCompleteOn(this,'subyek');" id="TagsValue_651_0" name="TagsValue[651][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_651_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="700_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>700</td>
                                          <td><input type="hidden" value="" id="Ruasid_700" name="Ruasid[700]" size="3">Entri Tambahan-Nama Orang</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_700_0" name="Indicator1[700][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_700_0" name="Indicator2[700][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_700_0" name="Tags[700][0]" value="700_0" class="item"><span class="" id="status_700_0">
                                                      <input type="hidden" id="message_700_0" value="Entri Tambahan-Nama Orang tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control tajukpengarang" onkeyup="AutoCompleteOn(this,'pengarang');" id="TagsValue_700_0" name="TagsValue[700][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_700_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="710_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>710</td>
                                          <td><input type="hidden" value="" id="Ruasid_710" name="Ruasid[710]" size="3">Entri Tambahan-Nama Badan Korporasi</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_710_0" name="Indicator1[710][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_710_0" name="Indicator2[710][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_710_0" name="Tags[710][0]" value="710_0" class="item"><span class="" id="status_710_0">
                                                      <input type="hidden" id="message_710_0" value="Entri Tambahan-Nama Badan Korporasi tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control tajukpengarang" onkeyup="AutoCompleteOn(this,'pengarang');" id="TagsValue_710_0" name="TagsValue[710][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_710_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="711_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>711</td>
                                          <td><input type="hidden" value="" id="Ruasid_711" name="Ruasid[711]" size="3">Entri Tambahan - Nama Pertemuan</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_711_0" name="Indicator1[711][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_711_0" name="Indicator2[711][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_711_0" name="Tags[711][0]" value="711_0" class="item"><span class="" id="status_711_0">
                                                      <input type="hidden" id="message_711_0" value="Entri Tambahan - Nama Pertemuan tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_711_0" name="TagsValue[711][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_711_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="730_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>730</td>
                                          <td><input type="hidden" value="" id="Ruasid_730_0" name="Ruasid[730][0]" size="3">Entri Tambahan-Judul Seragam</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_730_0" name="Indicator1[730][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_730_0" name="Indicator2[730][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_730_0" name="Tags[730][0]" value="730_0" class="item"><span class="" id="status_730_0">
                                                      <input type="hidden" id="message_730_0" value="Entri Tambahan-Judul Seragam tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_730_0" name="TagsValue[730][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_730_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="740_0">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>740</td>
                                          <td><input type="hidden" value="" id="Ruasid_740" name="Ruasid[740]" size="3">Entri tambahan-Judul lain</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_740_0" name="Indicator1[740][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_740_0" name="Indicator2[740][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal"></a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_740_0" name="Tags[740][0]" value="740_0" class="item"><span class="" id="status_740_0">
                                                      <input type="hidden" id="message_740_0" value="Entri tambahan-Judul lain tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_740_0" name="TagsValue[740][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_740_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="800_0" class="item">
                                          <td><button class="btn btn-danger" type="button""><i class=" fa fa-trash"></i></button></td>
                                          <td>800</td>
                                          <td><input type="hidden" value="" id="Ruasid_800_0" name="Ruasid[800][0]" size="3">Entri Tambahan Seri-Nama Orang</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_800_0" name="Indicator1[800][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_800_0" name="Indicator2[800][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_800_0" name="Tags[800][0]" value="800_0" class="item"><span class="" id="status_800_0">
                                                      <input type="hidden" id="message_800_0" value="Entri Tambahan Seri-Nama Orang tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_800_0" name="TagsValue[800][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_800_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="810_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>810</td>
                                          <td><input type="hidden" value="" id="Ruasid_810_0" name="Ruasid[810][0]" size="3">Entri Tambahan Seri-Nama Badan Korporasi</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_810_0" name="Indicator1[810][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_810_0" name="Indicator2[810][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_810_0" name="Tags[810][0]" value="810_0" class="item"><span class="" id="status_810_0">
                                                      <input type="hidden" id="message_810_0" value="Entri Tambahan Seri-Nama Badan Korporasi tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_810_0" name="TagsValue[810][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_810_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="830_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>830</td>
                                          <td><input type="hidden" value="" id="Ruasid_830_0" name="Ruasid[830][0]" size="3">Entri Tambahan Seri-Judul Seragam</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_830_0" name="Indicator1[830][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_830_0" name="Indicator2[830][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_830_0" name="Tags[830][0]" value="830_0" class="item"><span class="" id="status_830_0">
                                                      <input type="hidden" id="message_830_0" value="Entri Tambahan Seri-Judul Seragam tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_830_0" name="TagsValue[830][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_830_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="850_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>850</td>
                                          <td><input type="hidden" value="" id="Ruasid_850_0" name="Ruasid[850][0]" size="3">Badan yang Memiliki</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_850_0" name="Indicator1[850][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_850_0" name="Indicator2[850][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_850_0" name="Tags[850][0]" value="850_0" class="item"><span class="" id="status_850_0">
                                                      <input type="hidden" id="message_850_0" value="Badan yang Memiliki tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_850_0" name="TagsValue[850][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_850_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                                    <tr id="990_0" class="item">
                                          <td><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
                                          <td>990</td>
                                          <td><input type="hidden" value="" id="Ruasid_990_0" name="Ruasid[990][0]" size="3">Nomor induk</td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator1_990_0" name="Indicator1[990][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <div class="input-group">
                                                      <input type="text" class="form-control" id="Indicator2_990_0" name="Indicator2[990][0]" value="#" maxlength="1">
                                                      <span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal" data-target="#helper-modal">...</a>
                                                      </span>
                                                </div>
                                          </td>
                                          <td>
                                                <input type="hidden" id="Tags_990_0" name="Tags[990][0]" value="990_0" class="item"><span class="" id="status_990_0">
                                                      <input type="hidden" id="message_990_0" value="Nomor induk tidak boleh kosong!">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="TagsValue_990_0" name="TagsValue[990][0]" value="$a "><span class="input-group-btn"><a class="btn bg-purple" href="javascript:void(0)" title="Pick" data-toggle="modal">...</a>
                                                            </span>
                                                      </div>
                                                      <div id="error_990_0" class="help-block"></div>
                                                </span>
                                          </td>
                                    </tr>
                              </tbody>
                        </table>
`;

  let formapp = $("#form-app"),
    ajax,
    dataform;

  localStorage.setItem("simple", simple);
  localStorage.setItem("marc", marc);

  $("#btn-marc").click(function (e) {
    e.preventDefault();
    // $("#spinner").removeClass("d-none");
    let form = $("#form-body");
    let spinner = $("#spinner");
    let type = form.attr("data-type");

    spinner.removeClass("d-none");

    setTimeout(() => {
      switch (type) {
        case "simple":
          localStorage.setItem("simple", form.html());
          form.html(localStorage.getItem("marc"));
          form.attr("data-type", "marc");
          $(this).text("Tampilkan Sederhana");
          break;
        case "marc":
          localStorage.setItem("marc", form.html());
          form.html(localStorage.getItem("simple"));
          form.attr("data-type", "simple");
          $(this).text("Tampilkan MARC");
          break;

        default:
          break;
      }
      spinner.addClass("d-none");
    }, 1500);
  });

  $("#add-subject").click(function () {
    let SubjectLength = $(".subject-input").length;
    SubjectLength++;

    console.log(SubjectLength);

    let SubjectHtml =
      '<div id="subject-input-' +
      SubjectLength +
      '" class="form-group subject-input"><div class="row"><div class="col-md-2"><select name="subject[tag[]]" class="form-control dropdown-subject"><option></option><option value="1">Value</option><option value="2">Value1</option><option value="3">Value2</option><option value="4">Value3</option></select></div><div class="col-md-10 input-group"><input type="text" class="form-control"  name="subject[desc[]]"><small id="subject-feedback" class="text-danger"></small><div class="input-group-append"><button class="btn btn-sm btn-light remove-subject" data-target="#subject-input-' +
      SubjectLength +
      '" type="button"><i class="fa fa-minus m-1"></i></button></div></div></div></div>';

    $("#subject-append").append(SubjectHtml);
    $(".dropdown-subject").select2({
      width: "100%",
      placeholder: "Subjek",
      theme: "bootstrap",
    });
    // alert(i);
  });

  $(document).on("click", ".remove-subject", function () {
    let target = $(this).closest(".remove-subject").attr("data-target");
    console.log(target);
    $(target).remove();
  });

  formapp.on("submit", (e) => {
    e.preventDefault();

    formData = new FormData(formapp[0]);
    ajax = xhr({
      url: "/katalog-aacr/create/action",
      data: formData,
    });

    ajax.done(function (res) {
      console.log(res);
      console.log("submit");
    });
  });

  function xhr(params) {
    return $.ajax({
      type: "POST",
      url: window.location.origin + params.url,
      data: params.data,
      processData: false,
      contentType: false,
      dataType: "JSON",
    });
  }
});
