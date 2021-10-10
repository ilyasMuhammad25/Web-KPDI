<form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?=base_url('anggota/create');?>">

	<!-- info personal -->
	<div class="row">
		<div class="col-md-12">
			<div id="accordion" class="accordion-wrapper mb-3">
				<div class="card">
					<div class="card-header-tab card-header">
						<button type="button" data-toggle="collapse"
							data-target="#collapse_madatory0" aria-expanded="true"
							aria-controls="collapse_madatory"
							class="text-left m-0 p-0 btn btn-link">
							<h5 class="m-0 p-0">
								<i
									class="header-icon lnr-layers icon-gradient bg-primary">
								</i>
								Info Personal
							</h5>
						</button>
					</div>
					<div data-parent="#accordion" id="collapse_madatory0"
						class="collapse show" style="">
						<div class="card-body">
							<div class="form-row">
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name"><strong><?=lang('Anggota.field.name')?>*</strong></label>
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
												<?=lang('Anggota.field.Jenisidentitas')?></option>
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
											<input type="date" class="form-control" id="date-time"
												name="DateOfBirth" placeholder="Tanggal Lahir"
												value="<?=set_value('DateOfBirth');?>" />
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
										<label for="name">No Handphone</label>
										<div>
											<input type="text" class="form-control" id="frm_create_NoHp" name="NoHp"
												placeholder="Nomor Handphone" value="<?=set_value('NoHp');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">Email</label>
										<div>
											<input type="email" class="form-control" id="Email" name="Email"
												placeholder="Email" value="<?=set_value('Email');?>" />

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
						<button type="button" data-toggle="collapse"
							data-target="#collapse_madatory" aria-expanded="true"
							aria-controls="collapse_madatory"
							class="text-left m-0 p-0 btn btn-link">
							<h5 class="m-0 p-0">
								<i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
								Info Anggota
							</h5>
						</button>
					</div>
					<div data-parent="#accordion" id="collapse_madatory" class="collapse show"
						style="">


						<div class="card-body">
							<div class="form-row">
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">Nomor Anggota</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_MemberNo" name="MemberNo"
												placeholder="NO anggota"
												value="<?=set_value('MemberNo');?>" />
											<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<div>
											<label><?=lang('Anggota.field.Jenisanggota')?></label>
											<select class="form-control" name="ref_jenisanggota"
												id="ref_jenisanggota" tabindex="-1"
												aria-hidden="true">
												<option value="" disabled selected>
													<?=lang('Anggota.field.Jenisanggota')?>
												</option>
												<?php foreach ($ref_jenisanggota as $row): ?>
												<option value="<?=$row->id?>">
													<?=$row->name?>
												</option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label
											for="name"><?=lang('Anggota.field.Tanggalpendaftaran')?></label>
										<div>
											<input type="date" class="form-control"
												id="frm_create_RegisterDate" name="RegisterDate"
												placeholder="Tempat Lahir"
												value="<?=set_value('RegisterDate');?>" />
											<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label
											for="name"><?=lang('Anggota.field.Masaberlaku')?></label>
										<div>
											<input type="date" class="form-control"
												id="frm_create_DateOfBirth" name="EndDate"
												placeholder=<?=lang('Anggota.field.Masaberlaku')?>
												value="<?=set_value('EndDate');?>" />
											<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label><?=lang('Anggota.field.Statusanggota')?></label>
										<select class="form-control" name="ref_Statusanggota"
											id="ref_Statusanggota" tabindex="-1"
											aria-hidden="true">
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
								<div class="col-md-6">
									<div class="position-relative form-group">
										<label
											for="name"><?=lang('Anggota.field.Biayapendaftaran')?></label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_BiayaPendaftaran"
												name="BiayaPendaftaran"
												placeholder=<?=lang('Anggota.field.Biayapendaftaran')?>
												value="<?=set_value('BiayaPendaftaran');?>" />

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
						<button type="button" data-toggle="collapse"
							data-target="#collapse_madatory1" aria-expanded="true"
							aria-controls="collapse_madatory"
							class="text-left m-0 p-0 btn btn-link">
							<h5 class="m-0 p-0">
								<i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
								Info Alamat
							</h5>
						</button>
					</div>
					<div data-parent="#accordion" id="collapse_madatory1" class="collapse"
						style="">


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
											<input type="text" class="form-control"
												id="Address" name="Address"
												placeholder="Alamat"
												value="<?=set_value('Address');?>" />
											<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label
											for="name"><?=lang('Anggota.field.provinsi')?></label>
										<div>
											<input type="text" class="form-control"
												id="Provincy" name="Provincy"
												placeholder="<?=lang('Anggota.field.provinsi')?>"
												value="<?=set_value('Provincy');?>" />
											<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label
											for="name"><?=lang('Anggota.field.city')?></label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_City" name="City"
												placeholder="<?=lang('Anggota.field.city')?>"
												value="<?=set_value('City');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">Kecamatan</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_kecamatan" name="kecamatan"
												placeholder="Kecamatan"
												value="<?=set_value('Kecamatan');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">Kelurahan</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_kelurahan" name="kelurahan"
												placeholder="Kelurahan"
												value="<?=set_value('Kelurahan');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">RT</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_RT" name="RT" placeholder="RT"
												value="<?=set_value('RT');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">RW</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_RW" name="RW" placeholder="RW"
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
									<input type="checkbox" class="" name="is_similar" id="is_similar"
										value="1">
									<label for="is_similar">Centang jika alamat domisili sama
										dengan alamat identitas</label>
								</div>
								<div class="col-md-12">
									<div class="position-relative form-group">
										<label for="name">Alamat</label>
										<div>
											<input type="text" class="form-control"
												id="AddressNow" name="AddressNow"
												placeholder="Alamat"
												value="<?=set_value('AddressNow');?>" />
											<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label
											for="name"><?=lang('Anggota.field.provinsi')?></label>
										<div>
											<input type="text" class="form-control"
												id="ProvincyNow" name="ProvincyNow"
												placeholder="<?=lang('Anggota.field.provinsi')?>"
												value="<?=set_value('ProvincyNow');?>" />
											<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label
											for="name"><?=lang('Anggota.field.city')?></label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_City" name="CityNow"
												placeholder="<?=lang('Anggota.field.city')?>"
												value="<?=set_value('CityNow');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">Kecamatan</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_kecamatan" name="kecamatanNow"
												placeholder="Kecamatan"
												value="<?=set_value('KecamatanNow');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">Kelurahan</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_kelurahan" name="kelurahanNow"
												placeholder="Kelurahan"
												value="<?=set_value('KelurahanNow');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">RT</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_RT" name="RTNow" placeholder="RT"
												value="<?=set_value('RTNow');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="position-relative form-group">
										<label for="name">RW</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_RW" name="RWNow" placeholder="RW"
												value="<?=set_value('RWNow');?>" />

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
						<button type="button" data-toggle="collapse"
							data-target="#collapse_madatory3" aria-expanded="true"
							aria-controls="collapse_madatory"
							class="text-left m-0 p-0 btn btn-link">
							<h5 class="m-0 p-0">
								<i
									class="header-icon lnr-layers icon-gradient bg-primary">
								</i>
								Info Tambahan
							</h5>
						</button>
					</div>
					<div data-parent="#accordion" id="collapse_madatory3"
						class="collapse" style="">


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
										<select class="form-control"
											name="ref_unitkerja" id="ref_unitkerja"
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
											<input type="text" class="form-control"
												id="frm_create_InstitutionName"
												name="InstitutionName"
												placeholder="Nama Institusi"
												value="<?=set_value('InstitutionName');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="position-relative form-group">
										<label for="name">Alamat Institusi</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_InstitutionAddress"
												name="InstitutionAddress"
												placeholder="Alamat Institusi"
												value="<?=set_value('InstitutionAddress');?>" />

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="position-relative form-group">
										<label for="name">Telepon Institusi</label>
										<div>
											<input type="text" class="form-control"
												id="frm_create_InstitutionPhone"
												name="InstitutionPhone"
												placeholder="Telepon Institusi"
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
										<select class="form-control"
											name="ref_pendidikan" id="ref_pendidikan"
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
						<button type="button" data-toggle="collapse"
							data-target="#collapse_madatory4" aria-expanded="true"
							aria-controls="collapse_madatory"
							class="text-left m-0 p-0 btn btn-link">
							<h5 class="m-0 p-0">
								<i
									class="header-icon lnr-layers icon-gradient bg-primary">
								</i>
								Upload Foto
							</h5>
						</button>
					</div>
					<div data-parent="#accordion" id="collapse_madatory4"
						class="collapse" style="">
						<div class="card-body">
							<div class="form-row">
								<div class="col-md-12">
									<div class="position-relative form-group">
										<label for="file_image" class="">Foto
											Anggota</label>
										<div id="dropzone_file_image"
											class="dropzone"></div>
										<div id="dropzone_file_image_listed"></div>
										<div>
											<small
												class="info help-block text-muted">Format
												(JPG|PNG).
												Max 10 MB</small>
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

	<div class="form-group mt-1">
		<button type="submit" class="btn btn-lg btn-primary"
			name="submit"><i class="fa fa-save"></i> <?=lang('Anggota.action.save')?></button>
	</div>

</form>