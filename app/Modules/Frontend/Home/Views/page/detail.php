<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$slug = $request->getVar('slug');
$slug_title = ucwords(strtolower(str_replace('-',' ',$slug)));

$pageModel = new \Page\Models\PageModel();
$query = $pageModel
    ->where('t_page.active',1)
    ->where('t_page.slug',$slug);

$row = $query
    ->select('t_page.*')

    ->select('created.username as created_name')
    ->select('updated.username as updated_name')
    ->join('users created','created.id = t_page.created_by','left')
    ->join('users updated','updated.id = t_page.updated_by','left')

    ->row();
?>

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

    <title><?=$title?></title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="<?=base_url('themes/opac')?>/img/spinner_logo.png" alt="">
                    <h4><span>INLIS</span></h4>
                </div>
            </div>
            <h2 class="head">Memuat Halaman</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area">
            <div class="row ml-0 mr-0">
                <div class="sign_left signin_left d-sm-none d-md-block">
                    <h2 class="pt-5"><?=$slug_title?></h2>
                    <img class="position-absolute top" src="<?=base_url('themes/opac')?>/img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="<?=base_url('themes/opac')?>/img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle" src="<?=base_url('themes/opac')?>/img/signup/door.png" alt="bottom">
                    <div class="round"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="signup_inner p-5 pr-5">
						<div class="blog_comment_box" style="padding-top:30px">
							<h2 class="c_head"><?=$row->name?></h2>
							
							<?=$row->content?>
						</div>

						<div class="divider">
							<hr>
						</div>
						<div class="text-center">
							<p>Kembali ke <a href="<?=base_url('')?>">Beranda</a></p>
						</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
	<script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
	<script src="<?=base_url('themes/opac')?>/js/main.js"></script>

</body>

</html>