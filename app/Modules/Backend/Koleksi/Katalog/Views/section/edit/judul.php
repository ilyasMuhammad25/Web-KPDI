<?php 
	$title_arr = explode(";",($catalog->title));
	$title_a = $title_arr[0];
	$title_b = $title_arr[1]??'';
	$title_c = $title_arr[2]??'';
?>

<div class="row">
	<div class="col-md-12">
		<div id="accordion1" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0"> <i class="header-icon lnr-layers icon-gradient bg-primary"> </i> Judul</h5>
					</button>
				</div>
				<div data-parent="#accordion1" id="collapse1" class="collapse show" style="">
					<div class="card-body">
						<div class="form-group">
							<label for="title" class="col-form-label">Judul Utama</label>
							<input type="text" class="form-control" id="title" name="title[a]" placeholder="Judul Utama" value="<?=get_catalog_value($catalog->id,'245','$a','$')?>">
							<small id="title-feedback" class="text-danger"></small>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="title_child" class="col-form-label">Anak Judul</label>
									<input type="text" class="form-control" name="title[b]" placeholder="Anak Judul" value="<?=get_catalog_value($catalog->id,'245','$b','$')?>">
									<small id="child-title-feedback" class="text-danger"></small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="title_heldby" class="col-form-label">Penanggung Jawab</label>
									<input type="text" class="form-control" name="title[c]" placeholder="Penanggung Jawab" value="<?=get_catalog_value($catalog->id,'245','$c')?>">
									<small id="heldby-feedback" class="text-danger"></small>
								</div>
							</div>
						</div>
						<!-- <div id="title_previous_tbody">
							<div class="form-group title_previous_wrapper">
								<label for="title_previous" class="col-form-label">Judul Sebelumnya</label>
								<div class="input-group">
									<input type="text" class="form-control" name="title_previous[]" placeholder="Judul Sebelumnya" value="<?=get_catalog_value($catalog->id,'247','$a','$')?>">
									<small id="title_previous-feedback" class="text-danger"></small>
									<div class="input-group-append">
										<button class="btn btn-sm btn-light title_previous_btn_add" type="button" data-tbody="title_previous_tbody"><i class="fa fa-plus m-1"></i></button>
									</div>
								</div>
							</div>
						</div> -->

						<?php if($slug == 'rda'):?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div id="title_varian_tbody">
											<?php 
												$row_246 = get_catalog_ruas($catalog->id, '246')->value;
												$row_246_arr = explode('$',$row_246);
												$row_246_max = count($row_246_arr) - 1;
											?>
											<?php for($i=0; $i<$row_246_max; $i++):?>
												<div class="form-group title_varian_wrapper">
													<?php if($i == 0):?>
														<label for="title_varian" class="col-form-label">Variasi Bentuk Judul</label>
													<?php endif;?>
													<div class="input-group">
														<input type="text" class="form-control" name="title_varian[]" placeholder="Variasi Bentuk Judul" value="<?=trim(str_replace($i,'',$row_246_arr[$i+1]))?>">
														<small id="title_varian-feedback" class="text-danger"></small>
														<div class="input-group-append">
															<button class="btn btn-sm btn-light <?=($i > 0)?'title_varian_btn_remove':'title_varian_btn_add'?>" type="button" data-tbody="title_varian_tbody"><i class="fa <?=($i > 0)?'fa-minus':'fa-plus'?>  m-1"></i></button>
														</div>
													</div>
												</div>
											<?php endfor;?>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div id="title_original_tbody">
											<?php 
												$row_740 = get_catalog_ruas($catalog->id, '740')->value;
												$row_740_arr = explode('$',$row_740);
												$row_740_max = count($row_740_arr) - 1;
											?>
											<?php for($i=0; $i<$row_740_max; $i++):?>
												<div class="form-group title_original_wrapper">
													<?php if($i == 0):?>
														<label for="title_original" class="col-form-label">Variasi Bentuk Judul</label>
													<?php endif;?>
													<div class="input-group">
														<input type="text" class="form-control" name="title_original[]" placeholder="Variasi Bentuk Judul" value="<?=trim(str_replace($i,'',$row_740_arr[$i+1]))?>">
														<small id="title_original-feedback" class="text-danger"></small>
														<div class="input-group-append">
															<button class="btn btn-sm btn-light <?=($i > 0)?'title_original_btn_remove':'title_original_btn_add'?>" type="button" data-tbody="title_original_tbody"><i class="fa <?=($i > 0)?'fa-minus':'fa-plus'?>  m-1"></i></button>
														</div>
													</div>
												</div>
											<?php endfor;?>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="title_general" class="col-form-label">Judul Seragam</label>
								<input type="text" class="form-control" name="title_general" placeholder="Judul Seragam" value="<?=get_catalog_value($catalog->id,'830','$a')?>">
								<small id="title_general-feedback" class="text-danger"></small>
							</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>