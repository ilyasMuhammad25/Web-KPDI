<div class="row">
	<div class="col-md-12">
		<div id="accordion3" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse3"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Penerbitan
						</h5>
					</button>
				</div>
				<div data-parent="#accordion3" id="collapse3" class="collapse" style="">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Tempat</label>
									<input type="text" class="form-control publisher" id="place" name="publisher[a]" placeholder="Tempat Terbit" value="<?= isset($place) ? $place : '' ?>">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Penerbit</label>
									<input type="text" class="form-control publisher" id="name" name="publisher[b]" placeholder="Penerbit" value="<?= isset($name) ? $name : '' ?>">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Tahun</label>
									<input type="text" class="form-control publisher" id="year" name="publisher[c]" placeholder="Tahun Terbit" value="<?= isset($year) ? $year : '' ?>">
								</div>
							</div>
						</div>

						<div class="divider"></div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Frekuensi Saat Ini</label>
									<input type="text" class="form-control publisher" id="current-frequency" name="frequency[current]" placeholder="Frekuensi Saat Ini" value="<?= isset($currentfreq) ? $currentfreq : '' ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Frekuensi Publikasi Sebelumnya</label>
									<input type="text" class="form-control publisher" id="previous-frequency" name="frequency[previous]" placeholder="Frekuensi Publikasi Sebelumnya" value="<?= isset($previousfreq) ? $previousfreq : '' ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>