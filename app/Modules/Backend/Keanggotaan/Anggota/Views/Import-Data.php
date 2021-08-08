<?php
$request = \Config\Services::request();
$request->uri->setSilent();


?>

<?= $this->extend('hamkamannan\adminigniter\layout\backend\main'); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-photo icon-gradient bg-strong-bliss"></i>
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
                <li class="nav-item"><a class="btn btn-primary" href="#activity" data-toggle="tab">Unduh templete</a></li>
            </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content">
                <!-- Update -->
                <div class="active tab-pane" id="activity">
                    <div class="app-main__inner">

                        
                            <div class="card-body">
                                <div id="infoMessage"><?= $message ?? ''; ?></div>
                                <?= get_message('message'); ?>

                                <!-- Form Field isian anggota -->

                                <form id="frm_create" class="col-md-12 mx-auto" method="post"
                                    action="<?= base_url('anggota/create'); ?>">
                                    <div class="form-row">
                              <div class="col-md-12">
                                    <div class="form-row">
                                          <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                      <label for="file_image" class="">Ambil foto</label>
                                                      <div id="dropzone_file_image" class="dropzone"></div>
                                                      <div id="dropzone_file_image_listed"></div>
                                                      <div>
                                                            <small class="info help-block text-muted">Format (JPG|PNG). Max 10 MB</small>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        
</form>

                                   
                                 
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