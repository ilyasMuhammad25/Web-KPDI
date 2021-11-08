<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'rda')?'active':''?>" href="<?=base_url('katalog/create?slug=rda')?>">
			<span><i class="header-icon lnr-enter"></i> Entri Katalog RDA</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?=($slug == 'aacr')?'active':''?>" href="<?=base_url('katalog/create?slug=aacr')?>">
			<span><i class="header-icon lnr-exit"></i> Entri Katalog AACR</span>
		</a>
	</li>
</ul>