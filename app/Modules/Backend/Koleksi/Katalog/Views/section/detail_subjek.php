<div class="row">
	<div class="col-md-12">
		<div id="accordion5" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse5"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Subjek
						</h5>
					</button>
				</div>
				<div data-parent="#accordion5" id="collapse5" class="collapse" style="">
					<div class="card-body">
						<div id="subject-append">
							<div id="subject-input-0" class="form-group  subject-input">
								<label for="recipient-name" class="col-form-label">Subjek</label>
								<div class="row">
									<div class="col-md-2">
										<select name="subject[tag][]" class="form-control dropdown-subject">
											<option value="600" <?= isset($subject) ? ($subject[0]['select'] == '600' ? 'selected' : '') : '' ?>>Nama Orang</option>
											<option value="650" <?= isset($subject) ? ($subject[0]['select'] == '650' ? 'selected' : '') : '' ?>>Topikal</option>
										</select>
									</div>
									<div class="col-md-10 input-group">
										<input type="text" class="form-control subject" name="subject[desc][]" placeholder="Subjek" <?= isset($subject) ? $subject[0]['input'] : '' ?>>
										<small id="subject-feedback" class="text-danger"></small>
										<div class="input-group-append">
											<button id="add-subject" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
										</div>
									</div>
								</div>
							</div>
							<?php if (isset($subject)) : ?>
								<?php for ($i = 1; $i < count($subject); $i++) : ?>
									<div id="subject-input-<?= $i ?>" class="form-group  subject-input">
										<label for="recipient-name" class="col-form-label">Subjek</label>
										<div class="row">
											<div class="col-md-2">
												<select name="subject[tag][]" class="form-control dropdown-subject">
													<option value="600" <?= $subject[$i]['select'] == '600' ? 'selected' : '' ?>>Nama Orang</option>
													<option value="650" <?= $subject[$i]['select'] == '650' ? 'selected' : '' ?>>Topikal</option>
												</select>
											</div>
											<div class="col-md-10 input-group">
												<input type="text" class="form-control subject" name="subject[desc][]" placeholder="Subjek" <?= $subject[$i]['input'] ?>>
												<div class="input-group-append">
													<button class="btn btn-sm btn-light remove-subject" type="button" data-target="#subject-input-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
												</div>
											</div>
										</div>
									</div>
								<?php endfor; ?>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">No. Klas DDC</label>
							<input type="text" class="form-control" id="class-ddc" name="class-ddc" placeholder="DeweyNo" value="<?= isset($ddc) ? $ddc : '' ?>">
							<small id="class-ddc-feedback" class="text-danger"></small>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div id="call-number-append" class="form-group" data-total="1">
									<div id="call-number-0" class="form-group">
										<label for="recipient-name" class="col-form-label">No. Panggil</label>
										<div class="input-group">
											<input type="text" class="form-control callnumber" name="callnumber[]" placeholder="No. Panggil" value="<?= isset($callnumber) ? $callnumber[0] : '' ?>">
											<small id="callno-feedback" class="text-danger"></small>
											<div class="input-group-append">
												<button id="callnumber" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
											</div>
										</div>
									</div>
									<?php if (isset($callnumber)) : ?>
										<?php for ($i = 1; $i < count($callnumber); $i++) : ?>
											<div id="call-number-<?= $i ?>" class="form-group">
												<label for="recipient-name" class="col-form-label">No. Panggil</label>
												<div class="input-group">
													<input type="text" class="form-control callnumber" name="callnumber[]" placeholder="No. Panggil" value="<?= isset($callnumber) ? $callnumber[$i] : '' ?>">
													<small id="callno-feedback" class="text-danger"></small>
													<div class="input-group-append">
														<button class="btn btn-sm btn-light remove-call-number" type="button" data-target="#call-number-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
													</div>
												</div>
											</div>
										<?php endfor; ?>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-md-6">
								<div id="issn-append" class="form-group" data-total="1">
									<div id="issn-0" class="form-group">
										<label for="recipient-name" class="col-form-label">ISBN</label>
										<div class="input-group">
											<input type="number" class="form-control issn" name="issn[]" placeholder="ISSN" value="<?= isset($issn) ? $issn[0] : '' ?>">
											<small id="issn-feedback" class="text-danger"></small>
											<div class="input-group-append">
												<button id="add-issn" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
											</div>
										</div>
									</div>
									<?php if (isset($issn)) : ?>
										<?php for ($i = 1; $i < count($issn); $i++) : ?>
											<div id="issn-<?= $i ?>" class="form-group">
												<label for="recipient-name" class="col-form-label">ISSN</label>
												<div class="input-group">
													<input type="text" class="form-control issn" name="issn[]" placeholder="ISSN" value="<?= $issn[$i] ?>">
													<small id="issn-feedback" class="text-danger"></small>
													<div class="input-group-append">
														<button class="btn btn-sm btn-light remove-issn" type="button" data-target="#issn-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
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
</div>