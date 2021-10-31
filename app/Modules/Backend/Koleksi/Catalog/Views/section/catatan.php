<div class="row">
	<div class="col-md-12">
		<div id="accordion6" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse6"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Catatan
						</h5>
					</button>
				</div>
				<div data-parent="#accordion6" id="collapse6" class="collapse" style="">
					<div class="card-body">
						<div id="note-append" data-total="1">
							<div class="form-group notes mb-0">
								<label for="recipient-name" class="col-form-label">Catatan</label>
								<div class="input-group">
									<input type="text" class="form-control note" name="notes[input][]" placeholder="Catatan" value="<?= isset($notes) ? $notes[0]['input'] : "" ?>">
									<small id="note-feedback" class="text-danger"></small>
									<div class="input-group-append">
										<button id="add-note" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
									</div>
								</div>

								<div class="input-radio p-2 bg-light">
									<div class="row">
										<div class="col-sm-4 py-1">
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input note-radio" type="radio" name="notes[radio][0]" value="0" <?= isset($notes) ? ($notes[0]['radio'] == '0' ? 'checked' : "") : "checked" ?>>
													Abstrak/Anotasi
												</label>
											</div>
										</div>
										<div class="col-sm-4 py-1">
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input  note-radio" type="radio" name="notes[radio][0]" value="1" <?= isset($notes) ? ($notes[0]['radio'] == '1' ? 'checked' : "") : "" ?>>
													Catatan Disertasi
												</label>
											</div>
										</div>
										<div class="col-sm-4 py-1">
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input  note-radio" type="radio" name="notes[radio][0]" value="2" <?= isset($notes) ? ($notes[0]['radio'] == '2' ? 'checked' : "") : "" ?>>
													Catatan Bibliografi
												</label>
											</div>
										</div>
										<div class="col-sm-4 py-1">
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input  note-radio" type="radio" name="notes[radio][0]" value="3" <?= isset($notes) ? ($notes[0]['radio'] == '3' ? 'checked' : "") : "" ?>>
													Rincian Isi
												</label>
											</div>
										</div>
										<div class="col-sm-4 py-1">
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input  note-radio" type="radio" name="notes[radio][0]" value="4" <?= isset($notes) ? ($notes[0]['radio'] == '4' ? 'checked' : "") : "" ?>>
													Catatan Umum
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php if (isset($notes)) :  ?>
								<?php for ($i = 1; $i < count($notes); $i++) :  ?>

									<div id="notes-<?= $i ?>" class="form-group notes mb-0">
										<div class="input-group">
											<input type="text" class="form-control note" name="notes[input][]" placeholder="Catatan" value="<?= isset($notes) ? $notes[$i]['input'] : "" ?>">
											<small id="note-feedback" class="text-danger"></small>
											<div class="input-group-append">
												<button class="btn btn-sm btn-light remove-notes" type="button" data-target="#notes-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
											</div>
										</div>

										<div class="input-radio p-2 bg-light">
											<div class="row">
												<div class="col-sm-4 py-1">
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="0" <?= isset($notes) ? ($notes[$i]['radio'] == '0' ? 'checked' : "") : "" ?>>
															Abstrak/Anotasi
														</label>
													</div>
												</div>
												<div class="col-sm-4 py-1">
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="1" <?= isset($notes) ? ($notes[$i]['radio'] == '1' ? 'checked' : "") : "" ?>>
															Catatan Disertasi
														</label>
													</div>
												</div>
												<div class="col-sm-4 py-1">
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="2" <?= isset($notes) ? ($notes[$i]['radio'] == '2' ? 'checked' : "") : "" ?>>
															Catatan Bibliografi
														</label>
													</div>
												</div>
												<div class="col-sm-4 py-1">
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="3" <?= isset($notes) ? ($notes[$i]['radio'] == '3' ? 'checked' : "") : "" ?>>
															Rincian Isi
														</label>
													</div>
												</div>
												<div class="col-sm-4 py-1">
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input note-radio" type="radio" name="notes[radio][<?= $i ?>]" value="4" <?= isset($notes) ? ($notes[$i]['radio'] == '4' ? 'checked' : "") : "" ?>>
															Catatan Umum
														</label>
													</div>
												</div>
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