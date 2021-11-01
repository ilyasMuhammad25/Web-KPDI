<?php
$request = \Config\Services::request();
$request->uri->setSilent();

$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('t_worksheets');
$categories = $baseModel
    ->select('t_worksheets.*')
	->where('active', 1)
    ->find_all('id', 'asc');
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
				<?php foreach($categories as $row):?>
					<li><a href="<?=base_url('home/search?pDataItem=&pType=Title&pLembarkerja='.$row->id)?>"><?=$row->name?> <span></span></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>