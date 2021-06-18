<?php
$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('t_banner');
$banners = $baseModel
    ->select('t_banner.*')
    ->select('c_references.name as category_name, c_references.slug as category_slug')
    ->join('c_references','c_references.id = t_banner.category_id','left')
    ->where('c_references.slug <>','highlight')
    ->limit(0, 5)
    ->find_all('sort', 'asc');

$promos = $baseModel
    ->select('t_banner.*')
    ->select('c_references.name as category_name, c_references.slug as category_slug')
    ->join('c_references','c_references.id = t_banner.category_id','left')
    ->where('c_references.slug','highlight')
    ->limit(1)
    ->find_all('sort', 'asc');
?>
<section class="padding-30px-tb no-padding-lr">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8 lg-margin-10px-bottom padding-10px-all lg-padding-25px-lr sm-padding-15px-lr">
                <div class="position-relative h-100">
                    <div class="swiper-container slider-caption-blog-image white-move" data-slider-options='{ "autoplay":true, "loop": true, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".caption-blog-next", "prevEl": ".caption-blog-prev" }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <?php foreach($banners as $row):?>
                            <div class="swiper-slide cover-background lg-h-500px xs-h-300px" style="background-image:url(<?=base_url('uploads/banner/'.$row->file_image)?>)">
                                <div class="d-lg-flex align-items-center bg-transparent-black slider-caption-blog-caption padding-55px-tb xl-padding-20px-tb lg-padding-55px-tb md-padding-40px-tb xs-padding-30px-tb padding-60px-lr xl-padding-50px-lr xs-padding-30px-left xs-padding-50px-right">
                                    <a href="javascript:void(0)" class="col-auto text-uppercase pl-0 padding-2-rem-right margin-2-rem-right border-right border-color-dark-white-transparent text-yellow-ochre text-white-hover text-medium font-weight-500 letter-spacing-2px alt-font md-no-border-right md-margin-10px-bottom"><?=$row->category_name?></a>
                                    <h6 class="m-0">
                                        <a href="javascript:void(0)" class="text-white alt-font font-weight-300"><?=$row->name?></a>
                                    </h6>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                        <!-- start slider navigation -->
                        <div class="h-140px position-absolute w-100 bottom-0px xs-h-130px">
                            <div class="caption-blog-next"><i class="feather icon-feather-arrow-right"></i>
                            </div>
                            <div class="caption-blog-prev"><i class="feather icon-feather-arrow-left"></i></div>
                        </div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <ul class="blog-metro blog-wrapper grid grid-loading grid-1col xl-grid-1col lg-grid-1col md-grid-1col sm-grid-1col xs-grid-1col gutter-large home-magazine">
                    <li class="grid-sizer"></li>
                    <?php foreach($promos as $row):?>
                    <!-- start blog item -->
                    <li class="grid-item last-paragraph-no-margin wow animate__fadeIn">
                        <div class="blog-post">
                            <div class="blog-post-image bg-corporate-primary">
                                <a href="<?=base_url($row->url)?>">
                                    <img src="<?=base_url('uploads/banner/'.$row->file_image)?>" alt="" style="height:400px">
                                </a>
                                <div class="blog-overlay"></div>
                            </div>
                            <div class="post-details d-flex flex-column align-item-start padding-3-half-rem-all xl-padding-2-rem-all">
                                <div class="mb-auto w-100">
                                    <a href="<?=base_url('artikel/')?>" class="blog-category alt-font">Highlight</a>
                                </div>
                                <div class="align-self-end w-100">
                                    <a href="<?=base_url('artikel/')?>" class="alt-font text-small d-inline-block text-white text-uppercase opacity-6 margin-10px-bottom"><?=$row->name?></a>
                                    <a href="<?=base_url('artikel/')?>" class="alt-font text-white text-extra-large mb-0 d-block w-85 xl-w-100"><?=$row->description?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</section>