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
                <div><?= lang('JenisAnggota.module') ?> 
                    <div class="page-title-subheading"><?= lang('JenisAnggota.info.list_all') ?>  <?= lang('JenisAnggota.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('jenisanggota') ?>"><i class="fa fa-home"></i> <?= lang('JenisAnggota.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('JenisAnggota.module') ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('JenisAnggota.label.table') ?> <?= lang('JenisAnggota.module') ?> 
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('jenisanggota/create')):?>
                    <a href="<?= base_url('jenisanggota/create') ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('JenisAnggota.action.add') ?> <?= lang('JenisAnggota.module') ?> </a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_jenisanggotas" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                    <th><?= lang('Tag.field.no') ?> </th>
                        <th>Jenis Anggota </th>
                        <th>Masa Berlaku</th>
                        <th>Biaya Pendaftaran</th>
                        <th>Biaya Perpanjangan</th>
                        <th>Maksimal Pinjam Koleksi</th>
                        <th>UploadDokumen</th>
                        
                        
                        <th><?= lang('JenisAnggota.field.created_by') ?></th>
                        <th><?= lang('JenisAnggota.field.updated_by') ?></th>
                        <th><?= lang('JenisAnggota.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jenisanggotas as $row) : ?>
                        <tr>
                            <td width="35"></td>
                            <td width="200">
                                <?= _spec($row->jenisanggota); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->MasaBerlakuAnggota); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->BiayaPendaftaran); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->BiayaPerpanjangan); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->MaxPinjamKoleksi); ?> <br>
                            </td>
                            <td width="50">
                                <input type="checkbox" class="apply-status" data-href="<?= base_url('jenisanggota/apply_status'); ?>" data-field="UploadDokumenKeanggotaanOnline" data-id="<?=$row->id?>" <?= ($row->UploadDokumenKeanggotaanOnline == 1) ? 'checked' : '' ?> data-toggle="toggle" data-onstyle="success">
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
                                <?php if(is_allowed('jenisanggota/read')):?>
                                    <!-- <a href="<?= base_url('jenisanggota/detail/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Detail JenisAnggota" class="btn btn-xs btn-info show-data"><i class="pe-7s-note2 font-weight-bold"> </i></a> -->
                                <?php endif;?>
                                <?php if(is_allowed('jenisanggota/update')):?>
                                    <a href="<?= base_url('jenisanggota/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah JenisAnggota" class="btn btn-xs btn-warning mb-1 show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
                                <?php endif;?>
                                <?php if(is_allowed('jenisanggota/delete')):?>
                                    <a href="javascript:void(0);" data-href="<?= base_url('jenisanggota/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus  rud" class="btn btn-xs btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
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
    setDataTable('#tbl_jenisanggotas', disableOrderCols = [0, 7], defaultOrderCols = [6, 'desc'], autoNumber = true);

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