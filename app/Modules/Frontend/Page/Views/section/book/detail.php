<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-300 no-margin-bottom sm-margin-10px-bottom d-inline-block">Detail Buku</h1>
                <span class="alt-font text-medium d-block d-md-inline-block"><?=$book->title?></span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="javascript:void(0)">Karya Tulis</a></li>
                    <li><a href="<?=base_url('buku')?>">Buku</a></li>
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
                <div class="row">
                    <div class="col-12 blog-details-text last-paragraph-no-margin">
                        <ul class="list-unstyled margin-2-rem-bottom">
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a href="javascript:void(0)"><?=$book->created_at?></a></li>
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="<?=base_url('buku')?>">Buku</a></li>
                            <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-10px-right"></i> <a href="javascript:void(0)"><?=$book->author?></a></li>
                        </ul>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom"><?=$book->title?></h5>
                        <img src="<?=base_url('uploads/book/'.$book->file_image)?>" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">

                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h6 class="alt-font text-extra-dark-gray font-weight-500">Deskripsi Buku</h6>
                                <table class="table table-hover table-striped table-condensed">
                                    <tbody>
                                        <tr>
                                            <td width="200">Judul</td>
                                            <td><?=$book->title?></td>
                                        </tr>
                                        <tr>
                                            <td>Pengarang/Penulis</td>
                                            <td><?=$book->author?></td>
                                        </tr>
                                        <tr>
                                            <td>Pengarang Tambahan</td>
                                            <td><?=$book->author_additional?></td>
                                        </tr>
                                        <tr>
                                            <td>Penerbit</td>
                                            <td><?=$book->publish_location?> <?=$book->publisher?> <?=$book->publish_year?></td>
                                        </tr>
                                        <tr>
                                            <td>Edisi</td>
                                            <td><?=$book->edition?></td>
                                        </tr>
                                        <tr>
                                            <td>ISBN</td>
                                            <td><?=$book->isbn?></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Fisik</td>
                                            <td><?=$book->description?></td>
                                        </tr>
                                        <tr>
                                            <td>Subjek/Kata Kunci</td>
                                            <td><?=$book->subject?></td>
                                        </tr>
                                        <tr>
                                            <td>Badan yang memiliki</td>
                                            <td><?=$book->institution?></td>
                                        </tr>
                                        <tr>
                                            <td>Link Sumber</td>
                                            <td><a href="<?=$book->url?>" target="_blank"><?=$book->url?></a></td>
                                        </tr>
                                        <tr>
                                            <td>File Digital</td>
                                            <td>
                                                <?php if(!empty($book->file_pdf)):?>
                                                <a href="<?= base_url('flip?path=uploads/book&file=' . $book->file_pdf) ?>" class="ajax-popup-link"><img width="80" class="rounded" src="<?= base_url('uploads/book/pdf.png') ?>" alt=""></a>
                                                <?php else:?>
                                                    -
                                                <?php endif;?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>                     
                </div>
            </div>

            <?= $this->include(APPPATH.'Modules/Frontend/Page/Views/sidebar_collection'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->


