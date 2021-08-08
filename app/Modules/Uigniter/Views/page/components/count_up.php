<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-signal icon-gradient bg-malibu-beach"></i>
                </div>
                <div>Count Up
                    <div class="page-title-subheading">Add animations to your numbers. It&#x27;ll make your next UIgniter app more user friendly.</div>
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
            <div class="col-lg-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Basic</h5>
                        <h3><span class="count-up-wrapper">568</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Numbers</h5>
                        <div class="text-center">
                            <h3>
                                <span class="count-up-wrapper-4"></span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 widget-chart">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-primary"></div>
                        <i class="lnr-cog text-primary"></i>
                    </div>
                    <div class="widget-numbers"><span class="count-up-wrapper-2"></span></div>
                    <div class="widget-subheading">Total Views</div>
                    <div class="widget-description text-success">
                        <i class="fa fa-angle-up"></i>
                        <span class="pl-1">
                            <span class="count-up-wrapper-3"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-success"></div>
                        <i class="lnr-screen text-success"></i>
                    </div>
                    <div class="widget-numbers"><span class="count-up-wrapper-2"></span></div>
                    <div class="widget-subheading">Profiles</div>
                    <div class="widget-description text-warning">
                        <span class="pr-1">
                            <span class="count-up-wrapper-3"></span>
                        </span>
                        <i class="fa fa-arrow-left"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-danger"></div>
                        <i class="lnr-laptop-phone text-danger"></i>
                    </div>
                    <div class="widget-numbers"><span class="count-up-wrapper-2"></span></div>
                    <div class="widget-subheading">Reports Submitted</div>
                    <div class="widget-description text-primary">
                        <span class="pr-1 count-up-wrapper-3"></span>
                        <i class="fa fa-angle-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>