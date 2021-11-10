<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$slug = $request->getVar('slug') ?? 'profile';
$slug_title = ucwords(strtolower($slug));
$label = $slug_title;

if($slug == 'profile'){
	$label = 'Profil Saya';
}

if($slug == 'loan'){
	$label = 'Histori Peminjaman';
}

if($slug == 'reserve'){
	$label = 'Histori Pemesanan';
}

if($slug == 'order'){
	$label = 'Histori Usulan';
}

if($slug == 'extend'){
	$label = 'Perpanjangan';
}

$member_no = '202109140013';
$anggota =  db_get_single('t_anggota', 'MemberNo=' . $member_no);
$member = get_member($member_no);

?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main'; ?>
<?= $this->extend($layout); ?>
<?= $this->section('style'); ?>
<style>
.input-group > .select2-container--bootstrap4 {
    width: auto;
    flex: 1 1 auto;
}

.input-group > .select2-container--bootstrap4 .select2-selection--single {
    height: 100%;
    line-height: inherit;
    padding: 0.5rem 1rem;
}

.no-border-radius > .select2-container--bootstrap4 .select2-selection--single {
	border-top-right-radius: 0 !important;
	border-bottom-right-radius: 0 !important;
	border-bottom-left-radius: 0 !important;
}

</style>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-user icon-gradient bg-strong-bliss"></i>
                </div>
                <div>Keanggotaan
                    <div class="page-title-subheading"><?=$label?></div>
                </div>
            </div>
            <div class="page-title-actions">
				<?=view('Anggota\Views\online\nav_bread', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => $label))?>
            </div>
        </div>
    </div>

	<?=view('Anggota\Views\online\nav_list', array('member_no'=> $member_no, 'slug' => $slug))?>

	<div class="row">
		<div class="col-lg-3 d-none d-lg-block">
			<?=view('Anggota\Views\online\member_profile', array('member' => $member))?>
		</div>
		<div class="col-lg-9">
			<?=view('Anggota\Views\online\section\\'.$slug, array('anggota'=> $anggota, 'slug' => $slug))?>
		</div>
	</div>
</div>

<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script>
	setDataTable('#tbl_peminjamans', disableOrderCols = [0, 6], defaultOrderCols = [4, 'desc'], autoNumber = true);
	setDataTable('#tbl_pemesanans', disableOrderCols = [0, 6], defaultOrderCols = [4, 'desc'], autoNumber = true);
	setDataTable('#tbl_usulans', disableOrderCols = [0, 6], defaultOrderCols = [4, 'desc'], autoNumber = true);

	$('.select2').select2({theme: "bootstrap4",});
</script>
<?= $this->endSection('script'); ?>