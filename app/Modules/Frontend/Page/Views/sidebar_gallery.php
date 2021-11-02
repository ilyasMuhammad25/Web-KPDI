<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$pictureModel = new \App\Modules\Backend\Picture\Models\PictureModel();
$recordModel = new \App\Modules\Backend\Record\Models\RecordModel();

$count_picture = $pictureModel->where('active','1')->countAllResults(false);
$count_record = $recordModel->where('active','1')->countAllResults(false);
?>

<!-- start sidebar -->
<aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
    <div class="d-inline-block w-100 margin-5-rem-bottom">
        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Pencarian</span>
        <form id="search-form" role="search" method="get" action="<?=$action?>">
            <div class="position-relative">
                <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0" placeholder="Kata kunci pencarian" name="keyword" value="" type="text" autocomplete="off" />
                <button type="submit" class="bg-transparent btn text-fast-blue position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ml-0"></i></button>
            </div> 
        </form>
    </div>
    <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Galeri</span>
        <ul class="list-style-07 list-unstyled">
            <li><a href="<?=base_url('koleksi-gambar')?>">Koleksi Gambar</a><span class="item-qty"><?=$count_picture ?? 0?></span></li>
            <li><a href="<?=base_url('koleksi-rekaman')?>">Koleksi Rekaman</a><span class="item-qty"><?=$count_record ?? 0?></span></li>
        </ul>
    </div>
    <!-- <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Post Terbaru</span>
        <ul class="latest-post-sidebar position-relative">
            <li class="media wow animate__fadeIn" data-wow-delay="0.2s">
                <figure>
                    <a href="blog-post-layout-01.html"><img class="border-radius-3px" src="https://placehold.it/940x940" alt=""></a>
                </figure>
                <div class="media-body">
                    <a href="blog-post-layout-01.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Fashion is anything</a>
                    <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                </div>
            </li>
            <li class="media wow animate__fadeIn" data-wow-delay="0.4s">
                <figure>
                    <a href="blog-post-layout-02.html"><img class="border-radius-3px" src="https://placehold.it/800x800" alt=""></a>
                </figure>
                <div class="media-body">
                    <a href="blog-post-layout-02.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Design transcends </a>
                    <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                </div>
            </li>
            <li class="media wow animate__fadeIn" data-wow-delay="0.6s">
                <figure>
                    <a href="blog-post-layout-03.html"><img class="border-radius-3px" src="https://placehold.it/800x800" alt=""></a>
                </figure>
                <div class="media-body">
                    <a href="blog-post-layout-03.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Never give in except</a>
                    <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                </div>
            </li>
        </ul>
    </div> -->
    <!-- <div class="margin-5-rem-bottom xs-margin-35px-bottom md-padding-3-rem-top wow animate__fadeIn">
        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Subjek/Kata Kunci</span>
        <div class="tag-cloud">
            <a href="javascript:void(0)">Buku</a>
            <a href="javascript:void(0)">Karya Ilmiah</a>
            <a href="javascript:void(0)">Artikel</a>
        </div>
    </div> -->

</aside>
<!-- end sidebar -->