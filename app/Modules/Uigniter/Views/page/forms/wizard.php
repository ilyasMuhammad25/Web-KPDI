<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-map text-info"></i>
                </div>
                <div>Forms Wizard
                    <div class="page-title-subheading">Easily create beautiful form multi step wizards!</div>
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
                <span>Variation 1</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Variation 2</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span>Variation 3</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">

                            <div id="smartwizard">
                                <ul class="forms-wizard">
                                    <li>
                                        <a href="#step-1">
                                            <em>1</em><span>Account Information</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <em>2</em><span>Payment Information</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <em>3</em><span>Finish Wizard</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="form-wizard-content">
                                    <div id="step-1">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleEmail55">Email</label><input name="email" id="exampleEmail55" placeholder="with a placeholder" type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="examplePassword22">Password</label><input name="password" id="examplePassword22" placeholder="password placeholder" type="password" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-group"><label for="exampleAddress">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="exampleAddress2">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleCity">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group"><label for="exampleState">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="position-relative form-group"><label for="exampleZip">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
                                    </div>
                                    <div id="step-2">
                                        <div id="accordion" class="accordion-wrapper mb-3">
                                            <div class="card">
                                                <div id="headingOne" class="card-header">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                        <span class="form-heading">Account Information<p>Enter your user informations below</p></span>
                                                    </button>
                                                </div>
                                                <div data-parent="#accordion" id="collapseOne" aria-labelledby="headingOne" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail2">Email</label>
                                                                    <input name="email" id="exampleEmail2" placeholder="with a placeholder" type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="examplePassword">Password</label>
                                                                    <input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="exampleAddress">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleAddress2">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control"></div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group"><label for="exampleCity">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group"><label for="exampleState">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="position-relative form-group"><label for="exampleZip">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <div class="no-results">
                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                <span class="swal2-success-line-tip"></span>
                                                <span class="swal2-success-line-long"></span>
                                                <div class="swal2-success-ring"></div>
                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                            </div>
                                            <div class="results-subtitle mt-4">Finished!</div>
                                            <div class="results-title">You arrived at the last form wizard step!</div>
                                            <div class="mt-3 mb-3"></div>
                                            <div class="text-center">
                                                <button class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="clearfix">
                                <button type="button" id="reset-btn" class="btn-shadow float-left btn btn-link">Reset</button>
                                <button type="button" id="next-btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                                <button type="button" id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="main-card mb-3 card">
                        <div class="card-header">ToDo List</div>
                        <ul class="todo-list-wrapper list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="todo-indicator bg-warning"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label></div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Wash the car
                                                <div class="badge badge-danger ml-2">Rejected</div>
                                            </div>
                                            <div class="widget-subheading"><i>Written by Bob</i></div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-focus"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox1">&nbsp;</label></div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Task with hover dropdown menu</div>
                                            <div class="widget-subheading">
                                                <div>By Johnny
                                                    <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <div class="d-inline-block dropdown">
                                                <button type="button" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                    <i class="fa fa-ellipsis-h">
                                                    </i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-primary"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label></div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Badge on the right task</div>
                                            <div class="widget-subheading">This task has show on hover actions!</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check">
                                                </i>
                                            </button>
                                        </div>
                                        <div class="widget-content-right ml-3">
                                            <div class="badge badge-pill badge-success">Latest Task</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-info"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label></div>
                                        </div>
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left"><img width="42" class="rounded" src="<?= base_url('themes/uigniter'); ?>/images/avatars/1.jpg" alt="" /></div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Go grocery shopping</div>
                                            <div class="widget-subheading">A short description for this todo item</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-success"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label></div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Development Task</div>
                                            <div class="widget-subheading">Finish React ToDo List App</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="badge badge-warning mr-2">69</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check">
                                                </i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                <i class="fa fa-trash-alt">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="d-block text-right card-footer">
                            <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                            <button class="btn btn-success btn-lg">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Chat Box</div>
                        <div class="scroll-area-sm">
                            <div class="scrollbar-container ps ps--active-y">
                                <div class="chat-wrapper p-1">
                                    <div class="chat-box-wrapper">
                                        <div>
                                            <div class="avatar-icon-wrapper mr-1">
                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon avatar-icon-lg rounded"><img src="<?= base_url('themes/uigniter'); ?>/images/avatars/1.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="chat-box">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</div>
                                            <small class="opacity-6">
                                                <i class="fa-calendar-alt mr-1">
                                                </i>
                                                11:01 AM | Yesterday
                                            </small>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                            <div>
                                                <div class="chat-box">Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</div>
                                                <small class="opacity-6">
                                                    <i class="fa-calendar-alt mr-1">
                                                    </i>
                                                    11:01 AM | Yesterday
                                                </small>
                                            </div>
                                            <div>
                                                <div class="avatar-icon-wrapper ml-1">
                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                    <div class="avatar-icon avatar-icon-lg rounded"><img src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-box-wrapper">
                                        <div>
                                            <div class="avatar-icon-wrapper mr-1">
                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon avatar-icon-lg rounded"><img src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="chat-box">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</div>
                                            <small class="opacity-6">
                                                <i class="fa-calendar-alt mr-1">
                                                </i>
                                                11:01 AM | Yesterday
                                            </small>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                            <div>
                                                <div class="chat-box">Denouncing pleasure and praising pain was born and I will give you a complete account.</div>
                                                <small class="opacity-6">
                                                    <i class="fa-calendar-alt mr-1">
                                                    </i>
                                                    11:01 AM | Yesterday
                                                </small>
                                            </div>
                                            <div>
                                                <div class="avatar-icon-wrapper ml-1">
                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                    <div class="avatar-icon avatar-icon-lg rounded"><img src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                            <div>
                                                <div class="chat-box">The master-builder of human happiness.</div>
                                                <small class="opacity-6">
                                                    <i class="fa-calendar-alt mr-1">
                                                    </i>
                                                    11:01 AM | Yesterday
                                                </small>
                                            </div>
                                            <div>
                                                <div class="avatar-icon-wrapper ml-1">
                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                    <div class="avatar-icon avatar-icon-lg rounded"><img src="<?= base_url('themes/uigniter'); ?>/images/avatars/3.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"><input placeholder="Write here and hit enter to send..." type="text" class="form-control-lg form-control"></div>
                    </div>
                    <div class="card-shadow-primary card-border mb-3 card">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-info">
                                <div class="menu-header-image opacity-2" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                <div class="menu-header-content btn-pane-right">
                                    <div class="avatar-icon-wrapper mr-2 avatar-icon-xl">
                                        <div class="avatar-icon rounded"><img src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt="Avatar 5"></div>
                                    </div>
                                    <div>
                                        <h5 class="menu-header-title">Jessica Walberg</h5>
                                    </div>
                                    <div class="menu-header-btn-pane">
                                        <button class="ladda-button btn btn-pill btn-dark" data-style="slide-right"><span class="ladda-label">Load Click</span><span class="ladda-spinner"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content">
                                    <div class="text-center">
                                        <h5 class="widget-heading opacity-4">March Totals</h5>
                                        <h5><span class="pr-2"><b class="text-danger">12</b> new leads,</span><span><b class="text-success">$56.24</b> in sales</span>
                                        </h5>
                                    </div>
                                </div>
                            </li>
                            <li class="p-0 list-group-item">
                                <div class="grid-menu grid-menu-2col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>View Profile</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>Leads Generated</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div id="smartwizard2" class="forms-wizard-alt">
                                <ul class="forms-wizard">
                                    <li>
                                        <a href="#step-12">
                                            <em>1</em><span>Account Information</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-22">
                                            <em>2</em><span>Payment Information</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-32">
                                            <em>3</em><span>Finish Wizard</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="form-wizard-content">
                                    <div id="step-12">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleEmail55">Email</label><input name="email" id="exampleEmail55" placeholder="with a placeholder" type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="examplePassword22">Password</label><input name="password" id="examplePassword22" placeholder="password placeholder" type="password" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-group"><label for="exampleAddress">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="exampleAddress2">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleCity">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group"><label for="exampleState">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="position-relative form-group"><label for="exampleZip">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
                                    </div>
                                    <div id="step-22">
                                        <div id="accordion" class="accordion-wrapper mb-3">
                                            <div class="card">
                                                <div id="headingTwo" class="b-radius-0 card-header">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                                        <span class="form-heading">Credit Card Informations<p>Enter your user informations below</p></span>
                                                    </button>
                                                </div>
                                                <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="position-relative form-group"><label for="exampleEmail3">Plain Text (Static)</label>
                                                            <p class="form-control-plaintext">Some plain text/ static value</p>
                                                        </div>
                                                        <div class="position-relative form-group"><label for="exampleEmail4">Email</label><input name="email" id="exampleEmail4" placeholder="with a placeholder" type="email" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="examplePassword">Password</label><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleUrl">Url</label><input name="url" id="exampleUrl" placeholder="url placeholder" type="url" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleNumber">Number</label><input name="number" id="exampleNumber" placeholder="number placeholder" type="number" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleDatetime">Datetime</label><input name="datetime" id="exampleDatetime" placeholder="datetime placeholder" type="datetime" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleDate">Date</label><input name="date" id="exampleDate" placeholder="date placeholder" type="date" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleTime">Time</label><input name="time" id="exampleTime" placeholder="time placeholder" type="time" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleColor">Color</label><input name="color" id="exampleColor" placeholder="color placeholder" type="color" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-32">
                                        <div class="no-results">
                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                <span class="swal2-success-line-tip"></span>
                                                <span class="swal2-success-line-long"></span>
                                                <div class="swal2-success-ring"></div>
                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                            </div>
                                            <div class="results-subtitle mt-4">Finished!</div>
                                            <div class="results-title">You arrived at the last form wizard step!</div>
                                            <div class="mt-3 mb-3"></div>
                                            <div class="text-center">
                                                <button class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="clearfix">
                                <button type="button" id="reset-btn2" class="btn-shadow float-left btn btn-link">Reset</button>
                                <button type="button" id="next-btn2" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                                <button type="button" id="prev-btn2" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div id="smartwizard3" class="forms-wizard-vertical">
                        <ul class="forms-wizard">
                            <li>
                                <a href="#step-122">
                                    <em>1</em><span>Account Information</span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-222">
                                    <em>2</em><span>Payment Information</span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-322">
                                    <em>3</em><span>Finish Wizard</span>
                                </a>
                            </li>
                        </ul>
                        <div class="form-wizard-content">
                            <div id="step-122">
                                <div class="card-body">
                                    <div class="position-relative form-group"><label for="exampleEmail5">Input without validation</label><input type="text" class="form-control">
                                        <div class="invalid-feedback">You will not be able to see this</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                    <div class="position-relative form-group"><label for="exampleEmail6">Valid input</label><input type="text" class="is-valid form-control">
                                        <div class="valid-feedback">Sweet! that name is available</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                    <div class="position-relative form-group"><label for="examplePassword">Invalid input</label><input type="text" class="is-invalid form-control">
                                        <div class="invalid-feedback">Oh noes! that name is already taken</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                    <div class="position-relative form-group"><label for="exampleEmail7">Input without validation</label><input type="text" class="form-control">
                                        <div class="invalid-tooltip">You will not be able to see this</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                    <div class="position-relative form-group"><label for="exampleEmail">Valid input</label><input type="text" class="is-valid form-control">
                                        <div class="valid-tooltip">Sweet! that name is available</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                    <div class="position-relative form-group"><label for="examplePassword">Invalid input</label><input type="text" class="is-invalid form-control">
                                        <div class="invalid-tooltip">Oh noes! that name is already taken</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                </div>
                            </div>
                            <div id="step-222">
                                <div id="accordion" class="accordion-wrapper mb-3">
                                    <div class="card">
                                        <div id="headingTwo" class="b-radius-0 card-header">
                                            <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                                <span class="form-heading">Credit Card Informations<p>Enter your user informations below</p></span>
                                            </button>
                                        </div>
                                        <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                            <div class="card-body">
                                                <div class="position-relative form-group"><label for="exampleEmail3">Plain Text (Static)</label>
                                                    <p class="form-control-plaintext">Some plain text/ static value</p>
                                                </div>
                                                <div class="position-relative form-group"><label for="exampleEmail4">Email</label><input name="email" id="exampleEmail4" placeholder="with a placeholder" type="email" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="examplePassword">Password</label><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="exampleUrl">Url</label><input name="url" id="exampleUrl" placeholder="url placeholder" type="url" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="exampleNumber">Number</label><input name="number" id="exampleNumber" placeholder="number placeholder" type="number" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="exampleDatetime">Datetime</label><input name="datetime" id="exampleDatetime" placeholder="datetime placeholder" type="datetime" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="exampleDate">Date</label><input name="date" id="exampleDate" placeholder="date placeholder" type="date" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="exampleTime">Time</label><input name="time" id="exampleTime" placeholder="time placeholder" type="time" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="exampleColor">Color</label><input name="color" id="exampleColor" placeholder="color placeholder" type="color" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-322">
                                <div class="no-results">
                                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                        <span class="swal2-success-line-tip"></span>
                                        <span class="swal2-success-line-long"></span>
                                        <div class="swal2-success-ring"></div>
                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                    </div>
                                    <div class="results-subtitle mt-4">Finished!</div>
                                    <div class="results-title">You arrived at the last form wizard step!</div>
                                    <div class="mt-3 mb-3"></div>
                                    <div class="text-center">
                                        <button class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="clearfix">
                        <button type="button" id="reset-btn22" class="btn-shadow float-left btn btn-link">Reset</button>
                        <button type="button" id="next-btn22" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                        <button type="button" id="prev-btn22" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>