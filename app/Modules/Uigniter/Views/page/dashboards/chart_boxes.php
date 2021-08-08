<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-star icon-gradient bg-ripe-malin"></i>
                </div>
                <div>Chart Boxes
                    <div class="page-title-subheading">These boxes can be used to show numbers and data in a breautiful user friendly way.</div>
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
                <span>Basic</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Colors</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span>Grids</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-3" data-toggle="tab" href="#tab-content-3">
                <span>Alignments</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-4" data-toggle="tab" href="#tab-content-4">
                <span>Progress Circle</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-primary"></div>
                                <i class="lnr-cog text-primary"></i>
                            </div>
                            <div class="widget-numbers"><span>46k</span></div>
                            <div class="widget-subheading">Total Views</div>
                            <div class="widget-description text-success">
                                <i class="fa fa-angle-up ">

                                </i>
                                <span class="pl-1"><span>176%</span></span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-chart-actions">
                                <div class="btn-group dropdown">
                                    <button type="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" class="btn btn-link">
                                        <i class="fa fa-ellipsis-h">

                                        </i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-primary">
                                                <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                                <div class="menu-header-content">
                                                    <div>
                                                        <h5 class="menu-header-title">Settings</h5>
                                                        <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                    </div>
                                                    <div class="menu-header-btn-pane">
                                                        <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                        <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-header nav-item">Activity</li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                </a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                            <li class="nav-item-header nav-item">My Account</li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                    <div class="ml-auto badge badge-success">New</div>
                                                </a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                    <div class="ml-auto badge badge-warning">512</div>
                                                </a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                            <li class="nav-item-divider nav-item"></li>
                                            <li class="nav-item-btn nav-item">
                                                <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-success"></div>
                                <i class="lnr-screen text-success"></i>
                            </div>
                            <div class="widget-numbers"><span>17k</span></div>
                            <div class="widget-subheading">Profiles</div>
                            <div class="widget-description text-warning"><span class="pr-1"><span>128%</span></span>
                                <i class="fa fa-arrow-left ">

                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-danger"></div>
                                <i class="lnr-laptop-phone text-danger"></i>
                            </div>
                            <div class="widget-numbers"><span>5,82k</span></div>
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                <i class="fa fa-angle-up ">

                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-info"></div>
                                <i class="lnr-graduation-hat text-info"></i>
                            </div>
                            <div class="widget-numbers"><span>62k</span></div>
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded">
                                <div class="icon-wrapper-bg bg-focus"></div>
                                <div class="center-svg">
                                    <i class="fa fa-arrow-right ">

                                    </i>
                                </div>
                            </div>
                            <div class="widget-numbers"><span>2,82k</span></div>
                            <div class="widget-subheading">Total Sales</div>
                            <div class="widget-description text-danger"><span class="pr-1">23.1%</span>
                                <i class="fa fa-angle-down ">

                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded">
                                <div class="icon-wrapper-bg bg-primary"></div>
                                <div class="center-svg">
                                    <i class="fa fa-angle-down ">

                                    </i>
                                </div>
                            </div>
                            <div class="widget-numbers"><span>32k</span></div>
                            <div class="widget-subheading">Follow-ups</div>
                            <div class="widget-description text-focus">
                                <i class="fa fa-arrow-left ">

                                </i>
                                <span class="pl-1">115.5%</span></div>
                        </div>
                    </div>
                </div>
                <div class="divider mt-0" style="margin-bottom: 30px;"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-numbers">1.2M</div>
                            <div class="widget-subheading">Leads Generated</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-ellipsis-h">

                                </i>
                                <span class="pl-1">115.5%</span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-chart-actions">
                                <div class="btn-group dropdown">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn btn-link">
                                        <i class="fa fa-ellipsis-h">

                                        </i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-primary">
                                                <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                                <div class="menu-header-content">
                                                    <div>
                                                        <h5 class="menu-header-title">Settings</h5>
                                                        <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                    </div>
                                                    <div class="menu-header-btn-pane">
                                                        <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                        <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-header nav-item">Activity</li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                </a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                            <li class="nav-item-header nav-item">My Account</li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                    <div class="ml-auto badge badge-success">New</div>
                                                </a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                    <div class="ml-auto badge badge-warning">512</div>
                                                </a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                            <li class="nav-item-divider nav-item"></li>
                                            <li class="nav-item-btn nav-item">
                                                <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-numbers">17.2k</div>
                            <div class="widget-subheading">Profiles</div>
                            <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                <i class="fa fa-arrow-left ">

                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                <i class="fa fa-angle-up ">

                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-numbers">3.47k</div>
                            <div class="widget-subheading">Users Active</div>
                            <div class="widget-description text-danger"><span class="pr-1">31.2%</span>
                                <i class="fa fa-angle-down ">

                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-numbers">3.7M</div>
                            <div class="widget-subheading">Lifetime Tickets</div>
                            <div class="widget-description text-warning">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">121.9%</span></div>
                        </div>
                    </div>
                </div>
                <div class="divider mt-0" style="margin-bottom: 30px;"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart card-hover-shadow-2x">
                            <div class="icon-wrapper border-light rounded">
                                <div class="icon-wrapper-bg bg-light"></div>
                                <i class="lnr-cog icon-gradient bg-night-fade"></i>
                            </div>
                            <div class="widget-numbers">45.8k</div>
                            <div class="widget-subheading">Total Views</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart card-hover-shadow-2x">
                            <div class="icon-wrapper border-light rounded">
                                <div class="icon-wrapper-bg bg-light"></div>
                                <i class="lnr-screen icon-gradient bg-ripe-malin"></i>
                            </div>
                            <div class="widget-numbers">17.2k</div>
                            <div class="widget-subheading">Profiles</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart card-hover-shadow-2x">
                            <div class="icon-wrapper border-light rounded">
                                <div class="icon-wrapper-bg bg-light"></div>
                                <i class="lnr-laptop-phone icon-gradient bg-arielle-smile"></i>
                            </div>
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-subheading">Reports Submitted</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart card-hover-shadow-2x">
                            <div class="icon-wrapper border-light rounded">
                                <div class="icon-wrapper-bg bg-light"></div>
                                <i class="lnr-graduation-hat icon-gradient bg-happy-itmeo"></i>
                            </div>
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-subheading">Bugs Fixed</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart card-hover-shadow-2x">
                            <div class="icon-wrapper border-light rounded-circle">
                                <div class="icon-wrapper-bg bg-light"></div>
                                <i class="lnr-lock icon-gradient bg-malibu-beach"> </i>
                            </div>
                            <div class="widget-numbers">1.5M</div>
                            <div class="widget-subheading">Views</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart card-hover-shadow-2x">
                            <div class="icon-wrapper border-light rounded">
                                <div class="icon-wrapper-bg bg-light"></div>
                                <i class="lnr-hourglass icon-gradient bg-love-kiss"> </i>
                            </div>
                            <div class="widget-numbers">1,584</div>
                            <div class="widget-subheading">Active Social Accounts</div>
                        </div>
                    </div>
                </div>
                <div class="divider mt-0" style="margin-bottom: 30px;"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-primary"></div>
                                <i class="lnr-cog text-primary"></i>
                            </div>
                            <div class="widget-numbers">45.8k</div>
                            <div class="widget-subheading">Total Views</div>
                            <div class="widget-description text-success">
                                <i class="fa fa-angle-up ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                            <div class="widget-progress-wrapper">
                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-success"></div>
                                <i class="lnr-screen text-success"></i>
                            </div>
                            <div class="widget-numbers">17.2k</div>
                            <div class="widget-subheading">Profiles</div>
                            <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                <i class="fa fa-arrow-left ">

                                </i>
                            </div>
                            <div class="widget-progress-wrapper">
                                <div class="progress-bar-xs progress-bar-animated-alt progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart card-border">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-danger"></div>
                                <i class="lnr-laptop-phone text-danger"></i>
                            </div>
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                <i class="fa fa-angle-up ">

                                </i>
                            </div>
                            <div class="widget-progress-wrapper progress-wrapper-bottom">
                                <div class="progress-bar-sm progress-bar-animated progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart card-border">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-info"></div>
                                <i class="lnr-graduation-hat text-info"></i>
                            </div>
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                            <div class="widget-progress-wrapper progress-wrapper-bottom">
                                <div class="progress-bar-xs progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-focus"></div>
                                <i class="pe-7s-bluetooth text-focus"></i>
                            </div>
                            <div class="widget-numbers">15.8k</div>
                            <div class="widget-subheading">Total Views</div>
                            <div class="widget-description"><span class="text-success"><i class="fa fa-angle-up "></i><span class="pl-1">54.1%</span></span>increase since last month
                            </div>
                            <div class="widget-progress-wrapper">
                                <div class="progress-bar-lg progress-bar-animated progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-warning"></div>
                                <i class="pe-7s-stopwatch text-warning"></i>
                            </div>
                            <div class="widget-numbers">17.2k</div>
                            <div class="widget-subheading">Profiles</div>
                            <div class="widget-description"><span class="text-success pl-1 pr-1"><i class="fa fa-angle-up " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"></i><span class="pl-1">77.5%</span></span>new sales leads
                            </div>
                            <div class="widget-progress-wrapper">
                                <div class="progress-bar-xs progress-bar-animated progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3 bg-primary widget-chart text-white card-border">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-white opacity-1"></div>
                            <i class="lnr-cog text-white"></i>
                        </div>
                        <div class="widget-numbers">45.8k</div>
                        <div class="widget-subheading">Total Views</div>
                        <div class="widget-description text-success">
                            <i class="fa fa-angle-up ">

                            </i>
                            <span class="pl-1">175.5%</span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-success widget-chart text-white card-border">
                        <div class="widget-chart-actions">
                            <div class="btn-group dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" class="text-white btn btn-link">
                                    <i class="fa fa-ellipsis-h">

                                    </i>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-primary">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                            <div class="menu-header-content">
                                                <div>
                                                    <h5 class="menu-header-title">Settings</h5>
                                                    <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn nav-item">
                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-white opacity-10"></div>
                            <i class="lnr-screen text-success"></i>
                        </div>
                        <div class="widget-numbers">17.2k</div>
                        <div class="widget-subheading">Profiles</div>
                        <div class="widget-description text-white"><span class="pr-1">175.5%</span>
                            <i class="fa fa-arrow-left ">

                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-warning widget-chart text-white card-border">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-white opacity-2"></div>
                            <i class="lnr-laptop-phone text-white"></i>
                        </div>
                        <div class="widget-numbers">5.82k</div>
                        <div class="widget-subheading">Reports Submitted</div>
                        <div class="widget-description text-white"><span class="pl-1">54.1%</span>
                            <i class="fa fa-angle-up ">

                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-focus widget-chart text-white card-border">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-info opacity-5"></div>
                            <i class="lnr-graduation-hat text-white"></i>
                        </div>
                        <div class="widget-numbers">63.2k</div>
                        <div class="widget-subheading">Bugs Fixed</div>
                        <div class="widget-description text-info">
                            <i class="fa fa-arrow-right ">

                            </i>
                            <span class="pl-1">175.5%</span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-danger widget-chart text-white card-border">
                        <div class="icon-wrapper rounded">
                            <div class="icon-wrapper-bg bg-white opacity-2"></div>
                            <i class="pe-7s-eyedropper text-white"></i>
                        </div>
                        <div class="widget-numbers">5.82k</div>
                        <div class="widget-subheading">Reports Submitted</div>
                        <div class="widget-description text-white"><span class="pl-1">54.1%</span>
                            <i class="fa fa-angle-up ">

                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-info widget-chart text-white card-border">
                        <div class="icon-wrapper rounded">
                            <div class="icon-wrapper-bg bg-focus opacity-5"></div>
                            <i class="pe-7s-photo text-white"></i>
                        </div>
                        <div class="widget-numbers">63.2k</div>
                        <div class="widget-subheading">Bugs Fixed</div>
                        <div class="widget-description text-white">
                            <i class="fa fa-arrow-right ">

                            </i>
                            <span class="pl-1">175.5%</span></div>
                    </div>
                </div>
            </div>
            <div class="divider mt-0" style="margin-bottom: 30px;"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3 bg-arielle-smile widget-chart text-white card-border">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-white opacity-10"></div>
                            <i class="lnr-cog icon-gradient bg-arielle-smile"></i>
                        </div>
                        <div class="widget-numbers">45.8k</div>
                        <div class="widget-subheading">Total Views</div>
                        <div class="widget-description text-dark">
                            <i class="fa fa-angle-up ">

                            </i>
                            <span class="pl-1">175.5%</span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-warm-flame widget-chart text-white card-border">
                        <div class="icon-wrapper rounded">
                            <div class="icon-wrapper-bg bg-white opacity-10"></div>
                            <i class="lnr-screen icon-gradient bg-warm-flame"></i>
                        </div>
                        <div class="widget-numbers">17.2k</div>
                        <div class="widget-subheading">Profiles</div>
                        <div class="widget-description text-white"><span class="pr-1">175.5%</span>
                            <i class="fa fa-arrow-left ">

                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-ripe-malin widget-chart text-white card-border">
                        <div class="icon-wrapper rounded">
                            <div class="icon-wrapper-bg bg-white opacity-2"></div>
                            <i class="lnr-laptop-phone text-white"></i>
                        </div>
                        <div class="widget-numbers">5.82k</div>
                        <div class="widget-subheading">Reports Submitted</div>
                        <div class="widget-description text-white"><span class="pl-1">54.1%</span>
                            <i class="fa fa-angle-up ">

                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-mixed-hopes widget-chart text-white card-border">
                        <div class="icon-wrapper rounded">
                            <div class="icon-wrapper-bg bg-dark opacity-9"></div>
                            <i class="lnr-graduation-hat text-white"></i>
                        </div>
                        <div class="widget-numbers">63.2k</div>
                        <div class="widget-subheading">Bugs Fixed</div>
                        <div class="widget-description text-dark">
                            <i class="fa fa-arrow-right ">

                            </i>
                            <span class="pl-1">175.5%</span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-grow-early widget-chart text-white card-border">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-white opacity-2"></div>
                            <i class="lnr-laptop-phone text-white"></i>
                        </div>
                        <div class="widget-numbers">5.82k</div>
                        <div class="widget-subheading">Reports Submitted</div>
                        <div class="widget-description text-white"><span class="pl-1">54.1%</span>
                            <i class="fa fa-angle-up ">

                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-plum-plate widget-chart text-white card-border">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-dark opacity-9"></div>
                            <i class="lnr-graduation-hat text-white"></i>
                        </div>
                        <div class="widget-numbers">63.2k</div>
                        <div class="widget-subheading">Bugs Fixed</div>
                        <div class="widget-description text-white opacity-8">
                            <i class="fa fa-arrow-right ">

                            </i>
                            <span class="pl-1">175.5%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <div class="row">
                <div class="col-lg-5">
                    <div class="main-card mb-3 card">
                        <div class="grid-menu grid-menu-2col">
                            <div class="no-gutters row">
                                <div class="col-sm-6">
                                    <div class="widget-chart">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-primary"></div>
                                            <i class="lnr-cog text-primary"></i>
                                        </div>
                                        <div class="widget-numbers">45.8k</div>
                                        <div class="widget-subheading">Total Views</div>
                                        <div class="widget-description text-success">
                                            <i class="fa fa-angle-up ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-chart">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-info"></div>
                                            <i class="lnr-graduation-hat text-info"></i>
                                        </div>
                                        <div class="widget-numbers">63.2k</div>
                                        <div class="widget-subheading">Bugs Fixed</div>
                                        <div class="widget-description text-info">
                                            <i class="fa fa-arrow-right ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-chart">
                                        <div class="widget-chart-actions">
                                            <div class="btn-group dropdown">
                                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn btn-link">
                                                    <i class="fa fa-ellipsis-h">
                                                    </i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-primary">
                                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                                            <div class="menu-header-content">
                                                                <div>
                                                                    <h5 class="menu-header-title">Settings</h5>
                                                                    <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                        <li class="nav-item-header nav-item">My Account</li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New</div>
                                                            </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512</div>
                                                            </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                                        <li class="nav-item-divider nav-item"></li>
                                                        <li class="nav-item-btn nav-item">
                                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-success"></div>
                                            <i class="lnr-screen text-success"></i>
                                        </div>
                                        <div class="widget-numbers">17.2k</div>
                                        <div class="widget-subheading">Profiles</div>
                                        <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                            <i class="fa fa-arrow-left ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-chart">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-danger"></div>
                                            <i class="lnr-laptop-phone text-danger"></i>
                                        </div>
                                        <div class="widget-numbers">5.82k</div>
                                        <div class="widget-subheading">Reports Submitted</div>
                                        <div class="widget-description text-primary"><span class="pl-1">54.1%</span>
                                            <i class="fa fa-angle-up ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="grid-menu grid-menu-2col">
                            <div class="no-gutters row">
                                <div class="col-sm-6">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-primary"></div>
                                            <i class="lnr-cog text-primary"></i>
                                        </div>
                                        <div class="widget-numbers">45.8k</div>
                                        <div class="widget-subheading">Total Views</div>
                                        <div class="widget-description text-success">
                                            <i class="fa fa-angle-up ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-info"></div>
                                            <i class="lnr-graduation-hat text-info"></i>
                                        </div>
                                        <div class="widget-numbers">63.2k</div>
                                        <div class="widget-subheading">Bugs Fixed</div>
                                        <div class="widget-description text-info">
                                            <i class="fa fa-arrow-right ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-danger"></div>
                                            <i class="lnr-laptop-phone text-danger"></i>
                                        </div>
                                        <div class="widget-numbers">5.82k</div>
                                        <div class="widget-subheading">Reports Submitted</div>
                                        <div class="widget-description text-primary"><span class="pl-1">54.1%</span>
                                            <i class="fa fa-angle-up ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bg-premium-dark widget-chart-hover widget-chart card-border br-br">
                                        <div class="widget-chart-content text-white">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg bg-success opacity-8"></div>
                                                <i class="lnr-screen"></i>
                                            </div>
                                            <div class="widget-numbers">17.2k</div>
                                            <div class="widget-subheading">Profiles</div>
                                            <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                                <i class="fa fa-arrow-left ">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="widget-chart-wrapper opacity-4">
                                            chart
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main-card mb-3 card">
                        <div class="grid-menu grid-menu-3col">
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-primary"></div>
                                            <i class="lnr-cog text-primary"></i>
                                        </div>
                                        <div class="widget-numbers">45.8k</div>
                                        <div class="widget-subheading">Total Views</div>
                                        <div class="widget-description text-success">
                                            <i class="fa fa-angle-up ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-info"></div>
                                            <i class="lnr-graduation-hat text-info"></i>
                                        </div>
                                        <div class="widget-numbers">63.2k</div>
                                        <div class="widget-subheading">Bugs Fixed</div>
                                        <div class="widget-description text-info">
                                            <i class="fa fa-arrow-right ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-info"></div>
                                            <i class="lnr-graduation-hat text-info"></i>
                                        </div>
                                        <div class="widget-numbers">63.2k</div>
                                        <div class="widget-subheading">Bugs Fixed</div>
                                        <div class="widget-description text-info">
                                            <i class="fa fa-arrow-right ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-danger"></div>
                                            <i class="lnr-laptop-phone text-danger"></i>
                                        </div>
                                        <div class="widget-numbers">5.82k</div>
                                        <div class="widget-subheading">Reports Submitted</div>
                                        <div class="widget-description text-primary"><span class="pl-1">54.1%</span>
                                            <i class="fa fa-angle-up ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart">
                                        <div class="widget-chart-actions">
                                            <div class="btn-group dropdown">
                                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn btn-link">
                                                    <i class="fa fa-ellipsis-h">
                                                    </i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-primary">
                                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                                            <div class="menu-header-content">
                                                                <div>
                                                                    <h5 class="menu-header-title">Settings</h5>
                                                                    <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                        <li class="nav-item-header nav-item">My Account</li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New</div>
                                                            </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512</div>
                                                            </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                                        <li class="nav-item-divider nav-item"></li>
                                                        <li class="nav-item-btn nav-item">
                                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-success"></div>
                                            <i class="lnr-screen text-success"></i>
                                        </div>
                                        <div class="widget-numbers">17.2k</div>
                                        <div class="widget-subheading">Profiles</div>
                                        <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                            <i class="fa fa-arrow-left ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-danger"></div>
                                            <i class="lnr-laptop-phone text-danger"></i>
                                        </div>
                                        <div class="widget-numbers">5.82k</div>
                                        <div class="widget-subheading">Reports Submitted</div>
                                        <div class="widget-description text-primary"><span class="pl-1">54.1%</span>
                                            <i class="fa fa-angle-up ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="grid-menu grid-menu-3col">
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-primary"></div>
                                            <i class="lnr-cog text-primary"></i>
                                        </div>
                                        <div class="widget-numbers">45.8k</div>
                                        <div class="widget-subheading">Total Views</div>
                                        <div class="widget-description text-success">
                                            <i class="fa fa-angle-up ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-info"></div>
                                            <i class="lnr-graduation-hat text-info"></i>
                                        </div>
                                        <div class="widget-numbers">63.2k</div>
                                        <div class="widget-subheading">Bugs Fixed</div>
                                        <div class="widget-description text-info">
                                            <i class="fa fa-arrow-right ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-info"></div>
                                            <i class="lnr-graduation-hat text-info"></i>
                                        </div>
                                        <div class="widget-numbers">63.2k</div>
                                        <div class="widget-subheading">Bugs Fixed</div>
                                        <div class="widget-description text-info">
                                            <i class="fa fa-arrow-right ">
                                            </i>
                                            <span class="pl-1">175.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-danger"></div>
                                            <i class="lnr-laptop-phone text-danger"></i>
                                        </div>
                                        <div class="widget-numbers">5.82k</div>
                                        <div class="widget-subheading">Reports Submitted</div>
                                        <div class="widget-description text-primary"><span class="pl-1">54.1%</span>
                                            <i class="fa fa-angle-up ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="widget-chart-actions">
                                            <button class="btn-icon btn-icon-only btn-link btn btn-warning">
                                                <div class="btn-icon-wrapper">
                                                    <i class="fa fa-arrow-left ">
                                                    </i>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-success"></div>
                                            <i class="lnr-screen text-success"></i>
                                        </div>
                                        <div class="widget-numbers">17.2k</div>
                                        <div class="widget-subheading">Profiles</div>
                                        <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                            <i class="fa fa-arrow-left ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="widget-chart widget-chart-hover">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg bg-danger"></div>
                                            <i class="lnr-laptop-phone text-danger"></i>
                                        </div>
                                        <div class="widget-numbers">5.82k</div>
                                        <div class="widget-subheading">Reports Submitted</div>
                                        <div class="widget-description text-primary"><span class="pl-1">54.1%</span>
                                            <i class="fa fa-angle-up ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-primary"></div>
                            <i class="lnr-cog text-primary"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Views</div>
                            <div class="widget-numbers">45.8k</div>
                            <div class="widget-description text-success">
                                <i class="fa fa-angle-up ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="widget-chart-actions">
                            <div class="btn-group dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn btn-link">
                                    <i class="fa fa-ellipsis-h">

                                    </i>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-primary">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                            <div class="menu-header-content">
                                                <div>
                                                    <h5 class="menu-header-title">Settings</h5>
                                                    <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn nav-item">
                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-success"></div>
                            <i class="lnr-screen text-success"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Profiles</div>
                            <div class="widget-numbers">17.2k</div>
                            <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                <i class="fa fa-arrow-left ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-danger"></div>
                            <i class="lnr-laptop-phone text-danger"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                <i class="fa fa-angle-up ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-info"></div>
                            <i class="lnr-graduation-hat text-info"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="lnr-laptop-phone text-dark opacity-8"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-numbers">2.5M</div>
                            <div class="widget-description text-danger"><span class="pr-1">21.8%</span>
                                <i class="fa fa-angle-down ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-focus"></div>
                            <i class="lnr-graduation-hat text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-numbers"><span>375</span></div>
                            <div class="widget-description opacity-8 text-focus">Down by<span class="text-success pl-1 pr-1"><i class="fa fa-angle-down "></i>
                                    <span class="pl-1">54.1%</span></span>from 30 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider mt-0" style="margin-bottom: 30px;"></div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Views</div>
                            <div class="widget-numbers">45.8k</div>
                            <div class="widget-description text-success">
                                <i class="fa fa-angle-up ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="widget-chart-actions">
                            <div class="btn-group dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn btn-link">
                                    <i class="fa fa-ellipsis-h">

                                    </i>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-primary">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                            <div class="menu-header-content">
                                                <div>
                                                    <h5 class="menu-header-title">Settings</h5>
                                                    <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn nav-item">
                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Profiles</div>
                            <div class="widget-numbers">17.2k</div>
                            <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                <i class="fa fa-arrow-left ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                <i class="fa fa-angle-up ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                <i class="fa fa-angle-up ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider mt-0" style="margin-bottom: 30px;"></div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart card-hover-shadow-2x text-left">
                        <div class="icon-wrapper border-light rounded">
                            <div class="icon-wrapper-bg bg-light"></div>
                            <i class="lnr-cog icon-gradient bg-night-fade"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-numbers">45.8k</div>
                            <div class="widget-subheading">Total Views</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart card-hover-shadow-2x text-left">
                        <div class="icon-wrapper border-light rounded">
                            <div class="icon-wrapper-bg bg-light"></div>
                            <i class="lnr-screen icon-gradient bg-ripe-malin"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-numbers">17.2k</div>
                            <div class="widget-subheading">Profiles</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart card-hover-shadow-2x text-left">
                        <div class="icon-wrapper border-light rounded">
                            <div class="icon-wrapper-bg bg-light"></div>
                            <i class="lnr-laptop-phone icon-gradient bg-arielle-smile"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-subheading">Reports Submitted</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart card-hover-shadow-2x text-left">
                        <div class="icon-wrapper border-light rounded">
                            <div class="icon-wrapper-bg bg-light"></div>
                            <i class="lnr-graduation-hat icon-gradient bg-happy-itmeo"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-subheading">Bugs Fixed</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart card-hover-shadow-2x text-left">
                        <div class="icon-wrapper border-light rounded">
                            <div class="icon-wrapper-bg bg-light"></div>
                            <i class="lnr-enter icon-gradient bg-grow-early"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-numbers">653</div>
                            <div class="widget-subheading">Reports Submitted</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart card-hover-shadow-2x text-left">
                        <div class="icon-wrapper border-light rounded">
                            <div class="icon-wrapper-bg bg-light"></div>
                            <i class="lnr-license icon-gradient bg-plum-plate"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-numbers">231</div>
                            <div class="widget-subheading">Bugs Fixed</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider mt-0" style="margin-bottom: 30px;"></div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-primary"></div>
                            <i class="lnr-cog text-primary"></i>
                        </div>
                        <div class="widget-numbers">45.8k</div>
                        <div class="widget-progress-wrapper progress-wrapper-bottom">
                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-success"></div>
                            <i class="lnr-screen text-success"></i>
                        </div>
                        <div class="widget-numbers">17.2k</div>
                        <div class="widget-progress-wrapper progress-wrapper-bottom">
                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-danger"></div>
                            <i class="lnr-laptop-phone text-danger"></i>
                        </div>
                        <div class="widget-numbers">5.82k</div>
                        <div class="widget-progress-wrapper progress-wrapper-bottom">
                            <div class="progress-bar-sm progress-bar-animated progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-info"></div>
                            <i class="lnr-graduation-hat text-info"></i>
                        </div>
                        <div class="widget-numbers">63.2k</div>
                        <div class="widget-progress-wrapper progress-wrapper-bottom">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left card-border">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-danger"></div>
                            <i class="lnr-laptop-phone text-danger"></i>
                        </div>
                        <div class="widget-numbers">5.82k</div>
                        <div class="widget-progress-wrapper progress-wrapper-bottom">
                            <div class="progress-bar-sm progress-bar-animated progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left card-border">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-info"></div>
                            <i class="lnr-graduation-hat text-info"></i>
                        </div>
                        <div class="widget-numbers">8.6M</div>
                        <div class="widget-progress-wrapper progress-wrapper-bottom">
                            <div class="progress-bar progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-4" role="tabpanel">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="progress-circle-wrapper">
                            <div class="circle-progress d-inline-block circle-progress-primary">
                                <small></small>
                            </div>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Views</div>
                            <div class="widget-numbers">45.8k</div>
                            <div class="widget-description text-success">
                                <i class="fa fa-angle-up ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="widget-chart-actions">
                            <div class="btn-group dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn btn-link">
                                    <i class="fa fa-ellipsis-h">

                                    </i>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-primary">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                            <div class="menu-header-content">
                                                <div>
                                                    <h5 class="menu-header-title">Settings</h5>
                                                    <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn nav-item">
                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="progress-circle-wrapper">
                            <div class="circle-progress d-inline-block circle-progress-success">
                                <small></small>
                            </div>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Profiles</div>
                            <div class="widget-numbers">17.2k</div>
                            <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                <i class="fa fa-arrow-left ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="progress-circle-wrapper">
                            <div class="circle-progress d-inline-block circle-progress-danger">
                                <small></small>
                            </div>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                <i class="fa fa-angle-up ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="progress-circle-wrapper">
                            <div class="circle-progress d-inline-block circle-progress-info">
                                <small></small>
                            </div>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="progress-circle-wrapper">
                            <div class="circle-progress d-inline-block circle-progress-alternate">
                                <small></small>
                            </div>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Reports Submitted</div>
                            <div class="widget-numbers">5.82k</div>
                            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                <i class="fa fa-angle-up ">

                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3 widget-chart text-left">
                        <div class="progress-circle-wrapper">
                            <div class="circle-progress d-inline-block circle-progress-dark">
                                <small></small>
                            </div>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bugs Fixed</div>
                            <div class="widget-numbers">63.2k</div>
                            <div class="widget-description text-info">
                                <i class="fa fa-arrow-right ">

                                </i>
                                <span class="pl-1">175.5%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>