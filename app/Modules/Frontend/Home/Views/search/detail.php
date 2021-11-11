
<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$catalog_id = $request->getVar('catalog_id');

$katalogModel = new \Katalog\Models\KatalogModel();
$row = $katalogModel->find($catalog_id);
?>

<?= $this->extend('Core\layout\frontend\main'); ?>
<?= $this->section('style'); ?>
<style>
	.header_search_form .custom-select {
		min-width: 220px !important;
	}
</style>
<?= $this->endSection('style'); ?>
<?= $this->section('page'); ?>
	<section class="page_breadcrumb">
		<div class="container custom_container">
			<div class="row">
				<div class="col-sm-7">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>">Beranda</a></li>
							<!-- <li class="breadcrumb-item"><a href="#">Docs</a></li> -->
							<li class="breadcrumb-item active" aria-current="page">Detail Koleksi</li>
						</ol>
					</nav>
				</div>
				<div class="col-sm-5">
					<a href="#" class="date"><i class="icon_clock_alt"></i><?=date('Y-m-d h:n:s')?></a>
				</div>
			</div>
		</div>
	</section>
	<section class="breadcrumb_area_three pt-5 pb-5">
        <div class="container">
            <div class="breadcrumb_content">
                <h3><?=$row->title?></h3>
                <div class="single_post_author">
                    <!-- <img class="author_img" src="img/blog-single/author_single.jpg" alt=""> -->
                    <div class="text">
						<span class="badge badge-secondary" href="#"><?=get_worksheet_label($row->worksheet_id)?></span>
                        <div class="post_tag">
                            <a class="c_blue" href="#"><?=$row->publication?></a>
                            <!-- <a href="#"><?=$row->publication?></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="doc_documentation_area" id="sticky_doc">
		<div class="overlay_bg"></div>
		<div class="container custom_container">
			<div class="row">
				<div class="col-lg-10 col-md-8 doc-middle-content" style="padding-left:5px; padding-right:30px;">
					<div class="blog_single_info">
                        <div class="blog_single_item">
                           
							<?php 
								$default = base_url('uploads/default/no_cover.jpg');
								$image = base_url('uploads/katalog/' . $row->file_image);
								$thumb = base_url('uploads/katalog/thumb_' . $row->file_image);
								if (empty($row->file_image)) {
									$image = $default;
									$thumb = $default;
								}
							?>

							<div class="media mb-3">
								<img class="mr-3 img-thumbnail img-fluid" src="<?=$default?>" onerror="this.onerror=null;this.src='<?=$default?>';" style="max-width:200px" alt="Cover Koleksi">
								<div class="media-body">
									<table class="table table-stripped mb-0">
										<tbody>
												<tr>
													<th class="text-info" width="150">Judul</th>
													<td>: <?=$row->title?></td>
												</tr>
												<tr>
													<th class="text-info">Judul Asli</th>
													<td>: </td>
												</tr>
												<tr>
													<th class="text-info">Pengarang</th>
													<td>: <?=$row->author?></td>
												</tr>
												<tr>
													<th class="text-info">Penerbitan</th>
													<td>: <?=$row->publication?></td>
												</tr>
												<tr>
													<th class="text-info">Deskripsi Fisik</th>
													<td>: <?=$row->description_physical?></td>
												</tr>
												<tr>
													<th class="text-info">Jenis Isi</th>
													<td>: </td>
												</tr>
												<tr>
													<th class="text-info">Jenis Media</th>
													<td>: </td>
												</tr>
												<tr>
													<th class="text-info">Jenis Wadah</th>
													<td>: </td>
												</tr>
												<tr>
													<th class="text-info">ISBN</th>
													<td>: <?=$row->isbn?></td>
												</tr>
												<tr>
													<th class="text-info">Subjek</th>
													<td>: <?=$row->subject?></td>
												</tr>
												<tr>
													<th class="text-info">Abstrak</th>
													<td>: </td>
												</tr>
												<tr>
													<th class="text-info">Catatan</th>
													<td>: <?=$row->notes?></td>
												</tr>
												<tr>
													<th class="text-info">Bahasa</th>
													<td>: <?=$row->languages?></td>
												</tr>
												<tr>
													<th class="text-info">Bentuk Karya</th>
													<td>: </td>
												</tr>
												<tr>
													<th class="text-info">Target pembaca</th>
													<td>: </td>
												</tr>
												<tr>
													<th class="text-info">Konten Digital</th>
													<td>: Tidak tersedia</td>
												</tr>
										</tbody>
									</table>
								</div>
							</div>

							<a class="toggle_btn" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">Eksemplar</a>
							<div class="collapse multi-collapse show" id="collapse1">
								<div class="card card-body toggle_body"> 
									<div class="alert alert-info"><span class="fa fa-info"></span> Informasi : <br> <ul><li>Koleksi hanya dapat dipinjam bagi anggota yang memiliki alamat identitas dan domisili di JABODETABEK.</li> <li>Minimum level Anggota bintang 1</li><li>Kuota sesuai kapasitas Smart Locker yang tersedia</li> </ul></div>

									<table style="width: 100%;" id="tbl_eksemplars" class="table table-hover table-striped table-bordered">
										<thead>
											<tr>
												<th>Nomor Barcode</th>
												<th>Nomor Panggil</th>
												<th>Akses</th>
												<th>Lokasi</th>
												<th>Ketersediaan</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach (get_eksemplars($catalog_id) as $row) : ?>
											<tr>
												<td>
													<?= _spec($row->barcode_no); ?> <br>
												</td>
												<td>
													<?= _spec($row->call_no); ?> <br>
												</td>
												<td>
													<?php $access = get_ref_value($row->access_id,'ref_akses'); ?>
													<span class="badge bg-info"><?=$access?></span>
												</td>
												<td>
													<?php $location = db_get_single('m_lokasiperpustakaan','id='.$row->location_library_id);?>
													<b><?=$location->name?></b><br><?=$location->alamat?>
												</td>												
												<td>
													<?php $status = get_ref_value($row->availability_id,'ref_status'); ?>
													<?php if(strtoupper($status) == 'TERSEDIA'):?>
														<span class="badge bg-success"><?=$status?></span>
													<?php else:?>
															<span class="badge bg-warning"><?=$status?></span>
													<?php endif;?>

													<br>
													<?php if(logged_in()):?>
														<a href="<?=base_url('eksemplar/request/' . $row->id);?>" class="btn btn-primary btn-sm">Pesan Koleksi</a>
													<?php else:?>
															<a href="<?=base_url('signin');?>" class="btn btn-primary btn-sm">Masuk untuk Pesan</a>
													<?php endif;?>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>

								
								</div>
							</div>
                        </div>
                    </div>
				</div>

				<div class="col-lg-2 col-md-4 doc_right_mobile_menu">
					<?= $this->include('Home\Views\search\section\sidebar_right'); ?>
				</div>
			</div>
		</div>
	</section>
<?= $this->endSection('page'); ?>
