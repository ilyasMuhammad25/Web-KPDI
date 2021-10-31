<!-- <?php
$request = \Config\Services::request();
$request->uri->setSilent();
$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('t_eksemplar');
$eksemplars = $baseModel
    ->find_all('NomorBarcode','desc');
    // dd($katalog);
?> -->

<div class="modal fade" id="modal_eksemplar" tabindex="-1" role="dialog" aria-hidden="true">
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
            <div class="app-main__inner">
    
    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate">
            </i><?=lang('Anggota.label.table')?> <?=lang('Anggota.module')?>
            <div class="btn-actions-pane-right actions-icon-btn">

                <?php if (is_allowed('anggota/create')): ?>
                    <a href="<?=base_url('anggota/create')?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?=lang('Anggota.action.add')?> <?=lang('Anggota.module')?> </a>
                <?php endif;?>
            </div>

        </div>
        <div class="card-body table-responsive">
            <?=get_message('message');?>
            <table style="width: 100%;" id="tbl_eksemplars" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('Eksemplar.field.no') ?> </th>
                        <th><?= lang('Eksemplar.field.Barcode') ?></th>
                        <th><?= lang('Eksemplar.field.Tanggalpengadaan') ?></th>
                        <th><?= lang('Eksemplar.field.induk') ?></th>
                        <th><?= lang('Eksemplar.field.bibliografis') ?></th>
                        <th><?= lang('Eksemplar.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $i = 1; foreach ($eksemplars as $row) : ?>
                        <tr>
                            <td width="35"><?= $i++; ?></td>
                         
                            <td width="200">
                                <?= _spec($row->NomorBarcode); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->TanggalPengadaan); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->NoInduk); ?> <br>
                            </td>
                         
                         
                         
                            <td width="35">
                            <button type="button" data-id= <?= _spec($row->id); ?>  class="btn btn-primary btn-pilih">Pilih</button>
                            </td>
                          
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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

    $('#exampleModal').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#frm_create_message').html('');
    });
</script>