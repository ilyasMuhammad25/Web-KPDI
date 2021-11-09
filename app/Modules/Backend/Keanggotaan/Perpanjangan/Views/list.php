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
                <div><?= lang('Perpanjangan.module') ?> 
                    <div class="page-title-subheading"><?= lang('Perpanjangan.info.list_all') ?>  <?= lang('Perpanjangan.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('perpanjangan') ?>"><i class="fa fa-home"></i> <?= lang('Perpanjangan.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Perpanjangan.module') ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('Perpanjangan.label.table') ?> <?= lang('Perpanjangan.module') ?> 
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('perpanjangan/create')):?>
                    <a href="<?= base_url('perpanjangan/create') ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('Perpanjangan.action.add') ?> <?= lang('Perpanjangan.module') ?> </a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_perpanjangans" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('Sumbangan.field.no') ?> </th>
                        <th><?= lang('Sumbangan.field.name') ?></th>
                        <th><?= lang('Sumbangan.field.MemberNo') ?></th>
                        <th><?= lang('Sumbangan.field.description') ?></th>
                        <th>Biaya</th>
                        <th>Lunas</th>
                        <th><?= lang('Sumbangan.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($perpanjangans as $row) : ?>
                        <tr>
                            <td width="35"></td>
                            <td width="200">
                                <?= _spec($row->nama); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->MembersNo); ?> <br>
                            </td>
                            <td width="200"><?= _spec($row->description); ?></td>
                        
                            <td width="100">
                            <?= _spec($row->biaya); ?>
                            </td>
                          
                            <td width="50">
                            <input type="checkbox" class="apply-status"
                                data-href="<?=base_url('perpanjangan/apply_status');?>" data-field="is_lunas"
                                data-id="<?=$row->id?>" <?=($row->is_lunas == 1) ? 'checked' : ''?> data-toggle="toggle"
                                data-onstyle="success">
                        </td>
                            </td>
                            <td width="35">
                                
                                <?php if(is_allowed('perpanjangan/delete')):?>
                                    <a href="javascript:void(0);" data-href="<?= base_url('perpanjangan/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus  rud" class="btn btn-xs btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
                                <?php endif;?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<script>
    setDataTable('#tbl_perpanjangans', disableOrderCols = [0, 6], defaultOrderCols = [6, 'desc'], autoNumber = true);

    $("body").on("click", ".remove-data", function() {
        var url = $(this).attr('data-href');
        Swal.fire({
            title: '<?= lang('App.swal.are_you_sure') ?>',
            text: "<?= lang('App.swal.can_not_be_restored') ?>",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#dd6b55',
            confirmButtonText: '<?= lang('App.btn.yes') ?>',
            cancelButtonText: '<?= lang('App.btn.no') ?>'
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        });
        return false;
    });
</script>
<?= $this->endSection('script'); ?>