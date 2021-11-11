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