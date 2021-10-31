<?php
// isset($title) ? dd($title['previoustitle']) : dd('empty');
// die;
?>
<!-- Judul -->
<div id="title-accordion" class="accordion-wrapper mb-3">
    <div class="card">
        <div class="card-header">
            <button type="button" data-toggle="collapse" data-target="#title-body" aria-expanded="true" class="btn btn-link">
                <h4 class="card-title">Judul</h4>
            </button>
        </div>
        <div id="title-body" class="card-body collapse show" data-parent="#title-accordion">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Judul Utama</label>
                <input type="text" class="form-control" id="title" name="title[a]" placeholder="Judul Utama" value="<?= is_array($title) ? $title['title'] : '' ?>">
                <small id="title-feedback" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Anak Judul</label>
                <input type="text" class="form-control" id="child-title" name="title[b]" placeholder="Anak Judul" value="<?= is_array($title) ? $title['childtitle'] : '' ?>">
                <small id="child-title-feedback" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Penanggung Jawab</label>
                <input type="text" class="form-control" id="heldby" name="title[c]" placeholder="Penanggung Jawab" value="<?= is_array($title) ? $title['heldby'] : '' ?>">
                <small id="heldby-feedback" class="text-danger"></small>
            </div>
            <div id="previous-title-append">
                <div class="form-group previoustitle">
                    <label for="recipient-name" class="col-form-label">Judul Sebelumnya</label>
                    <div class="input-group">
                        <input type="text" class="form-control previous-title" name="previous-title[]" placeholder="Judul Sebelumnya" value="<?= is_array($title) ? $title['previoustitle'][0] : '' ?>">
                        <small id="previous-title-feedback" class="text-danger"></small>
                        <div class="input-group-append">
                            <button id="add-previous-title" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                        </div>
                    </div>
                </div>
                <?php if (is_array($title)) : ?>
                    <?php
                    if (count($title['previoustitle']) > 0) :
                        for ($i = 1; $i < count($title['previoustitle']); $i++) :
                    ?>
                            <div id="previous-title-<?= $i ?>" class="form-group previoustitle">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control previous-title" name="previous-title[]" placeholder="Judul Sebelumnya" value="<?= $title['previoustitle'][$i] ?>">
                                        <div class="input-group-append">
                                            <button id="add-previous-title" class="btn btn-sm btn-light remove-previous-title" data type="button" data-target="#previous-title-<?= $i ?>"><i class="fa fa-minus m-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endfor;
                    endif;
                    ?>
                <?php endif;  ?>
            </div>
        </div>
    </div>
</div>
<!-- end of Judul -->

