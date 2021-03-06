<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?=base_url('themes/opac')?>/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/elagent-icon/style.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/assets/animation/animate.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/css/style-main.css">
    <link rel="stylesheet" href="<?=base_url('themes/opac')?>/css/responsive.css">
    <title>Masuk - Keanggotaan</title>
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
                <div class="sign_left signin_left">
                    <h2 class="pt-5">Masuk </h2>
                    <img class="position-absolute top" src="<?=base_url('themes/opac')?>/img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="<?=base_url('themes/opac')?>/img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle" src="<?=base_url('themes/opac')?>/img/signup/door.png" alt="bottom">
                    <div class="round"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
							<?php if (get_parameter('show-logo-login') == 1) : ?>
								<a href="<?= base_url() ?>"><img src="<?= base_url(get_parameter('logo')) ?>" width="250" class="mb-4" /></a>
							<?php endif; ?>

                            <h3>Keanggotaan Online</h3>
                            <!-- <a href="#" class="btn-google"><img src="<?=base_url('themes/opac')?>/img/signup/gmail.png" alt=""><span class="btn-text">Sign in with Gmail</span></a> -->
                        </div>

						<div id="infoMessage" class="bg-corporate-secondary text-white">
							<?= view('Myth\Auth\Views\_message_block') ?>
						</div>

						<form class="row login_form" action="<?= route_to('signin') ?>" method="post">
							<?= csrf_field() ?>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Nomor Anggota</div>
                                <input type="text" class="form-control" id="login" name="login" placeholder="Nomor Anggota">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Password</div>
                                <div class="confirm_password">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi" autocomplete="off">

									<?php if (config('Auth')->activeResetter) : ?>
										<a href="<?= route_to('forgot') ?>" class="forget_btn">Lupa Kata Sandi</a>
									<?php endif;?>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Masuk</button>
                            </div>
                        </form>

						<div class="divider">
							<span class="or-text">atau</span>
						</div>
						<div class="text-center">
							<p>Belum memiliki Nomor Anggota? <a href="<?=base_url('signup')?>">Daftar di sini</a></p>
						</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url('themes/opac')?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/js/pre-loader.js"> </script>
    <script src="<?=base_url('themes/opac')?>/assets/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/js/parallaxie.js"></script>
    <script src="<?=base_url('themes/opac')?>/js/TweenMax.min.js"></script>
    <script src="<?=base_url('themes/opac')?>/assets/wow/wow.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="<?=base_url('themes/opac')?>/js/main.js"></script>

</body>

</html>