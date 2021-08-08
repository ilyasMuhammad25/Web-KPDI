<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-umbrella icon-gradient bg-sunny-morning"></i>
                </div>
                <div>Dropdowns
                    <div class="page-title-subheading">Multiple styles, actions and effects are available for the Archited Framework dropdown buttons.</div>
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
                <span>Advanced Menus</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Regular Dropdowns</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Nav Menus</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Dropdown Basic</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
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
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Dropdown Example</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Dropdown Large</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
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
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Dropdown Extra Large</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Scrollable Dropdown Menus</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Bottom Header Buttons</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
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
                                    <div class="scroll-area-xs">
                                        <div class="scrollbar-container">
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
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-success">Left Aligned Header</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-success">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract3.jpg');"></div>
                                            <div class="menu-header-content text-left">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                <div class="menu-header-btn-pane">
                                                    <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-xs" style="height: 150px;">
                                        <div class="scrollbar-container">
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
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                        <div class="ml-auto badge badge-warning">512</div>
                                                    </a></li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn nav-item">
                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-secondary">Left Aligned Header Buttons</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-secondary">
                                            <div class="menu-header-image opacity-5" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract2.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div>
                                                    <h5 class="menu-header-title">Settings</h5>
                                                    <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-xs">
                                        <div class="scrollbar-container">
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
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn nav-item">
                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Extra Large Menu without Subtitles</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Primary</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-primary">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city1.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
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
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-secondary">Secondary</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-secondary">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city2.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-success">Success</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-success">
                                            <div class="menu-header-image opacity-2" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-info">Info</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city4.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-warning">Warning</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-warning">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city5.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-danger">Danger</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-danger">
                                            <div class="menu-header-image opacity-3" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-focus">Focus</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-focus">
                                            <div class="menu-header-image opacity-8" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract2.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-alternate">Alt</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-alternate">
                                            <div class="menu-header-image opacity-2" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract3.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-light">Light</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-light">
                                            <div class="menu-header-image opacity-5" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract4.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-dark">Dark</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract5.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-link">White</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-link">
                                            <div class="menu-header-image opacity-3" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract6.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Dropdown Menu Headers</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Primary</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-primary">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
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
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-secondary">Secondary</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-secondary">
                                            <div class="menu-header-image opacity-5" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract2.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-success">Success</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-success">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract3.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-info">Info</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-5" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract4.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-warning">Warning</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-warning">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract5.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-danger">Danger</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-danger">
                                            <div class="menu-header-image opacity-3" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract6.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-focus">Focus</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-focus">
                                            <div class="menu-header-image opacity-8" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract10.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-alternate">Alt</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-alternate">
                                            <div class="menu-header-image opacity-3" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract10.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-light">Light</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-light">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract10.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-dark">Dark</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract10.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-link">White</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-link">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city1.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Dropdown Menu Header Buttons</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Bottom Header Buttons</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
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
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-success">Left Aligned Header</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-success">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract3.jpg');"></div>
                                            <div class="menu-header-content text-left">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                <div class="menu-header-btn-pane">
                                                    <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-secondary">Left Aligned Header Buttons</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-secondary">
                                            <div class="menu-header-image opacity-5" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract2.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div>
                                                    <h5 class="menu-header-title">Settings</h5>
                                                    <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Activity</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                        <li class="nav-item-header nav-item">My Account</li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                <div class="ml-auto badge badge-warning">512</div>
                                            </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-right nav-item">
                                            <button class="btn-pill btn btn-success btn-sm">Save</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Dropdown Standard Menu with Headers</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Basic</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-success">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract3.jpg');"></div>
                                            <div class="menu-header-content text-left">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                <div class="menu-header-btn-pane">
                                                    <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                    <button class="btn-icon btn-icon-only btn btn-warning btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="d-inline-block dropdown dropdown-hover">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Hover Open</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-primary">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract1.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Rounded</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-rounded dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-secondary">
                                            <div class="menu-header-image opacity-5" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract2.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Shadow</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-shadow dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-success">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract3.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Hover Link</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-link dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-5" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract4.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Hover Background</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-primary dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-warning">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract5.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Icons</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-link dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-focus">
                                            <div class="menu-header-image opacity-8" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-picture"> </i><span>Dividers</span></button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 dropdown-toggle btn btn-primary">Right aligned</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-rounded dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/abstract10.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Dropdown Grid Menus</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Three Column Grid Menu</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-love-kiss">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city2.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-menu grid-menu-3col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-primary"><i class="lnr-license btn-icon-wrapper"> </i>Primary</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-secondary"><i class="lnr-map btn-icon-wrapper"> </i>Secondary</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-success"><i class="lnr-music-note btn-icon-wrapper"> </i>Success</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-info"><i class="lnr-heart btn-icon-wrapper"> </i>Info</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-warning"><i class="lnr-magic-wand btn-icon-wrapper"> </i>Warning</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-danger"><i class="lnr-lighter btn-icon-wrapper"> </i>Danger</button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn btn-primary btn-sm">Submit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Three Column Bigger Menu</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-sunny-morning">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-menu grid-menu-xl grid-menu-3col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>Primary</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-map btn-icon-wrapper btn-icon-lg mb-3"> </i>Secondary</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>Success</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-heart btn-icon-wrapper btn-icon-lg mb-3"> </i>Info</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-magic-wand btn-icon-wrapper btn-icon-lg mb-3"> </i>Warning</button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-lighter btn-icon-wrapper btn-icon-lg mb-3"> </i>Danger</button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn btn-primary btn-sm">Submit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Two Column Grid Menu</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-happy-itmeo">
                                            <div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city4.jpg');"></div>
                                            <div class="menu-header-content">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-primary"><i class="lnr-license btn-icon-wrapper"> </i>Primary</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-secondary"><i class="lnr-map btn-icon-wrapper"> </i>Secondary</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-success"><i class="lnr-music-note btn-icon-wrapper"> </i>Success</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition btn btn-outline-info"><i class="lnr-heart btn-icon-wrapper"> </i>Info</button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn btn-primary btn-sm">Submit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Two Column Bigger Menu</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-night-fade">
                                            <div class="menu-header-image opacity-1" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/dropdown-header/city5.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Settings</h5>
                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-menu grid-menu-xl grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>Primary</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-map btn-icon-wrapper btn-icon-lg mb-3"> </i>Secondary</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>Success</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-heart btn-icon-wrapper btn-icon-lg mb-3"> </i>Info</button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn btn-primary btn-sm">Submit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Dropdown Menu Styles</h5>
                            <div class="mb-2 mr-2 btn-group">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle btn btn-primary">Basic</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Rounded</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-rounded dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Shadow</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-shadow dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Hover Link</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-link dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Hover Background</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-primary dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Icons</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-hover-link dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-picture"> </i><span>Dividers</span></button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 dropdown-toggle btn btn-primary">Right aligned</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-rounded dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Basic</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Primary</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-secondary">Secondary</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-success">Success</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-info">Info</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-warning">Warning</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-danger">Danger</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-focus">Focus</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-alternate">Alt</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-light">Light</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-dark">Dark</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-link">Link</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Split Dropdowns</h5>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-primary">Primary</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-secondary">Secondary</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-secondary"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-success">Success</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-success"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-info">Info</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-info"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-warning">Warning</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-warning"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-danger">Danger</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-danger"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-focus">Focus</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-focus"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-alternate">Alt</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-alternate"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-light">Light</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-light"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-dark">Dark</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-dark"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Split Outline Dropdowns</h5>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-primary">Primary</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-primary"><span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-secondary">Secondary</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-secondary"><span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-success">Success</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-success"><span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-info">Info</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-info"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-warning">Warning</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-warning"><span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-danger">Danger</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-danger"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-focus">Focus</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-focus"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-alternate">Alt</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-alternate"><span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-light">Light</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-light"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="mb-2 mr-2 btn-group">
                                <button class="btn btn-outline-dark">Dark</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-dark"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Menu positions</h5>
                            <div class="text-center">
                                <div class="mb-2 mr-2 dropleft btn-group">
                                    <button class="btn-wide btn btn-primary">Dropleft</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="mb-2 mr-2 dropup btn-group">
                                    <button class="btn-wide btn btn-primary">Dropup</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="mb-2 mr-2 dropright btn-group">
                                    <button class="btn-wide btn btn-primary">Dropright</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="text-center">
                                <div class="dropleft btn-group">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn-wide mb-2 mr-2 dropdown-toggle btn btn-primary">Dropleft</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="dropup btn-group">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn-wide mb-2 mr-2 dropdown-toggle btn btn-primary">Dropup</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="dropright btn-group">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn-wide mb-2 mr-2 dropdown-toggle btn btn-primary">Dropright</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Outline</h5>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-primary">Primary</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-secondary">Secondary</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-success">Success</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-info">Info</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-warning">Warning</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-danger">Danger</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-focus">Focus</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-alternate">Alt</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-light">Light</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-dark">Dark</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-outline-link">Link</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Sizing</h5>
                            <div class="text-center">
                                <div class="mb-2 mr-2 btn-group">
                                    <button class="btn btn-primary btn-lg">Large</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary btn-lg"><span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="mb-2 mr-2 btn-group">
                                    <button class="btn btn-primary">Normal</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="mb-2 mr-2 btn-group">
                                    <button class="btn btn-primary btn-sm">Small</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary btn-sm"><span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="text-center">
                                <div class="dropdown d-inline-block">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary btn-lg">Large</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="dropdown d-inline-block">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Normal</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="dropdown d-inline-block">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary btn-sm">Small</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Wider</h5>
                            <div class="text-center">
                                <div class="mb-2 mr-2 btn-group">
                                    <button class="btn-wide btn btn-primary btn-lg">Large</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary btn-lg"><span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="mb-2 mr-2 btn-group">
                                    <button class="btn-wide btn btn-primary">Normal</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="mb-2 mr-2 btn-group">
                                    <button class="btn-wide btn btn-primary btn-sm">Small</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary btn-sm"><span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="text-center">
                                <div class="dropdown d-inline-block">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn-wide mb-2 mr-2 dropdown-toggle btn btn-primary btn-lg">Large</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="dropdown d-inline-block">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn-wide mb-2 mr-2 dropdown-toggle btn btn-primary">Normal</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                                <div class="dropdown d-inline-block">
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn-wide mb-2 mr-2 dropdown-toggle btn btn-primary btn-sm">Small</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <button type="button" tabindex="0" class="dropdown-item">Menus</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>