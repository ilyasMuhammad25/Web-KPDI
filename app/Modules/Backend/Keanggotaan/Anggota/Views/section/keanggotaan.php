<form id="frm" method="post" action="">

    <div class="mb-3 card card-border">
        <div class="card-header-tab card-header">
            <div class="card-header-title">
                <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                Info Personal
            </div>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?= lang('Anggota.field.name') ?>*</label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="<?= lang('Anggota.field.name') ?>"
                                value="<?= set_value('name', $anggota->name); ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label><?= lang('Anggota.field.Jenisidentitas') ?></label>
                        <select class="form-control" name="ref_identitas" id="ref_identitas" tabindex="-1"
                            aria-hidden="true" placeholder="<?= lang('Anggota.field.Jenisidentitas') ?>">
                            <option value="">
                                <?= lang('Anggota.field.Jenisidentitas') ?></option>
                            <?php foreach (get_ref('ref_identitas') as $row) : ?>
                            <option value="<?= $row->id ?>" <?=($row->id == $anggota->ref_identitas) ? 'selected':''?>>
                                <?= $row->name ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">Nomor Identitas</label>
                        <div>
                            <input type="text" class="form-control" id="frm_create_IdentityNo" name="IdentityNo"
                                placeholder="Nomor identitas"
                                value="<?= set_value('IdentityNo',$anggota->IdentityNo); ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?=lang('anggota.field.Tempatlahir')?></label>
                        <div>
                            <input type="text" class="form-control" id="frm_create_PlaceOfBirth" name="PlaceOfBirth"
                                placeholder="Tempat Lahir"
                                value="<?= set_value('PlaceOfBirth',$anggota->PlaceOfBirth); ?>" />
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?=lang('Anggota.field.DateOfBirth')?></label>
                        <div>
                            <input type="date" class="form-control" id="frm_create_DateOfBirth" name="DateOfBirth"
                                placeholder="Tempat Lahir"
                                value="<?= set_value('DateOfBirth',$anggota->DateOfBirth); ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label><?=lang('Anggota.field.Statusperkawinan')?></label>
                        <select class="form-control" name="ref_perkawinan" id="ref_perkawinan" tabindex="-1"
                            aria-hidden="true">
							<option value="">-Pilih-</option>
                            <?php foreach (get_ref('ref_perkawinan') as $row) : ?>
                            <option value="<?= $row->id ?>" <?=($row->id == $anggota->ref_perkawinan) ? 'selected':''?>>
                                <?= $row->name ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label><?=lang('Anggota.field.Agama')?></label>
                        <select class="form-control" name="ref_agama" id="ref_agama" tabindex="-1" aria-hidden="true">
                            <option value="">-Pilih-</option>
                            <?php foreach (get_ref('ref_agama') as $row) : ?>
                            <option value="<?= $row->id ?>" <?=($row->id == $anggota->ref_agama) ? 'selected':''?>>
                                <?= $row->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label><?= lang('Anggota.field.Jeniskelamin') ?></label>
                        <select class="form-control" name="ref_jeniskelamin" id="ref_jeniskelamin" tabindex="-1"
                            aria-hidden="true" placeholder="<?= lang('Anggota.field.Jeniskelamin') ?>">

                            <?php foreach (get_ref('ref_jeniskelamin') as $row) : ?>
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
                <div class="col-md-12 pt-3">
                    <h5>Kontak</h5>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">Email*</label>
                        <div>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email"
                                value="<?= set_value('Email',$anggota->Email); ?>" />

                        </div>
                    </div>
                </div>
				<div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">No. Telepon/HP*</label>
                        <div>
                            <input type="text" class="form-control" id="frm_create_NoHp" name="NoHp"
                                placeholder="No. Telepon/HP" value="<?= set_value('NoHp',$anggota->NoHp); ?>" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3 card card-border">
        <div class="card-header-tab card-header">
            <div class="card-header-title">
                <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                Info Anggota
            </div>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">Nomor Anggota*</label>
                        <div>
                            <input type="text" class="form-control" id="frm_create_MemberNo" name="MemberNo"
                                placeholder="No. anggota" value="<?= set_value('MemberNo', $anggota->MemberNo); ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <div>
                            <label><?=lang('Anggota.field.Jenisanggota')?>*</label>
                            <select class="form-control" name="ref_jenisanggota" id="ref_jenisanggota" tabindex="-1"
                                aria-hidden="true">
                                <option value="">-Pilih-</option>
                                <?php foreach(get_dropdown('m_jenis_anggota',null) as $row):?>
                                <option value="<?=$row->code?>"
                                    <?=($row->code == $anggota->ref_jenisanggota) ? 'selected':''?>><?=$row->text?>
                                </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?=lang('Anggota.field.Tanggalpendaftaran')?></label>
                        <div>
                            <input type="date" class="form-control" id="frm_create_RegisterDate" name="RegisterDate"
                                placeholder="Tempat Lahir"
                                value="<?= set_value('RegisterDate', substr($anggota->RegisterDate,0,10)); ?>" />
                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?=lang('Anggota.field.Masaberlaku')?></label>
                        <div>
                            <input type="date" class="form-control" id="frm_create_EndDate" name="EndDate"
                                placeholder=<?=lang('Anggota.field.Masaberlaku')?>
                                value="<?= set_value('EndDate', substr($anggota->EndDate,0,10)); ?>"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label><?=lang('Anggota.field.Statusanggota')?></label>
                        <select class="form-control" name="ref_Statusanggota" id="ref_Statusanggota" tabindex="-1"
                            aria-hidden="true">
                            <option value="">-Pilih-</option>
                            <?php foreach (get_ref('ref_Statusanggota') as $row) : ?>
                            <option value="<?= $row->id ?>"
                                <?=($row->id == $anggota->ref_Statusanggota) ? 'selected':''?>>
                                <?= $row->name ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?= lang('Anggota.field.Biayapendaftaran') ?></label>
                        <div>
                            <input type="number" class="form-control" id="frm_create_BiayaPendaftaran"
                                name="BiayaPendaftaran" placeholder=<?= lang('Anggota.field.Biayapendaftaran') ?>
                                value="<?= set_value('BiayaPendaftaran',$anggota->BiayaPendaftaran); ?>" />

                        </div>
                    </div>
                </div>
            </div>
			<div class="form-row pt-3">
                <div class="col-md-12">
                    <h5>Hak Akses Perpustakaan</h5>
                </div>
            </div>
			<div class="form-row">
				<div class="col-md-12">
					<div class="position-relative form-group">
						<label><?=lang('anggota.field.library')?>*</label>
						<div>
							<select class="form-control select2"
								name="Location_loan_id[]" multiple="multiple" tabindex="-1"
								aria-hidden="true" style="width:100%">
								<option value="">-Pilih-</option>
								<?php foreach(get_dropdown('m_lokasiperpustakaan') as $row):?>
								<option value="<?=$row->code?>" <?=(in_array($row->code, explode(",",$anggota->Location_loan_ids)))?'selected':''?>><?=$row->text?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>


    <div class="mb-3 card card-border">
        <div class="card-header-tab card-header">
            <div class="card-header-title">
                <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                Info Alamat
            </div>
        </div>
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
                            <input type="text" class="form-control" id="Address" name="Address" placeholder="Alamat"
                                value="<?= set_value('Address',$anggota->Address); ?>" />
                            <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?=lang('Anggota.field.provinsi')?></label>
                        <div>
                            <select class="form-control select2" name="Provincy" id="Provincy" tabindex="-1"
                                aria-hidden="true" style="width:100%">
                                <option value="">-Pilih-</option>
                                <?php foreach(get_dropdown('m_propinsi') as $row):?>
                                <option value="<?=$row->code?>" <?=($row->code == $anggota->Provincy) ? 'selected':''?>>
                                    <?=$row->text?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?= lang('Anggota.field.city') ?></label>
                        <div>
							<select class="form-control select2" name="City" id="City" tabindex="-1"
                                aria-hidden="true" style="width:100%" data-url="<?=base_url('api/anggota/cities')?>">
								<option value="">-Pilih-</option>
                                <?php foreach(get_dropdown('m_kota','propinsi_id = '.$anggota->Provincy) as $row):?>
                                <option value="<?=$row->code?>"
                                    <?=($row->code == $anggota->City) ? 'selected':''?>>
                                    <?=$row->text?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">Kecamatan</label>
                        <div>
                            <input type="text" class="form-control" id="Kecamatan" name="Kecamatan"
                                placeholder="Kecamatan" value="<?= set_value('Kecamatan',$anggota->Kecamatan); ?>" />

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">Kelurahan</label>
                        <div>
                            <input type="text" class="form-control" id="Kelurahan" name="Kelurahan"
                                placeholder="Kelurahan" value="<?= set_value('Kelurahan',$anggota->Kelurahan); ?>" />

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">RT</label>
                        <div>
                            <input type="text" class="form-control" id="RT" name="RT" placeholder="RT"
                                value="<?= set_value('RT',$anggota->RT); ?>" />

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">RW</label>
                        <div>
                            <input type="text" class="form-control" id="RW" name="RW" placeholder="RW"
                                value="<?= set_value('RW',$anggota->RW); ?>" />

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
                    <input type="checkbox" class="is_similar" name="is_similar" id="is_similar" value="">
                    <label for="is_similar">Centang jika alamat domisili sama dengan alamat
                </div>
                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label for="name">Alamat</label>
                        <div>
                            <input type="text" class="form-control" id="AddressNow" name="AddressNow"
                                placeholder="Alamat" value="<?= set_value('AddressNow',$anggota->AddressNow); ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?=lang('Anggota.field.provinsi')?></label>
                        <div>
                            <select class="form-control select2" name="ProvincyNow" id="ProvincyNow" tabindex="-1"
                                aria-hidden="true" style="width:100%">
                                <option value="">-Pilih-</option>
                                <?php foreach(get_dropdown('m_propinsi') as $row):?>
                                <option value="<?=$row->code?>"
                                    <?=($row->code == $anggota->ProvincyNow) ? 'selected':''?>>
                                    <?=$row->text?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name"><?= lang('Anggota.field.city') ?></label>
                        <div>
                            <select class="form-control select2" name="CityNow" id="CityNow" tabindex="-1"
                                aria-hidden="true" style="width:100%" data-url="<?=base_url('api/anggota/cities')?>">
								<option value="">-Pilih-</option>
                                <?php foreach(get_dropdown('m_kota','propinsi_id = '.$anggota->ProvincyNow) as $row):?>
                                <option value="<?=$row->code?>"
                                    <?=($row->code == $anggota->CityNow) ? 'selected':''?>>
                                    <?=$row->text?></option>
                                <?php endforeach;?>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">Kecamatan</label>
                        <div>
                            <input type="text" class="form-control" id="KecamatanNow" name="KecamatanNow"
                                placeholder="Kecamatan"
                                value="<?= set_value('KecamatanNow',$anggota->KecamatanNow); ?>" />

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">Kelurahan</label>
                        <div>
                            <input type="text" class="form-control" id="KelurahanNow" name="KelurahanNow"
                                placeholder="Kelurahan"
                                value="<?= set_value('KelurahanNow',$anggota->KelurahanNow); ?>" />

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">RT</label>
                        <div>
                            <input type="text" class="form-control" id="RTNow" name="RTNow" placeholder="RT"
                                value="<?= set_value('RTNow',$anggota->RTNow); ?>" />

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="name">RW</label>
                        <div>
                            <input type="text" class="form-control" id="RWNow" name="RWNow" placeholder="RW"
                                value="<?= set_value('RWNow',$anggota->RWNow); ?>" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mb-3 card card-border">
        <div class="card-header-tab card-header">
            <div class="card-header-title">
                <i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
                Info Tambahan
            </div>
        </div>
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
                        <select class="form-control" name="ref_unitkerja" id="ref_unitkerja" tabindex="-1"
                            aria-hidden="true">
                            <?php foreach (get_ref('ref_unitkerja') as $row) : ?>
                            <option value="<?= $row->id ?>" <?=($row->id == $anggota->ref_unitkerja) ? 'selected':''?>>
                                <?= $row->name ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
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
            <div class="form-row">
                <div class="col-md-12">
                    <h5>Pendidikan</h5>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label><?= lang('Anggota.field.Pendidikan') ?></label>
                        <select class="form-control" name="ref_pendidikan" id="ref_pendidikan" tabindex="-1"
                            aria-hidden="true">
							<option value="">-Pilih-</option>
                            <?php foreach (get_ref('ref_pendidikan') as $row) : ?>
                            <option value="<?= $row->id ?>" <?=($row->id == $anggota->ref_pendidikan) ? 'selected':''?>>
                                <?= $row->name ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="form-group mt-1">
        <input type="hidden" name="is_anggota" value="<?=$is_anggota?>">
        <button type="submit" class="btn btn-lg btn-primary" name="submit"><i class="fa fa-save"></i>
            <?=lang('Anggota.action.save')?></button>

        <?php if(!$is_anggota):?>
        <a href="<?=base_url('anggota/cetakKartu/' . $anggota->id);?>" data-toggle="tooltip" data-placement="top"
            title="Cetak Kartu" class="btn btn-lg btn-primary"><i class="fa fa-print"></i> Cetak Kartu Anggota</a>
        <?php endif;?>
    </div>
</form>