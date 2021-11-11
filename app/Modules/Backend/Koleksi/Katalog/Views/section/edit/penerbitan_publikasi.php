<div class="row">
	<div class="col-md-12">
		<div id="accordion3" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary"></i> Penerbitan
						</h5>
					</button>
				</div>
				<div data-parent="#accordion3" id="collapse3" class="collapse" style="">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="publish_location" class="col-form-label">Tempat</label>
									<input type="text" class="form-control" name="publisher[a]" placeholder="Tempat Terbit" value="<?=get_catalog_value($catalog->id,'260','$a','$')?>">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="publisher" class="col-form-label">Penerbit</label>
									<input type="text" class="form-control" name="publisher[b]" placeholder="Penerbit" value="<?=get_catalog_value($catalog->id,'260','$b','$')?>">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="publish_year" class="col-form-label">Tahun</label>
									<input type="text" class="form-control" name="publisher[c]" placeholder="Tahun Terbit" value="<?=get_catalog_value($catalog->id,'260','$c')?>">
								</div>
							</div>
						</div>

						<div class="divider"></div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="frequency_current" class="col-form-label">Frekuensi Saat Ini</label>
									<input type="text" class="form-control" name="frequency[current]" placeholder="Frekuensi Saat Ini" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="frequency_previous" class="col-form-label">Frekuensi Publikasi Sebelumnya</label>
									<input type="text" class="form-control" name="frequency[previous]" placeholder="Frekuensi Publikasi Sebelumnya" value="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>