<!-- Tajuk Pengarang -->
<div id="author-accordion" class="accordion-wrapper mb-3">
    <div class="card">
        <div class="card-header">
            <button type="button" data-toggle="collapse" data-target="#author-body" aria-expanded="true" class="btn btn-link">
                <h4 class="card-title">Tajuk Pengarang</h4>
            </button>
        </div>
        <div id="author-body" class="card-body collapse" data-parent="#author-accordion">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tajuk Pengarang Utama</label>
                <div class="row">
                    <div class="col-md-4">
                        <select id="author-option" name="author[option]" class="form-control opt author-option" data-placeholder="Indikator">
                            <option value="1" <?= isset($author) ? ($author['input'] == '1' ? 'selected' : '') : ''  ?>>Nama Orang</option>
                            <option value="2" <?= isset($author) ? ($author['input'] == '2' ? 'selected' : '') : ''  ?>>Nama Badan</option>
                            <option value="3" <?= isset($author) ? ($author['input'] == '3' ? 'selected' : '') : ''  ?>>Nama Pertemuan</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control author-input" id="author-input" name="author[100]" placeholder="Tajuk Pengarang Utama">
                        <small id="main-creator-feedback" class="text-danger"></small>
                    </div>
                </div>

                <div class="input-radio p-2 bg-light">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="author-radio" class="form-check-input author-radio" type="radio" name="author[radio]" value="0" <?= isset($author) ? ($author['radio'] == '0' ? 'checked' : "") : "checked" ?>>
                                    Nama Depan
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="author-radio" class="form-check-input author-radio" type="radio" name="author[radio]" value="1" <?= isset($author) ? ($author['radio'] == '1' ? 'checked' : "") : "" ?>>
                                    Nama Belakang
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="author-radio" class="form-check-input author-radio" type="radio" name="author[radio]" value="2" <?= isset($author) ? ($author['radio'] == '2' ? 'checked' : "") : "" ?>>
                                    Nama Keluarga
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tajuk Pengarang Tambahan</label>
                <div id="addition-author-append">
                    <div class="additional-author-wrapper">
                        <div class="row">
                            <div class="col-md-4">
                                <select name="additional-author[option][]" class="form-control opt additional-author-option" data-placeholder="Indikator">
                                    <option value="1" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['select'] == '1' ? 'selected' : '') : ''  ?>>Nama Orang</option>
                                    <option value="2" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['select'] == '2' ? 'selected' : '') : ''  ?>>Nama Badan</option>
                                    <option value="3" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['select'] == '3' ? 'selected' : '') : ''  ?>>Nama Pertemuan</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control additional-author-input" name="additional-author[input][]" placeholder="Tajuk Pengarang Tambahan" value="<?= isset($additionalAuthor) ? $additionalAuthor[0]['input'] : '' ?>">
                                    <div class="input-group-append">
                                        <button id="add-additional-author" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-radio p-2 bg-light">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][0]" value="0" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['radio'] == '0' ? 'checked' : '') : 'checked'  ?>>
                                            Nama Depan
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][0]" value="1" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['radio'] == '1' ? 'checked' : '') : ''  ?>>
                                            Nama Belakang
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][0]" value="2" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['radio'] == '2' ? 'checked' : '') : ''  ?>>
                                            Nama Keluarga
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (isset($additionalAuthor)) : ?>
                <div id="addition-author-append">
                    <?php for ($i = 1; $i < count($additionalAuthor); $i++) : ?>
                        <div class="additional-author-wrapper" id="additional-author-<?= $i ?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="additional-author[option][]" class="form-control opt additional-author-option" data-placeholder="Indikator">
                                        <option value="1" <?= $additionalAuthor[$i]['select'] == '1' ? 'selected' : ''  ?>>Nama Orang</option>
                                        <option value="2" <?= $additionalAuthor[$i]['select'] == '2' ? 'selected' : ''  ?>>Nama Badan</option>
                                        <option value="3" <?= $additionalAuthor[$i]['select'] == '3' ? 'selected' : ''  ?>>Nama Pertemuan</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control additional-author-input" name="additional-author[input][]" placeholder="Tajuk Pengarang Tambahan" value="<?= $additionalAuthor[$i]['input'] ?>">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-light  remove-additional-author" type="button" data-target="#additional-author-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-radio p-2 bg-light">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][<?= $i ?>]" value="0" <?= $additionalAuthor[$i]['select'] == '0' ? 'selected' : ''  ?>>
                                                Nama Depan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][<?= $i ?>]" value="1" <?= $additionalAuthor[$i]['select'] == '1' ? 'selected' : ''  ?>>
                                                Nama Belakang
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][<?= $i ?>]" value="2" <?= $additionalAuthor[$i]['select'] == '2' ? 'selected' : ''  ?>>
                                                Nama Keluarga
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- end of Tajuk Pengarang -->

<!-- Publisher -->
<div id="publisher-accordion" class="accordion-wrapper mb-3">
    <div class="card">
        <div class="card-header">
            <button type="button" data-toggle="collapse" data-target="#publisher-body" aria-expanded="true" class="btn btn-link">
                <h4 class="card-title">Penerbitan/Publikasi</h4>
            </button>
        </div>
        <div id="publisher-body" class="card-body collapse" data-parent="#publisher-accordion">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tempat</label>
                <input type="text" class="form-control publisher" id="place" name="publisher[a]" placeholder="Tempat Terbit" value="<?= isset($place) ? $place : '' ?>">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Penerbit</label>
                <input type="text" class="form-control publisher" id="name" name="publisher[b]" placeholder="Penerbit" value="<?= isset($name) ? $name : '' ?>">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tahun</label>
                <input type="text" class="form-control publisher" id="year" name="publisher[c]" placeholder="Tahun Terbit" value="<?= isset($year) ? $year : '' ?>">
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Frekuensi Saat Ini</label>
                <input type="text" class="form-control publisher" id="current-frequency" name="frequency[current]" placeholder="Frekuensi Saat Ini" value="<?= isset($currentfreq) ? $currentfreq : '' ?>">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Frekuensi Publikasi Sebelumnya</label>
                <input type="text" class="form-control publisher" id="previous-frequency" name="frequency[previous]" placeholder="Frekuensi Publikasi Sebelumnya" value="<?= isset($previousfreq) ? $previousfreq : '' ?>">
            </div>
        </div>
    </div>
