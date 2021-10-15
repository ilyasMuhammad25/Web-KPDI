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
                    <i class="pe-7s-study icon-gradient bg-strong-bliss"></i>
                </div>
                <div>Kontak
                    <div class="page-title-subheading">Mohon melengkapi data pada form berikut.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('auth') ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('faq') ?>">Kontak</a></li>
                        <li class="active breadcrumb-item" aria-current="page">Tambah Kontak</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form Tambah Kontak
        </div>
        <div id="infoMessage"><?= $message ?? ''; ?></div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card-body">
                    <form id="frm_create_faq" method="post" action="">
                        <?= get_message('message'); ?>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="name">Nama*</label>
                                    <div>
                                        <input type="text" class="form-control" id="frm_create_name" name="name" placeholder="Nama" value="<?= set_value('name'); ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="email">Email*</label>
                                    <div>
                                        <input type="text" class="form-control" id="frm_create_email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="phone">No. Telepon*</label>
                                    <div>
                                        <input type="number" class="form-control" id="frm_create_phone" name="phone" placeholder="No. Telepon" value="<?= set_value('phone'); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                              <label for="subject">Subjek</label>
                              <div>
                                <input type="text" class="form-control" id="frm_create_subject" name="subject" placeholder="Subjek" value="<?= set_value('subject'); ?>" />
                              </div>
                        </div>
                        <div class="form-group">
                              <label for="message">Pesan</label>
                              <div>
                                    <textarea id="message" name="message" placeholder="Pesan" rows="1" class="form-control autosize-input"><?= set_value('message'); ?></textarea>
                              </div>
                        </div>

                        <div class="form-group">
                            <button id="submit-contact" name="submit" class="btn btn-primary"><?= lang('App.btn.save') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script>
      $(document).ready(function() {
            tinyMCE.init({
                  selector: 'textarea#message',
                  height: 430,
                  menubar: false,
                  pagebreak_separator: '<div style="page-break-after:always;clear:both"></div>',
                  plugins: 'link image code table pagebreak paste media lists',
                  toolbar: 'code | undo redo | bold italic underline strikethrough | fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl  | table tabledelete ',
                  setup: function(editor) {
                        editor.on('init', function(e) {
                              // editor.setContent(content);
                        });
                  },
                  fontsize_formats: "12px 14px 16px 18px 20px 24px 28px 32px",
                  content_style: "body { font-size: 14px;}",
            });
      });
</script>
<?= $this->endSection('script'); ?>
