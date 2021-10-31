<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Tokoh Wanita</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Dokumentasi Biografi Wanita Indonesia</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>Tokoh Wanita</li>
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
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a href="javascript:void(0)"><?=$figure->created_at?></a></li>
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="<?=base_url('tokoh-wanita')?>">Tokoh Wanita</a></li>
                        </ul>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom"><?=$figure->name?></h5>
                        <img src="<?=base_url('uploads/figure/'.$figure->file_image)?>" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">

                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h6 class="alt-font text-extra-dark-gray font-weight-500">Detail Tokoh</h6>
                                <table class="table table-hover table-striped table-condensed">
                                    <tbody>
                                        <tr>
                                            <td width="200">Nama Tokoh</td>
                                            <td><?=$figure->name?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td><?=$figure->category_name?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Lahir</td>
                                            <td><?=$figure->year_birth?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Wafat</td>
                                            <td><?=$figure->year_death?></td>
                                        </tr>
                                        <tr>
                                            <td>Riwayat Singkat</td>
                                            <td><?=$figure->description?></td>
                                        </tr>
                                        <tr>
                                            <td>Biografi</td>
                                            <td><?=$figure->biography?></td>
                                        </tr>
                                        <tr>
                                            <td>Pemikiran</td>
                                            <td><?=$figure->idea?></td>
                                        </tr>
                                        <tr>
                                            <td>Peran</td>
                                            <td><?=$figure->role?></td>
                                        </tr>
                                        <tr>
                                            <td>Kiprah</td>
                                            <td><?=$figure->pace?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>                     
                </div>
            </div>

            <?= $this->include(APPPATH.'Modules/Frontend/Page/Views/sidebar_figure'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->


