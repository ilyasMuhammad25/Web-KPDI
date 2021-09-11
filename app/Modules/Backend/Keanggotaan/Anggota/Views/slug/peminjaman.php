<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$member_id = $request->getVar('MemberID') ?? 0;
?>

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
                <div><?= lang('Anggota.field.sumbangan') ?>
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
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_pelanggaran?MemberID='.$member_id) ?>">Data Pelanggaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_peminjaman?MemberID='.$member_id) ?>">Data peminjaman</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_perpanjangan?MemberID='.$member_id) ?>">Data Perpanjangan</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('anggota/D_sumbangan?MemberID='.$member_id) ?>">Data Sumbangan</a></li>

                </ul>
            </div><!-- /.card-header -->
            <div class="main-card mb-3 card">
                <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate">
                    </i><?= lang('Anggota.label.table') ?> Peminjaman
                    <div class="btn-actions-pane-right actions-icon-btn">

                    </div>
                </div>
                <div class="card-body">
                    <?= get_message('message'); ?>
                    <table style="width: 100%;" id="tbl_anggotas"
                        class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jumlah Sumbangan </th>
                                <th>jumlah koleksi</th>
                                <th>Keterangan</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach (get_sumbangan($member_id) as $row) : ?>
                            <tr>
								<td width="35"><?=$no?></td>
								<td><?=$row->jumlah?></td>
								<td>-</td>
								<td><?=$row->description?></td>
                            </tr>
                            <?php $no++; endforeach; ?>
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