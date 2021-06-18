<footer class="footer-dark bg-corporate-primary2">
    <div class="footer-top pt-5 pb-4 lg-padding-five-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row justify-content-center">
                <!-- start footer column -->
                <div class="col-12 col-lg-7 col-md-7 col-sm-12 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-700 d-block text-white margin-20px-bottom xs-margin-10px-bottom"><?=get_parameter('site-name')?></span>
                    <p class="w-95 lg-w-100 text-white-transparent text-justify" style="line-height:20px">
                        <?=get_parameter('site-about','Tentang Website')?>
                    </p>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 col-md-2 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Tautan Langsung</span>
                    <ul>
                        <li><a class="text-white" href="https://kemkes.go.id">Kemenkes</a></li>
                        <li><a class="text-white" href="https://farmalkes.kemkes.go.id">Farmalkes</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 col-md-3 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Sosial Media</span>
                    <div class="social-icon-style-12">
                        <ul class="extra-small-icon light">
                            <li><a class="facebook text-white-transparent" href="<?=get_parameter('contact-facebook')?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter text-white-transparent" href="<?=get_parameter('contact-twitter')?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="instagram text-white-transparent" href="<?=get_parameter('contact-instagram')?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="instagram text-white-transparent" href="<?=get_parameter('contact-youtube')?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="social-icon-style-12 pt-2">
                        <p class="text-white">Jumlah Pengunjung: <?=get_visitor()?></p>
                    </div>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-corporate-primary padding-15px-tb">
        <div class="container"> 
            <div class="row align-items-center">
                <div class="col-12 col-md-6 sm-margin-15px-bottom">
                    <ul class="footer-horizontal-link d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
                        <li><a class="text-white" href="<?=base_url('faqs')?>">FAQs</a></li>
                        <li><a class="text-white" href="<?=base_url('kontak-kami')?>">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-12 text-center text-md-right last-paragraph-no-margin">
                    <p class="text-white"><?=get_parameter('site-copyright')?></p>
                </div>
            </div>
        </div>
    </div>
</footer>