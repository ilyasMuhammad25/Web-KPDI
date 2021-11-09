<div class="row">
	<div class="col-md-12">
		<div id="accordion2" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse2"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Kreator/Tajuk Pengarang
						</h5>
					</button>
				</div>
				<div data-parent="#accordion2" id="collapse2" class="collapse" style="">
					<div class="card-body">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Tajuk Pengarang Utama</label>
							<div class="row">
								<div class="col-md-4">
									<select name="author[option]" class="form-control">
										<option value="1">Nama Orang</option>
										<option value="2">Nama Badan</option>
										<option value="3">Nama Pertemuan</option>
									</select>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control author-input" id="author-input" name="author[100]" placeholder="Tajuk Pengarang Utama">
									<small id="main-creator-feedback" class="text-danger"></small>
								</div>
							</div>

							<div class="input-radio p-2 bg-light">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="radio" name="author[radio]" value="0">
												Nama Depan
											</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="radio" name="author[radio]" value="1">
												Nama Belakang
											</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="radio" name="author[radio]" value="2">
												Nama Keluarga
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="author_additional" class="col-form-label">Tajuk Pengarang Tambahan</label>
							<div id="author_additional_tbody">
								<div class="author_additional_wrapper">
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
													<button class="btn btn-sm btn-light author_additional_btn_add" type="button" data-tbody="author_additional_tbody"><i class="fa fa-plus m-1"></i></button>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>