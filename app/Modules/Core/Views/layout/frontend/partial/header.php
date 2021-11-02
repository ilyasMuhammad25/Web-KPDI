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
				<li class="nav-item dropdown submenu mega_menu tab-demo">
					<a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
					<i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>
					<ul class="dropdown-menu">
						<li>
							<div class="row">
								<div class="col-lg-5 tabHeader">
									<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										<li class="nav-item active">
											<a class="nav-link" id="layanan1-tab" data-toggle="pill" href="#layanan1" role="tab" aria-controls="layanan1" aria-selected="true">Layanan 1</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="layanan2-tab" data-toggle="pill" href="#layanan2" role="tab" aria-controls="layanan2" aria-selected="false">Layanan 2</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="layanan3-tab" data-toggle="pill" href="#layanan3" role="tab" aria-controls="layanan3" aria-selected="false">Layanan 3</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-7">
									<div class="tab-content tabContent" id="v-pills-tabContent">
										<div class="tab-pane fade active show" id="layanan1" role="tabpanel" aria-labelledby="layanan1-tab">
											<div class="d-flex">
												<ul class="list-unstyled tab_list">
													<li> <a href="<?=base_url()?>"> Link 1 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 2 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 3 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 4 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 5 </a> </li>
												</ul>
											</div>
										</div>
										<div class="tab-pane fade" id="layanan2" role="tabpanel" aria-labelledby="layanan2-tab">
											<div class="d-flex">
												<ul class="list-unstyled tab_list">
												<li> <a href="<?=base_url()?>"> Link 1 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 2 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 3 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 4 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 5 </a> </li>
												</ul>
											</div>
										</div>
										<div class="tab-pane fade" id="layanan3" role="tabpanel" aria-labelledby="layanan3-tab">
											<div class="d-flex">
												<ul class="list-unstyled tab_list">
													<li> <a href="<?=base_url()?>"> Link 1 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 2 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 3 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 4 </a> </li>
													<li> <a href="<?=base_url()?>"> Link 5 </a> </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Simple Menu
					</a>
					<i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
					<ul class="dropdown-menu">
						<li class="nav-item"><a href="<?=base_url()?>" class="nav-link">Tautan 1</a></li>
						<li class="nav-item"><a href="<?=base_url()?>" class="nav-link">Tautan 2</a></li>
						<li class="nav-item"><a href="<?=base_url()?>" class="nav-link">Tautan 3</a></li>
						<li class="nav-item"><a href="<?=base_url()?>" class="nav-link">Tautan 4</a></li>
						<li class="nav-item"><a href="<?=base_url()?>" class="nav-link">Tautan 5</a></li>
					</ul>
				</li>
			</ul>
			<div class="right-nav">
				<?php if(!logged_in()):?>
					<a class="nav_btn" href="<?=base_url('login')?>"><i class="fa fa-lock"></i> Masuk</a> 
					&nbsp;
					<a class="nav_btn tp_btn" href="<?=base_url('home/anggota')?>"><i class="fa fa-user"></i> Pendaftaran Anggota</a>
				<?php else:?>
					<a class="nav_btn" href="<?=base_url('dashboard')?>"><i class="fa fa-desktop"></i> Dashboard</a> 
				<?php endif;?> 
			</div>
		</div>
	</div>
</nav>