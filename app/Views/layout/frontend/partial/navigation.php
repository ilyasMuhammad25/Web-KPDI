<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<li class="nav-item"><a href="<?=base_url()?>/home" class="nav-link">Beranda</a></li>
<li class="dropdown nav-item simple-dropdown "><a href="#" class="nav-link">Sejarah Perjuangan</a>
    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
    <ul class="dropdown-menu">
        <li class="dropdown"><a href="<?=base_url()?>/sejarah-perjuangan?slug=pra-kemerdekaan" class="">Pra Kemerdekaan</a></li>
        <li class="dropdown"><a href="<?=base_url()?>/sejarah-perjuangan?slug=pasca-kemerdekaan" class="">Pasca Kemerdekaan</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0);">Portfolio other<i class="fas fa-angle-right dropdown-toggle"></i></a>
            <ul class="dropdown-menu">
                <li><a href="portfolio-scattered.html">Portfolio scattered</a></li>
                <li><a href="portfolio-justified-gallery.html">Justified gallery</a></li>
                <li><a href="portfolio-slider.html">Portfolio slider</a></li>
            </ul>
        </li>
    </ul>
</li>
<li class="nav-item"><a href="<?=base_url()?>/tokoh-wanita" class="nav-link">Tokoh Wanita</a></li>
<li class="nav-item dropdown simple-dropdown "><a href="#" class="nav-link">Karya Tulis <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i></a>
    <ul class="dropdown-menu">
        <li class="nav-item"><a href="<?=base_url()?>/karya-tulis?slug=buku" class="">Buku</a></li>
        <li class="nav-item"><a href="<?=base_url()?>/karya-tulis?slug=karya-ilmiah" class="">Karya Ilmiah</a></li>
        <li class="nav-item"><a href="<?=base_url()?>/karya-tulis?slug=artikel" class="">Artikel</a></li>
    </ul>
</li>
<li class="nav-item"><a href="<?=base_url()?>/galeri" class="nav-link">Galeri</a></li>
<li class="nav-item"><a href="<?=base_url()?>/organisasi" class="nav-link">Organisasi</a></li>