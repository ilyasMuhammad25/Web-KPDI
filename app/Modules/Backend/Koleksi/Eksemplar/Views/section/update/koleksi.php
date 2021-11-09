<div class="row">
	<div class="col-md-12">
		<div id="accordion2" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse2"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary"></i>
							Cardex (Edisi Serial)
						</h5>
					</button>
				</div>
				<div data-parent="#accordion2" id="collapse2" class="collapse" style="">
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="serial_edition"><?=lang('Eksemplar.field.Edisiserial')?></label>
									<div>
										<input type="text" class="form-control" name="serial_edition" placeholder="<?=lang('Eksemplar.field.Edisiserial')?> " value="<?=set_value('serial_edition', $eksemplar->serial_edition)?>" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="serial_edition_date"><?=lang('Eksemplar.field.Tanggalserial')?></label>
									<div>
										<input type="date" class="form-control" name="serial_edition_date" value="<?=set_value('serial_edition_date', $eksemplar->serial_edition_date)?>" placeholder="<?=lang('Eksemplar.field.Tanggalserial')?> " />
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="bahan_sertaan"><?=lang('Eksemplar.field.Bahansertaan')?></label>
									<div>
										<input type="text" class="form-control" name="bahan_sertaan" value="<?=set_value('bahan_sertaan', $eksemplar->bahan_sertaan)?>" placeholder="<?=lang('Eksemplar.field.Bahansertaan')?> " />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="other_info"><?=lang('Eksemplar.field.Keteranganlain')?></label>
									<div>
										<input type="text" class="form-control" name="other_info" value="<?=set_value('other_info', $eksemplar->other_info)?>" placeholder="<?=lang('Eksemplar.field.Keteranganlain')?> " />
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