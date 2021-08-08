<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?= $this->extend('hamkamannan\adminigniter\layout\backend\main'); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>


<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?= lang('Mastertag.action.add') ?> <?= lang('Mastertag.module') ?>
                    <div class="page-title-subheading"><?= lang('Mastertag.form.complete_the_data') ?>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('mastertag') ?>"><?= lang('Mastertag.module') ?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?= lang('Mastertag.action.add') ?> <?= lang('Mastertag.module') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
            <div class="card-header">
                  <i class="header-icon lnr-plus-circle icon-gradient bg-plum-plate"> </i> Form <?= lang('Mastertag.action.add') ?> <?= lang('Mastertag.module') ?>
            </div>
            <div class="card-body">
                  <div id="infoMessage"><?= $message ?? ''; ?></div>
                  <?= get_message('message'); ?>

                  <form id="frm_create" class="col-md-12 mx-auto" method="post" action="<?= base_url('mastertag/create'); ?>" onsubmit="return validateForm()">
                        <div class="form-row">
                              <div class="col-md-9">
                              <div class="position-relative form-group">
                                          <label for="ref_format"><?= lang('Mastertag.field.ref_format') ?>*</label>
                                          <div>
                                                <select class="form-control" id="frm_create_ref_format" name="ref_format" placeholder="<?= lang('Mastertag.field.ref_format') ?> ">
                                                      <option value="" disabled selected><?= lang('Mastertag.field.ref_format') ?></option>
                                                      <?php foreach(get_references('ref-jenis-format') as $row) : ?>
                                                      <option value="<?=$row->id?>"><?=$row->name?></option>                                                      
                                                      <?php endforeach;?>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="position-relative form-group">
                                          <label for="ref_group"><?= lang('Mastertag.field.ref_group') ?>*</label>
                                          <div>
                                                <select class="form-control" id="frm_create_ref_group" name="ref_group" placeholder="<?= lang('Mastertag.field.ref_group') ?> ">
                                                      <option value="" disabled selected><?= lang('Mastertag.field.ref_group') ?></option>
                                                      <?php foreach(get_references('ref-group-field') as $row) : ?>
                                                      <option value="<?=$row->id?>"><?=$row->name?></option>                                                      
                                                      <?php endforeach;?>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="position-relative form-group">
                                          <label for="tag"><?= lang('Mastertag.field.tag') ?>*</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_tag" name="tag" placeholder="<?= lang('Mastertag.field.tag') ?> " value="<?= set_value('tag'); ?>" />
                                          </div>
                                    </div>
                                    <div class="position-relative form-group">
                                          <label for="name"><?= lang('Mastertag.field.name') ?>*</label>
                                          <div>
                                                <input type="text" class="form-control" id="frm_create_name" name="name" placeholder="<?= lang('Mastertag.field.name') ?> " value="<?= set_value('name'); ?>" />
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="description"><?= lang('Mastertag.field.description') ?> </label>
                              <div>
                                    <textarea id="frm_create_description" name="description" placeholder="<?= lang('Mastertag.field.description') ?> " rows="2" class="form-control autosize-input" style="min-height: 38px;"><?= set_value('description') ?></textarea>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="length"><?= lang('Mastertag.field.length') ?> </label>
                              <div>
                                    <input type="text" class="form-control" id="frm_create_length" name="length" placeholder="<?= lang('Mastertag.field.length') ?> " value="<?= set_value('length'); ?>" />
                              </div>
                        </div>

                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="fixed"><?= lang('Mastertag.field.fixed') ?> </label>
                              <div>
                              <input type="checkbox" name="fixed" value="1">
                              
                              </div>
                        </div>

                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="enabled"><?= lang('Mastertag.field.enabled') ?> </label>
                              <div>
                              <input type="checkbox" name="enabled" value="1">
                              </div>
                        </div>

                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="repeatable"><?= lang('Mastertag.field.repeatable') ?> </label>
                              <div>
                              <input type="checkbox" name="repeatable" value="1">
                              </div>
                        </div>
                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="mandatory"><?= lang('Mastertag.field.mandatory') ?> </label>
                              <div>
                              <input type="checkbox" class="apply-status" name="mandatory" value="1">
                              </div>
                        </div>
                        <div class="form-group col-md-2" style="display: inline-block">
                              <label for="customable"><?= lang('Mastertag.field.customable') ?> </label>
                              <div>
                              <input type="checkbox" class="apply-status" name="customable" value="1">
                              </div>
                        </div>
                        <div></div>

                        <span class="badge badge-info">Sub Ruas</span>
                        <div id="dynamic_field">
                              <div  id="row0">
                              <div class="form-group col-md-2" style="display: inline-block">
                                    <label for="code"><?= lang('Mastertag.fielddatas.code') ?> </label>
                                    <div>
                                          <input type="text" class="form-control" id="frm_create_code" name="code[0]" placeholder="<?= lang('Mastertag.fielddatas.code') ?> " value="<?= set_value('code[0]'); ?>" />
                                    </div>
                              </div>
                              <div class="form-group col-md-2" style="display: inline-block">
                                    <label for="name"><?= lang('Mastertag.fielddatas.name') ?> </label>
                                    <div>
                                          <input type="text" class="form-control" id="frm_create_fielddatas_name" name="fielddatas_name[0]" placeholder="<?= lang('Mastertag.fielddatas.name') ?> " value="<?= set_value('fielddatas_name[0]'); ?>" />
                                    </div>
                              </div>
                              <div class="form-group col-md-2" style="display: inline-block">
                                    <label for="delimiter"><?= lang('Mastertag.fielddatas.delimiter') ?> </label>
                                    <div>
                                          <input type="text" class="form-control" id="frm_create_delimiter" name="delimiter[0]" placeholder="<?= lang('Mastertag.fielddatas.delimiter') ?> " value="<?= set_value('delimiter[0]'); ?>" />
                                    </div>
                              </div>
                              <div class="form-group col-md-2" style="display: inline-block">
                                    <label for="sortno"><?= lang('Mastertag.fielddatas.sortno') ?> </label>
                                    <div>
                                          <input type="text" class="form-control" id="frm_create_sortno" name="sortno[0]" placeholder="<?= lang('Mastertag.fielddatas.sortno') ?> " value="<?= set_value('sortno[0]'); ?>" />
                                    </div>
                              </div>
                              <div class="form-group col-md-1" style="display: inline-block">
                                    <label for="isshow"><?= lang('Mastertag.fielddatas.isshow') ?> </label>
                                    <div>
                                    <input type="checkbox" name="isshow[0]" value="1">
                                    </div>
                              </div>
                              <div class="form-group col-md-1" style="display: inline-block">
                                    <label for="repeatable"><?= lang('Mastertag.fielddatas.repeatable') ?> </label>
                                    <div>
                                    <input type="checkbox" name="fielddatas_repeatable[0]" value="1">
                                    </div>
                              </div><button type="button" name="add" id="add" class="btn btn-success">+</button>
                              </div>
                        </div>

                        <!-- indikator 1 -->
                        <span class="badge badge-info">Indikator 1</span>
                        <div id="dynamic_field1s">
                              <div  id="row1s0">
                              <div class="form-group col-md-2" style="display: inline-block">
                                    <label for="code"><?= lang('Mastertag.fieldindicator1s.code') ?> </label>
                                    <div>
                                          <input type="text" class="form-control" id="frm_create_fieldindicator1s_code" name="code1s[0]" placeholder="<?= lang('Mastertag.fieldindicator1s.code') ?> " value="<?= set_value('code1s[0]'); ?>" />
                                    </div>
                              </div>
                              <div class="form-group col-md-2" style="display: inline-block">
                                    <label for="name"><?= lang('Mastertag.fieldindicator1s.name') ?> </label>
                                    <div>
                                          <input type="text" class="form-control" id="frm_create_fieldindicator1s_name" name="name1s[0]" placeholder="<?= lang('Mastertag.fieldindicator1s.name') ?> " value="<?= set_value('name1s[0]'); ?>" />
                                    </div>
                              </div><button type="button" name="add1s" id="add1s" class="btn btn-success">+</button>                              
                              </div>
                        </div>

                        <!-- indikator 2 -->
                        <span class="badge badge-info">Indikator 2</span>
                        <div id="dynamic_field2s">
                              <div  id="row2s0">
                              <div class="form-group col-md-2" style="display: inline-block">
                                    <label for="code"><?= lang('Mastertag.fieldindicator2s.code') ?> </label>
                                    <div>
                                          <input type="text" class="form-control" id="frm_create_fieldindicator2s_code" name="code2s[0]" placeholder="<?= lang('Mastertag.fieldindicator2s.code') ?> " value="<?= set_value('code2s[0]'); ?>" />
                                    </div>
                              </div>
                              <div class="form-group col-md-2" style="display: inline-block">
                                    <label for="name"><?= lang('Mastertag.fieldindicator2s.name') ?> </label>
                                    <div>
                                          <input type="text" class="form-control" id="frm_create_fieldindicator2s_name" name="name2s[0]" placeholder="<?= lang('Mastertag.fieldindicator2s.name') ?> " value="<?= set_value('name2s[0]'); ?>" />
                                    </div>
                              </div><button type="button" name="add2s" id="add2s" class="btn btn-success">+</button>                              
                              </div>
                              </div>
                        </div>
                        <div class="form-group">
                              <button type="submit" class="btn btn-primary" name="submit"><?= lang('Mastertag.action.save') ?></button>
                        </div>
                  </form>
            </div>
    </div>
