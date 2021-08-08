<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-door-lock icon-gradient bg-night-fade"></i>
                </div>
                <div>Loading Blocks
                    <div class="page-title-subheading">Sometimes we need to show a loading indicator for some elements, like cards or tables.</div>
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
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Loading Blockers</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Available Loaders</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="card-title">Page Block Loading</div>
                            <div class="text-center">
                                <button class="btn btn-primary mr-2 mb-2 block-page-btn-example-1">
                                    Page Example 1
                                </button>
                                <button class="btn btn-primary mr-2 mb-2 block-page-btn-example-2">
                                    Page Example 2
                                </button>
                                <button class="btn btn-primary mb-2 block-page-btn-example-3">
                                    Page Example 3
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="card-title">Elements Block Loading</div>
                            <div class="text-center">
                                <button class="btn btn-primary mr-2 mb-2 block-element-btn-example-1">
                                    Elements Example 1
                                </button>
                                <button class="btn btn-primary mr-2 mb-2 block-element-btn-example-2">
                                    Elements Example 2
                                </button>
                                <button class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
                                    Elements Example 3
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-card mb-3 card element-block-example">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <p>With supporting text below as a natural lead-in to additional content.</p>
                    <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
                <div class="d-block text-right card-footer">
                    <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                    <button class="btn btn-success btn-lg">Save</button>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Basic</h5>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-pulse">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-pulse</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-grid-pulse">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-grid-pulse</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-clip-rotate">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-clip-rotate</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-clip-rotate-pulse">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-clip-rotate-pulse</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="square-spin">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>square-spin</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-clip-rotate-multiple">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-clip-rotate-multiple</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-pulse-rise">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-pulse-rise</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-rotate">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-rotate</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="cube-transition">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>cube-transition</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-zig-zag">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-zig-zag</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-zig-zag-deflect">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-zig-zag-deflect</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-triangle-path">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-triangle-path</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-scale">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-scale</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="line-scale">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>line-scale</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="line-scale-party">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>line-scale-party</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-scale-multiple">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-scale-multiple</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-pulse-sync">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-pulse-sync</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-beat">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-beat</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="line-scale-pulse-out">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>line-scale-pulse-out</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="line-scale-pulse-out-rapid">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>line-scale-pulse-out-rapid</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-scale-ripple">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-scale-ripple</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-scale-ripple-multiple">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-scale-ripple-multiple</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-spin-fade-loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-spin-fade-loader</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="line-spin-fade-loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>line-spin-fade-loader</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="triangle-skew-spin">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>angle-skew-spin</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="pacman">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>pacman</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-grid-beat">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-grid-beat</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="semi-circle-spin">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <p>semi-circle-spin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Colors</h5>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-pulse">
                                            <div style="background-color: rgb(63, 106, 216);"></div>
                                            <div style="background-color: rgb(63, 106, 216);"></div>
                                            <div style="background-color: rgb(63, 106, 216);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-pulse</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-grid-pulse">
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                            <div style="background-color: rgb(120, 195, 251);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-grid-pulse</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-clip-rotate">
                                            <div style="background-color: rgb(68, 64, 84);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-clip-rotate</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-scale-multiple">
                                            <div style="background-color: rgb(121, 76, 138);"></div>
                                            <div style="background-color: rgb(121, 76, 138);"></div>
                                            <div style="background-color: rgb(121, 76, 138);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-scale-multiple</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="square-spin">
                                            <div style="background-color: rgb(246, 92, 162);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>square-spin</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-pulse-rise">
                                            <div style="background-color: rgb(253, 126, 20);"></div>
                                            <div style="background-color: rgb(253, 126, 20);"></div>
                                            <div style="background-color: rgb(253, 126, 20);"></div>
                                            <div style="background-color: rgb(253, 126, 20);"></div>
                                            <div style="background-color: rgb(253, 126, 20);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-pulse-rise</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-rotate">
                                            <div style="background-color: rgb(247, 185, 36);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-rotate</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="cube-transition">
                                            <div style="background-color: rgb(58, 196, 125);"></div>
                                            <div style="background-color: rgb(58, 196, 125);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>cube-transition</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-zig-zag">
                                            <div style="background-color: rgb(22, 224, 189);"></div>
                                            <div style="background-color: rgb(22, 224, 189);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-zig-zag</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-zig-zag-deflect">
                                            <div style="background-color: rgb(40, 176, 205);"></div>
                                            <div style="background-color: rgb(40, 176, 205);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-zig-zag-deflect</p>
                            </div>
                            <div class="font-icon-wrapper float-left mr-3 mb-3">
                                <div class="loader-wrapper d-flex justify-content-center align-items-center">
                                    <div class="loader">
                                        <div class="ball-triangle-path">
                                            <div style="background-color: rgb(196, 207, 218);"></div>
                                            <div style="background-color: rgb(196, 207, 218);"></div>
                                            <div style="background-color: rgb(196, 207, 218);"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>ball-triangle-path</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>