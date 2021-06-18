<?php
    $pra_kemerdekaan = get_page('pra-kemerdekaan');
    $pasca_kemerdekaan = get_page('pasca-kemerdekaan');
?>
<section class="overflow-visible position-relative z-index-1 wow animate__fadeIn pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center justify-content-center mb-3">
            <div class="col-12 col-lg-6 col-md-6 text-center text-md-left sm-margin-30px-bottom">
                <h5 class="alt-font text-extra-dark-gray font-weight-500 mb-0">
                    <strong class="text-corporate-primary text-decoration-underline">Tentang</strong> 
                    Kami.</h5>
            </div>
            <div class="col-12 col-lg-6 col-md-6 text-center text-md-right">
                <a href="<?=get_parameter('site-video')?>" class="video-popup-link btn btn-extra-large btn-success btn-round-edge">
                    <i class="fa fa-arrow-right line-icon-Video-5 icon-large d-inline-block no-margin-left margin-15px-right align-middle" aria-hidden="true"></i> 
                    <div class="d-inline-block text-left align-middle">
                        <?=get_parameter('site-name')?>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <!-- start feature box item -->
            <div class="col-12">
                <div class="feature-box feature-box-left-icon">
                    <div class="feature-box-icon">
                        <i class="line-icon-Idea-5 icon-large text-red"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500"><?=get_parameter('site-name')?></span>
                        <p class="w-100">
                            <?=get_parameter('site-about')?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
