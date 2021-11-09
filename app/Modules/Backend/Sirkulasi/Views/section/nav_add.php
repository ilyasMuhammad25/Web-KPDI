<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'peminjaman')?'active':''?>" href="<?=base_url('sirkulasi/create?slug=peminjaman&member_no='.$member_no)?>">
			<span><i class="header-icon lnr-enter"></i> Entri Peminjaman</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'pengembalian')?'active':''?>" href="<?=base_url('sirkulasi/create?slug=pengembalian&member_no='.$member_no)?>">
			<span><i class="header-icon lnr-exit"></i> Entri Pengembalian</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'perpanjangan')?'active':''?>" href="<?=base_url('sirkulasi/create?slug=perpanjangan&member_no='.$member_no)?>">
			<span><i class="header-icon lnr-calendar-full"></i> Entri Perpanjangan</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'pelanggaran')?'active':''?>" href="<?=base_url('sirkulasi/create?slug=pelanggaran&member_no='.$member_no)?>">
			<span><i class="header-icon lnr-warning"></i> Entri Pelanggaran</span>
		</a>
	</li>
</ul>