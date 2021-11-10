<div class="mb-3 card">
	<div class="card-header-tab card-header">
		<div class="card-header-title">
			<i class="header-icon lnr-enter icon-gradient bg-success"> </i>
			<?=$label?>
		</div>
		<ul class="nav">
			<li class="nav-item"><a data-toggle="tab" href="#tab1" class="nav-link active show">Keranjang Peminjaman</a></li>
			<li class="nav-item"><a data-toggle="tab" href="#tab2" class="nav-link show">Histori Peminjaman</a></li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content">
			<div class="tab-pane active show" id="tab1" role="tabpanel">
				<form method="post" action="<?=base_url('sirkulasi/create_loan')?>">
					<input type="hidden" name="member_no" value="<?=$member->MemberNo?>">
					<input type="hidden" name="slug" value="loan">
					<div class="row">
						<div class="col-md-6">
							<div class="select-wrapper input-group">
								<select class="form-control select2" name="no_barcode" id="no_barcode" placeholder="Nomor Barcode">
									<option value="">Nomor Barcode</option>
									<?php foreach (get_available_eksemplars() as $row) : ?>
										<option value="<?= $row->barcode_no ?>"><?= $row->barcode_no ?></option>
									<?php endforeach; ?>
								</select>
								<div class="input-group-append">
									<button type="button" class="btn btn-shadow btn bg-corporate-primary2 text-white cart-btn-add" data-tbody="cart-tbody" data-url="<?=base_url('api/sirkulasi/eksemplar/')?>" data-member_no="<?=$member->MemberNo?>"><i class="fa fa-plus"></i> Tambah</button>
								</div>
							</div> 
						</div>
					</div>

					<div class="table-responsive mt-3">
						<table style="width: 100%;" id="tbl_carts" class="table table-hover table-striped table-bordered">
							<thead class="bg-corporate-primary2 text-white">
								<tr>
									<th>No. Barcode</th>
									<th>Judul</th>
									<th>Penerbitan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="cart-tbody">
							</tbody>
						</table>
					</div>

					<div class="d-block">
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Proses Peminjaman</button>
					</div>
				</form>
			</div>
			<div class="tab-pane show" id="tab2" role="tabpanel">
				<div class="table-responsive">
					<table style="width: 100%;" id="tbl_sirkulasis" class="table table-hover table-striped table-bordered">
						<thead class="bg-corporate-primary2 text-white">
							<tr>
								<th class="text-center">
									No.
								</th>
								<th>No. Barcode</th>
								<th>Judul</th>
								<th>Penerbitan</th>
								<th>Tanggal Peminjaman</th>
								<th>Jatuh Tempo</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($sirkulasis as $row) : ?>
								<tr>
									<td class="text-center" width="5">
										
									</td>
									<td width="100">
										<?= _spec($row->barcode_no); ?> <br>
									</td>
									<td width="400"><?= _spec($row->title); ?></td>
									<td><?= _spec($row->publisher); ?></td>
									<td width="100"><?= _spec($row->loan_date); ?></td>
									<td width="100"><?= _spec($row->due_date); ?></td>
									<td width="35">
											
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