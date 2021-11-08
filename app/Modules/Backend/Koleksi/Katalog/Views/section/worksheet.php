<form method="get" action="<?=base_url('katalog/create')?>">
	<input type="hidden" name="slug" value="<?=$slug?>">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<button class="btn btn-shadow btn bg-corporate-primary2 text-white" type="submit">Pilih Jenis Bahan</button>
		</div>
		<select class="form-control select2" name="worksheet" id="worksheet"">
			<?php foreach (get_dropdown('t_worksheets',null) as $row) : ?>
				<option value="<?= $row->code ?>" <?=($row->code == $worksheet)?'selected':''?>><?= $row->text ?></option>
			<?php endforeach; ?>
		</select>
		<input type="hidden" name="marc" value="<?=$marc?>">
		<div class="input-group-append">
			<button class="btn btn-shadow btn bg-corporate-primary2 text-white" type="submit"><i class="fa fa-search"></i></button>
		</div>
	</div> 
</form>