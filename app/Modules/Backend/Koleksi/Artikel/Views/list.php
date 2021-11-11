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
                <div><?= lang('Artikel.module') ?>
                    <div class="page-title-subheading"><?= lang('Artikel.info.list_all') ?>
                        <?= lang('Artikel.module') ?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('artikel') ?>"><i class="fa fa-home"></i>
                                <?= lang('Artikel.label.home') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Artikel.module') ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate">
            </i><?= lang('Artikel.label.table') ?> <?= lang('Artikel.module') ?>
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('artikel/create')):?>
                <a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);" class=" btn btn-success"
                    title=""><i class="fa fa-plus"></i> <?= lang('Artikel.action.add') ?> <?= lang('Artikel.module1') ?>
                </a>
                <a data-toggle="modal" data-target="#modal_create2" href="javascript:void(0);" class=" btn btn-success"
                    title=""><i class="fa fa-plus"></i> <?= lang('Artikel.action.add') ?> <?= lang('Artikel.module2') ?>
                </a>

                <?php endif;?>
            </div>
        </div>
        <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_artikels" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?= lang('Page.field.no') ?> </th>
                        <th>PDF</th>
                        <th>Judul Artikel</th>
                        <th>Kreator</th>
                        <th>Subjek</th>
                        <th>Edisi Serial</th>
                        <th><?= lang('Page.field.created_by') ?></th>
                        <th><?= lang('Page.field.updated_by') ?></th>
                        <th><?= lang('Page.label.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($artikels as $row) : ?>
                    <?php 
							$default = base_url('uploads/default/no_cover.jpg');
							$image = base_url('uploads/artikel/' . $row->file_image);
							$thumb = base_url('uploads/artikel/thumb_' . $row->file_image);
							if (empty($row->file_image)) {
								$image = $default;
								$thumb = $default;
							}
						?>
                    <tr>
                        <td width="35"></td>

                        <td width="100" style="vertical-align: bottom;">
                            <?php if(!empty($row->file_pdf)):?>
                            <a href="<?= base_url('flip?path=artikel&file=' . $row->file_pdf) ?>"
                                class="ajax-popup-link">
                                <img width="80" class="rounded" src="<?= base_url('uploads/default/pdf.png') ?>" alt="">
                            </a>
                            <?php else:?>
                            -
                            <?php endif;?>
                            <a href="javascript:void(0);" data-title="Konten Digital"
                                data-format-title="Format (PDF). Max 10MB" data-format=".pdf" data-dropzone-url=""
                                data-url="" data-redirect="<?= base_url('artikel') ?>" data-id="<?=$row->id?>"
                                data-field="file_pdf" data-title="" data-toggle="tooltip" data-placement="top"
                                title="Upload " class="btn btn-sm btn-block btn-secondary upload-data mt-1"
                                style="min-width:35px"><small><i class="fa fa-upload"> </i> Upload</small></a>
                        </td>
                        <td width="200">
                            <?= _spec($row->Title); ?> <br>

                        </td>
                        <td><?= _spec($row->Creator); ?></td>
                        <td><?= _spec($row->Subject); ?></td>
                        <td><?= _spec($row->EDISISERIAL); ?></td>


                        <td width="100">
                            <span class="badge badge-info"><?= _spec($row->created_at); ?></span><br>
                            <span class="badge badge-info"><?= _spec($row->created_name); ?></span>
                        </td>
                        <td width="100">
                            <span class="badge badge-info"><?= _spec($row->updated_at); ?></span><br>
                            <span class="badge badge-info"><?= _spec($row->updated_name ?? '-'); ?></span>
                        </td>
                        <td width="90">

                            <!-- <a id="btn1" data-creator="<?=$row->Creator?>" data-Catalog_id="<?= _spec($row->id); ?>"
                                data-href="<?= base_url('api/artikel/edit' . $row->id); ?>"
                                data-title="<?=$row->Title?>" data-subject="<?=$row->Subject?>"
                                data-startpage="<?=$row->StartPage?>"
                                data-pages="<?=$row->Pages?>"
                                data-abstract="<?=$row->Abstract?>"
                                 data-toggle="modal" data-target="#modal_update"
                                href="javascript:void(0);" data-placement="top" title="Ubah Page"
                                class="btn btn-warning show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
                             -->
                            <!-- <a data-toggle='tooltip' data-placement='top' class='btn-updateartikel' title='Update'
                                value="<?= $row->id?>">
                                <button type='button' class='btn btn-outline-success btn-xs' data-toggle='modal'
                                    data-target='#modal_update'><i class='fa fa-edit'></i></button>
                            </a> -->
                            <?php if(is_allowed('artikel/update')):?>
                            <a href="javascript:void(0);" data-href="<?= base_url('api/artikel/detail/' . $row->id); ?>"
                                data-toggle="tooltip" data-placement="top" title="Ubah Artikel"
                                class="btn btn btn-warning update_modal"><i class="pe-7s-note font-weight-bold"></i></a>
                            <?php endif;?>


                            <?php if(is_allowed('artikel/delete')):?>
                            <a href="javascript:void(0);" data-href="<?= base_url('artikel/delete/' . $row->id); ?>"
                                data-toggle="tooltip" data-placement="top" title="Hapus Artikel"
                                class="btn btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
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
<?= $this->include('Artikel\Views\add_modal'); ?>
<?= $this->include('Artikel\Views\upload_modal'); ?>
<?= $this->include('Artikel\Views\add_modal serial'); ?>
<?= $this->include('Artikel\Views\update_modal'); ?>

<script>
// mendapatkan data untuk edit
$(document).ready(function() {
    $("#btn1").click(function() {
        const Catalog_id = $(this).data('Catalog_id');
        const creator = $(this).data('creator');
        const title = $(this).data('title');
        const subject = $(this).data('subject');
        const startpage = $(this).data('startpage');
        const pages = $(this).data('pages');
        const abstract = $(this).data('abstract');
        console.log(creator);

        $('#Catalog_id').val(Catalog_id);
        $('#Title').val(title);
        $('#Creator').val(creator);
        $('#Subject').val(subject);
        $('#StartPage').val(startpage);
        $('#Pages').val(pages);
        $('#Abstract').val(abstract);
    });

});
</script>
<script>
Dropzone.autoDiscover = false;
</script>
<script>
setDataTable('#tbl_artikels', disableOrderCols = [0, 7], defaultOrderCols = [6, 'desc'], autoNumber = true);

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