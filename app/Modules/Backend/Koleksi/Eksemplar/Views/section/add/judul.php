<div class="row">
	<div class="col-md-12">
		<div id="accordion1" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary"></i>
							Judul
						</h5>
					</button>
				</div>
				<div data-parent="#accordion1" id="collapse1" class="collapse show" style="">
					<input type="hidden" name="catalog_id" id="catalog_id" value="">
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-12">
								<div class="position-relative form-group">
									<label for="title"><?=lang('Eksemplar.field.JudulUtama')?>*</label>
									<div>
										<input type="text" class="form-control" id="title" placeholder="<?=lang('Eksemplar.field.JudulUtama')?> " readonly />
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="title2"><?=lang('Eksemplar.field.AnakJudul')?></label>
									<div>
										<input type="text" class="form-control" id="title2" placeholder="<?=lang('Eksemplar.field.AnakJudul')?> " readonly />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="title3">Penanggung Jawab </label>
									<div>
										<input type="text" class="form-control" id="title3" placeholder="Penanggung Jawab " readonly />
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