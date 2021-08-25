<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>
<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main'; ?>
<?= $this->extend($layout); ?>
<?=$this->section('style')?>
<?=$this->endSection('style')?>

<?=$this->section('page')?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-server icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?=lang('Tag.action.update')?> <?=lang('Tag.module')?> <div class="page-title-subheading"><?=lang('Tag.form.complete_the_data')?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('Tag')?>"><?=lang('Tag.module')?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?=lang('Tag.action.update')?> <?=lang('Tag.module')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-pencil icon-gradient bg-plum-plate"> </i> Form <?=lang('Tag.action.update')?> <?=lang('Tag.module')?>
        </div>
        <div class="card-body">
            <div id="infoMessage"><?=$message ?? ''?></div> <?=get_message('message')?>
			<form id="frm_create" method="post" action="<?=base_url('tag/edit/'.$tag->id)?>" onsubmit="return validateForm()">
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="ref_format"><?=lang('Tag.field.ref_format')?>*</label>
                            <div>
                                <select class="form-control" id="frm_create_ref_format" name="ref_format" placeholder="<?=lang('Tag.field.ref_format')?> " required>
                                    <option value="" disabled selected><?=lang('Tag.field.ref_format')?></option>
                                    <?php foreach (get_references('ref-jenis-format') as $row): ?>
                                        <option value="<?=$row->id?>" <?=($row->id == $tag->ref_format)?'selected':''?>><?=$row->name?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="ref_group"><?=lang('Tag.field.ref_group')?>*</label>
                            <div>
                                <select class="form-control" id="frm_create_ref_group" name="ref_group" placeholder="<?=lang('Tag.field.ref_group')?> " required>
                                    <option value="" disabled selected><?=lang('Tag.field.ref_group')?></option>
                                    <?php foreach (get_references('ref-group-field') as $row): ?>
                                        <option value="<?=$row->id?>" <?=($row->id == $tag->ref_group)?'selected':''?>><?=$row->name?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="tag"><?=lang('Tag.field.tag')?>*</label>
                            <div>
                                <input type="text" class="form-control" id="frm_create_tag" name="tag" placeholder="<?=lang('Tag.field.tag')?> " value="<?=set_value('tag', $tag->tag)?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="position-relative form-group">
                            <label for="name"><?=lang('Tag.field.name')?>*</label>
                            <div>
                                <input type="text" class="form-control" id="frm_create_name" name="name" placeholder="<?=lang('Tag.field.name')?> " value="<?=set_value('name', $tag->name)?>" required/>
                            </div>
                        </div>
                    </div>
					<div class="col-md-4">
                        <div class="position-relative form-group">
							<label for="length"><?=lang('Tag.field.length')?> </label>
							<div>
								<input type="number" class="form-control" id="frm_create_length" min="1" max="255" name="length"
									placeholder="<?=lang('Tag.field.length')?> " value="<?=set_value('length', $tag->length)?>" />
							</div>
                        </div>
                    </div>
                </div>

				<div class="form-row">
					<div class="col-md-12">
                        <div class="position-relative form-group">
							<label for="description"><?=lang('Tag.field.description')?> </label>
							<div>
								<textarea id="frm_create_description" name="description" placeholder="<?=lang('Tag.field.description')?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?=set_value('description', $tag->description)?></textarea>
							</div>
                        </div>
                    </div>
				</div>

				<div class="form-row mt-2">
					<div class="col">
						<div class="form-group" style="display: inline-block">
							<div>
								<label for="fixed"><?=lang('Tag.field.fixed')?> </label>
								<input type="checkbox" class="form-control" name="fixed" value="1" <?=(1 == $tag->fixed)?'checked':''?>> 
							</div>
						</div>
                    </div>
					<div class="col">
						<div class="form-group" style="display: inline-block">
							<div>
								<label for="enabled"><?=lang('Tag.field.enabled')?> </label>
								<input type="checkbox" class="form-control" name="enabled" value="1" <?=(1 == $tag->enabled)?'checked':''?>>
							</div>
						</div>
                    </div>
					<div class="col">
						<div class="form-group" style="display: inline-block">
							<div>
								<label for="repeatable"><?=lang('Tag.field.repeatable')?> </label>
								<input type="checkbox" class="form-control" name="repeatable" value="1" <?=(1 == $tag->repeatable)?'checked':''?>>
							</div>
						</div>
                    </div>
					<div class="col">
						<div class="form-group" style="display: inline-block">
							<div>
								<label for="mandatory"><?=lang('Tag.field.mandatory')?> </label>
								<input type="checkbox" class="form-control" name="mandatory" value="1" <?=(1 == $tag->mandatory)?'checked':''?>>
							</div>
						</div>
                    </div>
					<div class="col">
						<div class="form-group" style="display: inline-block">
							<div>
								<label for="customable"><?=lang('Tag.field.customable')?> </label>
								<input type="checkbox" class="form-control" name="customable" value="1" <?=(1 == $tag->customable)?'checked':''?>>
							</div>
						</div>
                    </div>
				</div>

				<div class="main-card mt-3 mb-3 card car-border">
					<div class="card-header">
						Sub Ruas
						<div class="btn-actions-pane-right actions-icon-btn">
							<button type="button" name="add" data-tbody="subruas-tbody" class="btn btn-success subruas-btn-add"><i class="fa fa-plus"></i> Item</button>
						</div>
					</div>
					<div class="card-body">
						<table style="width: 100%;" id="subruas-tbl" class="table table-hover table-striped table-bordered">
							<thead>
								<tr>
									<th width="300">Code</th>
									<th width="300">Name</th>
									<th>Delimiter</th>
									<th>Sort No.</th>
									<th>Display</th>
									<th>Repeatable</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody id="subruas-tbody">
								<?php foreach(get_field_data($tag->id) as $row):?>
								<?php $index = $row->id ?>
								<tr class="rm-row">
									<td width="300">
										<input type="hidden" name="index0[]" value="<?=$index?>">
										<input type="text" class="form-control" name="code0[<?=$index?>]" placeholder="<?=lang('Tag.fielddatas.code')?>" value="<?=$row->code?>" />
									</td>
									<td width="300">                        
										<input type="text" class="form-control" name="name0[<?=$index?>]" placeholder="<?=lang('Tag.fielddatas.name')?>" value="<?=$row->name?>" />
									</td>
									<td>                        
										<input type="text" class="form-control" name="delimiter0[<?=$index?>]" placeholder="" value="<?=$row->delimiter?>" />
									</td>
									<td>     
										<input type="number" class="form-control" name="sortno0[<?=$index?>]" placeholder="" value="<?=$row->sortno?>" />         
									</td>
									<td class="text-center">
										<input type="hidden" name="isshow0[<?=$index?>]" value="0"><input type="checkbox" name="isshow[<?=$index?>]" value="1" class="form-control isshow" <?=($row->isshow == 1)?'checked':''?>>
									</td>
									<td class="text-center">
										<input type="hidden" name="repeatable0[<?=$index?>]" value="0"><input type="checkbox" name="fielddatas_repeatable[<?=$index?>]" value="1" class="form-control fielddatas_repeatable" <?=($row->repeatable == 1)?'checked':''?>>			
									</td>
									<td class="text-left">
										<button type="button" class="btn btn-danger subruas-btn-remove" data-href="<?=base_url('api/tag/field_data_delete/'.$row->id)?>"><i class="fa fa-trash"></i></button>
									</td>
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="main-card mt-3 mb-3 card car-border">
							<div class="card-header">
								Indikator 1
								<div class="btn-actions-pane-right actions-icon-btn">
									<button type="button" name="add" data-tbody="indikator1-tbody" class="btn btn-success indikator1-btn-add"><i class="fa fa-plus"></i> Item</button>
								</div>
							</div>
							<div class="card-body">
								<table style="width: 100%;" id="indikator1-tbl" class="table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th width="300">Code</th>
											<th width="300">Name</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="indikator1-tbody">
										<?php foreach(get_field_indicator1($tag->id) as $row):?>
											<?php $index = $row->id;?>
											<tr class="rm-row">
												<td width="300">
													<input type="hidden" name="index1[]" value="<?=$index?>">
													<input type="text" class="form-control" name="code1[<?=$index?>]" placeholder="<?=lang('Tag.fieldIndicator1.code')?>" value="<?=$row->code?>"/>
												</td>
												<td width="300">                        
													<input type="text" class="form-control" name="name1[<?=$index?>]" placeholder="<?=lang('Tag.fieldIndicator1.name')?>" value="<?=$row->name?>"/>
												</td>
												<td class="text-left">
													<button type="button" class="btn btn-danger indikator1-btn-remove" data-href="<?=base_url('api/tag/field_indicator1_delete/'.$row->id)?>"><i class="fa fa-trash"></i></button>
												</td>
											</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="main-card mt-3 mb-3 card car-border">
							<div class="card-header">
								Indikator 2
								<div class="btn-actions-pane-right actions-icon-btn">
									<button type="button" name="add" data-tbody="indikator2-tbody" class="btn btn-success indikator2-btn-add"><i class="fa fa-plus"></i> Item</button>
								</div>
							</div>
							<div class="card-body">
								<table style="width: 100%;" id="indikator2-tbl" class="table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th width="300">Code</th>
											<th width="300">Name</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="indikator2-tbody">
										<?php foreach(get_field_indicator2($tag->id) as $row):?>
											<?php $index = $row->id;?>
											<tr class="rm-row">
												<td width="300">
													<input type="hidden" name="index2[]" value="<?=$index?>">
													<input type="text" class="form-control" name="code2[<?=$index?>]" placeholder="<?=lang('Tag.fieldIndicator2.code')?>" value="<?=$row->code?>"/>
												</td>
												<td width="300">                        
													<input type="text" class="form-control" name="name2[<?=$index?>]" placeholder="<?=lang('Tag.fieldIndicator2.name')?>" value="<?=$row->name?>"/>
												</td>
												<td class="text-left">
													<button type="button" class="btn btn-danger indikator2-btn-remove" data-href="<?=base_url('api/tag/field_indicator2_delete/'.$row->id)?>"><i class="fa fa-trash"></i></button>
												</td>
											</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="submit"><?=lang('Tag.action.save')?></button>
				</div>
        	</form>
		</div>
    </div>
