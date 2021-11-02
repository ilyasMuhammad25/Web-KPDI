<?php
     $page = get_page('bimbingan');
?>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Bimtek</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
           
           
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p  style="text-align:justify">
            <?=$page->content?>
            </p>
        
                    <!-- <a href="<?=base_url('home')?>" class="footer-logo margin-25px-bottom d-inline-block">
                        <img src="<?=base_url('uploads')?>/surat.png" data-at2x="<?=base_url('uploads')?>/surat.png" alt="" style="width:100%">
                       
                    </a> -->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->