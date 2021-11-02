<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<nav class="navbar navbar-expand-lg menu_one display_none sticky-nav menu_purple">
	<div class="container custom_container">
		<a class="navbar-brand header_logo" href="index.html">
			<img class="first_logo sticky_logo" src="<?=base_url('themes/opac')?>/img/logo.png" srcset="<?=base_url('themes/opac')?>/img/logo-2x.png 2x" alt="logo">
			<img class="white_logo main_logo" src="<?=base_url('themes/opac')?>/img/logo-w.png" srcset="<?=base_url('themes/opac')?>/img/logo-w2x.png 2x" alt="logo">
		</a>
		<div class="search-input">
			<form action="<?=base_url('home/search')?>" class="">
				<ion-icon class="search-icon" name="search-outline"></ion-icon>
				<input type="text" name="pDataItem" placeholder="Masukkan kata kunci ..." value="<?=$request->getVar('pDataItem')?>" class="">
				<input type='hidden' name="pType" value="Title" />
				<input type='hidden' name="pLembarkerja" value="-1" />
			</form>
		</div>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="menu_toggle">
				<span class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</span>
				<span class="hamburger-cross">
					<span></span>
					<span></span>
				</span>
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav menu ml-auto">
				<li class="nav-item dropdown active">
					<a href="<?=base_url()?>" class="nav-link dropdown-toggle">Beranda</a>
				</li>
			</ul>
			<div class="right-nav">
				<ul class="navbar-nav menu ml-auto">
					<li class="nav-item dropdown submenu">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user"></i> Keanggotaan Online
						</a>
						<i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
						<ul class="dropdown-menu">
							<?php if(!logged_in()):?>
								<li class="nav-item"><a href="<?=base_url('login')?>" class="nav-link">Masuk</a></li>
								<li class="nav-item"><a href="<?=base_url('register')?>" class="nav-link">Daftar</a></li>
								<?php else:?>
									<li class="nav-item"><a href="<?=base_url('dashboard')?>" class="nav-link">Dashboard</a></li>
									<li class="nav-item"><a href="<?=base_url('user/profile')?>" class="nav-link">Profil</a></li>
									<li class="nav-item"><a href="<?=base_url('logout')?>" class="nav-link">Keluar</a></li>
							<?php endif;?> 
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>