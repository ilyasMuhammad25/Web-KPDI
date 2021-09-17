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
                <div><?= lang('Mastertag.module') ?> 
                    <div class="page-title-subheading"><?= lang('Mastertag.info.list_all') ?>  <?= lang('Mastertag.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('mastertag') ?>"><i class="fa fa-home"></i> <?= lang('Mastertag.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Mastertag.module') ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('Mastertag.label.table') ?> <?= lang('Mastertag.module') ?> 
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('mastertag/create')):?>
                    <a href="<?= base_url('mastertag/create') ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('Mastertag.action.add') ?> <?= lang('Mastertag.module') ?> </a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_mastertags" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('Mastertag.field.no') ?> </th>
                        <th><?= lang('Mastertag.field.ref_format') ?></th>
                        <th><?= lang('Mastertag.field.ref_group') ?></th>
                        <th><?= lang('Mastertag.field.tag') ?></th>
                        <th><?= lang('Mastertag.field.name') ?></th>
                        <th><?= lang('Mastertag.field.length') ?></th>
                        <th><?= lang('Mastertag.field.fixed') ?></th>
                        <th><?= lang('Mastertag.field.enabled') ?></th>
                        <th><?= lang('Mastertag.field.repeatable') ?></th>
                        <th><?= lang('Mastertag.field.mandatory') ?></th>
                        <th><?= lang('Mastertag.field.customable') ?></th>
                        <th><?= lang('Mastertag.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mastertags as $row) : ?>
                        <tr>
                            <td></td>
                            <td><?= _spec($row->ref_format); ?></td>
                            <td><?= _spec($row->ref_group); ?></td>
                            <td><?= _spec($row->tag); ?></td>
                            <td width="200">
                                <?= _spec($row->name); ?> <br>
                            </td>
                            <td><?= _spec($row->length); ?></td>
                            <td><?= (_spec($row->fixed)==1)?'<i class="fas fa-check text-success"></i>':'<i class="fas fa-times text-danger"></i>'; ?></td>
                            <td><?= (_spec($row->enabled)==1)?'<i class="fas fa-check text-success"></i>':'<i class="fas fa-times text-danger"></i>'; ?></td>
                            <td><?= (_spec($row->repeatable)==1)?'<i class="fas fa-check text-success"></i>':'<i class="fas fa-times text-danger"></i>'; ?></td>
                            <td><?= (_spec($row->mandatory)==1)?'<i class="fas fa-check text-success"></i>':'<i class="fas fa-times text-danger"></i>'; ?></td>
                            <td><?= (_spec($row->customable)==1)?'<i class="fas fa-check text-success"></i>':'<i class="fas fa-times text-danger"></i>'; ?></td>
                            <td width="35">
                                <?php if(is_allowed('mastertag/read')):?>
                                    <!-- <a href="<?= base_url('mastertag/detail/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Detail Mastertag" class="btn btn-xs btn-info show-data"><i class="pe-7s-note2 font-weight-bold"> </i></a> -->
                                <?php endif;?>
                                <?php if(is_allowed('mastertag/update')):?>
                                    <a href="<?= base_url('mastertag/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah Mastertag" class="btn btn-xs btn-warning mb-1 show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
                                <?php endif;?>
                                <?php if(is_allowed('mastertag/delete')):?>
                                    <a href="javascript:void(0);" data-href="<?= base_url('mastertag/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus  rud" class="btn btn-xs btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
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
    setDataTable('#tbl_mastertags', disableOrderCols = [0, 7], defaultOrderCols = [6, 'desc'], autoNumber = true);

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