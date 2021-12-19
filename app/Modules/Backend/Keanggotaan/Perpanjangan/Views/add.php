<?php
// $request = \Config\Services::request();
// $request->uri->setSilent();
// $slug = $request->getVar('slug') ?? 'peminjaman';
// $member_no = $request->getVar('member_no') ?? user()->username;
// $member = get_member($member_no);

$request = \Config\Services::request();
$request->uri->setSilent();
$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('t_anggota');
$anggotas = $baseModel
    ->find_all('created_at','desc');
  
    // dd($katalog);

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



                </div>

                <div class="form-row">
                    <div class="col-md-4">
                        <?=$this->include('Perpanjangan\Views\section\member_profile')?>
                    </div>
                    <div class="col-md-6">

                        <strong><label for="sort">Nama*</label></strong>
                        <div class="-group ">

                            <select class="custom-select js-example-basic-multiple" id="package"
                                onchange="myFunction();" name="t_anggota_id" value="">
                                <option value="" disabled selected>Pilih</option>
                                <?php foreach($anggotas as $row):?>

                                <option data-no_anggota=<?= _spec($row->MemberNo); ?> data-name="<?= $row->name ?>"
                                    data-email=<?= _spec($row->Email); ?> data-address="<?= $row->Address ?>"
                                    data-date="<?= $row->EndDate ?>" data-id="<?= $row->id ?>"
                                    data-nomor="<?=$row->NoHp?>"
                                    data-jenis="<?=$row->ref_jenisanggota?>"
                                     value="<?=$row->id?>">
                                    <?=$row->MemberNo?>-<?=$row->name?></option>
                                <?php endforeach;?>
                            </select>
                            <input type="hidden" name="t_anggota_id" id="anggota_id" value="">


                        </div>


                        <div>
                            <strong> <label for="name">Update Tanggal berahir</label></strong>
                            <div>
                                <input type="text" class="form-control datepicker" id="date2" name="EndDate"
                                    placeholder="Tanggal Berahir " value="<?= set_value('EndDate') ?>" />
                            </div>
                        </div>

                        <div>
                            <strong> <label for="name">Update Jenis Anggota</label></strong>
                            <select class="form-control" name="ref_jenisanggota" id="ref_jenisanggota" tabindex="-1"
                                aria-hidden="true">
                                <option value="" disabled selected>
                                    <?=lang('Anggota.field.Jenisanggota')?>
                                </option>

                                <?php foreach(get_dropdown('m_jenis_anggota',null,'jenisanggota','jenisanggota') as $row):?>
                                <option value="<?=$row->code?>"><?=$row->text?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                      
                        <div>
                            <strong> <label for="sort">Biaya</label></strong>
                            <div>
                                <input type="number" class="form-control" id="frm_create_sort" name="biaya"
                                    value="<?= set_value('biaya') ?>" />

                            </div>
                        </div>

                        <!-- <div>
                          <strong>  <label for="sort">Tes</label></strong>
                            <div>
                            <input placeholder="masukkan tanggal Akhir" id="date2" type="text" class="form-control datepicker" name="tgl_akhir">

                            </div>
                        </div> -->

                        <div class="form-check form-group mt-1">
                            <div>
                                <input type="hidden" class="iCheck-square" name="is_lunas" id="is_lunas" value="0">
                                <input type="checkbox" class="iCheck-square" name="is_lunas" id="is_lunas" value="1">
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

<script type="text/javascript">
$(function() {
    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
});
</script>
<script>
$('#package').on('change', function() {
    // ambil data dari elemen option yang dipilih
    const no_anggota = $('#package option:selected').data('no_anggota');
    const name = $('#package option:selected').data('name');
    // const NoHp = $('#package option:selected').data('NoHp');
    const email = $('#package option:selected').data('email');
    const address = $('#package option:selected').data('address');
    const nomor = $('#package option:selected').data('nomor');
    const date = $('#package option:selected').data('date');
    const id = $('#package option:selected').data('id');
    const jenis = $('#package option:selected').data('jenis');

   

    $('[name=no_anggota]').html(no_anggota);
    $('#anggota_id').val(id);
    $('#name').html(name);
    $('#date').html(date);
    $('#ref_jenisanggota').val(jenis);
    $('#date2').val(date);
    $('#nomor').html(nomor);
    $('[name=email]').html(email);
    $('[name=address]').html(address);
    //   $('[name=discount]').val(totalDiscount);

    //   $('#total').text(`Rp ${total}`);
});
</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});


$(".btn-pilih").click(function() {
    var id = $(this).data('id');
    var name = $(this).data('name');
    var MemberNo = $(this).data('MemberNo');
    // var judul = $(this).data('judul');
    // var penanggungjawab = $(this).data('penanggungjawab');

    // $('#frm_create_name').val(judul);
    // $('#penanggungjawab').val(penanggungjawab);
    $('#anggota_id').val(id);
    $('#name').html(name);
    $('#MemberNo').html(MemberNo);

    $('#modal_create').modal('hide');
});
</script>
<?= $this->endSection('script'); ?>