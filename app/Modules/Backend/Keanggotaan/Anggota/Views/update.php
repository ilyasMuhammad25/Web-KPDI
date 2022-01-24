<?php
	$request = \Config\Services::request();
	$request->uri->setSilent();
<<<<<<< HEAD
   
    // dd($tanggal);
=======
>>>>>>> 375a1b24784fbe11f02dcea357af5456d21f9b0a
	$slug = $request->getVar('slug') ?? 'keanggotaan';
	$member_id = $request->getVar('member_id') ?? 0;
?>

<<<<<<< HEAD


=======
>>>>>>> 375a1b24784fbe11f02dcea357af5456d21f9b0a
<?=$this->extend(config('Core')->layout_backend);?>
<?=$this->section('style');?>
<?=$this->endSection('style');?>

<?=$this->section('page');?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-strong-bliss"></i>
                </div>
                <div>
                    <?php if(!$is_anggota):?>
                    <?= lang('Anggota.action.update') ?> <?= lang('Anggota.module') ?>
                    <div class="page-title-subheading"><?= lang('Anggota.form.complete_the_data') ?>.</div>
                    <?php else:?>
                    Profil <?= lang('Anggota.module') ?>
                    <div class="page-title-subheading"><?= lang('Anggota.form.complete_the_data') ?>.</div>
                    <?php endif;?>
                </div>
            </div>
            <div class="page-title-actions">
                <?php if(!$is_anggota):?>
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>"><i class="fa fa-home"></i>
                                <?=lang('Anggota.label.home')?></a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('anggota')?>"><?=lang('Anggota.module')?></a>
                        </li>
                        <li class="active breadcrumb-item" aria-current="page"><?=lang('Anggota.action.update')?>
                            <?=lang('Anggota.module')?></li>
                    </ol>
                </nav>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header-tab card-header">
            <div class="card-header-title">
                <i class="header-icon lnr-layers icon-gradient bg-plum-plate"> </i>
                Informasi
            </div>
            <?php if(!$is_anggota):?>
            <ul class="nav">
                <li class="nav-item"><a href="<?= base_url('anggota/edit/'.$anggota->id.'?slug=keanggotaan') ?>"
                        class="nav-link show <?=($slug == 'keanggotaan')?'active':''?>">Keanggotaan</a></li>
                <li class="nav-item"><a href="<?= base_url('anggota/edit/'.$anggota->id.'?slug=pelanggaran') ?>"
                        class="nav-link show <?=($slug == 'pelanggaran')?'active':''?>">Pelanggaran</a></li>
                <li class="nav-item"><a href="<?= base_url('anggota/edit/'.$anggota->id.'?slug=peminjaman') ?>"
                        class="nav-link show <?=($slug == 'peminjaman')?'active':''?>">Peminjaman</a></li>
                <li class="nav-item"><a href="<?= base_url('anggota/edit/'.$anggota->id.'?slug=perpanjangan') ?>"
                        class="nav-link show <?=($slug == 'perpanjangan')?'active':''?>">Perpanjangan</a></li>
                <li class="nav-item"><a href="<?= base_url('anggota/edit/'.$anggota->id.'?slug=sumbangan') ?>"
                        class="nav-link show <?=($slug == 'sumbangan')?'active':''?>">Sumbangan</a></li>
            </ul>
            <?php endif;?>
        </div>
        <div class="card-body">
            <div id="infoMessage"><?=$message ?? '';?></div>
            <?=get_message('message');?>

            <?= $this->include("Anggota\Views\section\\$slug"); ?>

        </div>
    </div>
</div>


<?=$this->endSection('page');?>

<?=$this->section('script');?>
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
var checkboxes = $('#is_similar');

checkboxes.on('ifChanged', function(event) {
    if (checkboxes.filter(':checked').length == checkboxes.length) {
        $('#AddressNow').val($('#Address').val());
        $('#KecamatanNow').val($('#Kecamatan').val());
        $('#KelurahanNow').val($('#Kelurahan').val());
        $('#RTNow').val($('#RT').val());
        $('#RWNow').val($('#RW').val());

		var provincy = $('#Provincy').val();
		var city = $('#City').val();

		$("#ProvincyNow").val(provincy).trigger('change');
		$("#CityNow").val(city).trigger('change');
    } 
});
</script>
<script>
$(document).ready(function() {
    $('#Provincy').change(function() {
        var propinsi_id = $(this).val();
        var uriParam = '?propinsi_id=' + propinsi_id;
        getDropdown('City', uriParam, 'Pilih', false, false);
    });
});
</script>
<script>
$(document).ready(function() {
    $('#ProvincyNow').change(function() {
        var propinsi_id = $(this).val();
        var uriParam = '?propinsi_id=' + propinsi_id;
        getDropdown('CityNow', uriParam, 'Pilih', false, false);
    });
});
</script>
<script>
setDataTable('#tbl_pelanggaran', disableOrderCols = [0], defaultOrderCols = [1, 'asc'], autoNumber = true);
setDataTable('#tbl_peminjaman', disableOrderCols = [0], defaultOrderCols = [1, 'asc'], autoNumber = true);
setDataTable('#tbl_perpanjangan', disableOrderCols = [0], defaultOrderCols = [1, 'asc'], autoNumber = true);
setDataTable('#tbl_sumbangan', disableOrderCols = [0], defaultOrderCols = [1, 'asc'], autoNumber = true);

$("body").on("click", ".remove-data", function() {
        var url = $(this).attr('data-href');
        Swal.fire({
           // showConfirmButton: false,
           text: " berhasil cetak kartu anggota",
            type: 'success',
            // showCancelButton: true,
            timer: 6000,
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        });
        // return false;
    });

    $("body").on("click", ".cetak-kartu", function() {
        var url = $(this).attr('data-href');
        Swal.fire({
           // showConfirmButton: false,
           text: " berhasil cetak bebas pustaka",
            type: 'success',
            // showCancelButton: true,
            timer: 6000,
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        });
        // return false;
    });

    $("body").on("submit", "#myform", function() {
    // e.preventDefault();
    let form = $(this).parents('form');
    let submit=form.submit();
        Swal.fire({
            // title: '<?= lang('App.swal.are_you_sure') ?>',
            // showConfirmButton: false,
            text: "Anggota berhasil diubah",
            type: 'success',
            // showCancelButton: true,
            timer: 6000,
            // confirmButtonColor: '#3085d6',
            // cancelButtonColor: '#dd6b55',
            // confirmButtonText: '<?= lang('App.btn.yes') ?>',
            // cancelButtonText: '<?= lang('App.btn.no') ?>'
        }).then((result) => {
            if (result.value) {
                submit;
            }
      

        });
        // return false;
        
    });
</script>
<?=$this->endSection('script');?>
