<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Kontak Kami</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Tetap terhubung dengan Kami</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>Kontak Kami</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section -->
<section class="big-section fix-background overlap-height">
    <div class="opacity-full bg-dark-red"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-4 text-center margin-35px-top overlap-gap-section sm-no-margin-top">
                <a href="<?=get_parameter('video-contact')?>" class="popup-youtube video-icon-box video-icon-large text-center position-relative">
                    <span>
                        <span class="video-icon bg-white margin-15px-bottom">
                            <i class="icon-simple-line-control-play text-dark-red"></i>
                            <span class="video-icon-sonar">
                                <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                <span class="video-icon-sonar-afr bg-white"></span>
                            </span>
                        </span>
                        <span class="video-icon-text w-100 alt-font font-weight-500 text-extra-medium d-block text-uppercase text-white margin-20px-top"><?=get_parameter('site-name')?></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-light-gray overflow-visible pt-md-0">
    <div class="container">
        <div class="z-index-6 position-relative overlap-section-three-fourth bg-white box-shadow-large padding-8-rem-all md-padding-5-rem-all xs-padding-4-rem-tb xs-padding-2-rem-lr wow animate__fadeIn" data-wow-delay="0.4s">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Isi form dan Kami akan segera menghubungi Anda!</span>
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray">Bagaimana Kami bisa membantu Anda?</h4>
                </div>
                <div class="col-12">
                    <!-- start contact form -->
                    <div class="mb-3 mt-3" id="frm_contact_message"></div>

                    <form id="frm_contact" action="" method="post" novalidate="">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                <input class="medium-input bg-white margin-25px-bottom required" type="text" id="name" name="name" placeholder="Nama Lengkap">
                                <input class="medium-input bg-white margin-25px-bottom required" type="email" id="email" name="email" placeholder="Alamat Email">
                                <input class="medium-input bg-white mb-0 required" type="tel" id="phone" name="phone" placeholder="No Telepon">
                            </div>
                            <div class="col margin-4-rem-bottom sm-margin-20px-bottom">
                                <input class="medium-input bg-white margin-25px-bottom" type="text" id="subject" name="subject" placeholder="Perihal">
                                <textarea class="medium-textarea bg-white h-120px" rows="4" id="message" name="message" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col text-center text-md-right">
                                <button id="frm_contact_submit" class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit" type="submit">Submit</button>
                            </div>
                        </div>
                        <div class="form-results d-none"></div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center margin-7-rem-bottom">
                <span class="d-block alt-font margin-5px-bottom">Butuh bantuan?</span>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Tanyakan ke kami</h5>
            </div>
            <!-- start feature box item -->
            <div class="col-12 col-lg-6 col-md-9 wow animate__fadeIn">
                <div class="feature-box feature-box-left-icon border-radius-4px bg-dark-red overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                        <i class="feather icon-feather-phone-call icon-extra-large text-white"></i>
                    </div>
                    <div class="feature-box-content padding-15px-left">
                        <span class="alt-font text-extra-medium font-weight-500 margin-10px-bottom d-block text-white">Telepon</span>
                        <p class="text-white opacity-7 w-90 lg-w-100 margin-20px-bottom"><?=get_parameter('contact-phone')?></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom wow animate__fadeIn">
                <div class="feature-box feature-box-left-icon border-radius-4px bg-dark-red overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                        <i class="far fa-envelope icon-extra-large text-white"></i>
                    </div>
                    <div class="feature-box-content padding-15px-left">
                        <span class="alt-font text-extra-medium font-weight-500 margin-10px-bottom d-block text-white">Email</span>
                        <p class="text-white opacity-6 w-90 lg-w-100 margin-20px-bottom"><?=get_parameter('contact-email')?></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end section -->