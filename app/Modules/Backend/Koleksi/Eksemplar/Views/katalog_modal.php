<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('t_katalog');
$katalogs = $baseModel
    ->find_all('name', 'asc');
    // dd($katalog);
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
                <!-- <tbody>
					<tr>
						<td>1</td>
						<td colspan="6">Judul 1</td>
						<td><button type="button" data-id="1" data-judul="Judul 1" class="btn btn-primary btn-pilih">Pilih</button></td>
					</tr>
                </tbody> -->

                <tbody>
                    <?php foreach ($katalogs as $row) : ?>
                        <tr>
                            <td width="35"></td>
							<td width="100">
								<?= _spec($row->BIBID); ?> <br>
							</td>
							<td><?= _spec($row->Title); ?></td>
							<td><?= _spec($row->Author); ?></td>
							<td><?= _spec($row->PublishLocation); ?> : <?= _spec($row->Publisher); ?>, <?= _spec($row->PublishYear); ?></td>
                            <td width="45">
                            	<button type="button" data-id= <?= _spec($row->id); ?> data-judul= "<?= _spec($row->Title); ?>" data-penanggungjawab="<?= _spec($row->description); ?>" class="btn btn-primary btn-pilih">Pilih</button></td>
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