<?= $this->extend('hamkamannan\adminigniter\layout\backend\main'); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-server icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?= lang('Tag.module') ?> 
                    <div class="page-title-subheading"><?= lang('Tag.info.list_all') ?>  <?= lang('Tag.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('tag') ?>"><i class="fa fa-home"></i> <?= lang('Tag.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Tag.module') ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('Tag.label.table') ?> <?= lang('Tag.module') ?> 
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('tag/create')):?>
                    <a href="<?= base_url('tag/create') ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('Tag.action.add') ?> <?= lang('Tag.module') ?> </a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_tags" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('Tag.field.no') ?> </th>
                        <th><?= lang('Tag.field.ref_format') ?></th>
                        <th><?= lang('Tag.field.ref_group') ?></th>
                        <th><?= lang('Tag.field.tag') ?></th>
                        <th><?= lang('Tag.field.name') ?></th>
                        <th><?= lang('Tag.field.length') ?></th>
                        <th><?= lang('Tag.field.fixed') ?></th>
                        <th><?= lang('Tag.field.enabled') ?></th>
                        <th><?= lang('Tag.field.repeatable') ?></th>
                        <th><?= lang('Tag.field.mandatory') ?></th>
                        <th><?= lang('Tag.field.customable') ?></th>
                        <th><?= lang('Tag.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tags as $row) : ?>
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
                            <td width="90">
                                <?php if(is_allowed('tag/update')):?>
                                    <a href="<?= base_url('tag/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah Tag" class="btn btn-warning show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
                                <?php endif;?>
                                <?php if(is_allowed('tag/delete')):?>
                                    <a href="javascript:void(0);" data-href="<?= base_url('tag/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Tag" class="btn btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
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
    setDataTable('#tbl_tags', disableOrderCols = [0, 7], defaultOrderCols = [6, 'desc'], autoNumber = true);

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