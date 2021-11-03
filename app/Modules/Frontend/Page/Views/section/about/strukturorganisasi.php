
<?php
     $aboutDetail = get_page('struktur-organisasi');
?>

<!-- ======= Breadcrumbs ======= -->
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li><a href="blog.html">Tugas Pokok</a></li>
     

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-12 entries">

        <article class="entry entry-single">

          

          <h2 class="entry-title">
            <a href="blog-single.html"><?= set_value('title', $aboutDetail->title); ?></a>
          </h2>
         
          <div class="entry-meta">
            <ul>
            
              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $aboutDetail->created_by ?></a></li>
            
            
            </ul>
          </div>
          
          <div class="entry-content">
            <p>
            <?=$aboutDetail->content ?>
            </p>

          
          </div>

          <div>
            <img src="<?= base_url('uploads/about/' . $aboutDetail->file_image) ?>" alt="" class="img-fluid">
          </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->

</main><!-- End #main -->