<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$member_id = $request->getVar('member_id') ?? 0;
?>

<ul class="nav nav-pills">
	<li class="nav-item"><a class="nav-link " href="<?= base_url('anggota/edit/'.$member_id) ?>">Update</a></li>
	<li class="nav-item"><a class="nav-link" href="<?= base_url('anggota?slug=upload&member_id='.$member_id) ?>">Ambil Foto</a></li>
	<li class="nav-item"><a class="nav-link" href="<?= base_url('anggota?slug=pelanggaran&member_id='.$member_id) ?>">Data Pelanggaran</a></li>
	<li class="nav-item"><a class="nav-link" href="<?= base_url('anggota?slug=peminjaman&member_id='.$member_id) ?>">Data peminjaman</a></li>
	<li class="nav-item"><a class="nav-link" href="<?= base_url('anggota?slug=perpanjangan&member_id='.$member_id) ?>">Data Perpanjangan</a></li>
	<li class="nav-item"><a class="nav-link" href="<?= base_url('anggota?slug=sumbangan&member_id='.$member_id) ?>">Data Sumbangan</a></li>
</ul>
