<!-- <?php
$request = \Config\Services::request();
$request->uri->setSilent();
$baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
$baseModel->setTable('t_eksemplar');
$eksemplars = $baseModel
    ->find_all('NomorBarcode','desc');
    // dd($katalog);
?> -->

<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="header-icon lnr-pencil icon-gradient bg-plum-plate"> </i> Ubah Profil User
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body table-responsive">
                <?=get_message('message');?>
                <table style="width: 100%;" id="tbl_eksemplars" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?= lang('Eksemplar.field.no') ?> </th>
                            <th><?= lang('Eksemplar.field.Barcode') ?></th>
                            <th><?= lang('Eksemplar.field.Tanggalpengadaan') ?></th>
                            <th><?= lang('Eksemplar.field.induk') ?></th>
                            <th><?= lang('Eksemplar.field.bibliografis') ?></th>
                            <th><?= lang('Eksemplar.label.action') ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; foreach ($eksemplars as $row) : ?>
                        <tr>
                            <td width="35"><?= $i++; ?></td>

                            <td width="200">
                                <?= _spec($row->NomorBarcode); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->TanggalPengadaan); ?> <br>
                            </td>
                            <td width="200">
                                <?= _spec($row->NoInduk); ?> <br>
                            </td>
                            <td width="200">

                            </td>


                            <td width="35">
                                <button type="button" data-id=<?= _spec($row->id); ?>
                                    class="btn btn-primary btn-pilih">Pilih</button>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>