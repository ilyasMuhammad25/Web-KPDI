<form method="get" action="<?=$action?>">
	<input type="hidden" name="slug" value="<?=$slug?>">
	<div class="input-group mb-3">
		<select class="form-control select2" name="member_no" id="member_no"">
			<option value="">Pilih</option>
			<?php foreach (get_dropdown('t_anggota',null,'MemberNo','name') as $row) : ?>
				<option value="<?= $row->code ?>" <?=($row->code == $member_no)?'selected':''?>><?= $row->code ?> <?= $row->text ?></option>
			<?php endforeach; ?>
		</select>
		<div class="input-group-append">
			<button class="btn btn-shadow btn bg-corporate-primary2 text-white" type="submit"><i class="fa fa-search"></i> Cari</button>
		</div>
	</div> 
</form>