<script>
	$(document).on('click', '.title_previous_btn_remove', function() {
		var row = $(this).closest('.title_previous_wrapper');
		row.remove(); return false;
	});

	$(document).on('click', '.title_previous_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="form-group title_previous_wrapper">
				<div class="input-group">
					<input type="text" class="form-control" name="title_previous[`+index+`]" placeholder="Judul Sebelumnya" value="">
					<small id="title_previous-feedback" class="text-danger"></small>
					<div class="input-group-append">
						<button class="btn btn-sm btn-light title_previous_btn_remove" type="button"><i class="fa fa-minus m-1"></i></button>
					</div>
				</div>
			</div>
		`);
	});

	$(document).on('click', '.title_varian_btn_remove', function() {
		var row = $(this).closest('.title_varian_wrapper');
		row.remove(); return false;
	});
	
	$(document).on('click', '.title_varian_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="form-group title_varian_wrapper">
				<div class="input-group">
					<input type="text" class="form-control" name="title_varian[]" placeholder="Variasi Bentuk Judul" value="">
					<small id="title_varian-feedback" class="text-danger"></small>
					<div class="input-group-append">
						<button class="btn btn-sm btn-light title_varian_btn_remove" type="button"><i class="fa fa-minus m-1"></i></button>
					</div>
				</div>
			</div>
		`);
	});

	$(document).on('click', '.title_original_btn_remove', function() {
		var row = $(this).closest('.title_original_wrapper');
		row.remove(); return false;
	});
	
	$(document).on('click', '.title_original_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="form-group title_original_wrapper">
				<div class="input-group">
					<input type="text" class="form-control" name="title_original[]" placeholder="Judul Asli" value="">
					<small id="title_original-feedback" class="text-danger"></small>
					<div class="input-group-append">
						<button class="btn btn-sm btn-light title_original_btn_remove" type="button"><i class="fa fa-minus m-1"></i></button>
					</div>
				</div>
			</div>
		`);
	});
</script>