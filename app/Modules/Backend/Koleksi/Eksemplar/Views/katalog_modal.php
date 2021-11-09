<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$katalogModel = new \Katalog\Models\KatalogModel();
$katalogs = $katalogModel->orderBy('title','asc')->get()->getResult();
?>

<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="header-icon lnr-book icon-gradient bg-success"> </i> Pilih Katalog
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
            <?= get_message('message'); ?>
            <table style="width: 100%;" id="tbl_katalogs" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="35">No. </th>
                        <th>BIBID</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbitan</th>
                        <th width="45">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($katalogs as $row) : ?>
                        <tr>
                            <td width="35"></td>
							<td width="100">
								<?= _spec($row->bibid); ?> <br>
							</td>
							<td><?= _spec($row->title); ?></td>
							<td><?= _spec($row->author); ?></td>
							<td><?= _spec($row->publication); ?> </td>
                            <td width="45">
                            	<button type="button" data-catalog_id= <?= _spec($row->id); ?> data-title="<?= _spec($row->title); ?>" class="btn btn-success select-data"><i class="fa fa-check-circle"></i> Pilih</button></td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<script>
	setDataTable('#tbl_katalogs', disableOrderCols = [0, 5], defaultOrderCols = [1, 'asc'], autoNumber = true);

    $('#modal_create').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#frm_create_message').html('');
    });
</script>