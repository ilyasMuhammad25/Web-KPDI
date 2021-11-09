<?php
	$request = \Config\Services::request();
	$request->uri->setSilent();
	$is_rda = $request->getVar('rda') == 1;
?>
	
<div class="row">
	<div class="col-md-12">
		<div id="accordion4" class="accordion-wrapper mb-3">
			<div class="card">
				<div class="card-header-tab card-header">
					<button type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse_madatory" class="text-left m-0 p-0 btn btn-link">
						<h5 class="m-0 p-0"> <i class="header-icon lnr-layers icon-gradient bg-primary"> </i> Deskripsi Fisik</h5>
					</button>
				</div>
				<div data-parent="#accordion4" id="collapse4" class="collapse show" style="">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Jumlah Halaman</label>
									<input type="text" class="form-control description" name="description_physical[a]" placeholder="Jumlah Halaman" value="<?=get_catalog_value($catalog->id,'300','$a','$')?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Jenis Media</label>
									<input type="text" class="form-control description" name="description_physical[b]" placeholder="Ket. Ilustrasi" value="<?=get_catalog_value($catalog->id,'300','$b','$')?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Dimensi</label>
									<input type="text" class="form-control description" name="description_physical[c]" placeholder="Dimensi" value="<?=get_catalog_value($catalog->id,'300','$c','$')?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">BIB Bahan Sertaan</label>
									<input type="text" class="form-control description" name="description_physical[e]" placeholder="BIB Bahan Sertaan" value="<?=get_catalog_value($catalog->id,'300','$e','$')?>">
								</div>
							</div>
							<?php if($slug == 'rda'):?>
								<div class="col-md-4">
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Jenis Isi</label>
										<input type="text" class="form-control description" name="description_physical[a]" placeholder="Jenis Isi" value="<?=get_catalog_value($catalog->id,'000','$a','$')?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Jenis Media</label>
										<input type="text" class="form-control description" name="description_physical[b]" placeholder="Jenis Media" value="<?=get_catalog_value($catalog->id,'000','$a','$')?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Jenis Wadah</label>
										<input type="text" class="form-control description" name="description_physical[c]" placeholder="Jenis Wadah" value="<?=get_catalog_value($catalog->id,'000','$a','$')?>">
									</div>
								</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>