<?= $this->extend('hamkamannan\adminigniter\layout\backend\main'); ?>
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
                <div><?= lang('LokasiRuang.module') ?> 
                    <div class="page-title-subheading"><?= lang('LokasiRuang.info.list_all') ?>  <?= lang('LokasiRuang.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('lokasiruang') ?>"><i class="fa fa-home"></i> <?= lang('LokasiRuang.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('LokasiRuang.module') ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('LokasiRuang.label.table') ?> <?= lang('LokasiRuang.module') ?> 
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('lokasiruang/create')):?>
                    <a href="<?= base_url('lokasiruang/create') ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('LokasiRuang.action.add') ?> <?= lang('LokasiRuang.module') ?> </a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_lokasiruangs" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('LokasiRuang.field.no') ?> </th>
                        <th><?= lang('LokasiRuang.field.name') ?></th>
                        <th><?= lang('LokasiRuang.field.description') ?></th>
                        <th><?= lang('LokasiRuang.field.sort') ?></th>
                        <th><?= lang('LokasiRuang.field.active') ?></th>
                        <th><?= lang('LokasiRuang.field.created_by') ?></th>
                        <th><?= lang('LokasiRuang.field.updated_by') ?></th>
                        <th><?= lang('LokasiRuang.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lokasiruangs as $row) : ?>
                        <tr>
                            <td width="35"></td>
                            <td width="200">
                                <?= _spec($row->name); ?> <br>
                            </td>
                            <td><?= _spec($row->description); ?></td>
                            <td width="35"><?= _spec($row->sort); ?></td>
                            <td width="50">
                                <input type="checkbox" class="apply-status" data-href="<?= base_url('lokasiruang/apply_status'); ?>" data-field="active" data-id="<?=$row->id?>" <?= ($row->active == 1) ? 'checked' : '' ?> data-toggle="toggle" data-onstyle="success">
                            </td>
                            <td width="100">
                                <span class="badge badge-info"><?= _spec($row->created_at); ?></span><br>
                                <span class="badge badge-info"><?= _spec($row->created_name); ?></span>
                            </td>
                            <td width="100">
                                <span class="badge badge-info"><?= _spec($row->updated_at); ?></span><br>
                                <span class="badge badge-info"><?= _spec($row->updated_name ?? '-'); ?></span>
                            </td>
                            <td width="35">
                                <?php if(is_allowed('lokasiruang/read')):?>
                                    <!-- <a href="<?= base_url('lokasiruang/detail/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Detail LokasiRuang" class="btn btn-xs btn-info show-data"><i class="pe-7s-note2 font-weight-bold"> </i></a> -->
                                <?php endif;?>
                                <?php if(is_allowed('lokasiruang/update')):?>
                                    <a href="<?= base_url('lokasiruang/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah LokasiRuang" class="btn btn-xs btn-warning mb-1 show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
                                <?php endif;?>
                                <?php if(is_allowed('lokasiruang/delete')):?>
                                    <a href="javascript:void(0);" data-href="<?= base_url('lokasiruang/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus  rud" class="btn btn-xs btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
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
    setDataTable('#tbl_lokasiruangs', disableOrderCols = [0, 7], defaultOrderCols = [6, 'desc'], autoNumber = true);

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