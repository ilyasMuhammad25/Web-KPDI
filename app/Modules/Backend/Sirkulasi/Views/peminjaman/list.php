<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$slug = $request->getVar('slug') ?? 'peminjaman';
$slug_title = ucwords(strtolower($slug));
?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main'; ?>
<?= $this->extend($layout); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-refresh icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?= lang('Sirkulasi.module') ?> - <?=$slug_title?>
                    <div class="page-title-subheading">Daftar  <?=$slug_title?> </div>
                </div>
            </div>
            <div class="page-title-actions">
				<?=view('Sirkulasi\Views\section\nav_bread', array('slug' => $slug, 'slug_title' => $slug_title, 'label' => 'Daftar'))?>
            </div>
        </div>
    </div>

	<?=view('Sirkulasi\Views\section\nav_list', array('slug' => $slug))?>
	
    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('Sirkulasi.label.table') ?> <?=$slug_title?>
            <div class="btn-actions-pane-right actions-icon-btn">
                <?php if(is_allowed('sirkulasi/create')):?>
                    <a href="<?= base_url('sirkulasi/create?slug='.$slug) ?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?= lang('Sirkulasi.action.add') ?> <?=$slug_title?></a>
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
</div>
<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<script>
    var t = setDataTable('#tbl_sirkulasis', disableOrderCols = [0, 4], defaultOrderCols = [1, 'desc'], autoNumber = true);

	function accordion (tr) {
		var id = tr.data('id');
		var table = 'tbl_'+id;
		var tbody = 'tbody_'+id;

		return `
			<div class="table-responsive">
				<table style="width: 100%;" id="`+table+`" class="table table-striped table-bordered">
					<thead class="bg-corporate-secondary2 text-white">
						<tr>
							<th>No. Barcode</th>
							<th>Judul</th>
							<th>Penerbitan</th>
							<th>Tanggal Peminjaman</th>
							<th>Jatuh Tempo</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="`+tbody+`">
					</tbody>
				</table>
			</div>
		`;
	}

	$('#tbl_sirkulasis tbody').on('click', '.details-control', function () {
        var tr = $(this).closest('tr'); 
		var row = t.row(tr);

        if ( row.child.isShown() ) {
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            row.child(accordion(tr)).show();

			var id = tr.data('id');
			var url = tr.data('url');
			var table = 'tbl_'+id;
			var tbody = 'tbody_'+id;

			makeAjaxCall(url, "GET").then(function(respJson){
				$('#'+tbody).empty();
				$.each(respJson, function(i, item) {
					$('#'+tbody).append(`
						<tr class="rm-row">
							<td width="100"><b>`+item.NomorBarcode+`</b></td>
							<td>`+item.Title+`</td>
							<td width="100">`+item.Publisher+`</td>
							<td width="150">`+item.loan_date+`</td>
							<td width="100">`+item.due_date+`</td>
							<td width="90" class="text-left">
								
							</td>
						</tr>
					`);
				});
			}, function(reason){
				console.log("Error in processing your request", reason);
			});

            tr.addClass('shown');
        }
    });

    $("body").on("click", ".remove-data", function() {
        var url = $(this).attr('data-href');
        Swal.fire({
            title: '<?= lang('App.swal.are_you_sure') ?>',
            text: "<?= lang('App.swal.can_not_be_restored') ?>",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#dd6b55',
            confirmButtonText: '<?= lang('App.btn.yes') ?>',
            cancelButtonText: '<?= lang('App.btn.no') ?>'
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        });
        return false;
    });
</script>
<?= $this->endSection('script'); ?>