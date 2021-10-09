<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="header-icon lnr-pencil icon-gradient bg-plum-plate"> </i> Detail
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm_edit" method="post" data-action="<?= base_url('api/contact/update') ?>" data-id="">
                <div class="modal-body">
                    <div id="frm_edit_message"></div>
                    <div class="form-row">
                        <div class="col-md-8">
                            <div class="position-relative form-group">
                                <label for="name">Nama</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_edit_name" name="name" placeholder="Nama" value="<?= set_value('name'); ?>" disabled />
                                    <small class="info help-block">Nama</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="phone">No. Telepon</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_edit_phone" name="phone" placeholder="Phone" value="<?= set_value('phone'); ?>" disabled />
                                    <small class="info help-block">No. Telepon</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="email">Email</label>
                                <div>
                                    <input type="text" class="form-control" id="frm_edit_email" name="email" placeholder="Email" value="<?= set_value('email'); ?>" disabled />
                                    <small class="info help-block">Email</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Deskripsi</label>
                        <div>
                            <textarea id="frm_edit_message" name="message" placeholder="Deskripsi" rows="2" class="form-control autosize-input" style="min-height: 38px;" readonly></textarea>
                            <small class="info help-block">Deskripsi</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= lang('App.btn.close') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.show-data').click(function() {
        var url = $(this).attr('data-href');
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                console.log(response.message);
                $('#frm_edit').attr("data-id", response.id);
                $('#frm_edit_name').val(response.first_name + ' ' + response.last_name);
                $('#frm_edit_phone').val(response.phone);
                $('#frm_edit_email').val(response.email);
                $('#frm_edit_message').val(response.message);
                $('#modal_edit').modal('show');
            }
        });
    });

    $('#modal_edit').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#frm_edit_message').html('');
        $('#dropzone_edit_file_image').remove();
        $('#dropzone_edit_file_image2').html(`
            <div id="dropzone_edit_file_image" class="dropzone"></div>
        `);
    });

    $('#modal_edit').on('shown.bs.modal', function(e) {
        //
    });
</script>