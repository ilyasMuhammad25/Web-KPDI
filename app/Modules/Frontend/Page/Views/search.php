<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">Pencarian</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Kata Kunci</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>Pencarian</li>
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
            <div class="col-12 col-lg-8 right-sideba no-padding-lr">
                <span class="alt-font font-weight-500 text-large text-primary d-block margin-25px-bottom padding-15px-left">
                    Hasil pencarian <i>"<?=$keyword?>"</i>.
                </span>
                <div class="col-12 blog-content">
                    <!-- buku -->
                    <span class="alt-font font-weight-500 text-large text-info d-block margin-25px-bottom">
                        Ditemukan <?=$count_books?> Buku.
                    </span>
                    <?php foreach($books as $row):?>
                        <i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="<?=base_url('buku')?>">Buku</a> &nbsp;
                        <i class="feather icon-feather-user text-fast-blue margin-10px-right"></i><a href="<?=base_url('buku')?>"><?=$row->author?></a> &nbsp;
                        <a href="<?=base_url('buku/'.$row->slug)?>" class="post-title font-weight-500 text-dark-slate-blue d-block margin-15px-bottom w-95 sm-w-100"><?=$row->title?></a>
                        <?php foreach(explode(';', $row->subject) as $subject):?>
                            <span class="badge badge-secondary"><?=$subject?></span>
                        <?php endforeach;?>
                        <hr>
                    <?php endforeach;?>
                    
                    <?php if(count($books) > 0):?>
                    <div class="col-12 d-flex justify-content-center wow animate__fadeIn mb-5">
                        <?= $pager_books->links('books', 'custom_pagination') ?>
                    </div>
                    <?php endif;?>

                    <!-- Karya Ilmiah -->
                    <span class="alt-font font-weight-500 text-large text-info d-block margin-25px-bottom">
                        Ditemukan <?=$count_researchs?> Karya Ilmiah.
                    </span>
                    <?php foreach($researchs as $row):?>
                        <i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="<?=base_url('karya-ilmiah')?>">Buku</a> &nbsp;
                        <i class="feather icon-feather-user text-fast-blue margin-10px-right"></i><a href="<?=base_url('karya-ilmiah')?>"><?=$row->author?></a> &nbsp;
                        <a href="<?=base_url('karya-ilmiah/'.$row->slug)?>" class="post-title font-weight-500 text-dark-slate-blue d-block margin-15px-bottom w-95 sm-w-100"><?=$row->title?></a>
                        <?php foreach(explode(';', $row->subject) as $subject):?>
                            <span class="badge badge-secondary"><?=$subject?></span>
                        <?php endforeach;?>
                        <hr>
                    <?php endforeach;?>

                    <?php if(count($researchs) > 0):?>
                    <div class="col-12 d-flex justify-content-center wow animate__fadeIn mb-5">
                        <?= $pager_researchs->links('researchs', 'custom_pagination') ?>
                    </div>
                    <?php endif;?>

                    <!-- Artikel -->
                    <span class="alt-font font-weight-500 text-large text-info d-block margin-25px-bottom">
                        Ditemukan <?=$count_articles?> Artikel.
                    </span>
                    <?php foreach($articles as $row):?>
                        <i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="<?=base_url('artikel')?>">Artikel</a> &nbsp;
                        <i class="feather icon-feather-user text-fast-blue margin-10px-right"></i><a href="<?=base_url('artikel')?>"><?=$row->author?></a> &nbsp;
                        <a href="<?=base_url('artikel/'.$row->slug)?>" class="post-title font-weight-500 text-dark-slate-blue d-block margin-15px-bottom w-95 sm-w-100"><?=$row->title?></a>
                        <?php foreach(explode(';', $row->subject) as $subject):?>
                            <span class="badge badge-secondary"><?=$subject?></span>
                        <?php endforeach;?>
                        <hr>
                    <?php endforeach;?>

                    <?php if(count($articles) > 0):?>
                    <div class="col-12 d-flex justify-content-center wow animate__fadeIn mb-5">
                        <?= $pager_articles->links('articles', 'custom_pagination') ?>
                    </div>
                    <?php endif;?>

                </div>
            </div>

            <?= $this->include(APPPATH.'Modules/Frontend/Page/Views/sidebar_search'); ?>

        </div>
    </div>
</section>
<!-- end blog content section -->

