<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Pilih Katalog
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_eksemplars" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('Eksemplar.field.no') ?> </th>
                        <th><?= lang('Eksemplar.field.name') ?></th>
                        <th><?= lang('Eksemplar.field.description') ?></th>
                        <th><?= lang('Eksemplar.field.sort') ?></th>
                        <th><?= lang('Eksemplar.field.active') ?></th>
                        <th><?= lang('Eksemplar.field.created_by') ?></th>
                        <th><?= lang('Eksemplar.field.updated_by') ?></th>
                        <th><?= lang('Eksemplar.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
					<tr>
						<td>1</td>
						<td colspan="6">Judul 1</td>
						<td><button type="button" data-id="1" data-judul="Judul 1" class="btn btn-primary btn-pilih">Pilih</button></td>
					</tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<script>
    $('#frm_create2').submit(function(event) {
        event.preventDefault();
        var data_post = $(this).serializeArray();

        $('.loading').show();

        $.ajax({
                url: '<?= base_url('api/user/create') ?>',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                console.log(res)
                if (res.status === 201) {
                    Swal.fire({
                        title: 'Success',
                        text: '<?= lang('User.info.success.create') ?>',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    setTimeout(function() {
                        window.location.href = '<?= base_url('user') ?>';
                    }, 2000);
                } else {
                    $('#frm_create_message').html(res.messages.error);
                }
            })
            .fail(function(res) {
                console.log(res);
                $('#frm_create_message').html(res.responseJSON.messages.error);
            })
            .always(function() {
                $('.loading').hide();
                $('html, body').animate({
                    scrollTop: $(document).height()
                }, 2000);
            });

        return false;
    });

    $('#modal_create').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#frm_create_message').html('');
    });
</script>