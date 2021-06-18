<header class="header-with-topbar">
    <div class="top-bar bg-corporate-primary navbar-light d-none d-md-block">
        <div class="container-lg nav-header-container">
            <div class="d-flex flex-wrap align-items-center">
                <div class="col-12 text-center text-sm-left col-sm-auto mr-auto pl-lg-0">
                    <ul class="social-icon padding-5px-tb">
                        <li><a class="text-white-transparent" href="<?=get_parameter('contact-facebook-url')?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="text-white-transparent" href="<?=get_parameter('contact-twitter-url')?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="text-white-transparent" href="<?=get_parameter('contact-instagram-url')?>" target="_blank"><i class="fab fa-instagram"></i></a></li> 
                        <li><a class="text-white-transparent" href="<?=get_parameter('contact-youtube-url')?>" target="_blank"><i class="fab fa-youtube"></i></a></li>                            
                    </ul>
                </div>
                <div class="col-auto d-none d-sm-block text-right px-lg-0 font-size-0">
                    <div class="top-bar-contact">
                        <span class="top-bar-contact-list">
                            <i class="far fa-envelope text-white"></i>
                            <a href="mailto:<?=get_parameter('contact-email')?>" class="text-extra-dark-gray-hover"><?=get_parameter('contact-email')?></a>
                        </span>
                        <!-- <span class="top-bar-contact-list d-none d-md-inline-block">
                            <i class="far fa-clock text-white"></i>
                            Sen - Sabtu: 08:00 - 15:30
                        </span> -->
                    </div>
                    <div class="header-language btn-group dropdown-style-01 d-none d-lg-inline-block">
                        <button type="button" class="btn dropdown-toggle sm-w-100 main-font" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle"></i> <?=(logged_in() ? user()->username:'Akun')?> <span class="caret"></span> <i class="fas fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <?php if(!logged_in() ):?>
                                <li><a href="<?=base_url('login')?>" title="Login"><i class="fa fa-lock"></i> Masuk</a></li>
                            <?php else:?>
                                <li><a href="<?=base_url('dashboard')?>" title="Keluar"><i class="fa fa-tv"></i> Dashboard</a></li>
                                <li><a href="<?=base_url('logout')?>" title="Keluar"><i class="fa fa-power-off"></i> Keluar</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg top-space navbar-light bg-white header-light fixed-top always-fixed">
        <div class="container-lg nav-header-container">
            <div class="col-6 col-lg-2 mr-auto pl-lg-0">
                <a class="navbar-brand" href="<?=base_url()?>">
                    <img src="<?=base_url('uploads')?>/logo.png" data-at2x="<?=base_url('uploads')?>/logo.png" class="default-logo" alt="" style="min-height: 50px;">
                    <img src="<?=base_url('uploads')?>/logo.png" data-at2x="<?=base_url('uploads')?>/logo.png" class="alt-logo" alt="" style="min-height: 50px;">
                    <img src="<?=base_url('uploads')?>/logo.png" data-at2x="<?=base_url('uploads')?>/logo.png" class="mobile-logo" alt="" style="min-height: 50px;">
                </a>
            </div>
            <div class="col-auto col-lg-9 menu-order px-lg-0">
                <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class=" collapse navbar-collapse justify-content-center" id="navbarNav">
                    <?= $this->include('layout/frontend/partial/topbar'); ?>
                </div>
            </div>
            <div class="col-auto col-lg-1 text-right pr-0 font-size-0">
                <div class="header-search-icon search-form-wrapper">
                    <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                    <!-- start search input -->
                    <div class="form-wrapper">
                        <button title="Close" type="button" class="search-close alt-font">×</button>
                        <form id="search-form" role="search" method="get" class="search-form text-left" action="<?=base_url('search')?>">
                            <div class="search-form-box">
                                <span class="search-label alt-font text-small text-uppercase text-medium-gray">Apa yang Anda cari?</span>
                                <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Kata kunci pencarian..." name="keyword" value="" type="text" autocomplete="off">
                                <button type="submit" class="search-button">
                                    <i class="feather icon-feather-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- end search input -->
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>