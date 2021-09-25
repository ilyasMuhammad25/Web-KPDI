<?php
    helper('app');
    $core = config('Core');
    $layout_blank = (!empty($core->layout_blank)) ? $core->layout_blank : 'hamkamannan\adminigniter\Views\layout\backend\blank';
?>

<?= $this->extend($layout_blank); ?>
<?= $this->section('style'); ?>
<style>
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #fff;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #fff;
}
</style>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>
<div class="app-container">
    <div class="h-100 bg-corporate-primary bg-animation">
        <div class="d-flex h-100 justify-content-center align-items-center" style="background: url('<?=base_url('uploads/login.png')?>') no-repeat bottom center; z-index: -1">
            <div class="mx-auto col-md-8" style="opacity:0.90">
                <div class="app-logo-inverse mx-auto mb-3"></div>
                <div class="w-50 mx-auto">
                    <div class="modal-content bg-corporate-secondary" style="border-radius: 50px; padding: 60px; border:2px solid #225843">
                        <form class="" action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>

						<div class="text-center">
							<?php if (get_parameter('show-logo-login') == 1) : ?>
								<a href="<?= base_url() ?>"><img src="<?= base_url(get_parameter('logo')) ?>" width="250" class="mb-4" /></a>
							<?php endif; ?>

							<h3 class="mb-0 font-weight-bold" style="color:#fff">Backoffice INLIS Lite 4.0</h3>
						</div>
						

                        <div class="modal-body mt-3">
                            <div id="infoMessage">
                                <?= view('Myth\Auth\Views\_message_block') ?>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <input type="text" class="bg-corporate-secondary text-white form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>" style="border: #fff solid 2px; border-radius: 30px; padding: 20px;">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <input type="password" class="bg-corporate-secondary text-white form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" name="password"  placeholder="<?=lang('Auth.password')?>" style="border: #fff solid 2px; border-radius: 30px; padding: 20px;">
                                    </div>
                                </div>
                            </div>

                            <?php if ($config->allowRemembering): ?>
                            <div class="position-relative form-check">
                                <input name="remember" id="remember" type="checkbox" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
                                <label for="remember" class="form-check-label"><?=lang('Auth.rememberMe')?></label>
                            </div>
                            <?php endif; ?>

							<div class="text-center mt-3">
								<button type="submit" class="btn bg-corporate-primary text-light btn-lg btn-block" style="border-radius: 20px; padding: 10px;">
									MASUK
								</button>
							<div>

							<div class="text-center mt-3">
                                <a href="<?= route_to('forgot') ?>" class="text-white" style="font-weight-100 font-size:18px; text-decoration:none;">Lupa Kata Sandi</a>
                            </div>

                            <div class="divider"></div>

							<div class="text-center">
                                <a href="<?= route_to('forgot') ?>" class="text-white font-weight-bold" style="font-size:20px">DAFTAR</a>
                            </div>

							<div class="text-center">
                                <a href="<?= route_to('forgot') ?>" class="text-white font-weight-bold" style="font-size:20px;">BELUM PUNYA AKUN</a>
                            </div>
                            
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