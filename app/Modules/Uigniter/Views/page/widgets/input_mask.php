<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-global icon-gradient bg-happy-itmeo"></i>
                </div>
                <div>Input Mask
                    <div class="page-title-subheading">Add all kind of input masks for inputs for a better user experience.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        Buttons
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span>
                                        Inbox
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span>
                                        Book
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span>
                                        Picture
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a disabled class="nav-link disabled">
                                    <i class="nav-link-icon lnr-file-empty"></i>
                                    <span>
                                        File Disabled
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 text-right col-form-label">Date:</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                        </div>
                        <input class="form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" im-insert="false">

                    </div>
                    <small class="form-text text-muted">
                        data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy"
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 text-right col-form-label">Date 2:</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                        </div>
                        <input class="form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" im-insert="false">

                    </div>
                    <small class="form-text text-muted">
                        data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy"
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 text-right col-form-label">Currency:</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                        </div>
                        <input class="form-control input-mask-trigger" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" im-insert="true" style="text-align: right;">

                    </div>
                    <small class="form-text text-muted">
                        data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'"
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 text-right col-form-label">License plate:</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                        </div>
                        <input class="form-control input-mask-trigger" data-inputmask="'mask': '[9-]AAA-999'" im-insert="true">

                    </div>
                    <small class="form-text text-muted">
                        data-inputmask="'mask': '[9-]AAA-999'"
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 text-right col-form-label">Decimal:</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                        </div>
                        <input class="form-control input-mask-trigger" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" im-insert="true">

                    </div>
                    <small class="form-text text-muted">
                        data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true"
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 text-right col-form-label">IP address:</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                        </div>
                        <input class="form-control input-mask-trigger" id="ip" data-inputmask="'alias': 'ip'" im-insert="true">

                    </div>
                    <small class="form-text text-muted">
                        data-inputmask="'alias': 'ip'"
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 text-right col-form-label">Email address:</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                        </div>
                        <input class="form-control input-mask-trigger" id="email" data-inputmask="'alias': 'email'" im-insert="true">

                    </div>
                    <small class="form-text text-muted">
                        data-inputmask="'alias': 'email'"
                    </small>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection('page'); ?>