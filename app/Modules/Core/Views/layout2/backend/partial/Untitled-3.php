<div class="app-main__inner">
<div class="app-page-title">
     <!-- <div class="col-md-9" style="display:<?=(in_array('field1',$field_to_show))?'block':'none'?>"> -->
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-id icon-gradient bg-strong-bliss"></i>
            </div>
            <div><?= lang('Anggota.action.add') ?> <?= lang('Anggota.module') ?>
                <div class="page-title-subheading"><?= lang('Anggota.form.complete_the_data') ?>.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>
                            Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('anggota') ?>"><?= lang('Anggota.module') ?></a>
                    </li>
                    <li class="active breadcrumb-item" aria-current="page"><?= lang('Anggota.action.add') ?>
                        <?= lang('Anggota.module') ?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="col-md-12 tab-pane">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Update</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ambil Foto</a></li>

            </ul>
        </div><!-- /.card-header -->
        <div class="mb-3 card card-border">
		<div class="card-header-tab card-header">
			<div class="card-header-title">
				<i class="header-icon lnr-layers icon-gradient bg-primary"> </i>
				Info Personal
			</div>
		</div>
		<div class="card-body">
        <form id="frm_create" class="col-md-12 mx-auto" method="post"
                                    action="<?= base_url('anggota/create'); ?>">
			<div class="form-row">
                
				<div class="col-md-3">
					<div class="position-relative form-group">
						<label for="name"><?= lang('Anggota.field.name') ?>*</label>
						<div>
							<input type="text" class="form-control" id="name" name="name"
								placeholder="<?= lang('Anggota.field.name') ?>"
								value="<?= set_value('name'); ?>" />
							<!-- <small class="info help-block text-muted"><?= lang('Anggota.field.name') ?></small> -->
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="position-relative form-group">
						<label><?= lang('Anggota.field.Jenisidentitas') ?></label>
						<select class="form-control" name="ref_identitas" id="ref_identitas" tabindex="-1"
							aria-hidden="true" placeholder="<?= lang('Anggota.field.Jenisidentitas') ?>">
							<option value="" disabled selected>
								<?= lang('Anggota.field.Jenisidentitas') ?></option>
							<?php foreach ($ref_identitas as $row) : ?>
                                <option value="<?= $row->id ?>"><?= $row->name ?></option>
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
								value="<?= set_value('IdentityNo'); ?>" />
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
								value="<?= set_value('PlaceOfBirth'); ?>" />
							<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="position-relative form-group">
						<label for="name"><?=lang('Anggota.field.DateOfBirth')?></label>
						<div>
							<input type="date" class="form-control" id="frm_create_DateOfBirth"
								name="DateOfBirth" placeholder="Tempat Lahir"
								value="<?= set_value('DateOfBirth'); ?>" />
							<!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="position-relative form-group">
						<label><?=lang('Anggota.field.Statusperkawinan')?></label>
						<select class="form-control" name="ref_perkawinan" id="ref_perkawinan" tabindex="-1"
							aria-hidden="true">
							<?php foreach ($ref_perkawinan as $row) : ?>
                                <option value="<?= $row->id ?>"><?= $row->name ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="position-relative form-group">
						<label><?=lang('Anggota.field.Agama')?></label>
                        <select class="form-control" name="ref_agama" id="ref_agama"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="" disabled selected>
                                                        <?= lang('Anggota.field.Agama') ?></option>
                                                    <?php foreach ($ref_agama as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="position-relative form-group">
						<label><?= lang('Anggota.field.Jeniskelamin') ?></label>
						<select class="form-control" name="ref_jeniskelamin" id="ref_jeniskelamin" tabindex="-1"
							aria-hidden="true" placeholder="<?= lang('Anggota.field.Jeniskelamin') ?>">
			
							<?php foreach ($ref_jeniskelamin as $row) : ?>
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
								placeholder="Nomor Handphone"
								value="<?= set_value('NoHp'); ?>" />
			
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="position-relative form-group">
						<label for="name">Email</label>
						<div>
							<input type="email" class="form-control" id="Email" name="Email" placeholder="Email"
								value="<?= set_value('Email'); ?>" />
			
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>

        <div class="card-body">

			<div class="row">
				<div class="col-md-12">
					<div id="accordion" class="accordion-wrapper mb-3">
						<div class="card">
							<div class="card-header">
								<button type="button" data-toggle="collapse" data-target="#collapse_madatory" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
									<h5 class="m-0 p-0"> 
										<i class="header-icon lnr-layers icon-gradient bg-primary"> </i> Info Personal
									</h5>
								</button>
							</div>
							<div data-parent="#accordion" id="collapse_madatory" class="collapse" style="">
								<form id="frm_create" class="col-md-12 mx-auto" method="post"
                                    action="<?= base_url('anggota/create'); ?>">
                                    <div class="form-row">
                                        <!-- <div class="col-md-9" style="display:<?=(in_array('field1',$field_to_show))?'block':'none'?>"> -->
                                        <div class="col-md-6"
                                            style="display:<?=(in_array('field1',$field_to_show))?'':$display?>">
                                            <div class="position-relative form-group">
                                                <label for="name"><?= lang('Anggota.field.name') ?></label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_name"
                                                        name="name" placeholder="<?= lang('Anggota.field.name') ?> "
                                                        value="<?= set_value('name'); ?>" />
                                                    <small
                                                        class="info help-block text-muted"><?= lang('Anggota.field.name') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label><?=lang('Anggota.field.Jenisanggota')?></label>
                                                <select class="form-control" name="ref_jenisanggota"
                                                    id="ref_jenisanggota" tabindex="-1" aria-hidden="true">
                                                    <option value="" disabled selected>
                                                        <?=lang('Anggota.field.Jenisanggota')?></option>
                                                    <?php foreach ($ref_jenisanggota as $row) : ?>
                                                    <option placeholder="<?= lang('Anggota.field.name') ?> "
                                                        value="<?= $row->id ?>">
                                                        <?= $row->name ?> </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label><?= lang('Anggota.field.Jenisidentitas') ?></label>
                                                <select class="form-control" name="ref_identitas" id="ref_identitas"
                                                    tabindex="-1" aria-hidden="true"
                                                    placeholder="<?= lang('Anggota.field.Jenisidentitas') ?>">
                                                    <option value="" disabled selected>
                                                        <?= lang('Anggota.field.Jenisidentitas') ?></option>
                                                    <?php foreach ($ref_identitas as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label><?=lang('Anggota.field.Statusperkawinan')?></label>
                                                <select class="form-control" name="ref_perkawinan" id="ref_perkawinan"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="" disabled selected>
                                                        <?= lang('Anggota.field.Statusperkawinan') ?>
                                                    </option>

                                                    <?php foreach ($ref_perkawinan as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Nomor Anggota</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_MemberNo"
                                                        name="MemberNo" placeholder="NO anggota"
                                                        value="<?= set_value('MemberNo'); ?>" />
                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label><?=lang('Anggota.field.Agama')?></label>
                                                <select class="form-control" name="ref_agama" id="ref_agama"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="" disabled selected>
                                                        <?= lang('Anggota.field.Agama') ?></option>
                                                    <?php foreach ($ref_agama as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name"><?= lang('Anggota.field.nomoridentitas') ?></label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_IdentityNo"
                                                        name="IdentityNo" placeholder="Nomor Identitas"
                                                        value="<?= set_value('IdentityNo'); ?>" />
                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label><?=lang('Anggota.field.Unitkerja')?></label>
                                                <select class="form-control" name="ref_unitkerja" id="ref_unitkerja"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="" disabled selected>
                                                        <?= lang('Anggota.field.Unitkerja') ?></option>
                                                    <?php foreach ($ref_unitkerja as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Tempat Lahir</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_PlaceOfBirth"
                                                        name="PlaceOfBirth" placeholder="Tempat Lahir"
                                                        value="<?= set_value('PlaceOfBirth'); ?>" />
                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label><?=lang('Anggota.field.fakultas')?></label>
                                                <select class="form-control" name="ref_fakultas" id="ref_fakultas"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="" disabled selected>
                                                        <?= lang('Anggota.field.fakultas') ?></option>
                                                    <?php foreach ($ref_fakultas as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name"><?=lang('Anggota.field.DateOfBirth')?></label>
                                                <div>
                                                    <input type="date" class="form-control" id="frm_create_DateOfBirth"
                                                        name="DateOfBirth" placeholder="Tempat Lahir"
                                                        value="<?= set_value('DateOfBirth'); ?>" />
                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="name"><?=lang('Anggota.field.Tanggalpendaftaran')?></label>
                                                <div>
                                                    <input type="date" class="form-control" id="frm_create_RegisterDate"
                                                        name="RegisterDate" placeholder="Tempat Lahir"
                                                        value="<?= set_value('RegisterDate'); ?>" />
                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                </div>
                                            </div>
                                        </div>

                                    	</div>
									</div>
								</form>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<button type="button" data-toggle="collapse" data-target="#collapse_optional" aria-expanded="true" aria-controls="collapse_optional" class="text-left m-0 p-0 btn btn-link">
									<h5 class="m-0 p-0"> 
										<i class="header-icon lnr-layers icon-gradient bg-primary"> </i> Info Tambahan
									</h5>
								</button>
							</div>
							<div data-parent="#accordion" id="collapse_optional" class="collapse" style="">
								
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<button type="button" data-toggle="collapse" data-target="#collapse_upload" aria-expanded="true" aria-controls="collapse_upload" class="text-left m-0 p-0 btn btn-link">
									<h5 class="m-0 p-0"> 
										<i class="header-icon lnr-layers icon-gradient bg-primary"> </i> Upload Foto
									</h5>
								</button>
							</div>
							<div data-parent="#accordion" id="collapse_upload" class="collapse" style="">
								
							</div>
						</div>
					</div>  
				</div>
			</div>