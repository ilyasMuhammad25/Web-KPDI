<div class="row">
	<div class="col-md-12">
		<div id="accordion3" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0">
							<i class="header-icon lnr-layers icon-gradient bg-primary"></i>
							Data Pengadaan
						</h5>
					</button>
				</div>
				<div data-parent="#accordion3" id="collapse3" class="collapse show" style="">
					<div class="card-body">
						<div class="main-card mt-3 mb-3 card car-border">
							<div class="card-body">
								<div class="form-row mb-3">
									<div class="col-md-4">
										<div class="input-group">
											<input type="number" name="generate_no" id="generate_no" class="form-control" placeholder="Jumlah Eksemplar" value="1">
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

						<div class="form-row">
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="source_type_id"><?=lang('Eksemplar.field.Jenissumber')?></label>
									<div>
										<select class="form-control" name="source_type_id" tabindex="-1" aria-hidden="true" placeholder="<?=lang('Eksemplar.field.Jenissumber')?>">
											<option value="">-Pilih-</option>
											<?php foreach (get_ref('ref_source') as $row): ?>
												<option value="<?=$row->id?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="source_name_id"><?=lang('Eksemplar.field.Namasumber')?></label>
									<div>
										<select class="form-control" name="source_name_id" tabindex="-1" aria-hidden="true" placeholder="<?=lang('Eksemplar.field.Namasumber')?>">
											<option value="">-Pilih-</option>
											<?php foreach (get_ref('ref_partner') as $row): ?>
												<option value="<?=$row->id?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="media_type_id"><?=lang('Eksemplar.field.Bentukmedia')?></label>
									<div class="select-wrapper">
										<select class="form-control select2" name="media_type_id" style="width:100%">
											<option value="">-Pilih-</option>	
											<?php foreach(get_dropdown('m_media_eksemplar') as $row):?>
												<option value="<?=$row->code?>"><?=$row->text?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="access_id"><?=lang('Eksemplar.field.Akses')?></label>
									<div>
										<select class="form-control" name="access_id" placeholder="<?=lang('Eksemplar.field.Akses')?>">
											<option value="">-Pilih-</option>
											<?php foreach (get_ref('ref_akses') as $row): ?>
												<option value="<?=$row->id?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="location_library_id"><?=lang('Eksemplar.field.lokasiperpustakaan')?></label>
									<div>
										<select class="form-control" name="location_library_id" id="location_library_id" style="width:100%">
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
									<label for="location_room_id"><?=lang('Eksemplar.field.lokasiruang')?></label>
									<div>
										<select class="form-control" name="location_room_id" id="location_room_id" style="width:100%" data-url="<?=base_url('api/eksemplar/location')?>">
											<option value="">-Pilih-</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="currency"><?=lang('Eksemplar.field.Currency')?></label>
									<div class="select-wrapper">
										<select class="form-control select2" name="currency" placeholder="<?=lang('Eksemplar.field.currency')?>" style="width:100%">
											<option value="">-Pilih-</option>
											<?php foreach(get_dropdown('m_currency',null,'Description','Description') as $row):?>
												<option value="<?=$row->code?>"><?=$row->code?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="price"><?=lang('Eksemplar.field.Price')?></label>
									<div>
										<input type="number" class="form-control" name="price" value="0" placeholder="<?=lang('Eksemplar.field.Price')?> " />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="price_type">Perjilid/Eksemplar</label>
									<div>
										<select class="search form-control" id="price_type" name="price_type">
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
						</div>
						<div class="form-row">
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="procurement_date">Tanggal Pengadaan</label>
									<div>
										<input type="date" class="form-control" name="procurement_date" <?=set_value('procurement_date')?> placeholder="Tanggal Pengadaan" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="position-relative form-group">
									<label for="availability_id"><?=lang('Eksemplar.field.Ketersediaan')?></label>
									<div class="select-wrapper">
										<select class="form-control select2" name="availability_id" placeholder="<?=lang('Eksemplar.field.Ketersediaan')?>" style="width:100%">
											<option value="">-Pilih-</option>
											<?php foreach (get_ref('ref_status') as $row): ?>
												<option value="<?=$row->id?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div>
							<input type="hidden" class="iCheck-square" name="is_opac" id="is_opac" value="0">
							<input type="checkbox" class="iCheck-square" name="is_opac" id="is_opac" value="1">
							<label class="control-label">&nbsp; Tampil di OPAC</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>