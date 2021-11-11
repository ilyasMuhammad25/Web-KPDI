<?php
// cart_destroy();

$request = \Config\Services::request();
$request->uri->setSilent();
$slug_title = ucwords(strtolower($slug));
$member_no = $request->getVar('member_no') ?? user()->username;
$member = get_member($member_no);
?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main'; ?>
<?= $this->extend($layout); ?>
<?= $this->section('style'); ?>
<style>
.input-group > .select2-container--bootstrap4 {
    width: auto;
    flex: 1 1 auto;
}

.input-group > .select2-container--bootstrap4 .select2-selection--single {
    height: 100%;
    line-height: inherit;
    padding: 0.5rem 1rem;
}

.no-border-radius > .select2-container--bootstrap4 .select2-selection--single {
	border-top-right-radius: 0 !important;
	border-bottom-right-radius: 0 !important;
	border-bottom-left-radius: 0 !important;
}

</style>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-refresh-2 icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?= lang('Sirkulasi.module') ?> - <?=$slug_title?>
                    <div class="page-title-subheading">Entri <?=$slug_title?></div>
                </div>
            </div>
            <div class="page-title-actions">
				<?=view('Sirkulasi\Views\section\nav_bread', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => 'Entri'))?>
            </div>
        </div>
    </div>

	<?=view('Sirkulasi\Views\section\nav_add', array('member_no'=> $member_no, 'slug' => $slug))?>

	<div class="row">
		<div class="col-md-12">
			<div style="display:<?=($member)?'none':'block'?>">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
					Pilih Nomor Anggota terlebih dahulu.
				</div>
			</div>
		</div>
	</div>

	<div class="mb-3 card">
		<div class="card-header-tab card-header">
			<div class="card-header-title">
				<i class="header-icon lnr-user icon-gradient bg-success"> </i>
				Anggota
			</div>
		</div>
		<div class="card-body">
			<?=view('Sirkulasi\Views\section\member_no', array('member_no'=> $member_no, 'slug'=> $slug, 'action' => base_url('sirkulasi/create')))?>
		</div>
	</div>

	<div style="display:<?=($member)?'block':'none'?>">
		<div class="row">
			<div class="col-lg-3 d-none d-lg-block">
				<?=view('Sirkulasi\Views\section\member_profile', array('member' => $member))?>
			</div>
			<div class="col-lg-9">
				<div class="mb-3 card">
					<div class="card-header-tab card-header">
						<div class="card-header-title">
							<i class="header-icon lnr-warning icon-gradient bg-success"> </i>
							<?=$slug_title?>
						</div>
						<ul class="nav">
							<li class="nav-item"><a data-toggle="tab" href="#tab1" class="nav-link active show">Histori Peminjaman</a></li>
							<li class="nav-item"><a data-toggle="tab" href="#tab2" class="nav-link show">Keranjang Pelanggaran</a></li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content">
							<div class="tab-pane active show" id="tab1" role="tabpanel">
								<form name="form_sirkulasis" id="form_sirkulasis" action="<?= base_url('sirkulasi/cart_insert/0?member_no='.$member_no.'&slug=pelanggaran') ?>">
									<input type="hidden" name="member_no" value="<?=$member_no?>">

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
															<a href="<?= base_url('sirkulasi/proses_pelanggaran/'.$row->id) ?>" data-toggle="tooltip" data-placement="top" title="Proses Pelanggaran" class="btn btn-primary show-data"><i class="fa fa-save"> </i></a>
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
								<form method="post" action="<?=base_url('sirkulasi/create_pelanggaran')?>">
									<input type="hidden" name="member_no" value="<?=$member_no?>">
									<input type="hidden" name="slug" value="pelanggaran">
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
												<?php $cart_name = 'pelanggaran_'.$member_no; ?>
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
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Proses Pelanggaran</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script>
	$('.select2').select2({theme: "bootstrap4",});
	setDataTable('#tbl_sirkulasis', disableOrderCols = [0, 6], defaultOrderCols = [1, 'desc'], autoNumber = false);
	setDataTable('#tbl_carts', disableOrderCols = [5], defaultOrderCols = [1, 'desc'], autoNumber = false);
	checkAll();

	$('#add_to_cart').click(function() {
		var form = $('#form_sirkulasis');
		var serialize_bulk = form.serialize();
		var url = form.attr('action')+ '&' +serialize_bulk;
		console.log(serialize_bulk);
		console.log(url);

		window.location.href = url;

		// Swal.fire({
        //     title: 'Anda yakin?',
        //     text: "Semua Koleksi yang terpilih akan ditambahkan ke Keranjang Pelanggaran!",
        //     type: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#dd6b55',
        //     confirmButtonText: '<?= lang('App.btn.yes') ?>',
        //     cancelButtonText: '<?= lang('App.btn.no') ?>'
        // }).then((result) => {
        //     if (result.value) {
        //         window.location.href = url;
        //     }
        // });
        return false;
	});
</script>
<?= $this->endSection('script'); ?>