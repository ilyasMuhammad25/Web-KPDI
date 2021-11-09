<script>
	$(document).on('click', '.notes_btn_remove', function() {
		var row = $(this).closest('.notes_wrapper');
		row.remove(); return false;
	});
	

	$(document).on('click', '.notes_btn_add', function() {
		var index = Date.now();
		var tbody = $(this).data('tbody');

		$('#'+tbody).append(`
			<div class="notes_wrapper mt-3">
				<div class="row">
					<div class="col-md-12">
						<div class="input-group">
							<input type="text" class="form-control" name="notes[input][]" placeholder="Catatan" value="">
							<div class="input-group-append">
								<button class="btn btn-sm btn-light notes_btn_remove" type="button" data-tbody="notes_tbody"><i class="fa fa-minus m-1"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="input-radio p-2 bg-light">
					<div class="row">
						<div class="col-sm-4 py-1">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="notes[radio][0]" value="0">
									Abstrak/Anotasi
								</label>
							</div>
						</div>
						<div class="col-sm-4 py-1">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input " type="radio" name="notes[radio][0]" value="1">
									Catatan Disertasi
								</label>
							</div>
						</div>
						<div class="col-sm-4 py-1">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input " type="radio" name="notes[radio][0]" value="2">
									Catatan Bibliografi
								</label>
							</div>
						</div>
						<div class="col-sm-4 py-1">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input " type="radio" name="notes[radio][0]" value="3">
									Rincian Isi
								</label>
							</div>
						</div>
						<div class="col-sm-4 py-1">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input " type="radio" name="notes[radio][0]" value="4">
									Catatan Umum
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		`);
	});	

	
</script>