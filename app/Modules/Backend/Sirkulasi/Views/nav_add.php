<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'loan')?'active':''?>" href="<?=base_url('sirkulasi/create?slug=loan&member_no='.$member_no)?>">
			<span><i class="header-icon lnr-enter"></i> Entri Peminjaman</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'return')?'active':''?>" href="<?=base_url('sirkulasi/create?slug=return&member_no='.$member_no)?>">
			<span><i class="header-icon lnr-exit"></i> Entri Pengembalian</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'extend')?'active':''?>" href="<?=base_url('sirkulasi/create?slug=extend&member_no='.$member_no)?>">
			<span><i class="header-icon lnr-calendar-full"></i> Entri Perpanjangan</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'penalty')?'active':''?>" href="<?=base_url('sirkulasi/create?slug=penalty&member_no='.$member_no)?>">
			<span><i class="header-icon lnr-warning"></i> Entri Pelanggaran</span>
		</a>
	</li>
</ul>