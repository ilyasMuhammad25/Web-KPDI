<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
	<li class="nav-item">
		<a class="nav-link <?=($slug == '')?'active':''?>" href="<?=base_url('katalog?slug=')?>">
			<span><i class="header-icon lnr-list"></i> Daftar Katalog RDA</span>
		</a>
	</li>	
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'rda')?'active':''?>" href="<?=base_url('katalog?slug=rda')?>">
			<span><i class="header-icon lnr-list"></i> Daftar Katalog RDA</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'aacr')?'active':''?>" href="<?=base_url('katalog?slug=aacr')?>">
			<span><i class="header-icon lnr-list"></i> Daftar Katalog AACR</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($view == 'is_cart')?'active':''?>" href="<?=base_url('katalog?view=is_cart')?>">
			<span><i class="header-icon lnr-list"></i> Daftar Katalog - Keranjang</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($view == 'is_quarantine')?'active':''?>" href="<?=base_url('katalog?view=is_quarantine')?>">
			<span><i class="header-icon lnr-list"></i> Daftar Katalog - Karantina</span>
		</a>
	</li>
</ul>