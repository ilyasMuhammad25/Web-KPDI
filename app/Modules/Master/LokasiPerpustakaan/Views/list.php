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
                <div><?= lang('LokasiPerpustakaan.module') ?> 
                    <div class="page-title-subheading"><?= lang('LokasiPerpustakaan.info.list_all') ?>  <?= lang('LokasiPerpustakaan.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('lokasiperpustakaan') ?>"><i class="fa fa-home"></i> <?= lang('LokasiPerpustakaan.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('LokasiPerpustakaan.module') ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('LokasiPerpustakaan.label.table') ?> <?= lang('LokasiPerpustakaan.module') ?> 
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('lokasiperpustakaan/create')):?>
                    <a href="<?= base_url('lokasiperpustakaan/create') ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('LokasiPerpustakaan.action.add') ?> <?= lang('LokasiPerpustakaan.module') ?> </a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_lokasiperpustakaans" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('LokasiPerpustakaan.field.no') ?> </th>
                        <th><?= lang('LokasiPerpustakaan.field.name') ?></th>
                        <th><?= lang('LokasiPerpustakaan.field.kode') ?></th>
                        <th><?= lang('LokasiPerpustakaan.field.alamat') ?></th>
                        <th><?= lang('LokasiPerpustakaan.field.description') ?></th>
                        <th><?= lang('LokasiPerpustakaan.field.sort') ?></th>
                        <th><?= lang('LokasiPerpustakaan.field.active') ?></th>
                        <th><?= lang('LokasiPerpustakaan.field.created_by') ?></th>
                        <th><?= lang('LokasiPerpustakaan.field.updated_by') ?></th>
                        <th><?= lang('LokasiPerpustakaan.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lokasiperpustakaans as $row) : ?>
                        <tr>
                            <td width="35"></td>
                            <td width="200">
                                <?= _spec($row->name); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->kode); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->alamat); ?> <br>
                            </td>
                            <td><?= _spec($row->description); ?></td>
                            <td width="35"><?= _spec($row->sort); ?></td>
                            <td width="50">
                                <input type="checkbox" class="apply-status" data-href="<?= base_url('lokasiperpustakaan/apply_status'); ?>" data-field="active" data-id="<?=$row->id?>" <?= ($row->active == 1) ? 'checked' : '' ?> data-toggle="toggle" data-onstyle="success">
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
                                <?php if(is_allowed('lokasiperpustakaan/read')):?>
                                    <!-- <a href="<?= base_url('lokasiperpustakaan/detail/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Detail LokasiPerpustakaan" class="btn btn-xs btn-info show-data"><i class="pe-7s-note2 font-weight-bold"> </i></a> -->
                                <?php endif;?>
                                <?php if(is_allowed('lokasiperpustakaan/update')):?>
                                    <a href="<?= base_url('lokasiperpustakaan/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah LokasiPerpustakaan" class="btn btn-xs btn-warning mb-1 show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
                                <?php endif;?>
                                <?php if(is_allowed('lokasiperpustakaan/delete')):?>
                                    <a href="javascript:void(0);" data-href="<?= base_url('lokasiperpustakaan/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus  rud" class="btn btn-xs btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
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
    setDataTable('#tbl_lokasiperpustakaans', disableOrderCols = [0, 7], defaultOrderCols = [6, 'desc'], autoNumber = true);

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