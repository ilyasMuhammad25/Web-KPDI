<?php foreach ($beritas as $row): ?>
<?php endforeach ?>
<?php 
$tanggal = date($row->created_at); ?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Berita</li>
    </ol>
    

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row">
    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom padding-15px-left">
                        <?php if(!empty($keyword)): ?>
                            Pencarian <i>"<?=$keyword?>"</i>, ditemukan <?=$count_beritas?> berita.
                        <?php else:?>
                            Ditemukan <?=$count_beritas?> buku.
                        <?php endif;?>
                    </span>
      <div class="col-lg-8 entries">
      <?php foreach ($beritas as $row) : ?>
        <article class="entry">

          <div class="entry-img">
            <img src="<?= base_url('uploads/berita/' . $row->file_image) ?>" alt="" class="img-fluid">
          </div>

          <h2 class="entry-title">
            <a href="blog-single.html"><?= character_limiter($row->title); ?></a>
          </h2>

          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $row->created_name; ?></a></li>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?=  tgl_indonesia($tanggal); ?></time></a></li>
              <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
            </ul>
          </div>

          <div class="entry-content">
            <p>
            <?= character_limiter($row->content,100); ?>
            </p>
            <div class="read-more">
              <a href="<?= base_url('beritaDetail/'.$row->id.'/'.$row->slug); ?>">Read More</a>
            </div>
          </div>

        </article><!-- End blog entry -->
    <?php endforeach?>
      

        <div class="blog-pagination">
        <?= $pager->links('group1', 'custom_pagination') ?>
        </div>

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">

          <h3 class="sidebar-title">Search</h3>
          <div class="sidebar-item search-form">
          <?= $this->include('Page\Views\searchBerita'); ?>
          <!-- return view('Page\Views\index', $this->data); -->
          </div><!-- End sidebar search formn-->

          <h3 class="sidebar-title">Categories</h3>
          <div class="sidebar-item categories">
            <ul>
              <li><a href="#">General <span>(25)</span></a></li>
              <li><a href="#">Lifestyle <span>(12)</span></a></li>
              <li><a href="#">Travel <span>(5)</span></a></li>
              <li><a href="#">Design <span>(22)</span></a></li>
              <li><a href="#">Creative <span>(8)</span></a></li>
              <li><a href="#">Educaion <span>(14)</span></a></li>
            </ul>
          </div><!-- End sidebar categories-->

          <h3 class="sidebar-title">Recent Posts</h3>
          <div class="sidebar-item recent-posts">
          <?php foreach ($beritas as $row) : ?>
            <div class="post-item clearfix">
              <img src="<?= base_url('uploads/berita/' . $row->file_image) ?>" alt="">
              <h4><a href="blog-single.html"><?= $row->title ?></a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
         <?php endforeach ?>

     

          </div><!-- End sidebar recent posts-->

          <h3 class="sidebar-title">Tags</h3>
          <div class="sidebar-item tags">
            <ul>
              <li><a href="#">App</a></li>
              <li><a href="#">IT</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Mac</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Office</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Studio</a></li>
              <li><a href="#">Smart</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>
          </div><!-- End sidebar tags-->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->
