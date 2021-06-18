<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Rekaman</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Dokumentasi Rekaman Tokoh Wanita Indonesia</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?= base_url('home') ?>">Beranda</a></li>
                    <li>Galeri</li>
                    <li>Koleksi Rekaman</li>
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
                    <?php if (!empty($keyword)) : ?>
                        Pencarian <i>"<?= $keyword ?>"</i>, ditemukan <?= $count_records ?> koleksi rekaman.
                    <?php else : ?>
                        Ditemukan <?= $count_records ?> koleksi rekaman.
                    <?php endif; ?>
                </span>

                <div class="col-12 blog-content xs-no-padding-lr">
                    <ul class="blog-modern blog-wrapper grid grid-loading grid-2col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                        <li class="grid-sizer"></li>
                        <?php $i = 2; ?>
                        <?php foreach ($records as $row) : ?>
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.<?= $i ?>s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-dark-red opacity-full">
                                        <?php if($row->category_slug == 'youtube'):?>
                                            <iframe width="100%" height="315" src="<?=$row->url?>" title="Koleksi Rekaman" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <?php else:?>
                                            <a href="<?= base_url('koleksi-rekaman/' . $row->slug) ?>">
                                                <img src="<?= base_url('uploads/record/' . $row->file_cover) ?>" onerror="this.src='<?=base_url('uploads/noimage.jpg')?>';" alt="" />
                                            </a>
                                        <?php endif;?>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb padding-10px-lr">
                                        <a href="<?= base_url('koleksi-rekaman/' . $row->slug) ?>"><span class="alt-font text-extra-dark-gray font-weight-500"><?= $row->title ?></span></a>
                                        <span class="text-medium d-block margin-one-bottom"><?=$row->category_name?></span>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <?php $i = $i + 4; ?>
                        <?php endforeach; ?>
                    </ul>
                    <!-- start pagination -->
                    <div class="col-12 d-flex justify-content-center margin-2-half-rem-top sm-margin-1-half-rem-top wow animate__fadeIn">
                        <?= $pager_records->links('records', 'custom_pagination') ?>
                    </div>
                    <!-- end pagination -->
                </div>
            </div>

            <?= $this->include(APPPATH . 'Modules/Frontend/Page/Views/sidebar_gallery'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->