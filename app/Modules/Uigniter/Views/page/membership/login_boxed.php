<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-container">
    <div class="h-100 bg-plum-plate bg-animation">
        <div class="d-flex h-100 justify-content-center align-items-center">
            <div class="mx-auto app-login-box col-md-8">
                <div class="app-logo-inverse mx-auto mb-3"></div>
                <div class="modal-dialog w-100 mx-auto">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="h5 modal-title">Welcome back,<h6 class="mt-1 mb-0 opacity-8"><span>Please sign in to your account below.</span></h6>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form class="">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group"><input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group"><input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div>
                            </form>
                            <div class="divider"></div>
                            <h6 class="mb-0">No account? <a href="<?= base_url('uigniter/membership/register_boxed'); ?>" class="text-primary">Sign up now</a></h6>
                        </div>
                        <div class="modal-footer clearfix">
                            <div class="float-left"><a href="<?= base_url('uigniter/membership/forgot_password_boxed'); ?>" class="btn-lg btn btn-link">Recover Password</a></div>
                            <div class="float-right">
                                <button class="btn btn-primary btn-lg">Login to Dashboard</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center text-white opacity-8 mt-3">© 2020 AdminIgniter</div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>