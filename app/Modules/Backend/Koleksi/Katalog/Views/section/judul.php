<?php
	$request = \Config\Services::request();
	$request->uri->setSilent();
	$is_rda = $request->getVar('rda') == 1;
	?>
<div class="row">
	<div class="col-md-12">
		<div id="accordion1" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse1"
						aria-expanded="true" aria-controls="collapse_madatory"
						class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary">
							</i>
							Judul
						</h5>
					</button>
				</div>
				<div data-parent="#accordion1" id="collapse1" class="collapse show" style="">
					<div class="card-body">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Judul Utama</label>
							<input type="text" class="form-control" id="title" name="title[a]" placeholder="Judul Utama" value="<?= is_array($title) ? $title['title'] : '' ?>">
							<small id="title-feedback" class="text-danger"></small>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Anak Judul</label>
									<input type="text" class="form-control" id="child-title" name="title[b]" placeholder="Anak Judul" value="<?= is_array($title) ? $title['childtitle'] : '' ?>">
									<small id="child-title-feedback" class="text-danger"></small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Penanggung Jawab</label>
									<input type="text" class="form-control" id="heldby" name="title[c]" placeholder="Penanggung Jawab" value="<?= is_array($title) ? $title['heldby'] : '' ?>">
									<small id="heldby-feedback" class="text-danger"></small>
								</div>
							</div>
						</div>
						<div id="previous-title-append">
							<div class="form-group previoustitle">
								<label for="recipient-name" class="col-form-label">Judul Sebelumnya</label>
								<div class="input-group">
									<input type="text" class="form-control previous-title" name="previous-title[]" placeholder="Judul Sebelumnya" value="<?= is_array($title) ? $title['previoustitle'][0] : '' ?>">
									<small id="previous-title-feedback" class="text-danger"></small>
									<div class="input-group-append">
										<button id="add-previous-title" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
									</div>
								</div>
							</div>
							<?php if (is_array($title)) : ?>
								<?php
								if (count($title['previoustitle']) > 0) :
									for ($i = 1; $i < count($title['previoustitle']); $i++) :
								?>
										<div id="previous-title-<?= $i ?>" class="form-group previoustitle">
											<div class="form-group">
												<div class="input-group">
													<input type="text" class="form-control previous-title" name="previous-title[]" placeholder="Judul Sebelumnya" value="<?= $title['previoustitle'][$i] ?>">
													<div class="input-group-append">
														<button id="add-previous-title" class="btn btn-sm btn-light remove-previous-title" data type="button" data-target="#previous-title-<?= $i ?>"><i class="fa fa-minus m-1"></i></button>
													</div>
												</div>
											</div>
										</div>
								<?php
									endfor;
								endif;
								?>
							<?php endif;  ?>
						</div>

						<?php if($is_rda):?>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Judul Seragam</label>
								<input type="text" class="form-control" id="judul-seragam" name="judul-seragam" placeholder="Judul Seragam" value="">
								<small id="judul-seragam-feedback" class="text-danger"></small>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div id="call-number-append" class="form-group" data-total="1">
										<div id="call-number-0" class="form-group">
											<label for="recipient-name" class="col-form-label">Variasi Bentu Judul</label>
											<div class="input-group">
												<input type="text" class="form-control callnumber" name="callnumber[]" placeholder="Variasi Bentu Judul" value="<?= isset($callnumber) ? $callnumber[0] : '' ?>">
												<small id="callno-feedback" class="text-danger"></small>
												<div class="input-group-append">
													<button id="callnumber" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
												</div>
											</div>
										</div>
										<?php if (isset($callnumber)) : ?>
											<?php for ($i = 1; $i < count($callnumber); $i++) : ?>
												<div id="call-number-<?= $i ?>" class="form-group">
													<label for="recipient-name" class="col-form-label">Variasi Bentu Judul</label>
													<div class="input-group">
														<input type="text" class="form-control callnumber" name="callnumber[]" placeholder="Variasi Bentu Judul" value="<?= isset($callnumber) ? $callnumber[$i] : '' ?>">
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
											<label for="recipient-name" class="col-form-label">Judul Asli</label>
											<div class="input-group">
												<input type="number" class="form-control issn" name="issn[]" placeholder="Judul Asli" value="<?= isset($issn) ? $issn[0] : '' ?>">
												<small id="issn-feedback" class="text-danger"></small>
												<div class="input-group-append">
													<button id="add-issn" class="btn btn-sm btn-light" type="button"><i class="fa fa-plus m-1"></i></button>
												</div>
											</div>
										</div>
										<?php if (isset($issn)) : ?>
											<?php for ($i = 1; $i < count($issn); $i++) : ?>
												<div id="issn-<?= $i ?>" class="form-group">
													<label for="recipient-name" class="col-form-label">Judul Asli</label>
													<div class="input-group">
														<input type="text" class="form-control issn" name="issn[]" placeholder="Judul Asli" value="<?= $issn[$i] ?>">
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
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>