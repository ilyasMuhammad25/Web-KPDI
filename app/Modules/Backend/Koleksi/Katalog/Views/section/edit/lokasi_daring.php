<div class="row">
	<div class="col-md-12">
		<div id="accordion8" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0"> <i class="header-icon lnr-layers icon-gradient bg-primary"> </i> Lokasi
						</h5>
					</button>
				</div>
				<div data-parent="#accordion8" id="collapse8" class="collapse" style="">
					<div class="card-body">
						<div id="location_tbody">
							<div class="form-group location_wrapper">
								<label for="location" class="col-form-label">Lokasi Koneksi Daring</label>
								<div class="input-group">
									<input type="text" class="form-control" name="location[]" placeholder="Lokasi Koneksi Daring" value="<?=get_catalog_value($catalog->id,'856','$a')?>">
									<small id="location-feedback" class="text-danger"></small>
									<div class="input-group-append">
										<button class="btn btn-sm btn-light location_btn_add" type="button" data-tbody="location_tbody"><i class="fa fa-plus m-1"></i></button>
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