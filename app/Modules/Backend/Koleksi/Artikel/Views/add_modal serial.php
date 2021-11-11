<div class="modal fade" id="modal_create2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i>
                    Tambah Artikel Berkala
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm_create2" method="post" action="">
                <div class="modal-body">
                    <div id="frm_create_message"></div>

                    <div class="form-row">
                        
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label for="Catalog_id">Pilih Katalog</label>
                                <div>
                                <input list="items" class="form-control" id="Catalog_id" name="Catalog_id"
                                        placeholder="Pilih Katalog" />
                                 <datalist id="items">      

                                        <?php foreach(get_dropdown('t_catalog',null,'Title','Title') as $row):?>
                                        <option value="<?=$row->code?>"><?=$row->text?></option>
                                        <?php endforeach;?>
                                        </datalist>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label for="TItle">Judul*</label>
                                <div>
                                    <input type="text" class="form-control" id="Title" name="Title"
                                        placeholder="Judul" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label for="EDISISERIAL">Edisi Serial</label>
                                <div>
                                    <input type="text" class="form-control" id="EDISISERIAL" name="EDISISERIAL"
                                        placeholder="Edisi Serial" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="TANGGAL_TERBIT_EDISI_SERIAL">Tanggal Terbit</label>
                                <input type="date" class="form-control datepicker" id="TANGGAL_TERBIT_EDISI_SERIAL"
                                    name="TANGGAL_TERBIT_EDISI_SERIAL" placeholder="Tanggal Terbit" />

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="Creator">Creator</label>
                                <div>
                                    <input type="text" class="form-control" id="Creator" name="Creator"
                                        placeholder="Creator" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="Starpage">Halaman Awal</label>
                                <input type="number" class="form-control" id="Starpage" name="Starpage"
                                    placeholder="Halaman Awal" />
                                <small class="info help-block"><?= lang('User.info.create.password'); ?> </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="Pages">Halaman</label>
                                <div>
                                    <input type="number" class="form-control" id="Pages" name="Pages"
                                        placeholder="Halaman" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="Subject">Subjek</label>
                                <input type="text" class="form-control" id="Subject" name="Subject"
                                    placeholder="Subjek" />

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="Abstract">Abstrak</label>
                                <div>
                                    <input type="text" class="form-control" id="Abstract" name="Abstract"
                                        placeholder="Abstrak" />
                                </div>
                            </div>
                        </div>
                        <div class="form-check form-group mt-1">
                            <div>
                                <input type="hidden" class="iCheck-square" name="ISOPAC" id="ISOPAC" value="0">
                                <input type="checkbox" class="iCheck-square" name="ISOPAC" id="ISOPAC" value="1">
                                <label class="  control-label">TAmpil Artikel</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal"><?= lang('App.btn.close'); ?></button>
                    <button type="submit" class="btn btn-primary" name="submit"><?= lang('App.btn.save') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function() {
    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
});
</script>
<script>
$('#catalog').select2({
    dropdownParent: $('#modal_create2'),
    width: '100%',
    tags: true,
});

$('#frm_create2').submit(function(event) {
    event.preventDefault()
    var data_post = $(this).serializeArray()

    $('.loading').show()

    $.ajax({
            url: '<?= base_url('api/artikel/create') ?>',
            type: 'POST',
            dataType: 'json',
            data: data_post,
        })
        .done(function(res) {
            console.log(res)

            if (res.status === 201) {
                if (res.error == null) {
                    Swal.fire({
                        title: 'Success',
                        text: 'Artikel berhasil ditambah',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }

                setTimeout(function() {
                    window.location.href = '<?= base_url('artikel') ?>';
                }, 2000)
            } else {
                $('#frm_create_message').html(res.messages.error)
            }
        })
        .fail(function(res) {
            console.log(res)
            $('#frm_create_message').html(res.responseJSON.messages.error)
        })
        .always(function() {
            $('.loading').hide()
        });

    return false;
});
// ---------------------------------------
</script>