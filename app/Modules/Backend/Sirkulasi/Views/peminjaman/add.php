<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$slug = $request->getVar('slug') ?? 'peminjaman';
$member_no = $request->getVar('member_no') ?? user()->username;
$member = get_member($member_no);
?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main'; ?>
<?= $this->extend($layout); ?>
<?= $this->section('style'); ?>
<style>
.select2 .select2-container--default {
    padding: 6px;
    height: 37px;
    font-size: 1.1em;
    position: relative;
	width:100% !important;
}
</style>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-refresh icon-gradient bg-strong-bliss"></i>
                </div>
                <div>Entri Peminjaman
                    <div class="page-title-subheading"><?= lang('Sirkulasi.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
				<?=$this->include('Sirkulasi\Views\section\member_no')?>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12" style="display:<?=($member)?'none':'block'?>">
			<div class="alert alert-info alert-dismissible fade show" role="alert">
				<button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
				Pilih Nomor Anggota terlebih dahulu.
			</div>
		</div>

        <div class="col-md-4">
			<?=$this->include('Sirkulasi\Views\section\member_profile')?>
        </div>
        <div class="col-md-8">
			<div class="mb-3 card">
				<div class="card-header-tab card-header">
					<div class="card-header-title">
						<i class="header-icon lnr-pencil icon-gradient bg-love-kiss"> </i>
						Peminjaman
					</div>
					<ul class="nav">
						<li class="nav-item"><a data-toggle="tab" href="#tab_peminjaman1" class="nav-link active show">Keranjang peminjaman</a></li>
						<li class="nav-item"><a data-toggle="tab" href="#tab_peminjaman2" class="nav-link show">Koleksi yang masih dipinjam</a></li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content">
						<div class="tab-pane active show" id="tab_peminjaman1" role="tabpanel">
							<form method="post" action="<?=base_url('sirkulasi/create_peminjaman')?>">
								<input type="hidden" name="member_no" value="<?=$member_no?>">
								<input type="hidden" name="slug" value="<?=$slug?>">
								<div class="row">
									<div class="col-md-6">
										<div class="form-row">
											<div class="col-md-10 col-sm-9">
												<div class="form-group">
													<select class="form-control select2" name="no_barcode" id="no_barcode" tabindex="-1" aria-hidden="true" placeholder="Nomor Barcode" style="width:100%">
														<option value="">Nomor Barcode</option>
														<?php foreach (get_dropdown('t_eksemplar',null,'NomorBarcode','NomorBarcode') as $row) : ?>
															<option value="<?= $row->code ?>"><?= $row->code ?></option>
														<?php endforeach; ?>
													</select>
												</div>
											</div>
											<div class="col-md-2 col-sm-3" style="display:<?=($member)?'block':'none'?>">
												<div class="position-relative form-group">
													<button type="button" class="btn-shadow btn btn-success btn-lg cart-btn-add" data-tbody="cart-tbody" data-url="<?=base_url('api/sirkulasi/eksemplar/')?>" data-member_no="<?=$member_no?>"><i class="fa fa-plus"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="table-responsive mt-3">
									<div id="infoMessage"><?=$message ?? ''?></div> <?=get_message('message')?>
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
										<tbody id="cart-tbody">
										</tbody>
									</table>
								</div>

								<div style="display:<?=($member)?'block':'none'?>">
									<button type="submit" class="btn-wide btn-shadow btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
								</div>
							</form>
						</div>
						<div class="tab-pane show" id="tab_peminjaman2" role="tabpanel">

							<div class="table-responsive">
								<?=get_message('message');?>
								<table style="width: 100%;" id="tbl_koleksis" class="table table-hover table-striped table-bordered">
									<thead class="bg-corporate-primary2 text-white">
										<tr>
											<th>No.</th>
											<th>No. Barcode</th>
											<th>Tanggal Pengadaan</th>
											<th>No.Induk</th>
											<th>Data Bibliografis</th>
											<th>Aksi</th>
										</tr>
									</thead>

								</table>
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
	$('.select2').select2();

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
					<td>`+respJson.Title+`</td>
					<td>`+respJson.Publisher+`</td>
					<td>`+respJson.BookingDate+`</td>
					<td>`+respJson.BookingExpiredDate+`</td>
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