<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'rda')?'active':''?>" href="<?=base_url('katalog?slug=rda')?>">
			<span><i class="header-icon lnr-enter"></i> Daftar Katalog RDA</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'aacr')?'active':''?>" href="<?=base_url('katalog?slug=aacr')?>">
			<span><i class="header-icon lnr-exit"></i> Daftar Katalog AACR</span>
		</a>
	</li>
</ul>