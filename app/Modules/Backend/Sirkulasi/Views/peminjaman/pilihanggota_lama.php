<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('t_anggota');
$anggotas = $baseModel
    ->find_all('name', 'asc');
    // dd($katalog);
?>

<div class="modal fade" id="modal_create1" tabindex="-1" role="dialog" aria-hidden="true">
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
            <table style="width: 100%;" id="modal_anggota" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?=lang('Anggota.field.no')?> </th>
                        <th><?=lang('Anggota.field.name')?></th>
                        <th><?=lang('Anggota.field.MemberNo')?></th>
                        <th><?=lang('Anggota.field.Email')?></th>
                        <th><?=lang('Anggota.label.action')?></th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>

<script>


    $('#modal_create').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#frm_create_message').html('');
    });
</script>