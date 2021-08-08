
<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate">Ambil Foto </i> 
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm_create" method="post" action="">
                <div class="modal-body">
                    <div id="frm_create_message"></div>

                    <div class="form-row">
                              <div class="col-md-6">
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
                        </div>
                        </div>
					<div id="my_camera">
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= lang('App.btn.close'); ?></button>
                    <button type="submit" class="btn btn-primary" name="submit"><?= lang('App.btn.save'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<script>
    Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );

//ambil gambar 



</script>
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

                  $('#dropzone_file_image_listed').append('<input type="hidden" name="file_image[' + uuid + ']" value="' + name + '" />');
            },
            removedfile: function(file) {
                  console.log(file);
                  var name = "";
                  // var path = "<?= WRITEPATH . 'uploads/' ?>";
                  var path ="D:/koding/inlislite/public/uploads/"
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
                  return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }

      });
</script>
