<?php
$baseModel = new \App\Models\BaseModel();
$baseModel->setTable('t_figure');
$figures = $baseModel
        ->select('t_figure.*')
        ->select('c_references.name as category')
        ->join('c_references','c_references.id = t_figure.category_id','left')
        ->limit(0, 5)
        ->find_all('created_at', 'desc');
?>

<section class="bg-penguin-white pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">
                    Informasi</span>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95">
                    Berita Terbaru
                </h5>
            </div>
        </div>
        <!-- <div class="row mb-3">
            <div class="col text-center z-index-0">
                <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                    <span class="text-extra-big alt-font text-uppercase text-extra-dark-gray font-weight-700 letter-spacing-minus-5px image-mask cover-background xs-letter-spacing-minus-1px" style="background-image: url('https://infobudayaindonesia.com/wp-content/uploads/2016/10/Tokoh-Wanita-Yang-Populer-Dalam-Sejarah-Indonesia-1140x480.jpg')">wanita</span>
                </div>
            </div>
        </div> -->
        <div class="row justify-content-center">
            <div class="col-12 wow animate__fadeIn">
                <div class="outside-box">
                    <!-- start slider -->
                    <div class="swiper-container white-move" data-slider-options='{"loop": true, "slidesPerView": 1, "spaceBetween": 30, "autoplay": { "delay": 3500, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 } } }'>
                        <div class="swiper-wrapper">
                            <?php foreach($figures as $row):?>
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue">
                                    <div class="interactive-banners-box-image">
                                        <img src="<?=base_url('uploads/figure/'.$row->file_image)?>" alt="" style="height:350px !important" />
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        <span class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block"><?=$row->category?></span>
                                        <div class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">
                                            <?=$row->name?>
                                        </div>
                                        <a href="<?=base_url('tokoh-wanita/'.$row->slug)?>" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Info
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                            <!-- end interactive banner item -->
                            
                        </div>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </div>
</section>