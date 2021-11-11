<script>
	$(document).on('click', '.author_additional_btn_remove', function() {
		var row = $(this).closest('.author_additional_wrapper');
		row.remove(); return false;
	});
	

	$(document).on('click', '.author_additional_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="author_additional_wrapper mt-3">
				<div class="row">
					<div class="col-md-4">
						<select name="author_additional[option][]" class="form-control">
							<option value="1">Nama Orang</option>
							<option value="2">Nama Badan</option>
							<option value="3">Nama Pertemuan</option>
						</select>
					</div>
					<div class="col-md-8">
						<div class="input-group">
							<input type="text" class="form-control" name="author_additional[input][]" placeholder="Tajuk Pengarang Tambahan" value="">
							<div class="input-group-append">
								<button class="btn btn-sm btn-light author_additional_btn_remove" type="button"><i class="fa fa-minus m-1"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="input-radio p-2 bg-light">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="author_additional[radio][0]" value="0">
									Nama Depan
								</label>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="author_additional[radio][0]" value="1">
									Nama Belakang
								</label>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="author_additional[radio][0]" value="2">
									Nama Keluarga
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		`);
	});	

	
</script>