<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$slug = $request->getVar('slug') ?? 'loan';
$slug_title = ucwords(strtolower($slug));
$label = $slug_title;

if($slug == 'loan'){
	$label = 'Peminjaman';
	$label_title = 'Daftar Peminjaman';
}

if($slug == 'return'){
	$label = 'Pengembalian';
	$label_title = 'Daftar Pengembalian';
}

if($slug == 'extend'){
	$label = 'Perpanjangan';
	$label_title = 'Daftar Perpanjangan';
}

if($slug == 'penalty'){
	$label = 'Pelanggaran';
	$label_title = 'Daftar Pelanggaran';
}

$member_no = '202109140013'; //user()->username;
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
				<?=view('Sirkulasi\Views\nav_bread', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => $label, 'label_title' => $label_title))?>
            </div>
        </div>
    </div>

	<?=view('Sirkulasi\Views\nav_list', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => $label, 'label_title' => $label_title))?>

	<div class="row">
		<div class="col-lg-12">
			<?=view('Sirkulasi\Views\section\\'.$slug.'\\list', array('member'=> $member, 'slug' => $slug, 'slug_title' => $slug_title, 'label' => $label, 'label_title' => $label_title))?>
		</div>
	</div>
</div>

<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<?=view('Sirkulasi\Views\section\\'.$slug.'\list_script', array('member'=> $member, 'slug' => $slug, 'slug_title' => $slug_title, 'label' => $label, 'label_title' => $label_title))?>
<script>
	$('.select2').select2({theme: "bootstrap4",});
</script>
<?= $this->endSection('script'); ?>