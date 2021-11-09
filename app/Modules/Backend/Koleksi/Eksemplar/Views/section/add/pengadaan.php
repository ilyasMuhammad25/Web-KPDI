<div class="row">
	<div class="col-md-12">
		<div id="accordion" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse_madatory3" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary"></i>
							Data Pengadaan
						</h5>
					</button>
				</div>
				<div data-parent="#accordion" id="collapse_madatory3" class="collapse" style="">
					<div class="card-body">
						<div class="main-card mt-3 mb-3 card car-border">
							<div class="card-body">
								<div class="form-row mb-3">
									<div class="col-md-4">
										<div class="input-group">
											<input type="number" name="jml_eksemplar" id="jml_eksemplar" class="form-control" placeholder="Jumlah Eksemplar">
											<div class="input-group-append">
												<button type="button" class="btn btn-primary btn-generate" data-tbody="eksemplar-tbody">Generate</button>
											</div>
										</div>
									</div>
								</div>

								<table style="width: 100%;" id="eksemplar-tbl"
									class="table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th width="25%">Barcode</th>
											<th width="25%">Nomor Induk</th>
											<th width="25%">RFID</th>
											<th width="25%">Nomor Panggil</th>
										</tr>
									</thead>
									<tbody id="eksemplar-tbody">
									</tbody>
								</table>
							</div>
						</div>

						<!-- end -->
						<div class="form-row">
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Jenissumber')?>*</label>
									<div>
										<select class="form-control" name="ref_source" id="ref_source" tabindex="-1" aria-hidden="true" placeholder="<?=lang('Eksemplar.field.Jenissumber')?>">
											<option value="1" selected><?=lang('Eksemplar.field.Jenissumber')?></option>
											<?php foreach ($ref_source as $row): ?>
												<option value="<?=$row->id?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Namasumber')?></label>
									<div>
										<select class="form-control" name="ref_partner" id="ref_partner" tabindex="-1" aria-hidden="true" placeholder="<?=lang('Eksemplar.field.Namasumber')?>">
											<option value="1" selected><?=lang('Eksemplar.field.Namasumber')?></option>
											<?php foreach ($ref_partner as $row): ?>
												<option value="<?=$row->id?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Bentukmedia')?></label>
									<div>
										<select class="form-control select2" name="ref_media" id="Location_Library_id" tabindex="-1" aria-hidden="true" style="width:100%">
											<?php foreach(get_dropdown('m_media_eksemplar') as $row):?>
												<option value="<?=$row->code?>"><?=$row->text?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Akses')?></label>
									<div>
										<select class="form-control" name="ref_akses" id="ref_akses" tabindex="-1" aria-hidden="true" placeholder="<?=lang('Eksemplar.field.Akses')?>">
											<option value="1" selected><?=lang('Eksemplar.field.Akses')?></option>
											<?php foreach ($ref_akses as $row): ?>
												<option value="<?=$row->id?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.lokasiperpustakaan')?></label>
									<div>
										<select class="form-control select2" name="Provincy" id="Provincy" tabindex="-1" aria-hidden="true" style="width:100%">
											<option value="">-Pilih-</option>
											<?php foreach(get_dropdown('m_lokasiperpustakaan') as $row):?>
												<option value="<?=$row->code?>"><?=$row->text?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.lokasiruang')?></label>
									<div>
										<select class="form-control select2" name="City" id="City" tabindex="-1" aria-hidden="true" style="width:100%" data-url="<?=base_url('api/eksemplar/location')?>">
											<option value="">-Pilih-</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Currency')?></label>
									<select class="form-control select_3" name="ref_currency" id="ref_currency" tabindex="-1" aria-hidden="true" placeholder="<?=lang('Eksemplar.field.currency')?>">
										<option value="">-Pilih-</option>
										<?php foreach(get_dropdown('m_currency',null,'Description','Description') as $row):?>
											<option value="<?=$row->code?>"><?=$row->code?></option>
										<?php endforeach;?>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Price')?></label>
									<div>
										<input type="number" class="form-control" id="frm_create_name" name="Price" value="0" placeholder="<?=lang('Eksemplar.field.Price')?> " />
										<!-- <small class="info help-block text-muted"><?=lang('Eksemplar.field.name')?></small> -->
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name">Perjilid/Eksemplar</label>
									<select class="search form-control" id="PriceType" name="PriceType">
										<option value="Per jilid">
											Per Jilid
										</option>
										<option value="Per eksemplar">
											Per Eksemplar
										</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-8">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.CallNumber')?></label>
									<div>
										<input type="number" class="form-control" id="frm_create_name" name="CallNumber" <?=set_value('CallNumber')?> placeholder="<?=lang('Eksemplar.field.CallNumber')?> " />
										<!-- <small class="info help-block text-muted"><?=lang('Eksemplar.field.name')?></small> -->
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="name"><?=lang('Eksemplar.field.Ketersediaan')?></label>
									<div>
										<select class="form-control" name="ref_status" id="ref_status" tabindex="-1" aria-hidden="true" placeholder="<?=lang('Eksemplar.field.Ketersediaan')?>">
											<option value="1" selected><?=lang('Eksemplar.field.Ketersediaan')?></option>
											<?php foreach ($ref_status as $row): ?>
												<option value="<?=$row->id?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div>
							<input type="hidden" class="iCheck-square" name="is_opac" id="is_opac"
								value="0">
							<input type="checkbox" class="iCheck-square" name="is_opac" id="is_opac"
								value="1">
							<label class="  control-label">Tampil di OPAC</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>