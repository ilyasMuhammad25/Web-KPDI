<?php
    helper('app');
    $core = config('Core');
    $layout_blank = (!empty($core->layout_blank)) ? $core->layout_blank : 'hamkamannan\adminigniter\Views\layout\backend\blank';
?>

<?= $this->extend($layout_blank); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>
<div class="app-container">
    <div class="h-100 bg-corporate-primary bg-animation">
        <div class="d-flex h-100 justify-content-center align-items-center" style="background: url('<?=base_url('uploads/login.png')?>') no-repeat; background-attachment: fixed; background-position: 40% 100%;">
            <div class="mx-auto app-login-box col-md-8" style="opacity:0.90">
                <div class="app-logo-inverse mx-auto mb-3"></div>
                <div class="modal-dialog w-100 mx-auto" style="box-shadow:none;">
                    <div class="modal-content bg-corporate-secondary" style="border-radius: 60px; padding: 40px 20px; border:2px solid #225843">
                        <form class="" action="<?= route_to('login') ?>">
							<?= csrf_field() ?>

							<div class="text-center mb-3">
								<?php if (get_parameter('show-logo-login') == 1) : ?>
									<a href="<?= base_url() ?>"><img src="<?= base_url(get_parameter('logo')) ?>" width="200" class="mb-4" /></a>
								<?php endif; ?>

								<h3 class="mb-0 font-weight-bold" style="color:#fff"><?=get_parameter('site-name')?></h3>
							</div>

							<div class="modal-body">
								<div id="infoMessage">
									<?= view('Myth\Auth\Views\_message_block') ?>
								</div>

								<div class="form-row">
									<div class="col-md-12">
										<div class="position-relative form-group">
											<input type="text" class="form-control bg-corporate-secondary text-white form-control" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>" style="border: #fff solid 2px; border-radius: 30px; padding: 22px;">
										</div>
									</div>
									<div class="col-md-12">
										<div class="position-relative form-group">
											<input type="password" class="form-control bg-corporate-secondary text-white form-control" name="password"  placeholder="<?=lang('Auth.password')?>" style="border: #fff solid 2px; border-radius: 30px; padding: 22px;">
										</div>
									</div>
								</div>

								<div class="text-center">
									<button type="submit" class="btn bg-corporate-primary text-light btn-lg btn-block" style="border-radius: 25px; padding: 13px;">
										MASUK
									</button>
								<div>

								<div class="text-center mt-3">
									<a href="<?= route_to('forgot') ?>" class="text-white" style="font-weight-100 font-size:18px; text-decoration:none;">Lupa Kata Sandi</a>
								</div>

								<div class="divider"></div>

								<?php if ($config->allowRegistration) : ?>
								<div class="text-center">
									<a href="<?= route_to('register') ?>" class="text-white" style="font-weight:bold; font-size:18px; text-decoration:none;"><?=lang('Auth.needAnAccount')?> <?=lang('Auth.signUp')?></a>
								</div>
								<?php endif;?>
							</div>
                        </form>
                    </div>
                </div>
                <div class="text-center text-white opacity-8 mt-3"><?=get_parameter('site-copyright', '&copy; 2021 Adminigiter')?></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>