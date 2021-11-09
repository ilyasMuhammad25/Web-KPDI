<div class="modal fade" id="modal_create2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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
            <form id="frm_create" method="post" action="">
                <div class="modal-body">
                    <div id="frm_create_message"></div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label for="username">Pilih Katalog</label>
                                <div>
                                    <select class="form-control js-example-basic-multiple" name="ref_jenisanggota"
                                        id="catalog" tabindex="-1" aria-hidden="true" style="width:100%;">
                                      

                                        <?php foreach(get_dropdown('t_catalog',null,'Title','Title') as $row):?>
                                        <option value="<?=$row->code?>"><?=$row->text?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label for="TItle">Judul*</label>
                                <div>
                                    <input type="email" class="form-control" id="Title" name="Title" placeholder="Judul"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label for="TItle">Edisi Serial</label>
                                <div>
                                    <input type="email" class="form-control" id="EDISISERIAL" name="EDISISERIAL" placeholder="Edisi Serial"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="password">Tanggal Terbit</label>
                                <input type="text" class="form-control" id="password" name="password"
                                    placeholder="Tanggal Terbit" />
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="pass_confirm">Creator</label>
                                <div>
                                    <input type="password" class="form-control" id="Creator" name="Creator"
                                        placeholder="Creator" />
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="password">Halaman Awal</label>
                                <input type="number" class="form-control" id="Starpage" name="Starpage"
                                    placeholder="Halaman Awal" />
                                <small class="info help-block"><?= lang('User.info.create.password'); ?> </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="pass_confirm">Halaman</label>
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
                                <label for="password">Subjek</label>
                                <input type="text" class="form-control" id="Subject" name="Subject"
                                    placeholder="Subjek" />
                              
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="pass_confirm">Abstrak</label>
                                <div>
                                    <input type="password" class="form-control" id="Abstract" name="Abstract"
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
                    <button type="submit" class="btn btn-primary" name="submit"><?= lang('App.btn.save'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>


$('#catalog').select2({
    dropdownParent: $('#modal_create'),
    width: '100%',
    tags: true,
});

$('#frm_create').submit(function(event) {
    event.preventDefault();
    var data_post = $(this).serializeArray();

    $('.loading').show();

    $.ajax({
            url: '<?= base_url('api/user/create') ?>',
            type: 'POST',
            dataType: 'json',
            data: data_post,
        })
        .done(function(res) {
            console.log(res)
            if (res.status === 201) {
                Swal.fire({
                    title: 'Success',
                    text: '<?= lang('User.info.success.create') ?>',
                    type: 'success',
                    showConfirmButton: false,
                    timer: 3000
                });

                setTimeout(function() {
                    window.location.href = '<?= base_url('user') ?>';
                }, 2000);
            } else {
                $('#frm_create_message').html(res.messages.error);
            }
        })
        .fail(function(res) {
            console.log(res);
            $('#frm_create_message').html(res.responseJSON.messages.error);
        })
        .always(function() {
            $('.loading').hide();
            $('html, body').animate({
                scrollTop: $(document).height()
            }, 2000);
        });

    return false;
});

$('#modal_create').on('hidden.bs.modal', function() {
    $(this).find('form').trigger('reset');
    $('#frm_create_message').html('');
});
</script>