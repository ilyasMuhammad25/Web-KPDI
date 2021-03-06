<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$katalogModel = new \Katalog\Models\KatalogModel();
$query = $katalogModel
    ->where('t_catalog.active',1);

$keyword = $request->getVar('pDataItem');
$type = $request->getVar('pType') ?? 'title';
$worksheet = $request->getVar('pLembarkerja');

$count_items = $query->countAllResults(false);

if(!empty($keyword)){
    $query->groupStart();
    $query->like('t_catalog.'.$type, $keyword);
    $query->groupEnd();
    $count_items = $query->countAllResults(false);
} 

if(!empty($worksheet)){
    $query->groupStart();
    $query->where('t_catalog.worksheet_id', $worksheet);
    $query->groupEnd();
    $count_items = $query->countAllResults(false);
} 

$items = $query
    ->select('t_catalog.*')
    ->orderBy('t_catalog.created_at', 'desc')
    ->paginate(10, 'katalogs');

$pager = $query->pager;
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
							<li class="breadcrumb-item active" aria-current="page">Pencarian Koleksi</li>
						</ol>
					</nav>
				</div>
				<div class="col-sm-5">
					<a href="#" class="date"><i class="icon_clock_alt"></i><?=date('Y-m-d h:n:s')?></a>
				</div>
			</div>
		</div>
	</section>
	<section class="doc_documentation_area" id="sticky_doc">
		<div class="overlay_bg"></div>
		<div class="container custom_container">
			<div class="row">
				<div class="col-lg-3 doc_mobile_menu display_none pr-0">
					<?= $this->include('Home\Views\search\section\sidebar_left'); ?>
				</div>

				<div class="col-lg-7 col-md-8 doc-middle-content" style="padding-left:5px; padding-right:30px;">
					<div class="shortcode_title">

						<?php if(!empty($keyword)): ?>
							Pencarian <i><b><?=$request->getVar('pDataItem')?></b></i>, ditemukan <?=$count_items?> koleksi.
						<?php else:?>
							Ditemukan <?=$count_items?> koleksi.
						<?php endif;?>
					</div>
					<div class="container">
						<div class="row blog_grid_tab pt-0">
							<?php foreach($items as $row):?>
							<?php 
								$default = base_url('uploads/default/no_cover.jpg');
								$image = base_url('uploads/katalog/' . $row->file_image);
								$thumb = base_url('uploads/katalog/thumb_' . $row->file_image);
								if (empty($row->file_image)) {
									$image = $default;
									$thumb = $default;
								}
							?>

							<div class="col-lg-12 col-sm-12 mb-3 pl-0">
								<div class="blog_grid_post shadow-sm wow fadeInUp m-0">
									<div class="grid_post_content p-0">
										<table class="table table-stripped mb-0">
											<tbody>
													<tr>
														<th class="text-info" width="120">
															<a href="<?=$image?>" class="image-link">
																<img width="120" class="rounded" src="<?=$default?>" onerror="this.onerror=null;this.src='<?=$default?>';" alt="">
															</a>
														</th>
														<td>
															<a href="<?=base_url('home/search?catalog_id='.$row->id)?>">
																<p class="b_title"><?=$row->title?></p>
															</a> 
															<span class="badge badge-secondary" href="#"><?=get_worksheet_label($row->worksheet_id)?></span>
														</td>
													</tr>
													<tr>
														<th class="text-info">Kreator/Pengarang</th>
														<td>: <?=$row->author?></td>
													</tr>
													<tr>
														<th class="text-info">Penerbitan</th>
														<td>: <?= _spec($row->publication); ?></td>
													</tr>
													<tr>
														<th class="text-info">No. Panggil</th>
														<td>: <?= _spec($row->call_no); ?></td>
													</tr>
													<tr>
														<th class="text-info">Konten Digital</th>
														<td>: Tidak tersedia</td>
													</tr>
													<tr>
														<th class="text-info">Ketersediaan</th>
														<td>: <?=count(get_eksemplars($row->id))?></td>
													</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<?php endforeach;?>
						</div>
					</div>
					<br>
					<div class="col-lg-12">
						<?= $pager->links('katalogs', 'custom_pagination') ?>
						<!-- <nav class="navigation pagination" role="navigation">
							<div class="nav-links">
								<span aria-current="page" class="page-numbers current">1</span>
								<a class="page-numbers" href="#">2</a>
								<a class="next page-numbers" href="#"><i class="arrow_carrot-right"></i></a>
							</div>
						</nav> -->
					</div>
				</div>

				<div class="col-lg-2 col-md-4 doc_right_mobile_menu">
					<?= $this->include('Home\Views\search\section\sidebar_right'); ?>
				</div>
			</div>
		</div>
	</section>
<?= $this->endSection('page'); ?>