</div>
<!-- end of Publisher -->

<!-- Description -->
<div id="desc-accordion" class="accordion-wrapper mb-3">
    <div class="card">
        <div class="card-header">
            <button type="button" data-toggle="collapse" data-target="#desc-body" aria-expanded="true" class="btn btn-link">
                <h4 class="card-title">Deskripsi Fisik</h4>
            </button>
        </div>
        <div id="desc-body" class="card-body collapse" data-parent="#desc-accordion">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Jumlah Halaman</label>
                <input type="text" class="form-control description" id="page" name="physical-description[a]" placeholder="Jumlah Halaman" value="<?= isset($page) ? $page : '' ?>">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Ket. Ilustarsi</label>
                <input type="text" class="form-control description" id="illustration" name="physical-description[b]" placeholder="Ket. Ilustrasi" value="<?= isset($illustration) ? $illustration : '' ?>">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Dimensi</label>
                <input type="text" class="form-control description" id="dimention" name="physical-description[c]" placeholder="Dimensi" value="<?= isset($dimention) ? $dimention : '' ?>">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Bahan Sertaan</label>
                <input type="text" class="form-control description" id="accompanying-material" name="physical-description[e]" placeholder="Bahan Sertaan" value="<?= isset($accompanyingmaterial) ? $accompanyingmaterial : '' ?>">
            </div>
        </div>
    </div>
</div>
<!-- end of Description -->

<!-- Detail 1 -->
<div id="detail1-accordion" class="accordion-wrapper mb-3">
    <div class="card">
        <div class="card-header">
            <button type="button" data-toggle="collapse" data-target="#detail1-body" aria-expanded="true" class="btn btn-link">
                <h4 class="card-title">Detail Subjek</h4>
            </button>
        </div>
        <div id="detail1-body" class="card-body collapse" data-parent="#detail1-accordion">
            <div id="subject-append">
                <div id="subject-input-0" class="form-group  subject-input">
                    <label for="recipient-name" class="col-form-label">Subjek</label>
                    <div class="row">
                        <div class="col-md-2">
                            <select name="subject[tag][]" class="form-control dropdown-subject">
                                <option value="600" <?= isset($subject) ? ($subject[0]['select'] == '600' ? 'selected' : '') : '' ?>>Nama Orang</option>
                                <option value="650" <?= isset($subject) ? ($subject[0]['select'] == '650' ? 'selected' : '') : '' ?>>Topikal</option>
                            </select>
                        </div>
                        <div class="col-md-10 input-group">
                            <input type="text" class="form-control subject" name="subject[desc][]" placeholder="Subjek" <?= isset($subject) ? $subject[0]['input'] : '' ?>>
                            <small id="subject-feedback" class="text-danger"></small>
                            <div class="input-group-append">
                                <button id="add-subject" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (isset($subject)) : ?>
                    <?php for ($i = 1; $i < count($subject); $i++) : ?>
                        <div id="subject-input-<?= $i ?>" class="form-group  subject-input">
                            <label for="recipient-name" class="col-form-label">Subjek</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <select name="subject[tag][]" class="form-control dropdown-subject">
                                        <option value="600" <?= $subject[$i]['select'] == '600' ? 'selected' : '' ?>>Nama Orang</option>
                                        <option value="650" <?= $subject[$i]['select'] == '650' ? 'selected' : '' ?>>Topikal</option>
                                    </select>
                                </div>
                                <div class="col-md-10 input-group">
                                    <input type="text" class="form-control subject" name="subject[desc][]" placeholder="Subjek" <?= $subject[$i]['input'] ?>>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-light remove-subject" type="button" data-target="#subject-input-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">No. Klas DDC</label>
                <input type="text" class="form-control" id="class-ddc" name="class-ddc" placeholder="DeweyNo" value="<?= isset($ddc) ? $ddc : '' ?>">
                <small id="class-ddc-feedback" class="text-danger"></small>
            </div>
            <div id="call-number-append" class="form-group" data-total="1">
                <div id="call-number-0" class="form-group">
                    <label for="recipient-name" class="col-form-label">No. Panggil</label>
                    <div class="input-group">
                        <input type="text" class="form-control callnumber" name="callnumber[]" placeholder="No. Panggil" value="<?= isset($callnumber) ? $callnumber[0] : '' ?>">
                        <small id="callno-feedback" class="text-danger"></small>
                        <div class="input-group-append">
                            <button id="callnumber" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                        </div>
                    </div>
                </div>
                <?php if (isset($callnumber)) : ?>
                    <?php for ($i = 1; $i < count($callnumber); $i++) : ?>
                        <div id="call-number-<?= $i ?>" class="form-group">
                            <label for="recipient-name" class="col-form-label">No. Panggil</label>
                            <div class="input-group">
                                <input type="text" class="form-control callnumber" name="callnumber[]" placeholder="No. Panggil" value="<?= isset($callnumber) ? $callnumber[$i] : '' ?>">
                                <small id="callno-feedback" class="text-danger"></small>
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-light remove-call-number" type="button" data-target="#call-number-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
            <div id="issn-append" class="form-group" data-total="1">
                <div id="issn-0" class="form-group">
                    <label for="recipient-name" class="col-form-label">ISSN</label>
                    <div class="input-group">
                        <input type="text" class="form-control issn" name="issn[]" placeholder="ISSN" value="<?= isset($issn) ? $issn[0] : '' ?>">
                        <small id="issn-feedback" class="text-danger"></small>
                        <div class="input-group-append">
                            <button id="add-issn" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                        </div>
                    </div>
                </div>
                <?php if (isset($issn)) : ?>
                    <?php for ($i = 1; $i < count($issn); $i++) : ?>
                        <div id="issn-<?= $i ?>" class="form-group">
                            <label for="recipient-name" class="col-form-label">ISSN</label>
                            <div class="input-group">
                                <input type="text" class="form-control issn" name="issn[]" placeholder="ISSN" value="<?= $issn[$i] ?>">
                                <small id="issn-feedback" class="text-danger"></small>
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-light remove-issn" type="button" data-target="#issn-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- end of Detail 1 -->

