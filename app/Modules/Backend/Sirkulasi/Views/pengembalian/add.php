<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main'; ?>
<?= $this->extend($layout); ?>
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
                <div>Halaman Pengembalian
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>
                                Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="<?= base_url('sirkulasi') ?>"><?= lang('Sirkulasi.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Sirkulasi.action.add') ?>
                            <?= lang('Sirkulasi.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form
            Pengembalian
        </div>
        <div class="card-body">
            <div id="infoMessage"><?= $message ?? ''; ?></div>
            <?= get_message('message'); ?>

            <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('sirkulasi/create'); ?>">
                <div class="form-row">

                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="hidden" name="t_anggota_id" id="t_anggota_id" value="">
                            <input type="text" name="jml_eksemplar" id="frm_create_MemberNo" class="form-control"
                                placeholder="Masukan Nomor Barcode">
                            <div class="input-group-append">
                                <a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);"
                                    class="btn btn-primary" style="background-color: #315644;"
                                    title="<?= lang('User.btn.profile.update') ?>"><i class="fa fa-book"></i> Cari
                                    daftar peminjaman</a>
                            </div>
                        </div>
                    </div>

                </div><br>
                <!-- data anggota -->

                <div class="form-row" id="data-anggota">
                    <div class="col-md-12">
                        <!-- Main content -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid" src=""
                                                        alt="User profile picture">
                                                </div>

                                                <h3 class="profile-username text-center"></h3>

                                                <p class="text-muted text-center"></p>

                                                <ul class="list-group list-group-unbordered mb-4">
                                                    <li class="list-group-item">
                                                        <b> </b> <a class="float-right"></a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Nama: </b><span id="frm_create_name"></span> <a
                                                            class="float-right"></a>
                                                    </li>
                                                    <li class="list-group-item" id="frm_create_MemberNo">
                                                        <b>No anggota</b> <a class="float-right"></a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Jenis Anggota</b> <a class="float-right"></a>
                                                    </li>
                                                </ul>
                                                <!-- View Berkas Pendaftaran -->

                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>

                                    <!-- /.col -->
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header p-2">
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item"><a class="nav-link " href="#activity"
                                                            data-toggle="tab">Detail Anggota</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#timeline"
                                                            data-toggle="tab">Lokasi Anggota</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#settings"
                                                            data-toggle="tab">Histori peminjaman</a></li>
                                                </ul>
                                            </div><!-- /.card-header -->
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <!-- Biodata -->
                                                    <div class="active tab-pane" id="activity">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Biodata</th>
                                                                    <th>Keterangan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>1</th>
                                                                    <td>Nama</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>2</th>
                                                                    <td>Tempat Lahir</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>3</th>
                                                                    <td>Tanggal Lahir</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>4</th>
                                                                    <td>Jenis Kelamin</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>5</th>
                                                                    <td>Agama</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>6</th>
                                                                    <td>No. Handphone</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>7</th>
                                                                    <td>Alamat</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <!-- Orangtua -->
                                                    <div class="tab-pane" id="timeline">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Kode</th>
                                                                    <th>Nama Perpustakaan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>1</th>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>2</th>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>3</th>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <!-- Sekolah -->
                                                    <div class="tab-pane" id="settings">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nomor Barcode</th>
                                                                    <th>judul</th>
                                                                    <th>tanggal Pinjam</th>
                                                                    <th>Tanggal kembali</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>1</th>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>2</th>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>3</th>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- /.tab-content -->
                                            </div><!-- /.card-body -->
                                        </div>
                                        <!-- /.nav-tabs-custom -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </section>
                    </div>
                </div>



                <div class="form-row">
                    <div class=" container-fluid mt-4" style="text-align: center; font-size: 14px; background-color: #315644; padding: 10px;
                      color: #fff; text-shadow: 0 1px 2px #222; margin-bottom: 3px; border-radius: 5px;">
                        <b>KOLEKSI YANG AKAN DIKEMBALIKAN</b>
                    </div>
                    <div class="card-body table-responsive">
                        <?=get_message('message');?>
                        <table style="width: 100%;" id="tbl_eksemplars"
                            class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><?= lang('Sirkulasi.field.no') ?> </th>
                                    <th><?= lang('Sirkulasi.field.peminjaman') ?></th>
                                    <th><?= lang('Sirkulasi.field.barcode') ?></th>
                                    <th><?= lang('Sirkulasi.field.judul') ?></th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal kembali</th>
                                    <th>Hari terlmabat</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="background-color: #315644;"
                        name="submit"><?= lang('Sirkulasi.action.save') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>




<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->include('Sirkulasi\Views\peminjaman\pilih_eksemplar'); ?>
<?= $this->include('Sirkulasi\Views\peminjaman\pilih_anggota'); ?>

<script>
$('#modal_create').on('shown.bs.modal', function() {
    setDataTable('#modal_anggota', disableOrderCols = [0, 4], defaultOrderCols = [1, 'asc'], autoNumber = true);


});

$('#modal_eksemplar').on('shown.bs.modal', function() {
    //    setDataTable('#modal_anggota', disableOrderCols = [0, 4], defaultOrderCols = [1, 'asc'], autoNumber = true);


});


$(".btn-pilih").click(function() {
    var id = $(this).data('id');
    var no_anggota = $(this).data('no_anggota');
    var name = $(this).data('name');
    var penanggungjawab = $(this).data('penanggungjawab');

    $('#frm_create_MemberNo').val(no_anggota);
    $('#frm_create_name').html(name);
    $('#penanggungjawab').val(penanggungjawab);
    $('#catalog_id').val(id);

    $('#modal_create').modal('hide');

    $("#data-anggota").append(``);


});
</script>


<?= $this->endSection('script'); ?>