</div>
<?=$this->endSection('page')?>

<?=$this->section('script')?>
<script>
	$(document).ready(function() {
		$(document).on('click', '.subruas-btn-remove', function() {
			var url = $(this).data('href');
			var row = $(this).closest('tr');

			deleteConfirm(function(result){
				if (result.value) {
					if(!url){
						row.remove(); return false;
					} else {
						makeAjaxCall(url, "DELETE").then(function(respJson){
							deleteInfo(); row.remove();
						}, function(reason){
							deleteInfo(false); console.log("Error in processing your request", reason);
						});
					}
				}
			}); 
		});

		$(".subruas-btn-add").click(function() {
			var index = Date.now();
			var tbody = $(this).data('tbody');

			$('#'+tbody).append(`
				<tr class="rm-row">
					<td width="300">
						<input type="hidden" name="index0[]" value="`+index+`">
						<input type="text" class="form-control" name="code0[`+index+`]" placeholder="<?=lang('Tag.fielddatas.code')?>" />
					</td>
					<td width="300">                        
						<input type="text" class="form-control" name="name0[`+index+`]" placeholder="<?=lang('Tag.fielddatas.name')?>" />
					</td>
					<td>                        
						<input type="text" class="form-control" name="delimiter0[`+index+`]" placeholder="" value="," />
					</td>
					<td>     
						<input type="number" class="form-control" name="sortno0[`+index+`]" placeholder="" value="0" />         
					</td>
					<td class="text-center">
						<input type="hidden" name="isshow0[`+index+`]" value="0"><input type="checkbox" name="isshow[`+index+`]" value="1" class="form-control isshow">
					</td>
					<td class="text-center">
						<input type="hidden" name="repeatable0[`+index+`]" value="0"><input type="checkbox" name="fielddatas_repeatable[`+index+`]" value="1" class="form-control fielddatas_repeatable">			
					</td>
					<td class="text-left">
						<button type="button" class="btn btn-danger subruas-btn-remove" data-href=""><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			`);
		});

		$(document).on('click', '.indikator1-btn-remove', function() {
			var url = $(this).data('href');
			var row = $(this).closest('tr');

			deleteConfirm(function(result){
				if (result.value) {
					if(!url){
						row.remove(); return false;
					} else {
						makeAjaxCall(url, "DELETE").then(function(respJson){
							deleteInfo(); row.remove();
						}, function(reason){
							deleteInfo(false); console.log("Error in processing your request", reason);
						});
					}
				}
			}); 
		});
		
		$(".indikator1-btn-add").click(function() {
			var index = Date.now();
			var tbody = $(this).data('tbody');

			$('#'+tbody).append(`
				<tr class="rm-row">
					<td width="300">
						<input type="hidden" name="index1[]" value="`+index+`">
						<input type="text" class="form-control" name="code1[`+index+`]" placeholder="<?=lang('Tag.fieldIndicator1.code')?>" />
					</td>
					<td width="300">                        
						<input type="text" class="form-control" name="name1[`+index+`]" placeholder="<?=lang('Tag.fieldIndicator1.name')?>" />
					</td>
					<td class="text-left">
						<button type="button" class="btn btn-danger indikator1-btn-remove" data-href=""><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			`);
		});

		$(document).on('click', '.indikator2-btn-remove', function() {
			var url = $(this).data('href');
			var row = $(this).closest('tr');

			deleteConfirm(function(result){
				if (result.value) {
					if(!url){
						row.remove(); return false;
					} else {
						makeAjaxCall(url, "DELETE").then(function(respJson){
							deleteInfo(); row.remove();
						}, function(reason){
							deleteInfo(false); console.log("Error in processing your request", reason);
						});
					}
				}
			}); 
		});
		

		$(".indikator2-btn-add").click(function() {
			var index = Date.now();
			var tbody = $(this).data('tbody');

			$('#'+tbody).append(`
				<tr class="rm-row">
					<td width="300">
						<input type="hidden" name="index2[]" value="`+index+`">
						<input type="text" class="form-control" name="code2[`+index+`]" placeholder="<?=lang('Tag.fieldIndicator1.code')?>" />
					</td>
					<td width="300">                        
						<input type="text" class="form-control" name="name2[`+index+`]" placeholder="<?=lang('Tag.fieldIndicator1.name')?>" />
					</td>
					<td class="text-left">
						<button type="button" class="btn btn-danger indikator2-btn-remove" data-href=""><i class="fa fa-trash"></i></button>
					</td>
				</tr>
			`);
		});
	});
</script> 
<?=$this->endSection('script')?>
