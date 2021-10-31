<div class="row">
	<div class="col-md-12">
		<div id="accordion8" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse8"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Lokasi
						</h5>
					</button>
				</div>
				<div data-parent="#accordion8" id="collapse8" class="collapse" style="">
					<div class="card-body">
						<div id="location-append">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Lokasi Koneksi Daring</label>
								<div class="input-group">
									<input type="text" class="form-control location" name="location[]" placeholder="Lokasi Koneksi Daring" value="<?= isset($location) ? $location[0] : '' ?>">
									<small id="location-feedback" class="text-danger"></small>
									<div class="input-group-append">
										<button id="add-location" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
									</div>
								</div>
								<?php if (isset($location)) : ?>
									<?php for ($i = 1; $i < count($location); $i++) : ?>
										<div id="location-<?= $i ?>" class="form-group">
											<div class="input-group">
												<input type="text" class="form-control location" name="location[]" placeholder="Lokasi Koneksi Daring" value="<?= $location[$i] ?>">
												<small id="location-feedback" class="text-danger"></small>
												<div class="input-group-append">
													<button class="btn btn-sm btn-light remove-location" type="button" data-target="#location-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
												</div>
											</div>
										</div>
									<?php endfor; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>