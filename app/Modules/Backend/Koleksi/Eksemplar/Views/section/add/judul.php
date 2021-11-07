<div class="row">
	<div class="col-md-12">
		<div id="accordion" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse_madatory4" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary"></i>
							Judul
						</h5>
					</button>
				</div>
				<div data-parent="#accordion" id="collapse_madatory4" class="collapse show" style="">
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-12">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.JudulUtama')?>*</label>
									<div>
										<input type="hidden" name="katalog_id" id="katalog_id" value="">
										<input type="text" class="form-control" id="frm_create_name" name="name" placeholder="<?=lang('Eksemplar.field.JudulUtama')?> " readonly />
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.AnakJudul')?></label>
									<div>
										<input type="text" class="form-control" id="frm_create_name" name="name" placeholder="<?=lang('Eksemplar.field.AnakJudul')?> " readonly />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="sort">Penanggung Jawab </label>
									<div>
										<input type="text" class="form-control" id="penanggungjawab" name="sort" placeholder="Penanggung Jawab " readonly />
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