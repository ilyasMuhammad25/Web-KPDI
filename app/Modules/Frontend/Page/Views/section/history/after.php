<?php
     $page = get_page('pasca-kemerdekaan');
?>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang INLISLite</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
           
           
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p  style="text-align:justify">
            <?=$page->content?>
            </p>
            <a href="<?=base_url('pasca-kemerdekaan')?>" class="btn-learn-more">Baca Selengkapnya</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->