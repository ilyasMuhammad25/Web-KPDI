<form id="myform" class="col-md-12 mx-auto" method="post" action="<?=base_url('anggota/create');?>">
    <!-- info personal -->
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" class="accordion-wrapper mb-3">
                <div class="card">
                    <div class="card-header-tab card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapse_madatory0"
                            aria-expanded="true" aria-controls="collapse_madatory"
                            class="text-left m-0 p-0 btn btn-link">
                            <h5 class="m-0 p-0">
                                <i class="header-icon lnr-layers icon-gradient bg-primary">
                                </i>
                                Info Personal
                            </h5>
                        </button>
                    </div>
                    <div data-parent="#accordion" id="collapse_madatory0" class="collapse show" style="">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name"><?=lang('Anggota.field.name')?>*</label>
                                        <div>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="<?=lang('Anggota.field.name')?>"
                                                value="<?=set_value('name');?>" />
                                            <!-- <small class="info help-block text-muted"><?=lang('Anggota.field.name')?></small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label><?=lang('Anggota.field.Jenisidentitas')?></label>
                                        <select class="form-control" name="ref_identitas" id="ref_identitas"
                                            tabindex="-1" aria-hidden="true"
                                            placeholder="<?=lang('Anggota.field.Jenisidentitas')?>">
                                            <option value="" disabled selected>
                                                <?=lang('Anggota.field.Jenisidentitas')?>
                                            </option>
                                            <?php foreach ($ref_identitas as $row): ?>
                                            <option value="<?=$row->id?>"><?=$row->name?>
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">Nomor Identitas</label>
                                        <div>
                                            <input type="text" class="form-control" id="frm_create_IdentityNo"
                                                name="IdentityNo" placeholder="Nomor identitas"
                                                value="<?=set_value('IdentityNo');?>" />
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
                                                value="<?=set_value('PlaceOfBirth');?>" />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group" id="tgl1">
                                        <label for="name"><?=lang('Anggota.field.DateOfBirth')?></label>
                                        <div>
                                            <!-- <input class="result" type="text" id="date-time" placeholder="Date Picker..."> -->
                                            <input type="date" class="form-control" id="date-time" name="DateOfBirth"
                                                placeholder="Tanggal Lahir" value="<?=set_value('DateOfBirth');?>" />
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
                                            <?php foreach ($ref_perkawinan as $row): ?>
                                            <option value="<?=$row->id?>"><?=$row->name?>
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label><?=lang('Anggota.field.Agama')?></label>
                                        <select class="form-control" name="ref_agama" id="ref_agama" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="" disabled selected><?=lang('Anggota.field.Agama')?>
                                            </option>
                                            <?php foreach ($ref_agama as $row): ?>
                                            <option value="<?=$row->id?>"><?=$row->name?>
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label><?=lang('Anggota.field.Jeniskelamin')?></label>
                                        <select class="form-control" name="ref_jeniskelamin" id="ref_jeniskelamin"
                                            tabindex="-1" aria-hidden="true"
                                            placeholder="<?=lang('Anggota.field.Jeniskelamin')?>">
                                            <?php foreach ($ref_jeniskelamin as $row): ?>
                                            <option value="<?=$row->id?>"><?=$row->name?>
                                            </option>
                                            <?php endforeach;?>
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
                                        <label for="name">Email*</label>
                                        <div>
                                            <input type="email" class="form-control" id="Email" name="Email"
                                                placeholder="Email" value="<?=set_value('Email');?>" />
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">No. Telepon</label>
                                        <div>
                                            <input type="text" class="form-control" id="frm_create_NoHp" name="NoHp"
                                                placeholder="No. Telepon" value="<?=set_value('NoHp');?>" />
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
    <!-- info anggota -->
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" class="accordion-wrapper mb-3">
                <div class="card">
                    <div class="card-header-tab card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapse_madatory"
                            aria-expanded="true" aria-controls="collapse_madatory"
                            class="text-left m-0 p-0 btn btn-link">
                            <h5 class="m-0 p-0">
                                <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                                Info Anggota
                            </h5>
                        </button>
                    </div>
                    <div data-parent="#accordion" id="collapse_madatory" class="collapse show" style="">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">Nomor Anggota*</label>
                                        <div>
                                            <input type="text" class="form-control" id="frm_create_MemberNo"
                                                name="MemberNo" placeholder="No. anggota"
                                                value="<?=set_value('MemberNo');?>" />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <div>
                                            <label><?=lang('Anggota.field.Jenisanggota')?>*</label>
                                            <select class="form-control" id="package" onchange="myFunction();"
                                                name="ref_jenisanggota" id="ref_jenisanggota" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="">
                                                    <?=lang('Anggota.field.Jenisanggota')?>
                                                </option>

                                                <?php foreach(get_dropdown2('m_jenis_anggota') as $row):?>
                                                <option data-date="<?= $row->expiry_days ?>" data-url="<?=base_url('api/anggota/get_date')?>"
                                                 value="<?=$row->code?>">
                                                    <?=$row->text?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name"><?=lang('Anggota.field.Tanggalpendaftaran')?></label>
                                        <div>
                                            <input type="text" class="form-control datepicker" id="frm_create_RegisterDate"
                                                name="RegisterDate" placeholder="Tanggal Daftar" value="<?=$date;?>"
                                                readonly />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name"><?=lang('Anggota.field.Masaberlaku')?></label>
                                        <div>
                                            <input type="text" class="form-control" id="EndDate"
                                                name="EndDate" placeholder=<?=lang('Anggota.field.Masaberlaku')?>
                                                value="" readonly />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label><?=lang('Anggota.field.Statusanggota')?></label>
                                        <select class="form-control" name="ref_Statusanggota" id="ref_Statusanggota"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="" disabled selected>
                                                <?=lang('Anggota.field.Statusanggota')?>
                                            </option>
                                            <?php foreach ($ref_Statusanggota as $row): ?>
                                            <option value="<?=$row->id?>"> <?=$row->name?>
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name"><?=lang('Anggota.field.Biayapendaftaran')?></label>
                                        <div>
                                            <input type="number" class="form-control" id="frm_create_BiayaPendaftaran"
                                                name="BiayaPendaftaran"
                                                placeholder=<?=lang('Anggota.field.Biayapendaftaran')?>
                                                value="<?=set_value('BiayaPendaftaran');?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
									<div class="position-relative form-group">
										<label><?=lang('anggota.field.library')?>*</label>
										<div class="select-wrapper">
											<select class="form-control select2"
												name="Location_loan_id[]" multiple="multiple" tabindex="-1"
												aria-hidden="true" style="width:100%">
												<option value="">-Pilih-</option>
												<?php foreach(get_dropdown('m_lokasiperpustakaan') as $row):?>
												<option value="<?=$row->code?>"><?=$row->text?></option>
												<?php endforeach;?>
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
    </div>
    <!-- end info anggota -->
    <!-- info alamat -->
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" class="accordion-wrapper mb-3">
                <div class="card">
                    <div class="card-header-tab card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapse_madatory1"
                            aria-expanded="true" aria-controls="collapse_madatory"
                            class="text-left m-0 p-0 btn btn-link">
                            <h5 class="m-0 p-0">
                                <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                                Info Alamat
                            </h5>
                        </button>
                    </div>
                    <div data-parent="#accordion" id="collapse_madatory1" class="collapse" style="">
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
                                            <input type="text" class="form-control" id="Address" name="Address"
                                                placeholder="Alamat" value="<?=set_value('Address');?>" />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name"><?=lang('Anggota.field.provinsi')?></label>
                                        <div>
                                            <select class="form-control select2" name="Provincy" id="Provincy"
                                                tabindex="-1" aria-hidden="true" style="width:100%">
                                                <option value="" disabled selected>Pilih</option>
                                                <?php foreach(get_dropdown('m_propinsi') as $row):?>
                                                <option value="<?=$row->code?>"><?=$row->text?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name"><?=lang('Anggota.field.city')?></label>
                                        <div>
                                            <select class="form-control select2" name="City" id="City" tabindex="-1"
                                                aria-hidden="true" style="width:100%"
                                                data-url="<?=base_url('api/anggota/cities')?>">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">Alamat Kecamatan</label>
                                        <div>
                                            <input type="text" class="form-control" id="Kecamatan" name="Kecamatan"
                                                placeholder="Alamat" value="<?=set_value('Kecamatan');?>" />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">Kelurahan</label>
                                        <div>
                                            <input type="text" class="form-control" id="Kelurahan" name="Kelurahan"
                                                placeholder="Kelurahan" value="<?=set_value('Kelurahan');?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">RT</label>
                                        <div>
                                            <input type="text" class="form-control" id="RT" name="RT" placeholder="RT"
                                                value="<?=set_value('RT');?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">RW</label>
                                        <div>
                                            <input type="text" class="form-control" id="RW" name="RW" placeholder="RW"
                                                value="<?=set_value('RW');?>" />
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
                                    <input type="checkbox" class="is_similar" name="is_similar" id="is_similar"
                                        value="">
                                    <label for="is_similar">Centang jika alamat domisili sama dengan alamat
                                        identitas</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="name">Alamat</label>
                                        <div>
                                            <input type="text" class="form-control" id="AddressNow" name="AddressNow"
                                                placeholder="Alamat" value="<?=set_value('AddressNow');?>" />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name"><?=lang('Anggota.field.provinsi')?></label>
                                        <div>
                                            <select class="form-control select2" name="ProvincyNow" id="ProvincyNow"
                                                tabindex="-1" aria-hidden="true" style="width:100%">
                                                <option value="" disabled selected>Pilih</option>
                                                <?php foreach(get_dropdown('m_propinsi') as $row):?>
                                                <option value="<?=$row->code?>"><?=$row->text?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name"><?=lang('Anggota.field.city')?></label>
                                        <div>
                                            <select class="form-control select2" name="CityNow" id="CityNow"
                                                tabindex="-1" aria-hidden="true" style="width:100%"
                                                data-url="<?=base_url('api/anggota/cities')?>">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">Kecamatan</label>
                                        <div>
                                            <input type="text" class="form-control" id="KecamatanNow"
                                                name="KecamatanNow" placeholder="Alamat"
                                                value="<?=set_value('Kecamatan');?>" />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">Alamat Kelurahan2</label>
                                        <div>
                                            <input type="text" class="form-control" id="KelurahanNow"
                                                name="KelurahanNow" placeholder="Alamat"
                                                value="<?=set_value('Kelurahan');?>" />
                                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">RT</label>
                                        <div>
                                            <input type="text" class="form-control" id="RTNow" name="RTNow"
                                                placeholder="RT" value="<?=set_value('RTNow');?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="name">RW</label>
                                        <div>
                                            <input type="text" class="form-control" id="RWNow" name="RWNow"
                                                placeholder="RW" value="<?=set_value('RWNow');?>" />
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
    <!-- end info almat -->
    <!-- info tambahan -->
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" class="accordion-wrapper mb-3">
                <div class="card">
                    <div class="card-header-tab card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapse_madatory3"
                            aria-expanded="true" aria-controls="collapse_madatory"
                            class="text-left m-0 p-0 btn btn-link">
                            <h5 class="m-0 p-0">
                                <i class="header-icon lnr-layers icon-gradient bg-primary"></i> Info Tambahan
                            </h5>
                        </button>
                    </div>
                    <div data-parent="#accordion" id="collapse_madatory3" class="collapse" style="">
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
                                        <select class="form-control" name="ref_unitkerja" id="ref_unitkerja"
                                            tabindex="-1" aria-hidden="true">
                                            <?php foreach ($ref_unitkerja as $row): ?>
                                            <option value="<?=$row->id?>">
                                                <?=$row->name?>
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="name">Nama Institusi</label>
                                        <div>
                                            <input type="text" class="form-control" id="frm_create_InstitutionName"
                                                name="InstitutionName" placeholder="Nama Institusi"
                                                value="<?=set_value('InstitutionName');?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="name">Alamat Institusi</label>
                                        <div>
                                            <input type="text" class="form-control" id="frm_create_InstitutionAddress"
                                                name="InstitutionAddress" placeholder="Alamat Institusi"
                                                value="<?=set_value('InstitutionAddress');?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="name">Telepon Institusi</label>
                                        <div>
                                            <input type="text" class="form-control" id="frm_create_InstitutionPhone"
                                                name="InstitutionPhone" placeholder="Telepon Institusi"
                                                value="<?=set_value('InstitutionPhone');?>" />
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
                                        <label><?=lang('Anggota.field.Pendidikan')?></label>
                                        <select class="form-control" name="ref_pendidikan" id="ref_pendidikan"
                                            tabindex="-1" aria-hidden="true">
                                            <?php foreach ($ref_pendidikan as $row): ?>
                                            <option value="<?=$row->id?>">
                                                <?=$row->name?>
                                            </option>
                                            <?php endforeach;?>
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
    <!-- info tambahan -->
    <!-- upload foto -->
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" class="accordion-wrapper mb-3">
                <div class="card">
                    <div class="card-header-tab card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapse_madatory4"
                            aria-expanded="true" aria-controls="collapse_madatory"
                            class="text-left m-0 p-0 btn btn-link">
                            <h5 class="m-0 p-0">
                                <i class="header-icon lnr-layers icon-gradient bg-primary">
                                </i>
                                Upload Foto
                            </h5>
                        </button>
                    </div>
                    <div data-parent="#accordion" id="collapse_madatory4" class="collapse" style="">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="file_image" class="">Foto
                                            Anggota</label>
                                        <div id="file_image" class="dropzone"></div>
                                        <div id="file_image_listed"></div>
                                        <div>
                                            <small class="info help-block text-muted">Format
                                                (JPG|PNG).
                                                Max 10 MB</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="camera_image" class="">Foto
                                            Anggota</label>
                                        <div id="my_camera"></div>
                                        <div id="results"></div>
                                        <input type=button class="btn btn-lg btn-primary" value="Open Camera"
                                            onClick="configure()">
                                        <input type=button class="btn btn-lg btn-primary" value="Take Snapshot"
                                            onClick="take_snapshot()">
                                        <input type=button class="btn btn-lg btn-primary" value="Save Snapshot"
                                            onClick="saveSnap()">


                                        <input type="hidden" name="camera_image" id="camera_image" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mt-1">
                <button  type="submit" class="btn btn-lg btn-primary"  id="btn-submit" name="submit"><i class="fa fa-save"></i>
                    <?=lang('Anggota.action.save')?></button>
            </div>
</form>
 <!-- <script>
    $(document).on("click", "#btn-submit", function (e) {
                e.preventDefault();
                var $invoiceForm = $('#myform');
                if (!$invoiceForm[0].checkValidity()) {
                    $invoiceForm[0].reportValidity()
                } else {
                    swal.fire({
                        title: "Are you sure?",
                        text: "Did you check all the inputs and calculations?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, Submit!",
                    }).then(function (result) {
                        alert('123');
                        $invoiceForm.submit();
                    });
                }
            });

    </script> -->