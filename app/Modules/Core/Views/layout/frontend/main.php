<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?=base_url('themes/opac')?>/img/ico.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/slick/slick.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/slick/slick-theme.css">
    <!-- icon css-->
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/elagent-icon/style.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/animation/animate.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/css/style-main.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/css/responsive.css">
	<link rel="stylesheet" href="<?= base_url('assets/vendors') ?>/fontawesome-pro-5/css/all.css">
    <title>OPAC</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="<?=base_url('themes/opac')?>/img/spinner_logo.png" alt="">
                    <h4><span>OPAC</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one menu_purple sticky-nav">
            <div class="container">
                <a class="navbar-brand header_logo" href="index.html">
                    <img class="first_logo sticky_logo" src="<?=base_url('themes/opac')?>/img/logo.png" srcset="<?=base_url('themes/opac')?>/img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo main_logo" src="<?=base_url('themes/opac')?>/img/logo-w.png" srcset="<?=base_url('themes/opac')?>/img/logo-w2x.png 2x" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <li class="nav-item dropdown submenu active">
                            <a href="index.html" class="nav-link dropdown-toggle">Beranda</a>
                            <!-- <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item active"><a href="index.html" class="nav-link">Creative Helpdesk</a></li>
                                <li class="nav-item"><a href="index-multi.html" class="nav-link">Multi Helpdesk</a></li>
                                <li class="nav-item"><a href="index-classic.html" class="nav-link">Classic Helpdesk</a></li>
                            </ul> -->
                        </li>
                        <li class="nav-item dropdown submenu mega_menu tab-demo">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tautan</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-5 tabHeader">
                                            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <li class="nav-item active">
                                                    <a class="nav-link" id="v-pills-doc-tab" data-toggle="pill" href="#v-pills-doc" role="tab" aria-controls="v-pills-doc" aria-selected="true">Doc Archives</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-code-tab" data-toggle="pill" href="#v-pills-code" role="tab" aria-controls="v-pills-code" aria-selected="false">Elements</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-layout-tab" data-toggle="pill" href="#v-pills-layout" role="tab" aria-controls="v-pills-layout" aria-selected="false">Layouts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill" href="#v-pills-tour" role="tab" aria-controls="v-pills-tour" aria-selected="false">Reference</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-content-tab" data-toggle="pill" href="#v-pills-content" role="tab" aria-controls="v-pills-content" aria-selected="false">Content</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">Other Pages</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="tab-content tabContent" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li> <a href="doc-main.html"> Doc Topics </a> </li>
                                                            <li> <a href="archive-doc-single.html"> Single Product </a> </li>
                                                            <li> <a href="archive-doc-multi.html"> Multi Products </a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="doc-main.html">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doc-main.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-code" role="tabpanel" aria-labelledby="v-pills-code-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-element-tab.html">Tabs</a></li>
                                                            <li><a href="doc-element-accordion.html">Accordion</a></li>
                                                            <li><a href="doc-element-notice.html">Notice</a></li>
                                                            <li><a href="doc-content-tables.html">Tables</a></li>
                                                        </ul>
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-element-hotspots.html">Image Hotspots</a></li>
                                                            <li><a href="doc-element-code.html">Source Code</a></li>
                                                            <li><a href="doc-element-lightbox.html">Image Lightbox</a></li>
                                                            <li><a href="doc-ref-cheatsheet.html">Cheatsheet</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doc-main.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-layout" role="tabpanel" aria-labelledby="v-pills-layout-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-element-hotspots.html">Left Sidebar</a></li>
                                                            <li><a href="doc-content-video.html">Full-width</a></li>
                                                            <li><a href="doc-layout-banner-gradient.html">Gradient Banner</a></li>
                                                            <li><a href="doc-layout-banner-empty.html">Without Banner</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-tour" role="tabpanel" aria-labelledby="v-pills-tour-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list w_100">
                                                            <li><a href="doc-ref-cheatsheet.html">Cheatsheet</a></li>
                                                            <li><a href="doc-ref-footnote.html">Footnotes</a></li>
                                                            <li><a href="doc-tour.html">Interface Tour</a></li>
                                                            <li><a href="doc-ref-can-use.html">Can I Use</a></li>
                                                            <li><a href="doc-content-tooltip.html">Tooltips & Direction</a></li>
                                                            <li><a href="doc-ref-shortcuts.html">Keyboard Shortcuts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-content" role="tabpanel" aria-labelledby="v-pills-content-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-content-image.html">Image</a></li>
                                                            <li><a class="active" href="doc-content-tables.html">Tables</a></li>
                                                            <li><a href="doc-content-video.html">Video</a></li>
                                                            <li><a href="typography.html">Typography</a></li>
                                                            <li><a href="doc-content-tooltip.html">Tooltips & Direction</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li> <a href="onepage.html">Onepage</a> </li>
                                                            <li> <a href="doc-main.html">Doc Topics</a></li>
                                                            <li> <a href="doc-tour.html">Cheatsheet</a> </li>
                                                            <li> <a href="doc-changelog.html">Changelog</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doc-main.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="onepage.html" class="nav-link">Onepage Doc</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                                <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Forum
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                               data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                                <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                                <li class="nav-item"><a href="forum-single.html" class="nav-link">Topic Details</a></li>
                                <li class="nav-item"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                                </li>
                                <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                                <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                                <li class="nav-item"><a href="blog-single2.html" class="nav-link">Blog Details Two</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <div class="right-nav">
						<?php if(!logged_in()):?>
							<a class="nav_btn" href="<?=base_url('login')?>"><i class="fa fa-lock"></i> Login</a>
						<?php else:?>
							<a class="nav_btn" href="<?=base_url('dashboard')?>"><i class="fa fa-desktop"></i> Dashboard</a>
						<?php endif;?>

                    </div>
                </div>
            </div>
        </nav>

        <section class="doc_banner_area_dip">
            <ul class="list-unstyled banner_shap_img_dip">
              <li><img data-parallax='{"x": 180, "y": 80, "rotateY":2000}' src="<?=base_url('themes/opac')?>/img/home-tow/icon/plus-1.png" alt=""></li>
              <li><img data-parallax='{"x": 180, "y": 80, "rotateY":2000}' src="<?=base_url('themes/opac')?>/img/home-tow/icon/plus-1.png" alt=""></li>
              <li><img data-parallax='{"x": 180, "y": 80, "rotateY":2000}' src="<?=base_url('themes/opac')?>/img/home-tow/icon/plus-1.png" alt=""></li>
              <li><img src="<?=base_url('themes/opac')?>/img/home-tow/icon/slide-1.png" alt=""></li>
              <li><img src="<?=base_url('themes/opac')?>/img/home-tow/icon/slide-2.png" alt=""></li>
              <li><img src="<?=base_url('themes/opac')?>/img/home-tow/icon/slide-3.png" alt=""></li>
              <li><img src="<?=base_url('themes/opac')?>/img/home-tow/icon/slide-4.png" alt=""></li>
              <li><img src="<?=base_url('themes/opac')?>/img/home-tow/icon/slide-5.png" alt=""></li>
              <li><img src="<?=base_url('themes/opac')?>/img/home-tow/icon/slide-6.png" alt=""></li>
              <li><img src="<?=base_url('themes/opac')?>/img/home-tow/icon/slide-7.png" alt=""></li>
              <li><img src="<?=base_url('themes/opac')?>/img/home-tow/icon/slide-8.png" alt=""></li>
            </ul>
            <div class="container">
                <div class="doc_banner_content">
                    <h2 class="wow fadeInUp">Apa yang kamu cari?</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Temukan koleksi yang kamu inginkan di sini</p>
                    <form action="#" class="header_search_form">
                        <div class="header_search_form_info">
                            <div class="form-group">
                                <div class="input-wrapper">
                                   <!-- <i class="icon_search"></i> -->
                                    <input type='search' id="searchbox" autocomplete="off" name="search"
                                        placeholder="Masukkan kata kunci" />
                                    <!-- <div class="header_search_form_panel">
                                        <ul class="list-unstyled">
                                            <li>Help Desk
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Configuration</span><a href="#">How to edit host and
                                                            port?</a></li>
                                                    <li><span>Configuration</span><a href="#">The dev Property</a></li>
                                                </ul>
                                            </li>
                                            <li>Support
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                                                </ul>
                                            </li>
                                            <li>Documentation
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> -->
                                    <select class="search-expand-types custom-select" name="post_type"
                                        id="search_post_type">
                                        <option value="">Semua Jenis </option>
                                        <option value="manual_kb">Judul</option>
                                        <option value="manual_documentation">Pengarang</option>
                                        <option value="manual_faq">Subyek</option>
                                        <option value="forum">ISBN/ISSN/ISMN</option>
                                        <!-- <option value="manual_portfolio">Portfolio</option>
                                        <option value="product">Products</option> -->
                                    </select>
                                </div>
                                <button type="submit" class="header_form_submit">Cari</button>
                            </div>

                        </div>
                        <div class="header_search_keyword">
                            <span class="header-search-form__keywords-label">Kata Kunci Terkini:</span>
                            <ul class="list-unstyled">
                                <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Ekonomi Syariah</a></li>
                                <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Covid-19</a></li>
                                <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">Kedokteran Gigi</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="doc_features_area">
            <img class="doc_features_shap" src="<?=base_url('themes/opac')?>/img/new/shap_white.png" alt="">
            <div class="container">
                <div class="doc_features_inner">
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon1.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Monograf</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon2.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Terbitan Berkala</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon3.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Manuskrip</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon4.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Film</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon5.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Musik</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon6.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Rekaman Video</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon7.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Rekaman Suara</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon8.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Bahan Kartografis</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                        <img src="<?=base_url('themes/opac')?>/img/new/icon9.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Braille</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="see_more_item collapse-wrap">
                        <div class="media doc_features_item">
                            <img src="<?=base_url('themes/opac')?>/img/new/icon7.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Sumber Elektronik</h4>
                                </a>
                                <p>245 Posts</p>
                            </div>
                        </div>
                        <div class="media doc_features_item">
                            <img src="<?=base_url('themes/opac')?>/img/new/icon8.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Sumber Elektronik Berkala</h4>
                                </a>
                                <p>245 Posts</p>
                            </div>
                        </div>
                        <div class="media doc_features_item">
                            <img src="<?=base_url('themes/opac')?>/img/new/icon9.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Bentuk Mikro</h4>
                                </a>
                                <p>245 Posts</p>
                            </div>
                        </div>
                    </div>
                    <a href="#more-features" class="collapse-btn see_btn">
                        <i class="arrow_carrot-down_alt2"></i>
                        <span class="text">Tampilkan lebih lanjut</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="recommended_topic_area">
            <div class="container">
                <div class="recommended_topic_inner">
                    <img class="doc_shap_one" src="<?=base_url('themes/opac')?>/img/new/shap.png" alt="">
                    <div class="doc_round one" data-parallax='{"x": -80, "y": -100, "rotateY":0}'></div>
                    <div class="doc_round two" data-parallax='{"x": -10, "y": 70, "rotateY":0}'></div>
                    <div class="doc_title text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Rekomendasi Topik Pencarian</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Kata kunci yang sering dicari</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.2s">
                                <img src="<?=base_url('themes/opac')?>/img/new/smile.png" alt="">
                                <a href="#">
                                    <h3>Literatur</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Sastra</a></li>
                                    <li><a href="#">Kepustakaan</a></li>
                                    <li><a href="#">Pustakawan</a></li>
                                    <li><a href="#">Literasi</a></li>
                                    <li><a href="#">Novel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.3s">
                                <img src="<?=base_url('themes/opac')?>/img/new/house.png" alt="">
                                <a href="#">
                                    <h3>Komputer</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Computer Science</a></li>
                                    <li><a href="#">Programming</a></li>
                                    <li><a href="#">Database</a></li>
                                    <li><a href="#">Internet</a></li>
                                    <li><a href="#">Website</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.4s">
                                <img src="<?=base_url('themes/opac')?>/img/new/doc.png" alt="">
                                <a href="#">
                                    <h3>Kesehatan</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Kedokteran</a></li>
                                    <li><a href="#">Covid-19</a></li>
                                    <li><a href="#">Biologi</a></li>
                                    <li><a href="#">Mental Health</a></li>
                                    <li><a href="#">Psikologi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.5s">
                                <img src="<?=base_url('themes/opac')?>/img/new/bag.png" alt="">
                                <a href="#">
                                    <h3>Ilmu Terapan</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Biografi</a></li>
                                    <li><a href="#">Sejarah</a></li>
                                    <li><a href="#">Akuntansi</a></li>
                                    <li><a href="#">Manajemen</a></li>
                                    <li><a href="#">Keuangan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="question_text">Want to know more or have a<br> Question?
                        </a>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="doc_community_area">
            <img class="shap_one" src="<?=base_url('themes/opac')?>/img/new/community_bg_shap_one.png" alt="">
            <img class="shap_two" src="<?=base_url('themes/opac')?>/img/new/community_bg_shap_two.png" alt="">
            <div class="container">
                <div class="doc_title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s">Koleksi Terbaru</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">Kumpulan koleksi terbaru yang bisa kamu akses
                    </p>
                </div>
                
                <div class="process_tab_shortcode">
                    <ul class="nav nav-tabs v_menu" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true"><span>1</span>Koleksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false"><span>2</span>Koleksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="charge-tab" data-toggle="tab" href="#charge" role="tab" aria-controls="charge" aria-selected="false"><span>3</span>Koleksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sub-tab" data-toggle="tab" href="#sub" role="tab" aria-controls="sub" aria-selected="false"><span>4</span>Koleksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="success-tab" data-toggle="tab" href="#success" role="tab" aria-controls="success" aria-selected="false"><span>5</span>Koleksi</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="card" role="tabpanel" aria-labelledby="card-tab">
                            <div class="version">
                               
                                <img src="<?=base_url('themes/opac')?>/img/buku/1.jpg" style="padding: 10px;" class="rounded float-left img-fluid" alt="...">
                                <div class="v_head">
                                    <h4>Siap Masuk SD! Berhitung Lengkap</h4>
                                </div>
                                <div class="v_middle">
                                    
                                    <p>Buku ini disusun untuk memudahkan anak belajar berhitung dengan cara yang menyenangkan. Aktivitas-aktivitas disajikan dengan sederhana dan menarik. 
                                        Dalam buku ini, anak akan belajar berhitung mulai dari mengenal angka, menuliskan angka, penjumlahan, pengurangan, mengurutkan, pola bilangan, 
                                        dan membandingkan bilangan. Dilengkapi dengan langkah mudah dan menarik untuk mengajarkan si kecil berhitung dan persiapan untuk masuk sekolah dasar. 
                                        Sekarang proses belajar bersama anak menjadi seru dan menyenangkan!</p>
                         
                                </div>
                                <div class="v_footer">
                                    <p>Heru Kurniawan & Dian Wahyu Sri Lestari</p>
                                </div>
                            
                            </div>
                            
                        </div>

                        <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                            
                            <div class="version">
                                <img src="<?=base_url('themes/opac')?>/img/buku/2.jpg" style="padding: 10px;" class="rounded float-left img-fluid" alt="...">
                                <div class="v_head">
                                    <h4>SuperM We Are The Future!</h4>
                                </div>
                                <div class="v_middle">
                                    <p>Coba bayangkan bagaimana kalau semua "jagoan" dari grup K-pop favorit kalian dikumpulkan daLam satu grup. Wow, pastinya bakal keren banget dong! 
                                        Ada main dancer sekaligus solois multitalenta dari SHINee, ada main vocal bersuara indah dan main dancer karismatik dari EXO, ada duo main rapper berbakat 
                                        dari NCT 127, serta main dancer berbakat dan visual rapper yang keren dari WayV. Penampilan tujuh cowok keren ini waktu menyanyikan Lagu "Jopping" memang 
                                        dahsyat banget. SuperM yang disebut-sebut sebagai sebagai "Avengers of K-pop" memang enggak juaL tampang semata. Semua personelnya punya pesona, karisma, 
                                        talenta, dan spesialisasi masing-masing yang enggak bisa dipandang enteng.
                                        Pengin tahu lebih banyak soal SuperM? Pengin berkenalan Lebih dekat sama tujuh pahlawan super keren dan berbakat ini? Yuk, sama-sama kita jelajahi bareng-bareng 
                                        dunia SuperM. Let's get it!</p>
                                </div>
                                <div class="v_footer">
                                    <p>ARA</p>
                                </div>
                            </div>
                          
                        </div>
                        <div class="tab-pane fade" id="charge" role="tabpanel" aria-labelledby="charge-tab">
                            
                            <div class="version">
                                <img src="<?=base_url('themes/opac')?>/img/buku/3.jpg" style="padding: 10px;" class="rounded float-left img-fluid" alt="...">
                                <div class="v_head">
                                    <h4>Lancar Membaca Dan Pintar Menulis Huruf & Angka</h4>
                                </div>
                                <div class="v_middle">
                                    <p>Buku Lancar Membaca & Pintar Menulis Huruf dan Angka ini dibuat secara khusus untuk anak-anak PAUD dan TK. Disusun dengan menggunakan metode membaca dan 
                                        berhitung yang unik juga menyenangkan akan membuat anak semakin bersemangat untuk belajar. Selain itu, terdapat juga berbagai macam aktivitas yang dapat 
                                        mengembangkan kemampuan motorik halus anak dengan menggambar, menulis, dan menebalkan. Ayo, ajak si kecil bermain sambil belajar setiap hari!</p>
  
                                <div class="v_footer">
                                    <p>Miss Ulfa</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sub" role="tabpanel" aria-labelledby="sub-tab">
                            
                            <div class="version">
                                <img src="<?=base_url('themes/opac')?>/img/buku/4.jpg" style="padding: 10px;" class="rounded float-left img-fluid" alt="...">
                                <div class="v_head">
                                    <h4>Menjadi Muslimah yang Disukai Banyak Orang</h4>
                                </div>
                                <div class="v_middle">
                                    <p>Dilahirkan sebagai seorang wanita adalah anugerah yang luar biasa. Dibekali perasaan bak mutiara, paras ayu yang menjadi primadona, suara lembut memesona, 
                                        serta multitalenta yang tiada duanya. Tapi, ada kalanya, wanita itu tidak disuka oleh kebanyakan orang. Ada sifat nyebelin yang disengaja ataupun tidak, 
                                        yang membuat orang di sekelilingnya merasa jengkel. Di buku ini, kamu akan mendapatkan gambaran muslimah yang menyebalkan, ciri-cirinya bagaimana, 
                                        dan perbuatan apa yang sering dilakukan, sehingga kamu tidak terjerumus ke dalam zona muslimah menyebalkan. Buku ini adalah salah satu cara untuk meningkatkan 
                                        kualitas diri, baik dari luar maupun dalam, sebagai muslimah yang baik dan dicintai sekitar. Kenapa kok yang dibahas muslimah? Bukan wanita pada umumnya? 
                                        Ya, karena muslimah adalah wanita spesial yang harus dijaga harkat dan martabatnya. Bukankah Islam juga dikenal dari followers-nya? Kalau followers-nya baik? 
                                        Tidak jarang Islam yang harum akan dikenal lebih harum oleh dunia. Jadilah muslimah yang menginspirasi dan berkontribusi tinggi. Mulailah hari ini! Kritisi 
                                        diri sendiri sebelum mengritik orang lain. Perbaiki dan update selalu kualitas diri. Jadilah wanita yang mampu menegakkan panji-panji Islam, yang mana kedatanganmu 
                                        selalu ditunggu-tunggu oleh banyak orang.</p>
                                    
                                </div>
                                <div class="v_footer">
                                    <p>Arum Faiza</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="success" role="tabpanel" aria-labelledby="success-tab">
                            
                            <div class="version">
                                <img src="<?=base_url('themes/opac')?>/img/buku/5.jpg" style="padding: 10px;" class="rounded float-left img-fluid" alt="...">
                                <div class="v_head">
                                    <h4>Mahadata</h4>
                                </div>
                                <div class="v_middle">
                                    <p>Mahadata (Big Data) sering disebut-sebut orang akhir-akhir ini. Mahadata dianggap sesuatu yang akan—atau sudah—berpengaruh besar dalam zaman informasi. 
                                        Namun apa sebenarnya mahadata? Bagaimana mahadata bekerja, apa saja manfaatnya, dan adakah dampak buruk mahadata? Buku ini menjadi pengantar untuk mengenal 
                                        mahadata, berikut berbagai contoh penerapannya, di antaranya oleh Netflix, CERN, dan Amazon.</p>
                                   
                                </div>
                                <div class="v_footer">
                                    <p>Brian Clegg</p>
                                </div>
                            </div>
                            
                        </div>
                        <button class="btn btn-info btn-lg previous"><i class="arrow_carrot-left"></i></button>
                        <button class="btn btn-info btn-lg next"><i class="arrow_carrot-right"></i></button>
                    </div>
                </div>

            </div>
        </section>
        <section class="doc_testimonial_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="main_title">
                            <h2 class="h_title wow fadeInUp">Koleksi Unggulan</h2>
                            
                        </div>
                        <div class="doc_testimonial_slider">
                            <div class="item">
                                <h3>"Ada jodoh yang ditemukan lewat tatapan pertama.
                                    Ada persahabatan yang diawali lewat sapa hangat.”</h3>
                                <div class="name">Pulang-Pergi, <span>Tere Liye</span></div>
                                <!-- <a href="#" class="sign"><img src="<?=base_url('themes/opac')?>/img/new/sign.png" alt=""></a> -->
                            </div>
                            <div class="item">
                                <h3>"Memilih adalah privilege terbesar manusia. Ini adalah momen yang kemudian menentukan arah hidup yang akan kita jalani selanjutnya. 
                                    Namun, satu hal yang kadang kita lupa adalah memilih bahagia.”</h3>
                                <div class="name">Memilih (Menjadi Investor) Bahagia, <span>WUDDY WARSONO, CFA</span></div>
                                
                            </div>
                            <div class="item">
                                <h3>"Untuk mencapai tujuan komunikasi, persuasi, dan negosiasi, Anda harus mengetahui metode komunikasi yang efisien.”</h3>
                                <div class="name">Bicara Itu Ada Seninya, <span>Oh Su Hyang</span></div>
                                
                            </div>
                            <div class="item">
                                <h3>"Kulihat dunia dalam matamu dan masa depan dalam senyummu..." Sejak kecil, Olivia Mitchell ingin tahu siapa orangtua kandungnya.</h3>
                                <div class="name">The Star and I, <span>Ilana Tan</span></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="doc_img_slider">
                            <div class="item">
                                <img class="dot" src="<?=base_url('themes/opac')?>/img/new/dot.png" alt="">
                                <div class="round one"></div>
                                <div class="round two"></div>
                                <img src="<?=base_url('themes/opac')?>/img/buku-terbaru/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="dot" src="<?=base_url('themes/opac')?>/img/new/dot.png" alt="">
                                <div class="round one"></div>
                                <div class="round two"></div>
                                <img src="<?=base_url('themes/opac')?>/img/buku-terbaru/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="dot" src="<?=base_url('themes/opac')?>/img/new/dot.png" alt="">
                                <div class="round one"></div>
                                <div class="round two"></div>
                                <img src="<?=base_url('themes/opac')?>/img/buku-terbaru/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="dot" src="<?=base_url('themes/opac')?>/img/new/dot.png" alt="">
                                <div class="round one"></div>
                                <div class="round two"></div>
                                <img src="<?=base_url('themes/opac')?>/img/buku-terbaru/4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="doc_subscribe_area">
            <div class="container">
                <div class="doc_subscribe_inner">
                    <img class="one" src="<?=base_url('themes/opac')?>/img/new/subscribe_shap.png" alt="">
                    <img class="two" src="<?=base_url('themes/opac')?>/img/new/subscribe_shap_two.png" alt="">
                    <div class="text wow fadeInLeft" data-wow-delay="0.2s">
                        <h2>Subscribe untuk informasi koleksi terbaru</h2>
                    </div>
                    <form action="#" class="doc_subscribe_form wow fadeInRight mailchimp" data-wow-delay="0.4s"
                        method="post">
                        <div class="form-group">
                            <div class="input-fill">
                                <input type="email" name="EMAIL" id="email" class="memail"
                                    placeholder="Masukkan alamat email">
                            </div>
                            <button type="submit" class="submit_btn">Submit</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="#">Koleksi Terbaru</a></li>
                            <li><a href="#">Koleksi Unggulan</a></li>
                            <li><a href="#">Koleksi Terbanyak Diakses</a></li>
                        </ul>

                    </form>
                </div>
            </div>
        </section>
        <footer class="doc_footer_area">
            <div class="doc_footer_top bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget doc_about_widget wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#">
                                    <img src="<?=base_url('themes/opac')?>/img/logo.png" srcset="img/logo-2x.png 2x" alt="">
                                </a>
                                <p>INLIS Lite dibangun dan dikembangkan secara resmi oleh Perpustakaan Nasional RI dalam rangka menghimpun koleksi nasional dalam jejaring Perpustakaan Digital Nasional Indonesia, 
                                    disamping membantu upaya pengembangan pengelolaan dan pelayanan perpustakaan berbasis teknologi informasi dan komunikasi di seluruh Indonesia.</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                    <li><a href="#"><i class="social_linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-30 wow fadeInUp" data-wow-delay="0.3s">
                                <h3 class="f_title_two">Solutions</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#"><img src="<?=base_url('themes/opac')?>/img/new/smile2.png" alt="">Help Docs</a></li>
                                    <li><a href="#"><img src="<?=base_url('themes/opac')?>/img/new/doc2.png" alt="">Docbuzz</a></li>
                                    <li><a href="#"><img src="<?=base_url('themes/opac')?>/img/new/house2.png" alt="">User Frontend</a></li>
                                    <li><a href="#"><img src="<?=base_url('themes/opac')?>/img/new/bag2.png" alt="">Lightbox</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-100 wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f_title_two">Support</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                    <li><a href="#">Integrations</a></li>
                                    <li><a href="#">Reports</a></li>
                                    <li><a href="#">Messages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-70 wow fadeInUp" data-wow-delay="0.5s">
                                <h3 class="f_title_two">Company</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">Careers</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_footer_bottom">
                <div class="container d-flex justify-content-between">
                    <ul class="doc_footer_menu list-unstyled wow fadeInUp" data-wow-delay="0.2s">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Latest Projects</a></li>

                    </ul>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">© 2021 All Rights Reserved Design by
                        <span>Spider-themes</span>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url('themes/opac')?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/js/pre-loader.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/slick/slick.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/js/jquery.parallax-scroll.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/wow/wow.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/js/plugins.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="<?=base_url('themes/opac')?>/js/main.js"></script>
</body>
</html>