</div>




<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){    
      var i = 1;
      var i_1s = 1;
      var i_2s = 1;

      var code = "<?= lang('Mastertag.fielddatas.code') ?>";
      var name = "<?= lang('Mastertag.fielddatas.name') ?>";
      var delimiter = "<?= lang('Mastertag.fielddatas.delimiter') ?>";
      var sortno = "<?= lang('Mastertag.fielddatas.sortno') ?>";
      var isshow = "<?= lang('Mastertag.fielddatas.isshow') ?>";
      var repeatable = "<?= lang('Mastertag.fielddatas.repeatable') ?>";

      var code1s = "<?= lang('Mastertag.fieldindicator1s.code') ?>";
      var name1s = "<?= lang('Mastertag.fieldindicator1s.name') ?>";
      var code2s = "<?= lang('Mastertag.fieldindicator2s.code') ?>";
      var name2s = "<?= lang('Mastertag.fieldindicator2s.name') ?>";

      $('#add').on("click",function(){  
           $('#dynamic_field').append('<div  id="row'+i+'">'+
                              '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="code">'+code+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fielddatas_code['+i+']" name="code['+i+']" placeholder="'+code+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+                              
                                    '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="name">'+name+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fielddatas_name['+i+']" name="fielddatas_name['+i+']" placeholder="'+name+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+
                                    '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="delimiter">'+delimiter+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fielddatas_delimiter['+i+']" name="delimiter['+i+']" placeholder="'+delimiter+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+                                    '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="sortno">'+sortno+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fielddatas_sortno['+i+']" name="sortno['+i+']" placeholder="'+sortno+'" value="" />'+
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
      
//dynamic field indicator 1
$('#add1s').on("click",function(){  
           $('#dynamic_field1s').append('<div  id="row1s'+i_1s+'">'+
                              '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="code1s">'+code1s+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fieldindicator1s_code['+i_1s+']" name="code1s['+i_1s+']" placeholder="'+code1s+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+                              
                                    '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="name1s">'+name1s+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fieldindicator1s_name['+i_1s+']" name="name1s['+i_1s+']" placeholder="'+name1s+'" value="" />'+
                                    '</div></div><button id="'+i_1s+'_1s" class="btn_remove1s btn btn-danger">x</button>'+
                                    '</div>');                                    
                        i_1s++;             
           
     });
     
     $(document).on('click', '.btn_remove1s', function(){  
           var button_id = parseInt($(this).attr("id")); 
           $('#row1s'+button_id+'').remove();  
           $('#'+button_id+'_1s').remove();  
           i_1s = i_1s -1;
      });  

//dynamic field indicator 2
$('#add2s').on("click",function(){  
           $('#dynamic_field2s').append('<div  id="row2s'+i_2s+'">'+
                              '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="code2s">'+code2s+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fieldindicator2s_code['+i_2s+']" name="code2s['+i_2s+']" placeholder="'+code2s+'" value="" />'+
                                    '</div>'+
                                    '</div>&nbsp;'+                              
                                    '<div class="form-group col-md-2" style="display: inline-block">'+
                                    '<label for="name2s">'+name2s+'</label>'+
                                    '<div>'+
                                    '<input type="text" class="form-control" id="frm_create_fieldindicator2s_name['+i_2s+']" name="name2s['+i_2s+']" placeholder="'+name2s+'" value="" />'+
                                    '</div></div><button id="'+i_2s+'_2s" class="btn_remove2s btn btn-danger">x</button>'+
                                    '</div>');                                    
                        i_2s++;             
           
     });
     
     $(document).on('click', '.btn_remove2s', function(){  
           var button_id = parseInt($(this).attr("id")); 
           $('#row2s'+button_id+'').remove();  
           $('#'+button_id+'_2s').remove();  
           i_2s = i_2s -1;
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


<?= $this->endSection('script'); ?>