<!-- Notes -->
<div id="notes-accordion" class="accordion-wrapper mb-3">
    <div class="card">
        <div class="card-header">
            <button type="button" data-toggle="collapse" data-target="#notes-body" aria-expanded="true" class="btn btn-link">
                <h4 class="card-title">Catatan</h4>
            </button>
        </div>
        <div id="notes-body" class="card-body collapse" data-parent="#notes-accordion">
            <div id="note-append" data-total="1">
                <div class="form-group notes mb-0">
                    <label for="recipient-name" class="col-form-label">Catatan</label>
                    <div class="input-group">
                        <input type="text" class="form-control note" name="notes[input][]" placeholder="Catatan" value="<?= isset($notes) ? $notes[0]['input'] : "" ?>">
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
                                        <input class="form-check-input note-radio" type="radio" name="notes[radio][0]" value="0" <?= isset($notes) ? ($notes[0]['radio'] == '0' ? 'checked' : "") : "checked" ?>>
                                        Abstrak/Anotasi
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-4 py-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input  note-radio" type="radio" name="notes[radio][0]" value="1" <?= isset($notes) ? ($notes[0]['radio'] == '1' ? 'checked' : "") : "" ?>>
                                        Catatan Disertasi
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-4 py-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input  note-radio" type="radio" name="notes[radio][0]" value="2" <?= isset($notes) ? ($notes[0]['radio'] == '2' ? 'checked' : "") : "" ?>>
                                        Catatan Bibliografi
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-4 py-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input  note-radio" type="radio" name="notes[radio][0]" value="3" <?= isset($notes) ? ($notes[0]['radio'] == '3' ? 'checked' : "") : "" ?>>
                                        Rincian Isi
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-4 py-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input  note-radio" type="radio" name="notes[radio][0]" value="4" <?= isset($notes) ? ($notes[0]['radio'] == '4' ? 'checked' : "") : "" ?>>
                                        Catatan Umum
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (isset($notes)) :  ?>
                    <?php for ($i = 1; $i < count($notes); $i++) :  ?>

                        <div id="notes-<?= $i ?>" class="form-group notes mb-0">
                            <div class="input-group">
                                <input type="text" class="form-control note" name="notes[input][]" placeholder="Catatan" value="<?= isset($notes) ? $notes[$i]['input'] : "" ?>">
                                <small id="note-feedback" class="text-danger"></small>
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-light remove-notes" type="button" data-target="#notes-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
                                </div>
                            </div>

                            <div class="input-radio p-2 bg-light">
                                <div class="row">
                                    <div class="col-sm-4 py-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="0" <?= isset($notes) ? ($notes[$i]['radio'] == '0' ? 'checked' : "") : "" ?>>
                                                Abstrak/Anotasi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 py-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="1" <?= isset($notes) ? ($notes[$i]['radio'] == '1' ? 'checked' : "") : "" ?>>
                                                Catatan Disertasi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 py-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="2" <?= isset($notes) ? ($notes[$i]['radio'] == '2' ? 'checked' : "") : "" ?>>
                                                Catatan Bibliografi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 py-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="3" <?= isset($notes) ? ($notes[$i]['radio'] == '3' ? 'checked' : "") : "" ?>>
                                                Rincian Isi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 py-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="4" <?= isset($notes) ? ($notes[$i]['radio'] == '4' ? 'checked' : "") : "" ?>>
                                                Catatan Umum
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- end of Notes -->

