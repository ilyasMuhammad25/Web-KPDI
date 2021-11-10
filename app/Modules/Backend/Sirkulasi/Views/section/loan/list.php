<div class="main-card mb-3 card">
	<div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('Sirkulasi.label.table') ?> <?=$label?>
		<div class="btn-actions-pane-right actions-icon-btn">
			<?php if(is_allowed('sirkulasi/create')):?>
				<a href="<?= base_url('sirkulasi/create?slug='.$slug) ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('Sirkulasi.action.add') ?> <?=$label?></a>
			<?php endif;?>
		</div>
	</div>
	<div class="card-body table-responsive">
		<?= get_message('message'); ?>
		<table style="width: 100%;" id="tbl_sirkulasis" class="table table-striped table-bordered">
			<thead class="bg-corporate-primary2 text-white">
				<tr>
					<th><?= lang('Sirkulasi.field.no') ?></th>
					<th>No. Peminjaman</th>
					<th>No. Anggota</th>
					<th>Tanggal Peminjaman</th>
					<th><?= lang('Sirkulasi.label.action') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($sirkulasis as $row) : ?>
					<tr data-id="<?=$row->id?>" data-member_no="<?=$row->member_no?>" data-url="<?=base_url('api/sirkulasi/loan_items/'.$row->id)?>">
						<td width="35"></td>
						<td>
							<b><?=get_pad_number($row->id, 'PNJ', 10);?></b> <br>
							<span class="badge bg-corporate-secondary2  details-control"><i class="fa fa-list"> </i> Daftar Item</span>
						</td>
						<td>
							<b><?= _spec($row->member_no); ?></b> <?= _spec($row->member_name); ?>
						</td>
						<td><?= _spec($row->created_at); ?></td>
						<td width="90">
							<?php if(is_allowed('sirkulasi/update')):?>
								<a href="<?= base_url('sirkulasi/edit/' . $row->id) ?>" data-toggle="tooltip" data-placement="top" title="Ubah Sirkulasi" class="btn btn-warning show-data"><i class="pe-7s-note font-weight-bold"> </i></a>
							<?php endif;?>
							<?php if(is_allowed('sirkulasi/delete')):?>
								<a href="javascript:void(0);" data-href="<?= base_url('sirkulasi/delete/' . $row->id); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Peminjaman" class="btn btn-danger remove-data"><i class="pe-7s-trash font-weight-bold"> </i></a>
							<?php endif;?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>