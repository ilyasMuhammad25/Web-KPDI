<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?php $core = config('Core');
$layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main';?>
<?=$this->extend($layout);?>
<?=$this->section('style');?>
<?=$this->endSection('style');?>

<?=$this->section('page');?>


<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?=lang('Anggota.action.add')?> <?=lang('Anggota.module')?>
                    <div class="page-title-subheading"><?=lang('Anggota.form.complete_the_data')?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('anggota')?>"><?=lang('Anggota.module')?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?=lang('Anggota.action.add')?> <?=lang('Anggota.module')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
            <div class="card-header">
                  <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form Upload <?=lang('Anggota.module')?>
            </div>
            <div class="card-body">
                  <div id="infoMessage"><?=$message ?? '';?></div>
                  <?=get_message('message');?>

				  <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('anggota/import'); ?>">
                        <div class="form-row">
                              <div class="col-md-12">
                                    <div class="position-relative form-group">
                                          <div class="widget-content p-0 mb-2">
                                          <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                      <div class="widget-heading text-danger">Upload File</div>
                                                </div>
                                                <div class="widget-content-right">
                                                      <a href="<?=base_url('uploads/template/template_anggota.xlsx')?>" data-toggle="tooltip" data-placement="top"  title="Lihat Template" target="_blank" class="btn btn-secondary" style="min-width:35px"><i class="fa fa-file-excel"> </i> Download Template</a>
                                                </div>
                                          </div>
                                          </div>
                                          <div class="col-md-12">
											<div class="form-row">
												<div class="col-md-12">
													<div class="position-relative form-group">
														<label for="file_image" class="">Foto Anggota</label>
														<div id="file_template" class="dropzone"></div>
														<div id="file_template_listed"></div>
														<div>
															<small class="info help-block text-muted">Format (XLS|XLSX).
																Max 10 MB</small>
														</div>
													</div>
												</div>
											</div>
                       					 </div>
                              </div>
                        </div>


                        <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg mt-3" name="submit"><?=lang('Anggota.action.save')?></button>
                        </div>
                  </form>
            </div>
    </div>
</div>


<?=$this->endSection('page');?>

<?=$this->section('script');?>
<script>
      var file_template = setDropzone('file_template', 'anggota', '.xlsx,.xls', 1, 10);
</script>
<?=$this->endSection('script');?>
