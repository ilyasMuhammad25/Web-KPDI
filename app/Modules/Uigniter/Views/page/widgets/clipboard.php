<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-phone icon-gradient bg-premium-dark"></i>
                </div>
                <div>Clipboard
                    <div class="page-title-subheading">You can copy/paste text with this React form widget.</div>
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
    <div>
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Text to Copy</h5>
                        <textarea rows="2" cols="10" id="clipboard-source" class="form-control">Write here the text that you are copying. This is a new text line!</textarea>
                    </div>
                </div>
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Input Group Copy</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" id="clipboard-source-2" value="Example text to copy!">
                            <div class="input-group-append">
                                <button type="button" data-clipboard-target="#clipboard-source-2" class="btn btn-primary clipboard-trigger">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Button Copy</h5>
                        <button type="button" data-clipboard-target="#clipboard-source" class="clipboard-trigger btn-shadow btn-pill btn-wide btn btn-primary">Copy to clipboard with button</button>
                    </div>
                </div>
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Copy from attribute</h5>
                        <button class="btn-shadow btn-pill btn-wide btn btn-success clipboard-trigger" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                            Copy to clipboard
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>