<!-- Detail 2 -->
<div id="detail2-accordion" class="accordion-wrapper mb-3">
    <div class="card">
        <div class="card-header">
            <button type="button" data-toggle="collapse" data-target="#detail2-body" aria-expanded="true" class="btn btn-link">
                <h4 class="card-title">Rincian</h4>
            </button>
        </div>
        <div id="detail2-body" class="card-body collapse" data-parent="#detail2-accordion">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Bahasa</label>
                <select name="opt-language" class="form-control opt detail">
                    <?php foreach ($languages as $language) :  ?>
                        <option value="<?= $language['Code'] ?>" <?= isset($lang) ? ($lang == $language['Code'] ? 'selected' : "") : "" ?>><?= $language['Code'] ?> - <?= $language['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Bentuk Karya Tulis</label>
                <select name="paper-form" class="form-control opt detail">
                    <?php foreach ($papers as $ppr) :  ?>
                        <option value="<?= $ppr['Code'] ?>" <?= isset($paper) ? ($paper == $ppr['Code'] ? 'selected' : "") : "" ?>><?= $ppr['Code'] ?> - <?= $ppr['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Kelompok Sasaran</label>
                <select name="target-group" class="form-control opt detail">
                    <?php foreach ($targets as $tg) :  ?>
                        <option value="<?= $tg['Code'] ?>" <?= isset($target) ? ($target == $tg['Code'] ? 'selected' : "") : "" ?>><?= $tg['Code'] ?> - <?= $tg['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <small id="target-group-feedback" class="text-danger"></small>
            </div>
        </div>
    </div>
</div>
<!-- end of Detail 2 -->

<!-- Location -->
<div id="location-accordion" class="accordion-wrapper mb-3">
    <div class="card mb-3">
        <div class="card-header">
            <button type="button" data-toggle="collapse" data-target="#location-body" aria-expanded="true" class="btn btn-link">
                <h4 class="card-title">Lokasi Koneksi Daring</h4>
            </button>
        </div>
        <div id="location-body" class="card-body collapse" data-parent="#location-accordion">
            <div id="location-append">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Lokasi Koneksi Daring</label>
                    <div class="input-group">
                        <input type="text" class="form-control location" name="location[]" placeholder="Lokasi Koneksi Daring" value="<?= isset($location) ? $location[0] : '' ?>">
                        <small id="location-feedback" class="text-danger"></small>
                        <div class="input-group-append">
                            <button id="add-location" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
                        </div>
                    </div>
                    <?php if (isset($location)) : ?>
                        <?php for ($i = 1; $i < count($location); $i++) : ?>
                            <div id="location-<?= $i ?>" class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control location" name="location[]" placeholder="Lokasi Koneksi Daring" value="<?= $location[$i] ?>">
                                    <small id="location-feedback" class="text-danger"></small>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-light remove-location" type="button" data-target="#location-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of Location -->