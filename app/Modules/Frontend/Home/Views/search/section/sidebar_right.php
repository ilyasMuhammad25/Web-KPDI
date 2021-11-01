<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$worksheets = get_worksheet_summary();
?>

<div class="open_icon" id="right">
	<i class="arrow_carrot-left"></i>
	<i class="arrow_carrot-right"></i>
</div>
<div class="doc_rightsidebar scroll">
	
	<div class="pageSideSection">
		<div class="widget categorie_widget">
			<h5>Kategori Koleksi</h5>
			<ul class="list-unstyled categorie_list">
				<?php foreach($worksheets as $row):?>
					<li><a href="<?=base_url('home/search?pDataItem=&pType=&pLembarkerja='.$row->id)?>"><?=$row->name?> (<?=$row->total?>)</a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>