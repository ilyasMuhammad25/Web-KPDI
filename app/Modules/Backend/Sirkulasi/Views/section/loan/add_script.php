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