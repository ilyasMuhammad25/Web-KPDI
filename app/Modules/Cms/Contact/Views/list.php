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
                    <i class="pe-7s-id icon-gradient bg-strong-bliss"></i>
                </div>
                <div>Kontak
                    <div class="page-title-subheading">Daftar Semua Kontak</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('auth') ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active breadcrumb-item" aria-current="page">Kontak</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i>Tabel Kontak
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('contact/create')):?>
                    <a href="<?= base_url('contact/create') ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> Tambah Kontak</a>
                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_contacts" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No. Telepon</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Updated at</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($contacts as $row) : ?>
                        <tr>
                            <td width="35"><?= $no++ ?></td>
                            <td width="200"><?= _spec($row->name); ?></td>
                            <td width="120">
                                <?= $row->phone; ?>
                            </td>
                            <td width="100">
                                <?= $row->email ?>
                            </td>
                            <td><?= _spec($row->subject); ?></td>
                            <td width="100">
                                <div class="mb-2 mr-2 badge badge-pill badge-warning"><?= $row->updated_at ?></div>
                            </td>
                            <td width="90">
                                <?php if(is_allowed('contact/update')):?>
                                    <a href="<?= base_url('contact/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah Kontak" class="btn btn-warning show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
                                <?php endif;?>
                                <?php if(is_allowed('contact/delete')):?>
                                    <a href="javascript:void(0);" data-href="<?= base_url('contact/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Kontak" class="btn btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
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
<?= $this->include('Contact\Views\view_modal'); ?>

<script>
    Dropzone.autoDiscover = false;

    setDataTable('#tbl_contacts', disableOrderCols = [0, 6], defaultOrderCols = [5, 'desc'], autoNumber = true);

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