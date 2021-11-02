<div class="row">
	<div class="col-md-12">
		<div id="accordion2" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse2"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Kreator/ Tajuk Pengarang
						</h5>
					</button>
				</div>
				<div data-parent="#accordion2" id="collapse2" class="collapse" style="">
					<div class="card-body">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Tajuk Pengarang Utama</label>
							<div class="row">
								<div class="col-md-4">
									<select id="author-option" name="author[option]" class="form-control opt author-option" data-placeholder="Indikator">
										<option value="1" <?= isset($author) ? ($author['input'] == '1' ? 'selected' : '') : ''  ?>>Nama Orang</option>
										<option value="2" <?= isset($author) ? ($author['input'] == '2' ? 'selected' : '') : ''  ?>>Nama Badan</option>
										<option value="3" <?= isset($author) ? ($author['input'] == '3' ? 'selected' : '') : ''  ?>>Nama Pertemuan</option>
									</select>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control author-input" id="author-input" name="author[100]" placeholder="Tajuk Pengarang Utama">
									<small id="main-creator-feedback" class="text-danger"></small>
								</div>
							</div>

							<div class="input-radio p-2 bg-light">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-check">
											<label class="form-check-label">
												<input id="author-radio" class="form-check-input author-radio" type="radio" name="author[radio]" value="0" <?= isset($author) ? ($author['radio'] == '0' ? 'checked' : "") : "checked" ?>>
												Nama Depan
											</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-check">
											<label class="form-check-label">
												<input id="author-radio" class="form-check-input author-radio" type="radio" name="author[radio]" value="1" <?= isset($author) ? ($author['radio'] == '1' ? 'checked' : "") : "" ?>>
												Nama Belakang
											</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-check">
											<label class="form-check-label">
												<input id="author-radio" class="form-check-input author-radio" type="radio" name="author[radio]" value="2" <?= isset($author) ? ($author['radio'] == '2' ? 'checked' : "") : "" ?>>
												Nama Keluarga
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Tajuk Pengarang Tambahan</label>
							<div id="addition-author-append">
								<div class="additional-author-wrapper">
									<div class="row">
										<div class="col-md-4">
											<select name="additional-author[option][]" class="form-control opt additional-author-option" data-placeholder="Indikator">
												<option value="1" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['select'] == '1' ? 'selected' : '') : ''  ?>>Nama Orang</option>
												<option value="2" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['select'] == '2' ? 'selected' : '') : ''  ?>>Nama Badan</option>
												<option value="3" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['select'] == '3' ? 'selected' : '') : ''  ?>>Nama Pertemuan</option>
											</select>
										</div>
										<div class="col-md-8">
											<div class="input-group">
												<input type="text" class="form-control additional-author-input" name="additional-author[input][]" placeholder="Tajuk Pengarang Tambahan" value="<?= isset($additionalAuthor) ? $additionalAuthor[0]['input'] : '' ?>">
												<div class="input-group-append">
													<button id="add-additional-author" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
												</div>
											</div>
										</div>
									</div>
									<div class="input-radio p-2 bg-light">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][0]" value="0" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['radio'] == '0' ? 'checked' : '') : 'checked'  ?>>
														Nama Depan
													</label>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][0]" value="1" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['radio'] == '1' ? 'checked' : '') : ''  ?>>
														Nama Belakang
													</label>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][0]" value="2" <?= isset($additionalAuthor) ? ($additionalAuthor[0]['radio'] == '2' ? 'checked' : '') : ''  ?>>
														Nama Keluarga
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php if (isset($additionalAuthor)) : ?>
							<div id="addition-author-append">
								<?php for ($i = 1; $i < count($additionalAuthor); $i++) : ?>
									<div class="additional-author-wrapper" id="additional-author-<?= $i ?>">
										<div class="row">
											<div class="col-md-4">
												<select name="additional-author[option][]" class="form-control opt additional-author-option" data-placeholder="Indikator">
													<option value="1" <?= $additionalAuthor[$i]['select'] == '1' ? 'selected' : ''  ?>>Nama Orang</option>
													<option value="2" <?= $additionalAuthor[$i]['select'] == '2' ? 'selected' : ''  ?>>Nama Badan</option>
													<option value="3" <?= $additionalAuthor[$i]['select'] == '3' ? 'selected' : ''  ?>>Nama Pertemuan</option>
												</select>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<input type="text" class="form-control additional-author-input" name="additional-author[input][]" placeholder="Tajuk Pengarang Tambahan" value="<?= $additionalAuthor[$i]['input'] ?>">
													<div class="input-group-append">
														<button class="btn btn-sm btn-light  remove-additional-author" type="button" data-target="#additional-author-<?= $i ?>"><i class="fa fa-plus m-1"></i></button>
													</div>
												</div>
											</div>
										</div>
										<div class="input-radio p-2 bg-light">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][<?= $i ?>]" value="0" <?= $additionalAuthor[$i]['select'] == '0' ? 'selected' : ''  ?>>
															Nama Depan
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][<?= $i ?>]" value="1" <?= $additionalAuthor[$i]['select'] == '1' ? 'selected' : ''  ?>>
															Nama Belakang
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input additional-author-radio" type="radio" name="additional-author[radio][<?= $i ?>]" value="2" <?= $additionalAuthor[$i]['select'] == '2' ? 'selected' : ''  ?>>
															Nama Keluarga
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endfor; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>