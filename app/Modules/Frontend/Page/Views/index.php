<?= $this->extend('layout/frontend/home'); ?>

<?= $this->section('style'); ?>

<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>
    <?= $this->include($page); ?>
<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script>
    $("#frm_contact_submit").on('click', function () {
        //disable submit button on click
        $("#frm_contact_submit").attr("disabled", "disabled");
        $("#frm_contact_submit b").text('Loading');
        $("#frm_contact_submit i").removeClass('d-none');

        event.preventDefault()
        var data_post = $('#frm_contact').serializeArray();
        var output;

        $.ajax({
                url: '<?= base_url('api/contact/create') ?>',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                console.log(res)
                if (res.status === 201) {
                    output = '<div class="alert-success" style="padding:10px 20px; margin-bottom:30px;">Pesan Anda berhasil terkirim.</div>';

                    $('#frm_contact input').val('');
                    $('#frm_contact textarea').val('');
                } else {
                    output = '<div class="alert-danger" style="padding:10px 20px; margin-bottom:30px;">Pesan Anda gagal terkirim.</div>';
                }

                $("#frm_contact_message").hide().html(output).slideDown();

                $("#frm_contact_submit").removeAttr("disabled");
                $("#frm_contact_submit b").text('Submit');
                $("#frm_contact_submit i").addClass('d-none');
            })
            .fail(function(res) {
                console.log(res)
                output = '<div class="alert-danger" style="padding:10px 20px; margin-bottom:30px;">' +res.responseJSON.messages.error+'</div>';
                $("#frm_contact_message").hide().html(output).slideDown();

                $("#frm_contact_submit").removeAttr("disabled");
                $("#frm_contact_submit b").text('Submit');
                $("#frm_contact_submit i").addClass('d-none');
            })
            .always(function() {
                // $('.loading').hide()
                // $('html, body').animate({
                //     scrollTop: $(document).height()
                // }, 2000);
                
            });

        return false;
    });
</script>
<?= $this->endSection('script'); ?>
