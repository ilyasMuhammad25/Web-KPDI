<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Buku</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Dokumentasi Koleksi Buku Karya Penulis Wanita</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="javascript:void(0)">Karya Tulis</a></li>
                    <li>Buku</li>
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
                <div class="row">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom padding-15px-left">
                        <?php if(!empty($keyword)): ?>
                            Pencarian <i>"<?=$keyword?>"</i>, ditemukan <?=$count_books?> buku.
                        <?php else:?>
                            Ditemukan <?=$count_books?> buku.
                        <?php endif;?>
                    </span>
                    <div class="col-12 blog-content xs-no-padding-lr">
                        <ul class="blog-modern blog-wrapper grid grid-loading grid-2col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                            <li class="grid-sizer"></li>   
                            <?php $i=2; ?> 
                            <?php foreach($books as $row):?>                
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.<?=$i?>s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-dark-red">
                                        <a href="<?=base_url('buku/'.$row->slug)?>"><img src="<?=base_url('uploads/book/'.$row->file_image)?>" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="<?=base_url('buku/'.$row->slug)?>" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase"><?=$row->author?></a>
                                        <a href="<?=base_url('buku/'.$row->slug)?>" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom"><?=$row->title?></a>
                                        <a href="<?=base_url('buku/'.$row->slug)?>" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block"><?=$row->created_at?></a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <?php $i = $i+4; ?> 
                            <?php endforeach;?>
                        </ul>
                        <!-- start pagination -->
                        <div class="col-12 d-flex justify-content-center margin-2-half-rem-top sm-margin-1-half-rem-top wow animate__fadeIn">
                            <?= $pager->links('books', 'custom_pagination') ?>
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>

            <?= $this->include(APPPATH.'Modules/Frontend/Page/Views/sidebar_collection'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->

