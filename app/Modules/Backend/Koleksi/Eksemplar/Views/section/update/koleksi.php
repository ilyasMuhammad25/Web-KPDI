<div class="row">
	<div class="col-md-12">
		<div id="accordion" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse_madatory2"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary"></i>
							Cardex (Edisi Serial)
						</h5>
					</button>
				</div>
				<div data-parent="#accordion" id="collapse_madatory2" class="collapse" style="">
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Edisiserial')?></label>
									<div>
										<input type="text" class="form-control" id="frm_create_EDISISERIAL" name="EDISISERIAL" placeholder="<?=lang('Eksemplar.field.Edisiserial')?> " value='<?=set_value('EDISISERIAL', $eksemplar->EDISISERIAL)?>' />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Tanggalserial')?></label>
									<div>
										<input type="text" class="form-control" id="frm_create_name" name="name" value='<?=set_value('Tanggalserial', '')?>' placeholder="<?=lang('Eksemplar.field.Tanggalserial')?> " />
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Bahansertaan')?></label>
									<div>
										<input type="text" class="form-control" id="frm_create_name" name="Bahan_Sertaan" value='<?=set_value('Bahan_Sertaan', '')?>' placeholder="<?=lang('Eksemplar.field.Bahansertaan')?> " />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label
										for="sort"><?=lang('Eksemplar.field.Keteranganlain')?></label>
									<div>
										<input type="text" class="form-control" id="frm_create_sort" name="sort" placeholder="<?=lang('Eksemplar.field.Keteranganlain')?> " />
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