<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Rekaman</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Dokumentasi Rekaman Koleksi Rekaman Indonesia</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>Galeri</li>
                    <li>Koleksi Rekaman</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start blog content section --> 
<section class="blog-right-side-bar">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 right-sidebar">
                <div class="row">
                    <div class="col-12 blog-details-text last-paragraph-no-margin">
                        <ul class="list-unstyled margin-2-rem-bottom">
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a href="javascript:void(0)"><?=$record->created_at?></a></li>
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="<?=base_url('tokoh-wanita')?>">Koleksi Rekaman</a></li>
                        </ul>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom"><?=$record->title?></h5>

                        <?php if($record->category_slug == 'youtube'):?>
                            <iframe width="100%" height="315" src="<?=$record->url?>" title="Koleksi Rekaman" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php else:?>
                            <a href="<?= base_url('koleksi-rekaman/' . $record->slug) ?>">
                                <img src="<?= base_url('uploads/record/' . $record->file_cover) ?>" onerror="this.src='<?=base_url('uploads/noimage.jpg')?>';" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom" />
                            </a>
                        <?php endif;?>
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h6 class="alt-font text-extra-dark-gray font-weight-500">Detail Rekaman</h6>
                                <table class="table table-hover table-striped table-condensed">
                                    <tbody>
                                        <tr>
                                            <td width="200">Judul Rekaman</td>
                                            <td><?=$record->title?></td>
                                        </tr>
                                        <tr>
                                            <td>Fotografer/Pelukis</td>
                                            <td><?=$record->author?></td>
                                        </tr>
                                        <tr>
                                            <td>Sumber Grafis</td>
                                            <td><?=$record->source?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun</td>
                                            <td><?=$record->edition?></td>
                                        </tr>
                                        <tr>
                                            <td>Subjek/Kata Kunci</td>
                                            <td><?=$record->subject?></td>
                                        </tr>
                                        <tr>
                                            <td>Badan yang memiliki</td>
                                            <td><?=$record->institution?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis</td>
                                            <td><?=$record->category_name?></td>
                                        </tr>
                                        <tr>
                                            <td>Link Sumber</td>
                                            <td><a href="<?=$record->url?>" target="_blank"><?=$record->url?></a></td>
                                        </tr>
                                        <tr>
                                            <td>File Digital</td>
                                            <td>
                                                <?php if(!empty($record->file_content)):?>
                                                <a href="<?= base_url('flip?path=uploads/record&file=' . $record->file_content) ?>" class="ajax-popup-link"><img width="80" class="rounded" src="<?= base_url('uploads/file_content/pdf.png') ?>" alt=""></a>
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

            <?= $this->include(APPPATH.'Modules/Frontend/Page/Views/sidebar_gallery'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->


