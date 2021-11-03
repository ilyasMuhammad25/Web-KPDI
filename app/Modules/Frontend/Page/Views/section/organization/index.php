<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Organisasi</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Organisasi-organisasi Kewanitaan</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>Organisasi</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start blog content section --> 
<section class="blog-right-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 right-sidebar">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom padding-15px-left">
                        <?php if(!empty($keyword)): ?>
                            Pencarian <i>"<?=$keyword?>"</i>, ditemukan <?=$count_organizations?> organisasi.
                        <?php else:?>
                            Ditemukan <?=$count_organizations?> organisasi.
                        <?php endif;?>
                    </span>

                    <div class="col-12 blog-content xs-no-padding-lr">
                        <ul class="blog-modern blog-wrapper grid grid-loading grid-2col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                            <li class="grid-sizer"></li>   
                            <?php $i=2; ?> 
                            <?php foreach($organizations as $row):?>                
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.<?=$i?>s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-dark-red opacity-full">
                                        <a href="<?=base_url('organisasi/'.$row->slug)?>">
                                            <img src="<?=base_url('uploads/organization/'.$row->file_image)?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb padding-10px-lr">
                                        <a href="<?=base_url('organisasi/'.$row->slug)?>"><span class="alt-font text-extra-dark-gray font-weight-500"><?=$row->name?></span></a>
                                        <a href="<?=base_url('organisasi?slug='.$row->category_slug)?>" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block"><?=$row->category_name?></a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <?php $i = $i+4; ?> 
                            <?php endforeach;?>
                        </ul>
                        <!-- start pagination -->
                        <div class="col-12 d-flex justify-content-center margin-2-half-rem-top sm-margin-1-half-rem-top wow animate__fadeIn">
                            <?= $pager_organizations->links('organizations', 'custom_pagination') ?>
                        </div>
                        <!-- end pagination -->
                    </div>
            </div>

            <?= $this->include(APPPATH.'Modules/Frontend/Page/Views/sidebar_organization'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->

