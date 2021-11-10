<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'loan')?'active':''?>" href="<?=base_url('sirkulasi?slug=loan')?>">
			<span><i class="header-icon lnr-enter"></i> Daftar Peminjaman</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'return')?'active':''?>" href="<?=base_url('sirkulasi?slug=return')?>">
			<span><i class="header-icon lnr-exit"></i> Daftar Pengembalian</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'extend')?'active':''?>" href="<?=base_url('sirkulasi?slug=extend')?>">
			<span><i class="header-icon lnr-calendar-full"></i> Daftar Perpanjangan</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'penalty')?'active':''?>" href="<?=base_url('sirkulasi?slug=penalty')?>">
			<span><i class="header-icon lnr-warning"></i> Daftar Pelanggaran</span>
		</a>
	</li>
</ul>