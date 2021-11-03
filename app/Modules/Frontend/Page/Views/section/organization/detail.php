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
<section class="blog-right-side-bar">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 right-sidebar">
                <div class="row">
                    <div class="col-12 blog-details-text last-paragraph-no-margin">
                        <ul class="list-unstyled margin-2-rem-bottom">
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a href="javascript:void(0)"><?=$organization->created_at?></a></li>
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="<?=base_url('tokoh-wanita')?>">Koleksi Gambar</a></li>
                        </ul>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom"><?=$organization->name?></h5>
                        <img src="<?=base_url('uploads/organization/'.$organization->file_image)?>" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">

                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h6 class="alt-font text-extra-dark-gray font-weight-500">Detail Organisasi</h6>
                                <table class="table table-hover table-striped table-condensed">
                                    <tbody>
                                        <tr>
                                            <td width="200">Nama Organisasi</td>
                                            <td><?=$organization->name?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td><?=$organization->category_name?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">Deskripsi</td>
                                            <td><?=$organization->description?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">URL</td>
                                            <td><?=$organization->url?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>                     
                </div>
            </div>

            <?= $this->include(APPPATH.'Modules/Frontend/Page/Views/sidebar_organization'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->


