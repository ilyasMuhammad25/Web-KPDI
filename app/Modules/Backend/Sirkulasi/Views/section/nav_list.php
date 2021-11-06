<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'peminjaman')?'active':''?>" href="<?=base_url('sirkulasi?slug=peminjaman')?>">
			<span>Daftar Peminjaman</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'pengembalian')?'active':''?>" href="<?=base_url('sirkulasi?slug=pengembalian')?>">
			<span>Daftar Pengembalian</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'perpanjangan')?'active':''?>" href="<?=base_url('sirkulasi?slug=perpanjangan')?>">
			<span>Daftar Perpanjangan</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'pelanggaran')?'active':''?>" href="<?=base_url('sirkulasi?slug=pelanggaran')?>">
			<span>Daftar Pelanggaran</span>
		</a>
	</li>
</ul>