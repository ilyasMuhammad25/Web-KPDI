<div class="row">
	<div class="col-md-12">
		<div id="accordion5" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0"> <i class="header-icon lnr-layers icon-gradient bg-primary"> </i> Subjek</h5>
					</button>
				</div>
				<div data-parent="#accordion5" id="collapse5" class="collapse" style="">
					<div class="card-body">
						<div id="subject_tbody">
							<div class="subject_wrapper">
								<div class="form-group">
									<label for="subject" class="col-form-label">Subjek</label>
									<div class="row">
										<div class="col-md-2">
											<select name="subject[tag][]" class="form-control">
												<option value="600">Nama Orang</option>
												<option value="650">Topikal</option>
											</select>
										</div>
										<div class="col-md-10 input-group">
											<input type="text" class="form-control subject" name="subject[desc][]" placeholder="Subjek" value="<?=get_catalog_value($catalog->id,'600','$a')?>">
											<small id="subject-feedback" class="text-danger"></small>
											<div class="input-group-append">
												<button class="btn btn-sm btn-light subject_btn_add" type="button" data-tbody="subject_tbody"><i class="fa fa-plus m-1"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">No. Kelas DDC</label>
							<input type="text" class="form-control" name="class_ddc" placeholder="No. Kelas DDC" value="<?=get_catalog_value($catalog->id,'082','$a')?>">
							<small id="class-ddc-feedback" class="text-danger"></small>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div id="call_no_tbody">
										<div class="form-group call_no_wrapper">
											<label for="call_no" class="col-form-label">No. Panggil</label>
											<div class="input-group">
												<input type="text" class="form-control" name="call_no[]" placeholder="No. Panggil" value="<?=get_catalog_value($catalog->id,'084','$a')?>">
												<small id="call_no-feedback" class="text-danger"></small>
												<div class="input-group-append">
													<button class="btn btn-sm btn-light call_no_btn_add" type="button" data-tbody="call_no_tbody"><i class="fa fa-plus m-1"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div id="isbn_tbody">
										<div class="form-group isbn_wrapper">
											<label for="isbn" class="col-form-label">ISBN</label>
											<div class="input-group">
												<input type="text" class="form-control" name="isbn[]" placeholder="ISBN" value="<?=get_catalog_value($catalog->id,'022','$a')?>">
												<small id="isbn-feedback" class="text-danger"></small>
												<div class="input-group-append">
													<button class="btn btn-sm btn-light isbn_btn_add" type="button" data-tbody="isbn_tbody"><i class="fa fa-plus m-1"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>