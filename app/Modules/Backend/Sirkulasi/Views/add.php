<?php
// cart_destroy();

$request = \Config\Services::request();
$request->uri->setSilent();
$slug = $request->getVar('slug') ?? 'loan';
$slug_title = ucwords(strtolower($slug));
$label = $slug_title;

if($slug == 'loan'){
	$label = 'Peminjaman';
	$label_title = 'Entri Peminjaman';
}

if($slug == 'return'){
	$label = 'Pengembalian';
	$label_title = 'Entri Pengembalian';
}

if($slug == 'extend'){
	$label = 'Perpanjangan';
	$label_title = 'Entri Perpanjangan';
}

if($slug == 'penalty'){
	$label = 'Pelanggaran';
	$label_title = 'Entri Pelanggaran';
}

$member_no = $request->getVar('member_no');
$member = get_member($member_no);
?>

<?= $this->extend(config('Core')->layout_backend); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-refresh-2 icon-gradient bg-strong-bliss"></i>
                </div>
                <div>Sirkulasi
                    <div class="page-title-subheading"><?=$label_title?></div>
                </div>
            </div>
            <div class="page-title-actions">
				<?=view('Anggota\Views\online\member_no', array('slug' => $slug, 'slug_title', 'member_no' => $member_no, 'action' => base_url('sirkulasi/create?slug='.$slug)))?>
            </div>
        </div>
    </div>

	<?=view('Sirkulasi\Views\nav_add', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => $label, 'label_title' => $label_title))?>

	<?php if(empty($member_no)):?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
					Pilih Nomor Anggota terlebih dahulu.
				</div>
			</div>
		</div>
	<?php else:?>
		<div class="row">
			<div class="col-lg-3 d-none d-lg-block">
				<?=view('Anggota\Views\online\member_profile', array('member' => $member))?>
			</div>
			<div class="col-lg-9">
				<?=view('Sirkulasi\Views\section\\'.$slug.'\\add', array('member'=> $member, 'slug' => $slug, 'slug_title' => $slug_title, 'label' => $label, 'label_title' => $label_title))?>
			</div>
		</div>
	<?php endif;?>
</div>

<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<?=view('Sirkulasi\Views\section\\'.$slug.'\add_script', array('member'=> $member, 'slug' => $slug, 'slug_title' => $slug_title, 'label' => $label, 'label_title' => $label_title))?>
<script>
	$('.select2').select2({theme: "bootstrap4"});
</script>
<?= $this->endSection('script'); ?>