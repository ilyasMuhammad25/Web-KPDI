<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
                </div>
                <div>CRM Dashboard
                    <div class="page-title-subheading">Examples of just how powerful UIgniter really is!</div>
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
    <div class="tabs-animation">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Orders</div>
                                <div class="widget-subheading">Last year expenses</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">1896</div>
                            </div>
                        </div>
                        <div class="widget-progress-wrapper">
                            <div class="progress-bar-sm progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                            </div>
                            <div class="progress-sub-label">
                                <div class="sub-label-left">YoY Growth</div>
                                <div class="sub-label-right">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Products Sold</div>
                                <div class="widget-subheading">Revenue streams</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning">$3M</div>
                            </div>
                        </div>
                        <div class="widget-progress-wrapper">
                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                            </div>
                            <div class="progress-sub-label">
                                <div class="sub-label-left">Sales</div>
                                <div class="sub-label-right">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Followers</div>
                                <div class="widget-subheading">People Interested</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-danger">45,9%</div>
                            </div>
                        </div>
                        <div class="widget-progress-wrapper">
                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%;"></div>
                            </div>
                            <div class="progress-sub-label">
                                <div class="sub-label-left">Twitter Progress</div>
                                <div class="sub-label-right">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Income</div>
                                <div class="widget-subheading">Expected totals</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-focus">$147</div>
                            </div>
                        </div>
                        <div class="widget-progress-wrapper">
                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                            </div>
                            <div class="progress-sub-label">
                                <div class="sub-label-left">Expenses</div>
                                <div class="sub-label-right">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-6">
                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers">
                                            <div class="widget-chart-flex">
                                                <div class="fsize-4">
                                                    <small class="opacity-5">$</small>
                                                    <span>874</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="widget-subheading mb-0 opacity-5">sales last month</h6>
                                </div>
                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                    <div class="col-md-9">
                                        <div id="dashboard-sparklines-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-6">
                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers">
                                            <div class="widget-chart-flex">
                                                <div class="fsize-4">
                                                    <small class="opacity-5">$</small>
                                                    <span>1283</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6>
                                </div>
                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                    <div class="col-md-9">
                                        <div id="dashboard-sparklines-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-6">
                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers">
                                            <div class="widget-chart-flex">
                                                <div class="fsize-4">
                                                    <small class="opacity-5">$</small>
                                                    <span>1286</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="widget-subheading mb-0 opacity-5">last month sales</h6>
                                </div>
                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                    <div class="col-md-9">
                                        <div id="dashboard-sparklines-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-6">
                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers">
                                            <div class="widget-chart-flex">
                                                <div class="fsize-4">
                                                    <small class="opacity-5">$</small>
                                                    <span>564</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6>
                                </div>
                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                    <div class="col-md-9">
                                        <div id="dashboard-sparklines-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                            Bandwidth Reports
                        </div>
                        <div class="btn-actions-pane-right text-capitalize">
                            <button class="btn-wide btn-outline-2x btn btn-outline-primary btn-sm">View All</button>
                        </div>
                    </div>
                    <div class="pt-2 pb-0 card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget-content mt-2">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers fsize-3 text-alternate">61%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-alternate" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Server Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-content mt-2">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers fsize-3 text-danger">71%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Income Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-chart p-0">
                        <div id="dashboard-sparklines-primary"></div>
                    </div>
                    <div class="divider mb-0"></div>
                    <div class="grid-menu grid-menu-2col">
                        <div class="no-gutters row">
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                    <i class="lnr-lighter text-success opacity-7 btn-icon-wrapper mb-2"> </i>
                                    Accounts
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-alternate">
                                    <i class="lnr-gift text-alternate opacity-7 btn-icon-wrapper mb-2"> </i>
                                    Services
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-dice mr-3 text-muted opacity-6"> </i>Easy Dynamic Tables</div>
                <div class="btn-actions-pane-right actions-icon-btn">
                    <div class="btn-group dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                            <i class="pe-7s-menu btn-icon-wrapper"></i>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <div class="p-3 text-right">
                                <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table data-toggle="table" data-url="https://api.github.com/users/wenzhixin/repos?type=owner&sort=full_name&direction=asc&per_page=10&page=1" data-sort-name="stargazers_count" data-sort-order="desc">
                    <thead>
                        <tr>
                            <th data-field="name" data-sortable="true">
                                Name
                            </th>
                            <th data-field="stargazers_count" data-sortable="true">
                                Stars
                            </th>
                            <th data-field="forks_count" data-sortable="true">
                                Forks
                            </th>
                            <th data-field="description" data-sortable="true">
                                Description
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="card-hover-shadow-2x mb-3 card-btm-border card-shadow-primary border-primary card">
                            <div class="rm-border pb-0 mt-sm-3 responsive-center card-header">
                                <div>
                                    <h5 class="menu-header-title text-capitalize fsize-2 text-muted text-left opacity-6">Received Messages</h5>
                                </div>
                            </div>
                            <div class="widget-chart widget-chart2 text-left p-0">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content pt-3 pr-3 pl-5">
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers">
                                                <div class="widget-chart-flex">
                                                    <div class="text-primary"><span>348</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-3 m-0 p-1">
                                        <div id="dashboard-sparkline-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="card-hover-shadow-2x mb-3 card-btm-border card-shadow-danger border-danger card">
                            <div class="rm-border pb-0 mt-sm-3 responsive-center card-header">
                                <div>
                                    <h5 class="menu-header-title text-capitalize fsize-2 text-muted text-left opacity-6">Sent Messages</h5>
                                </div>
                            </div>
                            <div class="widget-chart widget-chart2 text-left p-0">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content pt-3 pr-3 pl-5">
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers">
                                                <div class="widget-chart-flex">
                                                    <div class="text-danger"><span>425</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-3 m-0 p-1">
                                        <div id="dashboard-sparkline-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Sales Report
                        </div>
                        <div class="btn-actions-pane-right text-capitalize">
                            <button class="btn-wide btn-outline-2x btn btn-outline-success btn-sm">View All</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab-eg-11">
                                <div class="card mb-3 widget-chart widget-chart2 text-left p-0">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pr-3 pl-3">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div>
                                                            <small class="opacity-5">$</small>
                                                            <span>368</span></div>
                                                        <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">Total Leads</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                            <div id="dashboard-sparkline-carousel-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top Authors</h6>
                                <div class="scroll-area-sm">
                                    <div class="scrollbar-container">
                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/9.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Ella-Rose Henry</div>
                                                            <div class="widget-subheading">Web Developer</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="font-size-xlg text-muted">
                                                                <small class="opacity-5 pr-1">$</small>
                                                                <span>129</span>
                                                                <small class="text-danger pl-2">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/5.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Ruben Tillman</div>
                                                            <div class="widget-subheading">UI Designer</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="font-size-xlg text-muted">
                                                                <small class="opacity-5 pr-1">$</small>
                                                                <span>54</span>
                                                                <small class="text-success pl-2">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/4.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Vinnie Wagstaff</div>
                                                            <div class="widget-subheading">Java Programmer</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="font-size-xlg text-muted">
                                                                <small class="opacity-5 pr-1">$</small>
                                                                <span>429</span>
                                                                <small class="text-warning pl-2">
                                                                    <i class="fa fa-dot-circle"></i>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/3.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Ella-Rose Henry</div>
                                                            <div class="widget-subheading">Web Developer</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="font-size-xlg text-muted">
                                                                <small class="opacity-5 pr-1">$</small>
                                                                <span>129</span>
                                                                <small class="text-danger pl-2">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Ruben Tillman</div>
                                                            <div class="widget-subheading">UI Designer</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="font-size-xlg text-muted">
                                                                <small class="opacity-5 pr-1">$</small>
                                                                <span>54</span>
                                                                <small class="text-success pl-2">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Last Month Top Seller</h6>
                                <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/8.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">UI Designer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>54</span>
                                                        <small class="text-success pl-2">
                                                            <i class="fa fa-angle-up">
                                                            </i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3">
            <h5 class="menu-header-title text-capitalize mb-3 fsize-3">Cards</h5>
            <div role="group" class="mb-3 btn-group-sm btn-group">
                <button class="btn-shadow  btn btn-dark">Hour</button>
                <button class="btn-hover-shine  btn btn-dark">Day</button>
                <button class="btn-hover-shine  btn btn-dark">Week</button>
                <button class="btn-hover-shine  btn btn-dark">Month</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="card-shadow-primary card-border text-white mb-3 card bg-primary">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-primary">
                            <div class="menu-header-content">
                                <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                    <div class="avatar-icon"><img src="<?= base_url('themes/uigniter'); ?>/images/avatars/3.jpg" alt="Avatar 5"></div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title">Jessica Walberg</h5>
                                    <h6 class="menu-header-subtitle">Lead UX Developer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center d-block card-footer">
                        <button class="btn-shadow-dark btn-wider btn btn-dark">Send Message</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="card-shadow-primary card-border text-white mb-3 card bg-focus">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-focus">
                            <div class="menu-header-content">
                                <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                    <div class="avatar-icon"><img src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt="Avatar 5"></div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title">Vinnie Wagstaff</h5>
                                    <h6 class="menu-header-subtitle">Backend Engineer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center d-block card-footer">
                        <button class="btn-shadow-dark btn-wider btn btn-warning">Send Message</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xl-4">
                <div class="card-shadow-primary card-border text-white mb-3 card bg-dark">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-dark">
                            <div class="menu-header-content">
                                <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                    <div class="avatar-icon">
                                        <img src="<?= base_url('themes/uigniter'); ?>/images/avatars/1.jpg" alt="Avatar 5"></div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title">Ruben Tillman</h5>
                                    <h6 class="menu-header-subtitle">Frontend UI Designer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center d-block card-footer">
                        <button class="btn-shadow-dark btn-wider btn btn-success">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>