<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?=$this->extend('hamkamannan\adminigniter\layout\backend\main');?>
<?=$this->section('style');?>
<?=$this->endSection('style');?>

<?=$this->section('page');?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?=lang('Mastertag.action.update')?> <?=lang('Mastertag.module')?>
                    <div class="page-title-subheading"><?=lang('Mastertag.form.complete_the_data')?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>"><i class="fa fa-home"></i> <?=lang('Mastertag.label.home')?></a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('mastertag')?>"><?=lang('Mastertag.module')?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?=lang('Mastertag.action.update')?> <?=lang('Mastertag.module')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
            <div class="card-header">
                  <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?=lang('Mastertag.action.update')?> <?=lang('Mastertag.module')?>
            </div>
            <div class="card-body">
                  <div id="infoMessage"><?=$message ?? '';?></div>
                  <?=get_message('message');?>

                  <form id="frm" class="col-md-12 mx-auto" method="post" action="" onsubmit="return validateForm()">
                        <div class="form-row">
                              <div class="col-md-3">
                                    <div class="position-relative form-group">
                                          <label for="ref_format"><?=lang('Mastertag.field.ref_format')?>*</label>
                                          <div>
                                                <select class="form-control" id="frm_create_ref_format" name="ref_format" placeholder="<?=lang('Mastertag.field.ref_format')?> ">
                                                      <option value="" disabled selected><?=lang('Mastertag.field.ref_format')?></option>
                                                      <?php foreach (get_ref('ref-jenis-format') as $row): ?>
                                                      <option value="<?=$row->id?>" <?=(set_value('ref_format', $mastertag->ref_format) == $row->id) ? "selected" : "";?>><?=$row->name?></option>
                                                      <?php endforeach;?>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="position-relative form-group">
                                          <label for="ref_group"><?=lang('Mastertag.field.ref_group')?>*</label>
                                          <div>
                                                <select class="form-control" id="frm_create_ref_group" name="ref_group" placeholder="<?=lang('Mastertag.field.ref_group')?> ">
                                                      <option value="" disabled selected><?=lang('Mastertag.field.ref_group')?></option>
                                                      <?php foreach (get_ref('ref-group-field') as $row): ?>
                                                      <option value="<?=$row->id?>" <?=(set_value('ref_group', $mastertag->ref_group) == $row->id) ? "selected" : "";?>><?=$row->name?></option>
                                                      <?php endforeach;?>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="position-relative form-group">
                                          <label for="tag"><?=lang('Mastertag.field.tag')?>*</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_tag" name="tag" placeholder="<?=lang('Mastertag.field.tag')?> " value="<?=set_value('tag', $mastertag->tag);?>" />
                                          </div>
                                    </div>

                                    <div class="position-relative form-group">
                                          <label for="name"><?=lang('Mastertag.field.name')?>*</label>
                                          <div>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="<?=lang('Mastertag.field.name')?>" value="<?=set_value('name', $mastertag->name);?>" />
                                                <small class="info help-block text-muted"><?=lang('Mastertag.field.name')?></small>
                                          </div>
                                    </div>
                                    <div class="position-relative form-group">
                                          <label for="description"><?=lang('Mastertag.field.description')?></label>
                                          <div>
                                                <textarea id="description" name="description" placeholder="<?=lang('Mastertag.field.description')?>" rows="2" class="form-control autosize-input" style="min-height: 38px;"><?=set_value('description', $mastertag->description)?></textarea>
                                          </div>
                                    </div>
                                    <div class="position-relative form-group">
                                          <label for="length"><?=lang('Mastertag.field.length')?> </label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_length" name="length" placeholder="<?=lang('Mastertag.field.length')?> " value="<?=set_value('name', $mastertag->length);?>" />
                                                <small class="info help-block text-muted"><?=lang('Mastertag.field.length')?></small>
                                          </div>
                                    </div>

                              </div>
                        </div>


                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="fixed"><?=lang('Mastertag.field.fixed')?> </label>
                              <div>
                              <input type="checkbox" name="fixed" value="1" <?=(set_value('name', $mastertag->fixed) == 1) ? "checked" : "";?>>
                              </div>
                        </div>


                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="fixed"><?=lang('Mastertag.field.enabled')?> </label>
                              <div>
                              <input type="checkbox" name="enabled" value="1" <?=(set_value('name', $mastertag->enabled) == 1) ? "checked" : "";?>>
                              </div>
                        </div>

                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="repeatable"><?=lang('Mastertag.field.repeatable')?> </label>
                              <div>
                              <input type="checkbox" name="repeatable" value="1" <?=(set_value('name', $mastertag->repeatable) == 1) ? "checked" : "";?>>
                              </div>
                        </div>
                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="mandatory"><?=lang('Mastertag.field.mandatory')?> </label>
                              <div>
                              <input type="checkbox" name="mandatory" value="1" <?=(set_value('name', $mastertag->mandatory) == 1) ? "checked" : "";?>>
                              </div>
                        </div>
                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="customable"><?=lang('Mastertag.field.customable')?> </label>
                              <div>
                              <input type="checkbox" name="customable" value="1" <?=(set_value('name', $mastertag->customable) == 1) ? "checked" : "";?>>
                              </div>
                        </div>
                        <div></div>

                        <span class="badge badge-info">Sub Ruas</span>
                        <div id="dynamic_field">
                        <?php foreach ($fielddatas as $key => $element): ?>

                        <div  id="row<?=$key?>">
                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="code"><?=lang('Mastertag.fielddatas.code')?> </label>
                              <div>
                                    <input type="text" class="form-control" id="frm_create_code" name="code[<?=$key?>]" placeholder="<?=lang('Mastertag.fielddatas.code')?> " value="<?=$element->code;?>" />
                              </div>
                        </div>
                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="name"><?=lang('Mastertag.fielddatas.name')?> </label>
                              <div>
                                    <input type="text" class="form-control" id="frm_create_fielddatas_name" name="fielddatas_name[<?=$key?>]" placeholder="<?=lang('Mastertag.fielddatas.name')?> " value="<?=$element->name?>" />
                              </div>
                        </div>
                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="delimiter"><?=lang('Mastertag.fielddatas.delimiter')?> </label>
                              <div>
                                    <input type="text" class="form-control" id="frm_create_delimiter" name="delimiter[<?=$key?>]" placeholder="<?=lang('Mastertag.fielddatas.delimiter')?> " value="<?=$element->delimiter;?>" />
                              </div>
                        </div>
                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="sortno"><?=lang('Mastertag.fielddatas.sortno')?> </label>
                              <div>
                                    <input type="text" class="form-control" id="frm_create_fielddatas_sortno" name="sortno[<?=$key?>]" placeholder="<?=lang('Mastertag.fielddatas.sortno')?> " value="<?=$element->sortno;?>" />
                              </div>
                        </div>
                        <div class="form-group col-md-1" style="display: inline-block">
                              <label for="isshow"><?=lang('Mastertag.fielddatas.isshow')?> </label>
                              <div>
                              <input type="checkbox" name="isshow[<?=$key?>]" value="1" <?=($element->isshow == 1) ? 'checked' : ''?>>
                              </div>
                        </div>
                        <div class="form-group col-md-1" style="display: inline-block">
                              <label for="repeatable"><?=lang('Mastertag.fielddatas.repeatable')?> </label>
                              <div>
                              <input type="checkbox" name="fielddatas_repeatable[<?=$key?>]" value="1" <?=($element->repeatable == 1) ? 'checked' : ''?>>
                              </div>
                        </div>

                        <?php
