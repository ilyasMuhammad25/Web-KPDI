<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?=base_url('themes/opac')?>/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/bootstrap/css/bootstrap-select.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/elagent-icon/style.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/animation/animate.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/css/style-main.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/css/responsive.css">
    <title>OPAC</title>
</head>

<body class="doc wide-container" data-spy="scroll" data-target="#navbar-example3" data-scroll-animation="true" data-offset="70">
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="round_spinner">
            <div class="spinner"></div>
            <div class="text">
                <img src="<?=base_url('themes/opac')?>/img/spinner_logo.png" alt="">
                <h4><span>OPAC</span></h4>
            </div>
        </div>
        <h2 class="head">Memuat Halaman</h2>
        <p></p>
    </div>
</div>
<div class="body_wrapper">
    <nav class="navbar navbar-expand-lg menu_one display_none sticky-nav menu_purple">
        <div class="container custom_container">
            <a class="navbar-brand header_logo" href="index.html">
                <img class="first_logo sticky_logo" src="<?=base_url('themes/opac')?>/img/logo.png" srcset="<?=base_url('themes/opac')?>/img/logo-2x.png 2x" alt="logo">
                <img class="white_logo main_logo" src="<?=base_url('themes/opac')?>/img/logo-w.png" srcset="<?=base_url('themes/opac')?>/img/logo-w2x.png 2x" alt="logo">
            </a>
            <div class="search-input">
                <ion-icon class="search-icon" name="search-outline"></ion-icon>
                <input type="text" placeholder="Search..." value="" class="">
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
                    <li class="nav-item dropdown submenu">
                        <a href="index.html" class="nav-link dropdown-toggle">Beranda</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                          
                    </li>
                    <li class="nav-item dropdown submenu mega_menu tab-demo active">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tautan</a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-lg-5 tabHeader">
                                        <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <li class="nav-item">
                                                <a class="nav-link" id="v-pills-doc-tab" data-toggle="pill" href="#v-pills-doc" role="tab" aria-controls="v-pills-doc" aria-selected="true">Doc Archives</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="v-pills-code-tab" data-toggle="pill" href="#v-pills-code" role="tab" aria-controls="v-pills-code" aria-selected="false">Elements</a>
                                            </li>
                                            <li class="nav-item active">
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
                                            <div class="tab-pane fade" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                                                <div class="d-flex">
                                                    <ul class="list-unstyled tab_list">
                                                        <li>
                                                            <a href="archive-doc-single.html">Single Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="archive-doc-multi.html">Multi Products</a>
                                                        </li>
                                                        <li>
                                                            <a href="doc-main.html">Doc Topics</a>
                                                        </li>
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
                                            <div class="tab-pane fade active show" id="v-pills-layout" role="tabpanel" aria-labelledby="v-pills-layout-tab">
                                                <div class="d-flex">
                                                    <ul class="list-unstyled tab_list">
                                                        <li><a href="doc-element-hotspots.html">Left Sidebar</a></li>
                                                        <li><a href="doc-content-video.html">Full-width</a></li>
                                                        <li><a class="active" href="doc-layout-banner-gradient.html">Gradient Banner</a></li>
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
              
                  
                 
                </ul>
                <div class="right-nav">
                    <a class="nav_btn tp_btn" href="https://is.gd/nDvqm2" target="_blank">Pendaftaran Anggota</a>
                   
                    
                    <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                        <label for="something" class="tab-btn tab-btns">
                            <ion-icon class="light-mode" name="contrast"></ion-icon>
                        </label>
                        <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                        <label for="something" class="tab-btn">
                            <ion-icon class="dark-mode" name="contrast-outline"></ion-icon>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="mobile_main_menu dark_menu sticky-nav ">
        <div class="container">
            <div class="mobile_menu_left">
                <button type="button" class="navbar-toggler mobile_menu_btn">
                    <span class="menu_toggle ">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>
                <a class="navbar-brand header_logo" href="index.html">
                    <img class="sticky_logo main_logo" src="<?=base_url('themes/opac')?>/img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo" src="<?=base_url('themes/opac')?>/img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                </a>
            </div>
            <!-- <div class="mobile_menu_right">
                <div class="right-nav">
                    <a class="nav_btn tp_btn" href="https://is.gd/nDvqm2" target="_blank">Get Docy</a>
                    <a class="px-2 ml-3" href="#" title="Subscribe to the newsletter">
                        <ion-icon name="mail"></ion-icon>
                    </a>
                    <a class="px-2" href="#" title="RSS feed">
                        <ion-icon name="logo-rss"></ion-icon>
                    </a>
                    <div class="px-2 js-darkmode-btn btn" title="Toggle dark mode">
                        <label for="something2" class="tab-btn tab-btns">
                            <ion-icon class="light-mode" name="contrast"></ion-icon>
                        </label>
                        <input type="checkbox" name="something2" id="something2" class="dark_mode_switcher">
                        <label for="something2" class="tab-btn">
                            <ion-icon class="dark-mode" name="contrast-outline"></ion-icon>
                        </label>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="click_capture"></div>
    <div class="side_menu">
        <div class="mobile_menu_header">
            <div class="close_nav">
                <i class="arrow_left"></i>
                <i class="icon_close"></i>
            </div>
            <div class="mobile_logo">
                <a class="navbar-brand header_logo" href="index.html">
                    <img class="sticky_logo main_logo" src="<?=base_url('themes/opac')?>/img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo" src="<?=base_url('themes/opac')?>/img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                </a>
            </div>
        </div>
        <div class="mobile_nav_wrapper">
            <nav class="mobile_nav_top">
                <ul class="navbar-nav menu ml-auto">
                    <li class="nav-item dropdown submenu">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown submenu active">
                        <a href="#" class="nav-link">Docs</a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="doc-content-video.html" class="nav-link">Doc Archives</a></li>
                            <li class="nav-item"><a href="doc-main.html" class="nav-link">DocTopics</a></li>
                           
                        
                        </ul>
                    </li>
                   
                
                </ul>
            </nav>
            
        </div>
    </div>

    <!--================Forum Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <img class="p_absolute bl_left" src="<?=base_url('themes/opac')?>/img/v.svg" alt="">
        <img class="p_absolute bl_right" src="<?=base_url('themes/opac')?>/img/home_one/b_leaf.svg" alt="">
        <img class="p_absolute star" src="<?=base_url('themes/opac')?>/img/home_one/banner_bg.png" alt="">
        <img class="p_absolute wave_shap_one" src="<?=base_url('themes/opac')?>/img/blog-classic/shap_01.png" alt="">
        <img class="p_absolute wave_shap_two" src="<?=base_url('themes/opac')?>/img/blog-classic/shap_02.png" alt="">
        <img class="p_absolute one wow fadeInRight" src="<?=base_url('themes/opac')?>/img/home_one/b_man_two.png" alt="">
        <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="<?=base_url('themes/opac')?>/img/home_one/flower.png" alt="">
        <div class="container">
            <div class="doc_banner_content">
                <form action="#" class="header_search_form">
                    <div class="header_search_form_info">
                        <div class="form-group">
                            <div class="input-wrapper">
                                <i class="icon_search"></i>
                                <input type='search' id="searchbox" autocomplete="off" name="search"
                                       placeholder="Masukkan Kata Kunci..." />
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
                            </div>
                        </div>
                    </div>
                    <div class="header_search_keyword">
                        <span class="header-search-form__keywords-label">Kata Kunci Populer:</span>
                        <ul class="w_tag_list">
                            <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Covid-19</a>,</li>
                            <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Ekonomi</a>,</li>
                            <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">Manajemen</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="page_breadcrumb">
        <div class="container custom_container">
            <div class="row">
                <div class="col-sm-7">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Hasil Pencarian</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Deskripsi</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-sm-5">
                    <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on Oct 30, 2021</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Forum Breadcrumb Area =================-->

    <!--================Topic Area =================-->
    <section class="breadcrumb_area_three">
        <div class="container">
            <div class="breadcrumb_content">
                <h1>How to create Google account with WordPress</h1>
                <div class="single_post_author">
                    <!-- <img class="author_img" src="<?=base_url('themes/opac')?>/img/blog-single/author_single.jpg" alt=""> -->
                    <div class="text">
                        <a href="#"><h4>Jason Response</h4></a>
                        <div class="post_tag">
                            <a href="#">2020</a>
                           
                            <a class="c_blue" href="#">Komputer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_single_info">
                        <div class="blog_single_item">
                           
                            <div class="media comment_author">
                                <img class="img_rounded" src="<?=base_url('themes/opac')?>/img/deskripsi/dummy-cover.jpg" alt="">
                                <div class="media-body">
                                    <div class="comment_info">
                                        <ul class="single_list">
                                            <li>Judul : How to create Google account with WordPress</li>
                                            <li>Jenis Bahan : Monograf</li>
                                            <li>Pengarang : Jason Response</li>
                                            <li>Penerbitan : Gramedia</li>
                                            <li>Deskripsi Fisik	: xxiv, 390 hlm. : ilus. ; 21 cm.</li>
                                            <li>ISBN : 979414585</li>
                                            <li>Subjek : <a href="#">Komputer</a> - <a href="#">Pemrograman</a></li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>

                            <a class="toggle_btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Ringkasan</a>
                            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                <div class="card card-body toggle_body"> A short rod of wood or plastic sewn to one side of a coat or other garment, pushed through a hole or loop on the other side and twisted so as to act as a fastener. Switch from one effect, feature, or state to another by using a toggle. </div>
                            </div>

                           
                        </div>
                      
                        <div class="blog_related_post">
                            <h2 class="c_head">Koleksi Terkait</h2>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="<?=base_url('themes/opac')?>/img/deskripsi/dummy-cover.jpg" alt="">
                                        <div class="grid_post_content">
                                            <div class="post_tag">
                                                <a href="#">Pengarang</a>
                                                <a class="c_blue" href="#">Komputer</a>
                                            </div>
                                            <a href="#">
                                                <h4 class="b_title">70 Best Startups You Need to Watch Out for</h4>
                                            </a>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="<?=base_url('themes/opac')?>/img/deskripsi/dummy-cover.jpg" alt="">
                                        <div class="grid_post_content">
                                            <div class="post_tag">
                                                <a href="#">Pengarang</a>
                                                <a class="c_blue" href="#">Programming</a>
                                            </div>
                                            <a href="#">
                                                <h4 class="b_title">How to Connect Google With WordPress</h4>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="<?=base_url('themes/opac')?>/img/deskripsi/dummy-cover.jpg" alt="">
                                        <div class="grid_post_content">
                                            <div class="post_tag">
                                                <a href="#">Pengarang</a>
                                                <a class="c_blue" href="#">Security</a>
                                            </div>
                                            <a href="#">
                                                <h4 class="b_title">10 WordPress Security Issues And How to Fix</h4>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment_inner">
                            <h2 class="c_head">3 Comment</h2>
                            <ul class="comment_box list-unstyled">
                                <li class="post_comment">
                                    <div class="media comment_author">
                                        <img class="img_rounded" src="<?=base_url('themes/opac')?>/img/blog-single/comment_01.jpg" alt="">
                                        <div class="media-body">
                                            <div class="comment_info">
                                                <h3>Issac Wise</h3>
                                                <div class="comment_date">July 3, 2020 at 2:14 pm</div>
                                            </div>
                                            <p>Wouldn’t it be better practice to use get_the_title(..) in this case?
                                                directly accessing the post object’s data member would bypass
                                                applying filters and enforcing protected and private settings,
                                                unless that’s explicitly desired.</p>
                                            <a href="#" class="comment_reply">Reply <i class="arrow_right"></i></a>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled reply_comment">
                                        <li>
                                            <div class="media comment_author">
                                                <img class="img_rounded" src="<?=base_url('themes/opac')?>/img/blog-single/comment_02.jpg"
                                                     alt="">
                                                <div class="media-body">
                                                    <div class="comment_info">
                                                        <h3>Hans Down</h3>
                                                        <div class="comment_date">44 mins ago</div>
                                                    </div>
                                                    <p>Thenks Demo User for Wouldn’t it be better practice to use
                                                        get_the_title.</p>
                                                    <a href="#" class="comment_reply">Reply <i
                                                            class="arrow_right"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media comment_author">
                                                <img class="img_rounded" src="<?=base_url('themes/opac')?>/img/blog-single/comment_03.jpg"
                                                     alt="">
                                                <div class="media-body">
                                                    <div class="comment_info">
                                                        <h3>Hans Down</h3>
                                                        <div class="comment_date">44 mins ago</div>
                                                    </div>
                                                    <p>Dropped a clanger up the kyver easy peasy vagabond victoria
                                                        sponge Charles tinkety tonk old fruit argy.!</p>
                                                    <a href="#" class="comment_reply">Reply <i
                                                            class="arrow_right"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="post_comment">
                                    <div class="media comment_author">
                                        <img class="img_rounded" src="<?=base_url('themes/opac')?>/img/blog-single/comment_01.jpg" alt="">
                                        <div class="media-body">
                                            <div class="comment_info">
                                                <h3>Chauffina Carr</h3>
                                                <div class="comment_date">04 mins ago</div>
                                            </div>
                                            <p>Wouldn’t it be better practice to use get_the_title(..) in this case?
                                                directly accessing the post object’s data member would bypass
                                                applying filters and enforcing protected and private settings,
                                                unless that’s explicitly desired.</p>
                                            <a href="#" class="comment_reply">Reply <i class="arrow_right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog_comment_box topic_comment">
                            <h2 class="c_head">Leave a Reply</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form class="get_quote_form row" action="#" method="post">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="name" required>
                                    <label class="floating-label">Full Name *</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" id="email" required>
                                    <label class="floating-label">Email *</label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="web" required>
                                    <label class="floating-label">Website (Optional)</label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control message" required></textarea>
                                    <label class="floating-label">Comment type...</label>
                                </div>
                                <div class="col-md-12 form-group check_input">
                                    <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                    <label for="fruit1">Save my name, email, and website in this browser for the
                                        next time I comment.</label>
                                </div>
                                <div class="col-md-12 form-group"><button class="btn action_btn thm_btn"
                                                                          type="submit">Post
                                    Comment</button></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_sidebar pl-40">
                        
                        <div class="widget categorie_widget">
                                <h4 class="c_head">Kategori Koleksi</h4>
                                <ul class="list-unstyled categorie_list">
                                    <li><a href="#">Buku/Monograf <span>(12)</span></a></li>
                                    <li><a href="#">Terbitan Berkala <span>(8)</span></a></li>
                                    <li><a href="#">Sumber Elektronik<span>(3)</span></a></li>
                                    <li><a href="#">Bentuk Mikro <span>(4)</span></a></li>
                                    <li><a href="#">Bahan Campuran<span>(12)</span></a></li>
                                    <li><a href="#">Rekaman Suara<span>(15)</span></a></li>
                                    <li><a href="#">Braille <span>(10)</span></a></li>
                                    <li><a href="#">Rekaman Video<span>(5)</span></a></li>
                                </ul>
                            </div>
                        <div class="widget recent_news_widget">
                            <h4 class="c_head">Karya Lain dari Pengarang</h4>
                            <div class="media recent_post_item">
                                <img src="<?=base_url('themes/opac')?>/img/blog-single/news_01.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h5>Is It Worth Buying A Premium Form Builder.</h5>
                                    </a>
                                    <div class="entry_post_date">2020</div>
                                </div>
                            </div>
                            <div class="media recent_post_item">
                                <img src="<?=base_url('themes/opac')?>/img/blog-single/news_02.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h5>10 Classic Summer Vacations</h5>
                                    </a>
                                    <div class="entry_post_date">2018</div>
                                </div>
                            </div>
                            <div class="media recent_post_item">
                                <img src="<?=base_url('themes/opac')?>/img/blog-single/news_03.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h5>How To Easily Add weForms Widget Using Elementor</h5>
                                    </a>
                                    <div class="entry_post_date">2010</div>
                                </div>
                            </div>
                            <div class="media recent_post_item">
                                <img src="<?=base_url('themes/opac')?>/img/blog-single/news_04.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h5>How to Create GDPR Consent Form In WordPress</h5>
                                    </a>
                                    <div class="entry_post_date">1998</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="widget tag_widget">
                            <h4 class="c_head">Subjek Terkait</h4>
                            <ul class="list-unstyled w_tag_list">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Apps</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Docy</a></li>
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">DocAll</a></li>
                                <li><a href="#">Magento</a></li>
                                <li><a href="#">Doc Design</a></li>
                                <li><a href="#">ui/ux</a></li>
                                <li><a href="#">Docs</a></li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Topic Area =================-->

  
    <footer class="forum_footer_area">
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
                                <li><a href="#"><i class="social_youtube"></i></a></li>
                                <li><a href="#"><i class="social_instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="f_widget doc_service_list_widget pl-30 wow fadeInUp" data-wow-delay="0.3s">
                            <h3 class="f_title_two">Fitur Lain</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><img src="<?=base_url('themes/opac')?>/img/new/doc2.png" alt="">Keanggotaan</a></li>
                                <li><a href="#"><img src="<?=base_url('themes/opac')?>/img/new/doc2_.png" alt="">Sirkulasi</a></li>
                                <li><a href="#"><img src="<?=base_url('themes/opac')?>/img/new/buku-tamu.png" alt="">Buku Tamu</a></li>
                                <li><a href="#"><img src="<?=base_url('themes/opac')?>/img/new/survey.png" alt="">Survey</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget doc_service_list_widget pl-100 wow fadeInUp" data-wow-delay="0.4s">
                            <h3 class="f_title_two">Layanan Perpusnas RI</h3>
                            <ul class="list-unstyled">
                                <li><a href="https://e-resources.perpusnas.go.id/">e-Resources</a></li>
                                <li><a href="https://keanggotaan.perpusnas.go.id/">Keanggotaan</a></li>
                                <li><a href="https://opac.perpusnas.go.id/">OPAC</a></li>
                                <li><a href="https://onesearch.id/">OneSearch</a></li>
                                <li><a href="https://khastara.perpusnas.go.id/">Khastara</a></li>
                                <li><a href="https://ipusnas.perpusnas.go.id/">iPusnas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget doc_service_list_widget pl-70 wow fadeInUp" data-wow-delay="0.5s">
                            <h3 class="f_title_two">Penerbit, Institusi, dan Kepustakawanan</h3>
                            <ul class="list-unstyled">
                                <li><a href="https://isbn.perpusnas.go.id/">ISBN</a></li>
                                <li><a href="https://depbangkol.perpusnas.go.id/">Serah Simpan KCKR</a></li>
                                <li><a href="https://ismn.perpusnas.go.id/">ISMN</a></li>
                                <li><a href="https://data.perpusnas.go.id/">Pendataan Perpustakaan</a></li>
                                <li><a href="https://pusdiklat.perpusnas.go.id/">Pusdiklat</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doc_footer_bottom">
            <div class="container d-flex justify-content-between">
                <!-- <ul class="doc_footer_menu list-unstyled wow fadeInUp" data-wow-delay="0.2s">
                    <li><a href="#">Login</a></li>
                     <li><a href="#">Latest Projects</a></li> 

                </ul> -->
                <p class="wow fadeInUp" data-wow-delay="0.3s">© 2021 All Rights Reserved by <a href="https://www.perpusnas.go.id/" target="_blank"><span>Perpustakaan Nasional RI</span></a>                        
                </p>
            </div>
        </div>
    </footer>
