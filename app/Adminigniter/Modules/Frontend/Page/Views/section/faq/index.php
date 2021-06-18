<!-- start page title -->
<section class="wow fadein bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-corporate-primary font-weight-500 no-margin-bottom sm-margin-10px-bottom d-inline-block">FAQs</h1>
                <span class="alt-font text-medium d-block d-md-inline-block">Pertanyaan yang sering diajukan</span>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>FAQs</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section -->
<section class="pt-5 pb-3">
    <div class="container">
        <div class="row">
            <!-- <div class="col-12 text-center margin-7-rem-bottom">
                <span class="d-block alt-font margin-5px-bottom">Most common questions</span>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Most popular topics</h5>
            </div> -->
            <div class="col-12 col-lg-12 md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn">
                <div class="panel-group accordion-event accordion-style-03" id="accordionParent" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                    <?php $i=1;?>
                    <?php foreach($faqs as $row):?>
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordionParent" href="#collapse<?=$i?>" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-corporate-primary d-inline-block font-weight-500"><?=$row->name?></span>
                                    <i class="indicator fas fa-angle-<?=($i == 1)?'down':'right'?> text-corporate-primary icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapse<?=$i?>" class="panel-collapse collapse <?=($i == 1)?'show':''?>" data-parent="#accordionParent">
                            <div class="panel-body"><?=$row->description?></div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <?php $i++;?>
                    <?php endforeach;?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center margin-7-rem-bottom">
                <span class="d-block alt-font margin-5px-bottom">Butuh bantuan?</span>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Tanyakan ke kami</h5>
            </div>
            <!-- start feature box item -->
            <div class="col-12 col-lg-6 col-md-9 wow animate__fadeIn">
                <div class="feature-box feature-box-left-icon border-radius-4px bg-corporate-primary overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                        <i class="feather icon-feather-phone-call icon-extra-large text-white"></i>
                    </div>
                    <div class="feature-box-content padding-15px-left">
                        <span class="alt-font text-extra-medium font-weight-500 margin-10px-bottom d-block text-white">Telepon</span>
                        <p class="text-white opacity-7 w-90 lg-w-100 margin-20px-bottom"><?=get_parameter('contact-phone')?></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom wow animate__fadeIn">
                <div class="feature-box feature-box-left-icon border-radius-4px bg-corporate-primary overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                        <i class="far fa-envelope icon-extra-large text-white"></i>
                    </div>
                    <div class="feature-box-content padding-15px-left">
                        <span class="alt-font text-extra-medium font-weight-500 margin-10px-bottom d-block text-white">Email</span>
                        <p class="text-white opacity-6 w-90 lg-w-100 margin-20px-bottom"><?=get_parameter('contact-email')?></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end section -->