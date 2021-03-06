<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$slug = $request->getVar('slug') ?? 'peminjaman';
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
					<button type="button" class="close" aria-label="Close"><span aria-hidden="true">??</span></button>
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
							<i class="header-icon lnr-enter icon-gradient bg-success"> </i>
							<?=$slug_title?>
						</div>
						<ul class="nav">
							<li class="nav-item"><a data-toggle="tab" href="#tab1" class="nav-link active show">Keranjang Peminjaman</a></li>
							<li class="nav-item"><a data-toggle="tab" href="#tab2" class="nav-link show">Histori Peminjaman</a></li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content">
							<div class="tab-pane active show" id="tab1" role="tabpanel">
								<form method="post" action="<?=base_url('sirkulasi/create_peminjaman')?>">
									<input type="hidden" name="member_no" value="<?=$member_no?>">
									<input type="hidden" name="slug" value="peminjaman">
									<div class="row">
										<div class="col-md-6">
											<div class="input-group">
												<select class="form-control select2" name="no_barcode" id="no_barcode" placeholder="Nomor Barcode">
													<option value="">Nomor Barcode</option>
													<?php foreach (get_available_eksemplars() as $row) : ?>
														<option value="<?= $row->barcode_no ?>"><?= $row->barcode_no ?></option>
													<?php endforeach; ?>
												</select>
												<div class="input-group-append">
													<button type="button" class="btn btn-shadow btn bg-corporate-primary2 text-white cart-btn-add" data-tbody="cart-tbody" data-url="<?=base_url('api/sirkulasi/eksemplar/')?>" data-member_no="<?=$member_no?>"><i class="fa fa-plus"></i> Tambah</button>
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
			</div>
		</div>
	</div>
</div>

<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script>
	$('.select2').select2({theme: "bootstrap4",});
	setDataTable('#tbl_sirkulasis', disableOrderCols = [0, 6], defaultOrderCols = [1, 'desc'], autoNumber = true);

	$(document).on('click', '.cart-btn-remove', function() {
		var url = $(this).data('href');
		var row = $(this).closest('tr');

		row.remove(); return false;
	});
	
	$(".cart-btn-add").click(function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		var no_barcode = $('#no_barcode').val();
		var member_no = $(this).data('member_no');
		var url = $(this).data('url') + '/' + no_barcode;

		makeAjaxCall(url, "GET").then(function(respJson){
			$('#'+tbody).append(`
				<tr class="rm-row">
					<td>`+no_barcode+`</td>
					<td>`+respJson.title+`</td>
					<td>`+respJson.publication+`</td>
					<td class="text-left">
						<input type="hidden" name="barcodes[]" value="`+no_barcode+`">
						<button type="button" class="btn btn-danger cart-btn-remove" data-href=""><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			`);
		}, function(reason){
			console.log("Error in processing your request", reason);
		});
	});
</script>
<?= $this->endSection('script'); ?>