</div>
</div>

<!-- How can we help? Form Modal -->
<div class="modal fade img_modal" id="exampleModal3" tabindex="-3" role="dialog" aria-hidden="false">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class=" icon_close"></i>
    </button>
    <div class="modal-dialog help_form" role="document">
        <div class="modal-content">
            <div class="shortcode_title">
                <h2>How can we help?</h2>
                <p>A premium WordPress theme with integrated Knowledge Base,<br>providing 24/7 community based support.</p>
            </div>
            <form action="#" class="contact_form">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea name="Message" id="massage" placeholder="Massage"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn action_btn">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Back to top button -->
<a id="back-to-top" title="Back to Top"></a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=base_url('themes/opac')?>/js/jquery-3.5.1.min.js"></script>
<script src="<?=base_url('themes/opac')?>/assets/bootstrap/js/popper.min.js"></script>
<script src="<?=base_url('themes/opac')?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url('themes/opac')?>/assets/bootstrap/js/bootstrap-select.min.js"></script>
<script src="<?=base_url('themes/opac')?>/js/pre-loader.js"></script>
<script src="<?=base_url('themes/opac')?>/js/jquery.parallax-scroll.js"></script>
<script src="<?=base_url('themes/opac')?>/assets/niceselectpicker/jquery.nice-select.min.js"></script>
<script src="<?=base_url('themes/opac')?>/assets/wow/wow.min.js"></script>
<script src="<?=base_url('themes/opac')?>/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?=base_url('themes/opac')?>/assets/font-size/js/rv-jquery-fontsize-2.0.3.min.js"></script>
<script src="<?=base_url('themes/opac')?>/js/anchor.js"></script>
<script src="<?=base_url('themes/opac')?>/assets/magnify-pop/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="<?=base_url('themes/opac')?>/js/main.js"></script>

</body>

</html>