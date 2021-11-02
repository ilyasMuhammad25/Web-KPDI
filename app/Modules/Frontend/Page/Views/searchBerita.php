<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$beritaModel = new \Berita\Models\BeritaModel();

$count_berita = $beritaModel->where('active','1')->countAllResults(false);
// $count_article = $articleModel->where('active','1')->countAllResults(false);
// $count_research = $researchModel->where('active','1')->countAllResults(false);

// $count_berita = $this->beritaModel->where('active','1')->countAllResults(false);

?>
<!-- start sidebar -->
<!-- <div class="sidebar-item search-form"> -->
            <form id="search-form" role="search" method="get" action="<?=$action?>">
              <input  name="keyword" value="" type="text" autocomplete="off"> 
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          <!-- </div>End sidebar search formn -->
<!-- end sidebar -->