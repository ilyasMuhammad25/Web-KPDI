<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Karya Ilmiah</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Dokumentasi Koleksi Karya Ilmiah Karya Penulis Wanita</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="javascript:void(0)">Karya Tulis</a></li>
                    <li>Karya Ilmiah</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start blog content section --> 
<section class="blog-right-side-bar pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 right-sidebar">
                <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom padding-15px-left">
                    <?php if(!empty($keyword)): ?>
                        Pencarian <i>"<?=$keyword?>"</i>, ditemukan <?=$count_researchs?> karya ilmiah.
                    <?php else:?>
                        Ditemukan <?=$count_researchs?> karya ilmiah.
                    <?php endif;?>
                </span>
                <div class="col-12 blog-content xs-no-padding-lr">
                    <ul class="blog-overlay-image blog-wrapper grid grid-loading grid-2col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                        <li class="grid-sizer"></li>
                        <?php foreach($researchs as $row):?>
                        <!-- start blog item -->
                        <li class="grid-item wow animate__fadeIn">
                            <div class="blog-post bg-white box-shadow-medium border-radius-5px padding-3-half-rem-all xl-padding-2-half-rem-all">                                    
                                <div class="blog-post-image">
                                    <div class="cover-background h-100 w-100" style="background-image: url('<?=base_url('uploads/research/'.$row->file_image)?>')" onerror="this.src='<?=base_url('uploads/noimage.jpg')?>';" ></div>
                                    <div class="blog-overlay-image bg-transparent-gradiant-black"></div>
                                </div>
                                <div class="post-details">
                                    <a href="<?=base_url('karya-ilmiah/'.$row->slug)?>" class="blog-category alt-font border-color-medium-gray margin-6-half-rem-bottom"><?=$row->edition?></a>
                                    <a href="<?=base_url('karya-ilmiah/'.$row->slug)?>" class="post-date alt-font font-weight-500 text-small text-uppercase d-block"><?=$row->created_at?></a>
                                    <a href="<?=base_url('karya-ilmiah/'.$row->slug)?>" class="post-title alt-font text-large font-weight-600 text-dark-slate-blue text-uppercase d-block margin-15px-bottom w-95 sm-w-100"><?=$row->title?></a>
                                    <a href="<?=base_url('karya-ilmiah/'.$row->slug)?>" class="post-read alt-font font-weight-500 text-extra-small text-uppercase text-gradient-sky-blue-pink border-bottom border-gradient-sky-blue-pink d-inline-block">Selengkapnya</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <?php endforeach;?>
                    </ul>
                    <!-- start pagination -->
                    <div class="col-12 d-flex justify-content-center wow animate__fadeIn">
                        <?= $pager->links('researchs', 'custom_pagination') ?>
                    </div>
                    <!-- end pagination -->
                </div>
            </div>

            <?= $this->include(APPPATH.'Modules/Frontend/Page/Views/sidebar_collection'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->

