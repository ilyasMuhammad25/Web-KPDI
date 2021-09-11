<?= $this->extend('hamkamannan\adminigniter\layout\backend\main'); ?>
<?= $this->section('style'); ?>

<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?= lang('Anggota.field.perpanjangan') ?>
                    <div class="page-title-subheading"><?= lang('Anggota.info.list_all') ?>
                        <?= lang('Anggota.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('anggota') ?>"><i class="fa fa-home"></i>
                                <?= lang('Anggota.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Anggota.module') ?> </li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Anggota.action.pelanggaran') ?>
                            <?= lang('Anggota.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-md-12 tab-pane">
        <div class="card">
            <div class="card-header p-2">
            
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link " href="<?= base_url('anggota/edit/'. $anggotas[0]->id) ?>">Update</a></li>
           
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ambil Foto</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_pelanggaran') ?>">Data Pelanggaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_peminjaman') ?>">Data peminjaman</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_perpanjangan') ?>">Data Perpanjangan</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_sumbangan') ?>">Data Sumbangan</a></li>
             

                </ul>
            </div><!-- /.card-header -->
            <div class="main-card mb-3 card">
                <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate">
                    </i><?= lang('Anggota.label.table') ?> <?= lang('Anggota.module') ?>
                    <div class="btn-actions-pane-right actions-icon-btn">

                    </div>
                </div>
                <div class="card-body">
                    <?= get_message('message'); ?>
                    <table style="width: 100%;" id="tbl_anggotas"
                        class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><?= lang('Anggota.field.no') ?> </th>
                                <th><?= lang('Anggota.field.peminjaman') ?> </th>
                                <th>Tanggal Berakhir</th>
                                <th>Biaya</th>
                                <th>Lunas</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($anggotas as $row) : ?>
                            <tr>

                                <td width="35"></td>
                                <td width="100">
                                    <!-- <a href="<?= base_url('uploads/anggota/' . $row->file_image) ?>"
                                        class="image-link"><img width="100" class="rounded"
                                            src="<?= base_url('uploads/anggota/' . $row->file_image) ?>" alt=""></a> -->
                                </td>
                                <td width="100">
                                    <!-- <?= _spec($row->name); ?> <br> -->
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- <td width="35"><?= _spec($row->sort); ?></td> -->
                               
                                <td width="100">
                                    <span class="badge badge-info"><?= _spec($row->created_at); ?></span><br>
                                    <span class="badge badge-info"><?= _spec($row->created_name); ?></span>
                                </td>
                                <td width="100">
                                    <span class="badge badge-info"><?= _spec($row->updated_at); ?></span><br>
                                    <span class="badge badge-info"><?= _spec($row->updated_name ?? '-'); ?></span>
                                </td>
                                <td width="35">
                                    <?php if(is_allowed('anggota/read')):?>
                                    <!-- <a href="<?= base_url('anggota/detail/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Detail Anggota" class="btn btn-xs btn-info show-data"><i class="pe-7s-note2 font-weight-bold"> </i></a> -->
                                    <?php endif;?>
                                    <?php if(is_allowed('anggota/update')):?>
                                    <a href="<?= base_url('anggota/edit/' . $row->id) ?>" data-toggle="tooltip"
                                        data-placement="top" title="Ubah Anggota"
                                        class="btn btn-xs btn-warning mb-1 show-data"><i
                                            class="pe-7s-note font-weight-bold">
                                        </i></a>
                                    <?php endif;?>
                                    <?php if(is_allowed('anggota/delete')):?>
                                    <a href="javascript:void(0);"
                                        data-href="<?= base_url('anggota/delete/' . $row->id); ?>" data-toggle="tooltip"
                                        data-placement="top" title="Hapus  rud"
                                        class="btn btn-xs btn-danger remove-data"><i
                                            class="pe-7s-trash font-weight-bold">
                                        </i></a>
                                    <?php endif;?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection('page'); ?>

    <?= $this->section('script'); ?>

    <script>
    setDataTable('#tbl_anggotas', disableOrderCols = [0, 7], defaultOrderCols = [6, 'desc'], autoNumber = true);

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