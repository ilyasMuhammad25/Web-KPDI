<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('c_references');
$categories = $baseModel
    ->select('c_references.*')
    ->join('c_menus','c_menus.id = c_references.menu_id', 'inner')
    ->where('c_menus.name','Jenis Identitas')
    ->find_all('c_references.sort', 'asc');
    
    $categoriesperkawinan = $baseModel
    ->select('c_references.*')
    ->join('c_menus','c_menus.id = c_references.menu_id', 'inner')
    ->where('c_menus.name','Status Perkawinan')
    ->find_all('name', 'asc');
  
$field_to_show=array('field1,field2,field3,field4,field5');
$display='block';
?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main';?>
<?=$this->extend($layout);?>
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
                <div><?= lang('Members.action.add') ?> <?= lang('Members.module') ?>
                    <div class="page-title-subheading"><?= lang('Members.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('members') ?>"><?= lang('Members.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Members.action.add') ?> <?= lang('Members.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
            <div class="card-header">
                  <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?= lang('Members.action.add') ?> <?= lang('Members.module') ?>
            </div>
            <div class="card-body">
                  <div id="infoMessage"><?= $message ?? ''; ?></div>
                  <?= get_message('message'); ?>

                  <!-- Form Field isian anggota -->

                  <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('members/create'); ?>">
                        <div class="form-row">
                              <!-- <div class="col-md-9" style="display:<?=(in_array('field1',$field_to_show))?'block':'none'?>"> -->
                              <div class="col-md-6" style="display:<?=(in_array('field1',$field_to_show))?'':$display?>">
                                    <div class="position-relative form-group">
                                          <label for="name"><?= lang('Members.field.name') ?></label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_name" name="name" placeholder="<?= lang('Members.field.name') ?> " value="<?= set_value('name'); ?>" />
                                                <small class="info help-block text-muted"><?= lang('Members.field.name') ?></small>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="position-relative form-group">
                                          <label><?=lang('Members.field.Jenisanggota')?></label>
                                          <select class="form-control" name="category_id" id="category_id" tabindex="-1" aria-hidden="true" >
                                          <option value="" disabled selected><?=lang('Members.field.Jenisanggota')?></option>
                                                <?php foreach ($categories as $row) : ?>
                                                <option placeholder="<?= lang('Members.field.name') ?> " value="<?= $row->id ?>"><?= $row->name ?> </option>
                                                <?php endforeach; ?>
                                          </select>
                                    </div>
                              </div>
                        </div>
                        <div class="form-row">
                              <div class="col-md-6">
                              <div class="position-relative form-group">
                                          <label><?= lang('Members.field.Jenisidentitas') ?></label>
                                          <select class="form-control" name="category_id" id="category_id" tabindex="-1" aria-hidden="true" placeholder="<?= lang('Members.field.Jenisidentitas') ?>">
                                          <option value="" disabled selected><?= lang('Members.field.Jenisidentitas') ?></option>
                                                <?php foreach ($categories as $row) : ?>
                                                <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                <?php endforeach; ?>
                                          </select>
                                    </div>
                              </div>

                              <div class="col-md-4">
                                    <div class="position-relative form-group">
                                          <label><?=lang('Members.field.Statusperkawinan')?></label>
                                          <select class="form-control" name="category_id" id="category_id" tabindex="-1" aria-hidden="true">
                                          <option value="" disabled selected><?= lang('Members.field.Statusperkawinan') ?></option>

                                                <?php foreach ($categoriesperkawinan as $row) : ?>
                                                <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                <?php endforeach; ?>
                                          </select>
                                    </div>
                              </div>
                        </div>

                        <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Nomor Identitas</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_IdentityNo" name="IdentityNo" placeholder="Nomor identitas" value="<?= set_value('IdentityNo'); ?>" />
                                                <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                          </div>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="position-relative form-group">
                                          <label><?=lang('Members.field.Agama')?></label>
                                          <select class="form-control" name="category_id" id="category_id" tabindex="-1" aria-hidden="true">
                                          <option value="" disabled selected><?= lang('Members.field.Agama') ?></option>
                                                <?php foreach ($categories as $row) : ?>
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
                                                <input type="text" class="form-control" id="frm_create_PlaceOfBirth" name="PlaceOfBirth" placeholder="Tempat Lahir" value="<?= set_value('PlaceOfBirth'); ?>" />
                                                <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                          </div>
                                    </div>
                              </div>
                         </div>

                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Tanggal Lahir</label>
                                          <div>
                                                <input type="date" class="form-control" id="frm_create_DateOfBirth" name="DateOfBirth" placeholder="Tempat Lahir" value="<?= set_value('DateOfBirth'); ?>" />
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
                                                <input type="text" class="form-control" id="frm_create_Address" name="Address" placeholder="Alamat" value="<?= set_value('Address'); ?>" />
                                                <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                          </div>
                                    </div>
                              </div>
                         </div>

                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">provinsi</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_Provincy" name="Provincy" placeholder="Provinsi" value="<?= set_value('Provincy'); ?>" />
                                                <!-- <small class="info help-block text-muted">Judul Keangotaan</small> -->
                                          </div>
                                    </div>
                              </div>
                         </div>

                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">kabupaten/Kota</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_City" name="City" placeholder="Kabupaten/kota" value="<?= set_value('City'); ?>" />
                                              
                                          </div>
                                    </div>
                              </div>
                         </div>
                         
                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Kecamatan</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_kecamatan" name="kecamatan" placeholder="Kecamatan" value="<?= set_value('Kecamatan'); ?>" />
                                           
                                          </div>
                                    </div>
                              </div>
                         </div>

                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Kelurahan</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_kelurahan" name="kelurahan" placeholder="Kelurahan" value="<?= set_value('Kelurahan'); ?>" />
                                             
                                          </div>
                                    </div>
                              </div>
                         </div>
                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">RT</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_RT" name="RT" placeholder="RT" value="<?= set_value('RT'); ?>" />
                                              
                                          </div>
                                    </div>
                              </div>
                         </div>

                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">RW</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_RW" name="RW" placeholder="RW" value="<?= set_value('RW'); ?>" />
                                                
                                          </div>
                                    </div>
                              </div>
                         </div>
                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">No Handphone</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_NoHp" name="NoHp" placeholder="Nomor Handphone" value="<?= set_value('NoHp'); ?>" />
                                                
                                          </div>
                                    </div>
                              </div>
                         </div>

                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Jenis kelamin</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_jeniskelamin" name="jeniskelamin" placeholder="jenis Kelamin" value="<?= set_value('Address'); ?>" />
                                                
                                          </div>
                                    </div>
                              </div>
                         </div>

                         <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Pendidikan</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_pendidikan" name="pendidikan" placeholder="pendidikan" value="<?= set_value('Address'); ?>" />
                                                
                                          </div>
                                    </div>
                              </div>
                         </div>

                         <div class="form-row">
                              <div class="col-md-6">
                              <div class="position-relative form-group">
                                          <label>pekerjaan</label>
                                          <select class="form-control" name="category_id" id="category_id" tabindex="-1" aria-hidden="true">
                                                <?php foreach ($categories as $row) : ?>
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
                                                <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?= set_value('Email'); ?>" />
                                                
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
                                                <input type="text" class="form-control" id="frm_create_InstitutionName" name="InstitutionName" placeholder="Nama Institusi" value="<?= set_value('InstitutionName'); ?>" />
                                                
                                          </div>
                                    </div>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Alamat Institusi</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_InstitutionAddress" name="InstitutionAddress" placeholder="Alamat Institusi" value="<?= set_value('InstitutionAddress'); ?>" />
                                                
                                          </div>
                                    </div>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="name">Telepon Institusi</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_InstitutionPhone" name="InstitutionPhone" placeholder="Telepon Institusi" value="<?= set_value('InstitutionPhone'); ?>" />
                                                
                                          </div>
                                    </div>
                              </div>
                            </div>

                        <div class="form-group">
                              <label for="description"><?= lang('Members.field.description') ?> </label>
                              <div>
                                    <textarea id="frm_create_description" name="description" placeholder="<?= lang('Members.field.description') ?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?= set_value('description') ?></textarea>
                              </div>
                        </div>

                        <div class="form-group">
                              <button type="submit" class="btn btn-primary" name="submit"><?= lang('Members.action.save') ?></button>
                        </div>
                  </form>
            </div>
    </div>
</div>


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->endSection('script'); ?>