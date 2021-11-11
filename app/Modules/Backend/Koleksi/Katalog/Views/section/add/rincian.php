<div class="row">
	<div class="col-md-12">
		<div id="accordion7" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse7"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Rincian
						</h5>
					</button>
				</div>
				<div data-parent="#accordion7" id="collapse7" class="collapse" style="">
					<div class="card-body">

						<div class="row">
							<div class="col-md-4">
								<div class="select-wrapper form-group">
									<label for="languages" class="col-form-label">Bahasa</label>
									<select name="languages" class="form-control select2" style="width:100%">
										<?php foreach (get_dropdown('t_references_items','reference_id = 5','code') as $row) :  ?>
											<option value="<?= $row->code ?>"><?= $row->code?> - <?= $row->text?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="select-wrapper form-group">
									<label for="paper_form" class="col-form-label">Bentuk Karya Tulis</label>
									<select name="paper_form" class="form-control select2" style="width:100%">
										<?php foreach (get_dropdown('t_references_items','reference_id = 17','code') as $row) :  ?>
											<option value="<?= $row->code ?>"><?= $row->code?> - <?= $row->text?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="select-wrapper form-group">
									<label for="target_group" class="col-form-label">Kelompok Sasaran</label>
									<select name="target_group" class="form-control select2" style="width:100%">
										<?php foreach (get_dropdown('t_references_items','reference_id = 2','code') as $row) :  ?>
											<option value="<?= $row->code ?>"><?= $row->code?> - <?= $row->text?></option>
										<?php endforeach; ?>
									</select>
									<small id="target_group-feedback" class="text-danger"></small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>