<?php
$request = \Config\Services::request();
$request->uri->setSilent();


?>

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
                <div><?= lang('Perpanjangan.action.add') ?> <?= lang('Perpanjangan.module') ?>
                    <div class="page-title-subheading"><?= lang('Perpanjangan.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>
                                Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="<?= base_url('perpanjangan') ?>"><?= lang('Perpanjangan.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Perpanjangan.action.add') ?>
                            <?= lang('Perpanjangan.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form
            <?= lang('Perpanjangan.action.add') ?> <?= lang('Perpanjangan.module') ?>
        </div>
        <div class="card-body">
            <div id="infoMessage"><?= $message ?? ''; ?></div>
            <?= get_message('message'); ?>

            <form id="frm_create" class="col-md-12 mx-auto" method="post"
                action="<?= base_url('perpanjangan/create'); ?>">
                <div class="form-row">
                    <div class="col-md-9">
                        <div class="position-relative form-group">
                            <label for="name"><?= lang('Perpanjangan.field.name') ?>*</label>
                            <div>
                                <select class="form-control js-example-basic-multiple" name="t_anggota_id"
                                    id="t_anggota_id" tabindex="-1" aria-hidden="true" style="width:100%">

                                    <?php foreach(get_dropdown3('t_anggota') as $row):?>
                                    <option value="<?=$row->code?>"><?=$row->text?>-<?=$row->no_anggota?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name"><?= lang('Perpanjangan.field.name') ?>*</label>
                            <div>
                                <input type="text" class="form-control" id="frm_create_sort" name="sort"
                                    placeholder="<?= lang('Perpanjangan.field.sort') ?> "
                                    value="<?= set_value('sort') ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="sort">Tanggal lahir</label>
                            <div>
                                <input type="number" class="form-control" id="frm_create_sort" name="sort"
                                    placeholder="<?= lang('Perpanjangan.field.sort') ?> "
                                    value="<?= set_value('sort') ?>" readonly />
                                <small class="info help-block text-muted"><?= lang('Perpanjangan.field.sort') ?>
                                    Perpanjangan</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">Jenis Anggota</label>
                            <div>
                                <input type="text" class="form-control" id="frm_create_sort" name="sort"
                                    placeholder="<?= lang('Perpanjangan.field.sort') ?> "
                                    value="<?= set_value('sort') ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="sort">Masa berlaku saat ini</label>
                            <div>
                                <input type="number" class="form-control" id="frm_create_sort" name="sort"
                                    value="<?= set_value('sort') ?>" />
                                <small class="info help-block text-muted"><?= lang('Perpanjangan.field.sort') ?>
                                    Perpanjangan</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">Tanggal berahir</label>
                            <div>
                                <input type="text" class="form-control" id="frm_create_sort" name="sort"
                                    placeholder="<?= lang('Perpanjangan.field.sort') ?> "
                                    value="<?= set_value('sort') ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="sort">Biaya</label>
                            <div>
                                <input type="number" class="form-control" id="frm_create_sort" name="sort"
                                    value="<?= set_value('sort') ?>" />
                                <small class="info help-block text-muted"><?= lang('Perpanjangan.field.sort') ?>
                                    Perpanjangan</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-check form-group">
                    <div>
                        <input type="hidden" class="iCheck-square" name="IsOPAC" id="IsOPAC" value="0">
                        <input type="checkbox" class="iCheck-square" name="IsOPAC" id="IsOPAC" value="1">
                        <label class="  control-label">Sudah Lunas</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description"><?= lang('Perpanjangan.field.description') ?> </label>
                    <div>
                        <textarea id="frm_create_description" name="description"
                            placeholder="<?= lang('Perpanjangan.field.description') ?> " rows="2"
                            class="form-control autosize-input"
                            style="min-height: 38px;"><?= set_value('description') ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"
                        name="submit"><?= lang('Perpanjangan.action.save') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<?= $this->endSection('script'); ?>