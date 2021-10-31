<div class="row">
	<div class="col-md-12">
		<div id="accordion4" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse4"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Deskripsi
						</h5>
					</button>
				</div>
				<div data-parent="#accordion4" id="collapse4" class="collapse" style="">
					<div class="card-body">
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Jumlah Halaman</label>
									<input type="text" class="form-control description" id="page" name="physical-description[a]" placeholder="Jumlah Halaman" value="<?= isset($page) ? $page : '' ?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Ket. Ilustarsi</label>
									<input type="text" class="form-control description" id="illustration" name="physical-description[b]" placeholder="Ket. Ilustrasi" value="<?= isset($illustration) ? $illustration : '' ?>">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Dimensi</label>
									<input type="text" class="form-control description" id="dimention" name="physical-description[c]" placeholder="Dimensi" value="<?= isset($dimention) ? $dimention : '' ?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Bahan Sertaan</label>
									<input type="text" class="form-control description" id="accompanying-material" name="physical-description[e]" placeholder="Bahan Sertaan" value="<?= isset($accompanyingmaterial) ? $accompanyingmaterial : '' ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>