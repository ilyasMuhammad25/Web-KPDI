<div class="modal fade" id="modal_upload" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Upload File - <span id="upload_title_span"></span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm_upload" method="post" data-action="" data-id="" enctype="multipart/form-data">
                <div class="modal-body">
                    <div id="frm_upload_message"></div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label for="file_pendukung" class="">File <span id="upload_title_span2"></span>*</label>
                                <div id="dropzone_file_pendukung" class="dropzone"></div>
                                <div id="dropzone_file_pendukung_listed"></div>
                                <div>
                                    <small class="info help-block">Format (JPG|PNG). Max 10 MB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="upload_id" id="upload_id" value="">
                    <input type="hidden" name="upload_field" id="upload_field" value="">
                    <input type="hidden" name="upload_title" id="upload_title" value="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= lang('App.btn.close') ?></button>
                    <button type="submit" class="btn btn-primary" name="submit"><?= lang('App.btn.save') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.upload-data').click(function() {
        Dropzone.autoDiscover = false;
        var id = $(this).attr('data-id');
        var field = $(this).attr('data-field');
        var title = $(this).attr('data-title');

        $('#frm_upload').attr("data-id", id);
        $('#frm_upload').attr("data-field", field);
        $('#frm_upload').attr("data-title", title);

        console.log(id)
        console.log(field)
        console.log(title)

        $('#modal_upload').modal('show');
        $('#upload_id').val(id);
        $('#upload_field').val(field);
        $('#upload_title').val(title);
        $('#upload_title_span').html(title);
        // $('#upload_title_span2').html(title);
    });

    $('#frm_upload').submit(function(event) {
        event.preventDefault()
        var data_post = $(this).serializeArray();
        var id = $('#upload_id').val();

        $('.loading').show()

        $.ajax({
                url: '<?= base_url('api/user/upload_file') ?>',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                console.log(res)
                if (res.status === 201) {
                    Swal.fire({
                        title: 'Success',
                        text: 'File berhasil disimpan',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })

                    setTimeout(function() {
                        window.location.href = '<?= base_url('user/profile') ?>';
                    }, 2000)
                } else {
                    $('#frm_upload_message').html(res.messages.error)
                }
            })
            .fail(function(res) {
                console.log(res)
                // $('#frm_upload_message').html(res.responseJSON.messages.error)
            })
            .always(function() {
                $('.loading').hide()
                $('html, body').animate({
                    scrollTop: $(document).height()
                }, 2000);
            });

        return false;
    });

    $('#modal_upload').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#frm_upload_message').html('');
        // dropzone_file_pendukung = null;
        dropzone_file_pendukung.disable();
    });

    $('#modal_upload').on('shown.bs.modal', function(e) {
        //
    });

    Dropzone.autoDiscover = false;
    var dropzone_file_pendukung = new Dropzone("#dropzone_file_pendukung", {
        url: "<?= base_url('user/do_upload') ?>", // /do_uploads fi multiple
        paramName: "file", // files if multiple
        maxFiles: 1,
        maxFilesize: 1,
        addRemoveLinks: true,
        acceptedFiles: '.jpg,.png',
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

            $('#dropzone_file_pendukung_listed').append('<input type="hidden" name="file_pendukung[' + uuid + ']" value="' + name + '" />');
        },
        removedfile: function(file) {
            console.log(file);
            var name = "";
            var path = "<?= WRITEPATH . 'uploads/' ?>";
            if (file.upload !== undefined) {
                name = file.upload.filename;
            } else {
                name = file.name;
                path = "<?= ROOTPATH . 'public/uploads/user/' ?>";
            }

            $.ajax({
                type: 'POST',
                url: "<?= base_url('user/do_delete') ?>",
                data: "name=" + name + "&path=" + path,
                dataType: 'html'
            });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }

    });
</script>