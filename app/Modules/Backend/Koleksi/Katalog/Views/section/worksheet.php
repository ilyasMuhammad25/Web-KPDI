<form method="get" action="<?=$action?>">
	<input type="hidden" name="slug" value="<?=$slug?>">
	<div class="select-wrapper input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Jenis Bahan</span>
		</div>
		<select class="form-control select2" name="worksheet" id="worksheet"">
			<?php foreach (get_dropdown('t_worksheets',null) as $row) : ?>
				<option value="<?= $row->code ?>" <?=($row->code == $worksheet)?'selected':''?>><?= $row->text ?></option>
			<?php endforeach; ?>
		</select>
		<div class="input-group-prepend">
			<span class="input-group-text">Jenis Form</span>
		</div>
		<select class="form-control select2" name="marc" id="marc"">
			<option value="0">Form Sederhana</option>
			<option value="1">Form MARC</option>
		</select>
		<div class="input-group-append">
			<button class="btn btn-shadow btn bg-corporate-primary2 text-white" type="submit"><i class="fa fa-search"></i></button>
		</div>
	</div> 
</form>