if ($key > 0) {
    echo '<button id="' . $key . '" class="btn_remove btn btn-danger">x</button>';
} else {
    echo '<button type="button" name="add" id="add" class="btn btn-success">+</button>';
}
?>
                              </div>
                        <?php endforeach;?>
                        </div>

                        <div class="form-group">
                              <button type="submit" class="btn btn-primary" name="submit"><?=lang('Mastertag.action.save')?></button>
                        </div>
                  </form>
            </div>
    </div>
</div>


<?=$this->endSection('page');?>

<?=$this->section('script');?>
<script type="text/javascript">
    $(document).ready(function(){
      var i = <?=$key?> + 1;
      var code = "<?=lang('Mastertag.fielddatas.code')?>";
      var name = "<?=lang('Mastertag.fielddatas.name')?>";
      var delimiter = "<?=lang('Mastertag.fielddatas.delimiter')?>";
      var sortno = "<?=lang('Mastertag.fielddatas.sortno')?>";
      var isshow = "<?=lang('Mastertag.fielddatas.isshow')?>";
      var repeatable = "<?=lang('Mastertag.fielddatas.repeatable')?>";


      $('#add').on("click",function(){
           $('#dynamic_field').append('<div  id="row'+i+'">'+
                              '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="code">'+code+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fielddatas_code" name="code['+i+']" placeholder="'+code+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+
                                    '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="name">'+name+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fielddatas_name" name="fielddatas_name['+i+']" placeholder="'+name+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+
                                    '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="delimiter">'+delimiter+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fielddatas_delimiter" name="delimiter['+i+']" placeholder="'+delimiter+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+                                    '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="sortno">'+sortno+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fielddatas_sortno" name="sortno['+i+']" placeholder="'+sortno+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+
                                    '<div class="form-group col-md-1" style="display: inline-block">'+
                                    '<label for="isshow">'+isshow+'</label>'+
                                    '<div>'+
                                    '<input type="checkbox" name="isshow['+i+']" value="1">'+
                                    '</div>'+
                                    '</div>&nbsp;'+
                                    '<div class="form-group col-md-1" style="display: inline-block">'+
                                    '<label for="repeatable">'+repeatable+'</label>'+
                                    '<div>'+
                                    '<input type="checkbox" name="fielddatas_repeatable['+i+']" value="1">'+
                                    '</div></div><button id="'+i+'" class="btn_remove btn btn-danger">x</button>'+
                                    '</div>');
                        i++;

     });

     $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
           $('#'+button_id+'').remove();
           i = i-1;
      });

      validateForm = function() {
            if($('#frm_create_ref_format').val()==null){
                  alert('Format harus diisi!');
                  $('#frm_create_ref_format').focus();
                  return false
            }
            else if($('#frm_create_ref_group').val()==null){
                  alert('Group harus diisi!');
                  $('#frm_create_ref_group').focus();
                  return false
            }
            else if($('#frm_create_tag').val()==''){
                  alert('Tag harus diisi!');
                  $('#frm_create_tag').focus();
                  return false
            }
            else if($('#frm_create_name').val()==''){
                  alert('Nama harus diisi!');
                  $('#frm_create_name').focus();
                  return false
            }
            else if(isNaN($('#frm_create_length').val())||$('#frm_create_length').val()==''){
                  alert('Length harus diisi angka!');
                  $('#frm_create_length').focus();
                  return false
            }
      }

    });
</script>

<?=$this->endSection('script');?>