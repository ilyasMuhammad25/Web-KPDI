<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$katalogModel = new \Katalog\Models\KatalogModel();
$query = $katalogModel
    ->where('t_catalog.active',1);

$keyword = $request->getVar('pDataItem');
$type = $request->getVar('pType') ?? 'Title';
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
    $query->where('t_catalog.Worksheet_id', $worksheet);
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
							<li class="breadcrumb-item active" aria-current="page">Hasil Pencarian &nbsp;  <b><i><?=$request->getVar('pDataItem')?></i></b></li>
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
							Pencarian <i><b><?=$request->getVar('pDataItem')?></b></i>, ditemukan <?=$count_items?> item.
						<?php else:?>
							Ditemukan <?=$count_items?> item.
						<?php endif;?>
					</div>
					<div class="container">
						<div class="row blog_grid_tab pt-0">
							<?php foreach($items as $row):?>
							<?php 
								$default = base_url('uploads/default/no_cover.jpg');
								$image = base_url('uploads/katalog/' . $row->CoverURL);
								$thumb = base_url('uploads/katalog/thumb_' . $row->CoverURL);
								if (empty($row->CoverURL)) {
									$image = $default;
									$thumb = $default;
								}
							?>

							<div class="col-lg-12 col-sm-12 mb-3 pl-0">
								<div class="blog_grid_post shadow-sm wow fadeInUp m-0">
									<div class="grid_post_content p-0">
										<table class="table table-bordered table-condensed mb-0">
											<tbody>
													<tr>
														<th width="120">
															<a href="<?=$image?>" class="image-link">
																<img width="120" class="rounded" src="<?=$default?>" onerror="this.onerror=null;this.src='<?=$default?>';" alt="">
															</a>
														</th>
														<td>
															<a href="<?=base_url('home/search?slug=#')?>">
																<p class="b_title"><?=$row->Title?></p>
															</a> 
															<span class="badge badge-secondary" href="#"><?=get_worksheet_label($row->Worksheet_id)?></span>
														</td>
													</tr>
													<tr>
														<th>Kreator/Pengarang</th>
														<td><?=$row->Author?></td>
													</tr>
													<tr>
														<th>Penerbitan</th>
														<td><?= _spec($row->PublishLocation); ?> : <?= _spec($row->Publisher); ?>, <?= _spec($row->PublishYear); ?></td>
													</tr>
													<tr>
														<th>No. Panggil</th>
														<td><?= _spec($row->CallNumber); ?></td>
													</tr>
													<tr>
														<th>Konten Digital</th>
														<td>Tidak tersedia</td>
													</tr>
													<tr>
														<th>Ketersediaan</th>
														<td><?=count(get_eksemplars($row->id))?></td>
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
