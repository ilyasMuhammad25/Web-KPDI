<script>
	$(document).on('click', '.location_btn_remove', function() {
		var row = $(this).closest('.location_wrapper');
		row.remove(); return false;
	});
	

	$(document).on('click', '.location_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="form-group location_wrapper">
				<div class="input-group">
					<input type="text" class="form-control" name="location[`+index+`]" placeholder="Lokasi Koneksi Daring" value="">
					<small id="location-feedback" class="text-danger"></small>
					<div class="input-group-append">
						<button class="btn btn-sm btn-light location_btn_remove" type="button"><i class="fa fa-minus m-1"></i></button>
					</div>
				</div>
			</div>
		`);
	});

	
</script>