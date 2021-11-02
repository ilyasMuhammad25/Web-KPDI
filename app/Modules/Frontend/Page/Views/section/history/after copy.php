<?php
    $page = get_page('pasca-kemerdekaan');
?>
<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                <!-- <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Pasca Kemerdekaan</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Sejarah Perjuangan Wanita Indonesia</span> -->
            </div>
            <div class="col-xl-6 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="javascript:void(0)">Sejarah Perjuangan</a></li>
                    <li>Pasca Kemerdekaan</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section -->
<section class="big-section fix-background overlap-height" style="background-image: url('<?=base_url('uploads/page/'.$page->file_image)?>');">
    <div class="opacity-full bg-dark-red"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-4 text-center margin-35px-top overlap-gap-section sm-no-margin-top">

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
                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Sejarah Perjuangan</span>
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray">Pasca Kemerdekaan</h4>
                </div>
                <div class="col-12">
                    <?=$page->content?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->