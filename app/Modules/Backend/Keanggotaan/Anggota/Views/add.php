<?php
$request = \Config\Services::request();
$request->uri->setSilent();

  
$field_to_show=array('field1,field2,field3,field4,field5');
$display='block';
?>

<?= $this->extend('hamkamannan\adminigniter\layout\backend\main'); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>

<div class="app-page-title">
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
        <div class="card-body">

			<div class="row">
				<div class="col-md-12">
					<div id="accordion" class="accordion-wrapper mb-3">
						<div class="card">
							<div class="card-header">
								<button type="button" data-toggle="collapse" data-target="#collapse_madatory" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
									<h5 class="m-0 p-0"> 
										<i class="header-icon lnr-layers icon-gradient bg-primary"> </i> Info Anggota
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

            <div class="tab-content">
                <!-- Update -->
                <div class="active tab-pane" id="activity">
                    <div class="app-main__inner">

                        <div class="main-card mb-3 card">
                            <div class="card-header">
                                <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form
                                <?= lang('Anggota.action.add') ?> <?= lang('Anggota.module') ?>
                            </div>
                            <div class="card-body">
                                <div id="infoMessage"><?= $message ?? ''; ?></div>
                                <?= get_message('message'); ?>

                                <!-- Form Field isian anggota -->

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

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Alamat</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_Address"
                                                        name="Address" placeholder="Alamat"
                                                        value="<?= set_value('Address'); ?>" />
                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="name"><?=lang('Anggota.field.Masaberlaku')?></label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_DateOfBirth"
                                                        name="DateOfBirth"
                                                        placeholder=<?=lang('Anggota.field.Masaberlaku')?>
                                                        value="<?= set_value('DateOfBirth'); ?>" />
                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name"><?=lang('Anggota.field.provinsi')?></label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_Provincy"
                                                        name="Provincy"
                                                        placeholder="<?=lang('Anggota.field.provinsi')?>"
                                                        value="<?= set_value('Provincy'); ?>" />
                                                    <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label><?=lang('Anggota.field.Statusanggota')?></label>
                                                <select class="form-control" name="ref_Statusanggota"
                                                    id="ref_Statusanggota" tabindex="-1" aria-hidden="true">
                                                    <option value="" disabled selected>
                                                        <?= lang('Anggota.field.Statusanggota') ?></option>
                                                    <?php foreach ($ref_Statusanggota as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name"><?= lang('Anggota.field.city') ?></label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_City"
                                                        name="City" placeholder="<?= lang('Anggota.field.city') ?>"
                                                        value="<?= set_value('City'); ?>" />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <label for="description"><?= lang('Anggota.field.description') ?> </label>
                                            <div>
                                                <textarea id="frm_create_description" name="description"
                                                    placeholder="<?= lang('Anggota.field.description') ?> " rows="2"
                                                    class="form-control autosize-input"
                                                    style="min-height: 38px;"><?= set_value('description') ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Kecamatan</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_kecamatan"
                                                        name="kecamatan" placeholder="Kecamatan"
                                                        value="<?= set_value('Kecamatan'); ?>" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="name"><?= lang('Anggota.field.Biayapendaftaran') ?></label>
                                                <div>
                                                    <input type="text" class="form-control"
                                                        id="frm_create_BiayaPendaftaran" name="BiayaPendaftaran"
                                                        placeholder=<?= lang('Anggota.field.Biayapendaftaran') ?>
                                                        value="<?= set_value('BiayaPendaftaran'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Kelurahan</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_kelurahan"
                                                        name="kelurahan" placeholder="Kelurahan"
                                                        value="<?= set_value('Kelurahan'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">RT</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_RT" name="RT"
                                                        placeholder="RT" value="<?= set_value('RT'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">RW</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_RW" name="RW"
                                                        placeholder="RW" value="<?= set_value('RW'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox custom-control custom-control-inline">
                                        <input type="checkbox" id="frm_create_permission" name=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="frm_create_permission_">
                                            <h5>Alamat sama dengan alamat Identitas</h5>
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Alamat Saat ini</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_AddressNow"
                                                        name="AddressNow" placeholder="Alamat"
                                                        value="<?= set_value('AddressNow'); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name"><?=lang('Anggota.field.provinsi')?> Saat ini</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_ProvincyNow"
                                                        name="ProvincyNow"
                                                        placeholder="<?=lang('Anggota.field.provinsi')?>"
                                                        value="<?= set_value('ProvincyNow'); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name"><?= lang('Anggota.field.city')?>saat ini </label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_CityNow"
                                                        name="CityNow" placeholder="<?= lang('Anggota.field.city') ?>"
                                                        value="<?= set_value('CityNow'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Kecamatan Saat ini </label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_kecamatanNow"
                                                        name="kecamatanNow" placeholder="Kecamatan"
                                                        value="<?= set_value('KecamatanNow'); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">RT Saat ini</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_RTNow"
                                                        name="RTNow" placeholder="RT"
                                                        value="<?= set_value('RTNow'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">RW Saat ini</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_RWNow"
                                                        name="RWNow" placeholder="RW"
                                                        value="<?= set_value('RWNow'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">No Handphone</label>
                                                <div>
                                                    <input type="text" class="form-control" id="frm_create_NoHp"
                                                        name="NoHp" placeholder="Nomor Handphone"
                                                        value="<?= set_value('NoHp'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label><?= lang('Anggota.field.Jeniskelamin') ?></label>
                                                <select class="form-control" name="ref_jeniskelamin"
                                                    id="ref_jeniskelamin" tabindex="-1" aria-hidden="true"
                                                    placeholder="<?= lang('Anggota.field.Jeniskelamin') ?>">
                                                    <option value="" disabled selected>
                                                        <?= lang('Anggota.field.Jeniskelamin') ?></option>
                                                    <?php foreach ($ref_jeniskelamin as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label><?= lang('Anggota.field.Pendidikan') ?></label>
                                                <select class="form-control" name="ref_pendidikan" id="ref_pendidikan"
                                                    tabindex="-1" aria-hidden="true">
                                                    <?php foreach ($ref_pendidikan as $row) : ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label><?=lang('anggota.field.Unitkerja')?></label>
                                                <select class="form-control" name="ref_unitkerja" id="ref_unitkerja"
                                                    tabindex="-1" aria-hidden="true">
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
                                                <label for="name">Email</label>
                                                <div>
                                                    <input type="email" class="form-control" id="Email" name="Email"
                                                        placeholder="Email" value="<?= set_value('Email'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5>Data pekerjaan/Perguruan Tinggi/Sekolah</h5>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Nama Institusi</label>
                                                <div>
                                                    <input type="text" class="form-control"
                                                        id="frm_create_InstitutionName" name="InstitutionName"
                                                        placeholder="Nama Institusi"
                                                        value="<?= set_value('InstitutionName'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Alamat Institusi</label>
                                                <div>
                                                    <input type="text" class="form-control"
                                                        id="frm_create_InstitutionAddress" name="InstitutionAddress"
                                                        placeholder="Alamat Institusi"
                                                        value="<?= set_value('InstitutionAddress'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name">Telepon Institusi</label>
                                                <div>
                                                    <input type="text" class="form-control"
                                                        id="frm_create_InstitutionPhone" name="InstitutionPhone"
                                                        placeholder="Telepon Institusi"
                                                        value="<?= set_value('InstitutionPhone'); ?>" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"
                                            name="submit"><?= lang('Anggota.action.save') ?></button>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!-- ambil foto -->
                <div class="tab-pane" id="timeline">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="file_image" class="">Foto Anggota</label>
                                        <div id="dropzone_file_image" class="dropzone"></div>
                                        <div id="dropzone_file_image_listed"></div>
                                        <div>
                                            <small class="info help-block text-muted">Format (JPG|PNG).
                                                Max 10 MB</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <!-- Sekolah -->
                <div class="tab-pane" id="settings">
                    <h1>ilyas</h1>
                </div>
            </div>

            <!-- /.tab-content -->
        </div><!-- /.card-body -->
    </div>
    <!-- /.nav-tabs-custom -->
</div>

<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script>
Dropzone.autoDiscover = false;

var dropzone_file_image = new Dropzone("#dropzone_file_image", {
    url: "<?= base_url('banner/do_upload') ?>", // /do_uploads if multiple
    paramName: "file", // files if multiple
    maxFiles: 1,
    maxFilesize: 10,
    addRemoveLinks: true,
    acceptedFiles: 'image/*',
    renameFile: function(file) {
        return new Date().getTime() + '_' + file.name.toLowerCase().replace(' ', '_');
    },
    accept: function(file, done) {
        console.log("uploaded");
        done();
    },
    init: function() {
        this.on("maxfilesexceeded", function(file) {
            console.log("max file");
        });
    },
    success: function(file, response) {
        console.log(file);
        console.log(response);
        // file.previewElement.querySelector("img").src = response.files[0].url;
        // file.previewElement.classList.add("dz-success");
        // var fileuploded = file.previewElement.querySelector("[data-dz-name]");
        // fileuploded.innerHTML = response.files[0].name;
        // file.name = response.files[0].name;

        var uuid = file.upload.uuid;
        var name = file.upload.filename;

        $('#dropzone_file_image_listed').append('<input type="hidden" name="file_image[' + uuid +
            ']" value="' + name + '" />');
    },
    removedfile: function(file) {
        console.log(file);
        var name = "";
        // var path = "<?= WRITEPATH . 'uploads/' ?>";
        var path = "D:/koding/inlislite/public/uploads/"
        if (file.upload !== undefined) {
            name = file.upload.filename;
        } else {
            name = file.name;
            path = "<?= ROOTPATH . 'public/uploads/anggota/' ?>";
        }

        $.ajax({
            type: 'POST',
            url: "<?= base_url('banner/do_delete') ?>",
            data: "name=" + name + "&path=" + path,
            dataType: 'html'
        });
        var _ref;
        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) :
            void 0;
    }

});
</script>
<?= $this->endSection('script'); ?>