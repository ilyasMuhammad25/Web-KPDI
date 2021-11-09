<script>
	$(document).on('click', '.subject_btn_remove', function() {
		var row = $(this).closest('.subject_wrapper');
		row.remove(); return false;
	});
	

	$(document).on('click', '.subject_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="subject_wrapper">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<select name="subject[tag][]" class="form-control">
								<option value="600">Nama Orang</option>
								<option value="650">Topikal</option>
							</select>
						</div>
						<div class="col-md-10 input-group">
							<input type="text" class="form-control subject" name="subject[desc][]" placeholder="Subjek">
							<small id="subject-feedback" class="text-danger"></small>
							<div class="input-group-append">
								<button class="btn btn-sm btn-light subject_btn_remove" type="button" data-tbody="subject_wrapper_tbody"><i class="fa fa-minus m-1"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		`);
	});	

	$(document).on('click', '.call_no_btn_remove', function() {
		var row = $(this).closest('.call_no_wrapper');
		row.remove(); return false;
	});
	

	$(document).on('click', '.call_no_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="form-group call_no_wrapper">
				<div class="input-group">
					<input type="text" class="form-control" name="call_no[`+index+`]" placeholder="No. Panggil" value="">
					<small id="call_no-feedback" class="text-danger"></small>
					<div class="input-group-append">
						<button class="btn btn-sm btn-light call_no_btn_remove" type="button"><i class="fa fa-minus m-1"></i></button>
					</div>
				</div>
			</div>
		`);
	});

	$(document).on('click', '.isbn_btn_remove', function() {
		var row = $(this).closest('.isbn_wrapper');
		row.remove(); return false;
	});
	

	$(document).on('click', '.isbn_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="form-group isbn_wrapper">
				<div class="input-group">
					<input type="text" class="form-control" name="isbn[`+index+`]" placeholder="ISBN" value="">
					<small id="isbn-feedback" class="text-danger"></small>
					<div class="input-group-append">
						<button class="btn btn-sm btn-light isbn_btn_remove" type="button"><i class="fa fa-minus m-1"></i></button>
					</div>
				</div>
			</div>
		`);
	});

	
</script>