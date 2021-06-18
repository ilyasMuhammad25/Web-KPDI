<?php
$pageModel = new \App\Adminigniter\Modules\Backend\Page\Models\PageModel();
$page = $pageModel->where('slug', $slug)->get()->getRow();
$breadcrumb = '<a class="color-white" href="' . base_url() . '">Beranda</a> <i class="fa fa-angle-double-right"></i> <a class="color-white" href="#">'.$category.'</a> <i class="fa fa-angle-double-right"></i> ' . $page->title;
?>
<!-- Page Header -->
<section class="page_header pb-0 w-100" style="background-image: url('<?= base_url('uploads/bg.png') ?>'); background-color: #fff; height: 250px; background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content position-relative">
                <h2 class="text-blue-perpusnas mt-5 mb-2"><?= $page->title ?></h2>
                <p class="text-black">
                    <?= $page->description ?>
                </p>
            </div>
        </div>
    </div>
</section>

<div class="d-none d-lg-block bg-blue-perpusnas" style="padding:12px;">
    <div class="container text-white">
        <?=$breadcrumb ?>
    </div>
</div>

<!-- Page Header -->
<section class="bg-light-gray text-left" style="padding-top: 70px; padding-bottom: 30px">
    <div class="container">
        <div class="row">
            <!-- Blog Left Listing -->
            <div class="col-md-12">
                <div class="blog-listing-inner news_item mb-5">
                    <div class="blog-listing-inner news_item">
                        <?php if(!empty($page->file_image)):?>
                        <div class="image hover-effect">
                            <img src="<?=base_url('uploads/page/'.$page->file_image)?>" alt="">
                        </div>
                        <?php endif;?>
                        <?= $page->content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>