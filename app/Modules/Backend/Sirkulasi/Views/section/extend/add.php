<div class="mb-3 card">
	<div class="card-header-tab card-header">
		<div class="card-header-title">
			<i class="header-icon lnr-calendar-full icon-gradient bg-success"> </i>
			<?=$label?>
		</div>
		<ul class="nav">
			<li class="nav-item"><a data-toggle="tab" href="#tab1" class="nav-link active show">Histori Peminjaman</a></li>
			<li class="nav-item"><a data-toggle="tab" href="#tab2" class="nav-link show">Keranjang Perpanjangan</a></li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content">
			<div class="tab-pane active show" id="tab1" role="tabpanel">
				<form name="form_sirkulasis" id="form_sirkulasis" action="<?= base_url('sirkulasi/cart_insert/0?member_no='.$member->MemberNo.'&slug=extend') ?>">
					<input type="hidden" name="member_no" value="<?=$member->MemberNo?>">

					<div class="table-responsive mt-3">
						<table style="width: 100%;" id="tbl_sirkulasis" class="table table-hover table-striped table-bordered">
							<thead class="bg-corporate-primary2 text-white">
								<tr>
									<th class="text-center">
										<input type="checkbox" class="check_all" name="check_all" title="Pilih Semua">
									</th>
									<th>No. Barcode</th>
									<th>Judul</th>
									<th>Tanggal Peminjaman</th>
									<th>Jatuh Tempo</th>
									<th>Terlambat (Hari)</th>
									<!-- <th>Pelanggaran</th> Popup
									<th>Jenis Denda</th>
									<th>Jumlah Denda</th>
									<th>Jumlah Skorsing</th> -->
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($sirkulasis as $row) : ?>
									<tr>
										<td class="text-center" width="5">
											<input type="checkbox" class="check" name="id[]" value="<?= $row->id; ?>">
										</td>
										<td width="100">
											<?= _spec($row->barcode_no); ?> <br>
										</td>
										<td width="400"><?= _spec($row->title); ?></td>
										<td width="100"><?= _spec($row->loan_date); ?></td>
										<td width="100"><?= _spec($row->due_date); ?></td>
										<td width="50"><?=get_late_days($row->due_date)?></td>
										<td width="35">
											<a href="<?= base_url('sirkulasi/process_extend/'.$row->id) ?>" data-toggle="tooltip" data-placement="top" title="Proses Perpanjangan" class="btn btn-primary show-data"><i class="fa fa-save"> </i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>

					<div class="d-block pt-3">
						<button type="button" id="add_to_cart" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" data-original-title="Semua Koleksi yang terpilih"><i class="fa fa-cart-plus"> </i> Tambahkan ke Keranjang</button>
					</div>
				</form>
			</div>
			<div class="tab-pane show" id="tab2" role="tabpanel">
				<form method="post" action="<?=base_url('sirkulasi/create_extend')?>">
					<input type="hidden" name="member_no" value="<?=$member->MemberNo?>">
					<input type="hidden" name="slug" value="extend">
					<div class="table-responsive">
						<table style="width: 100%;" id="tbl_carts" class="table table-hover table-striped table-bordered">
							<thead class="bg-corporate-primary2 text-white">
								<tr>
									<th>No. Barcode</th>
									<th>Judul</th>
									<th>Penerbitan</th>
									<th>Tanggal Peminjaman</th>
									<th>Jatuh Tempo</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $cart_name = 'extend_'.$member->MemberNo; ?>
								<?php foreach(get_carts($cart_name) as $row):?>
									<tr>
										<td width="100">
											<input type="hidden" name="ids[]" value="<?=$row->id?>">
											<?= _spec($row->options->barcode_no); ?> <br>
										</td>
										<td width="400"><?= _spec($row->options->title); ?></td>
										<td><?= _spec($row->options->publisher); ?></td>
										<td width="100"><?= _spec($row->options->loan_date); ?></td>
										<td width="100"><?= _spec($row->options->due_date); ?></td>
										<td width="35">
												<a href="<?= base_url('sirkulasi/cart_remove/'.$row->id) ?>" data-toggle="tooltip" data-placement="top" title="Hapus dari Keranjang" class="btn btn-danger show-data"><i class="fa fa-trash"> </i></a>
										</td>
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>

					<div class="d-block pt-3">
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Proses Perpanjangan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>