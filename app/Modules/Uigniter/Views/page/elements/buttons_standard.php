<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-plane icon-gradient bg-tempting-azure"></i>
                </div>
                <div>Standard Buttons
                    <div class="page-title-subheading">Wide selection of buttons that feature different styles for backgrounds, borders and hover options!</div>
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
                <span>Solid</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Outline</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span>Outline 2x</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-3" data-toggle="tab" href="#tab-content-3">
                <span>Dashed</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-4" data-toggle="tab" href="#tab-content-4">
                <span>Gradients</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Solid
                            </h5>
                            <button class="mb-2 mr-2 btn btn-primary">Primary
                            </button>
                            <button class="mb-2 mr-2 btn btn-secondary">Secondary
                            </button>
                            <button class="mb-2 mr-2 btn btn-success">Success
                            </button>
                            <button class="mb-2 mr-2 btn btn-info">Info
                            </button>
                            <button class="mb-2 mr-2 btn btn-warning">Warning
                            </button>
                            <button class="mb-2 mr-2 btn btn-danger">Danger
                            </button>
                            <button class="mb-2 mr-2 btn btn-focus">Focus
                            </button>
                            <button class="mb-2 mr-2 btn btn-alternate">Alt
                            </button>
                            <button class="mb-2 mr-2 btn btn-light">Light
                            </button>
                            <button class="mb-2 mr-2 btn btn-dark">Dark
                            </button>
                            <button class="mb-2 mr-2 btn btn-link">link
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Color Transition
                            </h5>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-primary">Primary
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-secondary">Secondary
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-success">Success
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-info">Info
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-warning">Warning
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-danger">Danger
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-focus">Focus
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-alternate">Alt
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-light">Light
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-dark">Dark
                            </button>
                            <button class="mb-2 mr-2 btn-transition btn btn-outline-link">link
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Color Transition No Borders
                            </h5>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-primary">Primary
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-secondary">Secondary
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success">Success
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info">Info
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning">Warning
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">Danger
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-focus">Focus
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate">Alt
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-light">Light
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-dark">Dark
                            </button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-link">link
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Hover Shine
                            </h5>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-primary">Primary
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-secondary">Secondary
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-success">Success
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-info">Info
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-warning">Warning
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-danger">Danger
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-focus">Focus
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-alternate">Alt
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-light">Light
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-dark">Dark
                            </button>
                            <button class="mb-2 mr-2 btn-hover-shine btn btn-link">link
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Active State
                            </h5>
                            <button class="mb-2 mr-2 btn btn-primary active">Primary
                            </button>
                            <button class="mb-2 mr-2 btn btn-secondary active">Secondary
                            </button>
                            <button class="mb-2 mr-2 btn btn-success active">Success
                            </button>
                            <button class="mb-2 mr-2 btn btn-info active">Info
                            </button>
                            <button class="mb-2 mr-2 btn btn-warning active">Warning
                            </button>
                            <button class="mb-2 mr-2 btn btn-danger active">Danger
                            </button>
                            <button class="mb-2 mr-2 btn btn-focus active">Focus
                            </button>
                            <button class="mb-2 mr-2 btn btn-alternate active">Alt
                            </button>
                            <button class="mb-2 mr-2 btn btn-light active">Light
                            </button>
                            <button class="mb-2 mr-2 btn btn-dark active">Dark
                            </button>
                            <button class="mb-2 mr-2 btn btn-link active">link
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Disabled State
                            </h5>
                            <button disabled="" class="mb-2 mr-2 btn btn-primary disabled">Primary
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-secondary disabled">Secondary
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-success disabled">Success
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-info disabled">Info
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-warning disabled">Warning
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-danger disabled">Danger
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-focus disabled">Focus
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-alternate disabled">Alt
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-light disabled">Light
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dark disabled">Dark
                            </button>
                            <button disabled="" class="mb-2 mr-2 btn btn-link disabled">link
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Block Level
                            </h5>
                            <button class="mb-2 mr-2 btn btn-primary btn-lg btn-block">Block Large
                            </button>
                            <button class="mb-2 mr-2 btn btn-primary btn-block">Block Normal
                            </button>
                            <button class="mb-2 mr-2 btn btn-primary btn-sm btn-block">Block Small
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Wider
                            </h5>
                            <div class="text-center">
                                <button class="btn-wide mb-2 mr-2 btn btn-primary btn-lg">Wider Large
                                </button>
                                <button class="btn-wide mb-2 mr-2 btn btn-primary">Wider Normal
                                </button>
                                <button class="btn-wide mb-2 mr-2 btn btn-primary btn-sm">Wider Small
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Sizing
                            </h5>
                            <div class="text-center">
                                <button class="mb-2 mr-2 btn btn-primary btn-lg">Large
                                </button>
                                <button class="mb-2 mr-2 btn btn-primary">Normal
                                </button>
                                <button class="mb-2 mr-2 btn btn-primary btn-sm">Small
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Checkbox Buttons
                            </h5>
                            <div class="text-center">
                                <div role="group" class="btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-primary">One
                                    </button>
                                    <button type="button" class="btn btn-primary">Two
                                    </button>
                                    <button type="button" class="btn btn-primary">Three
                                    </button>
                                </div>
                                <div class="divider">
                                </div>
                                <div role="group" class="btn-group" data-toggle="buttons">
                                    <button type="button" class="btn btn-danger">One
                                    </button>
                                    <button type="button" class="btn btn-danger">Two
                                    </button>
                                    <button type="button" class="btn btn-danger">Three
                                    </button>
                                </div>
                                <div class="divider">
                                </div>
                                <div role="group" class="btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-alternate">One
                                    </button>
                                    <button type="button" class="btn btn-alternate">Two
                                    </button>
                                    <button type="button" class="btn btn-alternate">Three
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Radio Buttons
                            </h5>
                            <div class="text-center">
                                <div role="group" class="btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                        One
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option2" autocomplete="off">
                                        Two
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option3" autocomplete="off">
                                        Three
                                    </label>
                                </div>
                                <div class="divider">
                                </div>
                                <div role="group" class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-warning">
                                        <input type="radio" name="options" id="option4" autocomplete="off">
                                        One
                                    </label>
                                    <label class="btn btn-warning">
                                        <input type="radio" name="options" id="option5" autocomplete="off">
                                        Two
                                    </label>
                                    <label class="btn btn-warning">
                                        <input type="radio" name="options" id="option6" autocomplete="off">
                                        Three
                                    </label>
                                </div>
                                <div class="divider">
                                </div>
                                <div role="group" class="btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-focus">
                                        <input type="radio" name="options" id="option7" autocomplete="off">
                                        One
                                    </label>
                                    <label class="btn btn-focus">
                                        <input type="radio" name="options" id="option8" autocomplete="off">
                                        Two
                                    </label>
                                    <label class="btn btn-focus">
                                        <input type="radio" name="options" id="option9" autocomplete="off">
                                        Three
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Loading Buttons
                            </h5>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-primary" data-style="expand-left">
                                        <span class="ladda-label">Expand Left
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-secondary" data-style="expand-right">
                                        <span class="ladda-label">Expand Right
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-focus" data-style="zoom-in">
                                        <span class="ladda-label">Zoom In
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-alternate" data-style="zoom-out">
                                        <span class="ladda-label">Zoom Out
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-light" data-style="slide-left">
                                        <span class="ladda-label">Slide Left
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dark" data-style="slide-right">
                                        <span class="ladda-label">Slide Right
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-danger" data-style="slide-up">
                                        <span class="ladda-label">Slide Up
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-warning" data-style="slide-down">
                                        <span class="ladda-label">Slide Down
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-success" data-style="expand-up">
                                        <span class="ladda-label">Expand Up
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-info" data-style="expand-down">
                                        <span class="ladda-label">Expand Down
                                        </span>
                                        <span class="ladda-spinner">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Color States</h5>
                            <button class="mb-2 mr-2 btn btn-outline-primary">Primary</button>
                            <button class="mb-2 mr-2 btn btn-outline-secondary">Secondary</button>
                            <button class="mb-2 mr-2 btn btn-outline-success">Success</button>
                            <button class="mb-2 mr-2 btn btn-outline-info">Info</button>
                            <button class="mb-2 mr-2 btn btn-outline-warning">Warning</button>
                            <button class="mb-2 mr-2 btn btn-outline-danger">Danger</button>
                            <button class="mb-2 mr-2 btn btn-outline-focus">Focus</button>
                            <button class="mb-2 mr-2 btn btn-outline-alternate">Alt</button>
                            <button class="mb-2 mr-2 btn btn-outline-light">Light</button>
                            <button class="mb-2 mr-2 btn btn-outline-dark">Dark</button>
                            <button class="mb-2 mr-2 btn btn-outline-link">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Active State</h5>
                            <button class="mb-2 mr-2 btn btn-outline-primary active">Primary</button>
                            <button class="mb-2 mr-2 btn btn-outline-secondary active">Secondary</button>
                            <button class="mb-2 mr-2 btn btn-outline-success active">Success</button>
                            <button class="mb-2 mr-2 btn btn-outline-info active">Info</button>
                            <button class="mb-2 mr-2 btn btn-outline-warning active">Warning</button>
                            <button class="mb-2 mr-2 btn btn-outline-danger active">Danger</button>
                            <button class="mb-2 mr-2 btn btn-outline-focus active">Focus</button>
                            <button class="mb-2 mr-2 btn btn-outline-alternate active">Alt</button>
                            <button class="mb-2 mr-2 btn btn-outline-light active">Light</button>
                            <button class="mb-2 mr-2 btn btn-outline-dark active">Dark</button>
                            <button class="mb-2 mr-2 btn btn-outline-link active">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Disabled State</h5>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-primary disabled">Primary</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-secondary disabled">Secondary</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-success disabled">Success</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-info disabled">Info</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-warning disabled">Warning</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-danger disabled">Danger</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-focus disabled">Focus</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-alternate disabled">Alt</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-light disabled">Light</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-dark disabled">Dark</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-link disabled">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Block Level</h5>
                            <button class="mb-2 mr-2 btn btn-outline-primary btn-lg btn-block">Block Large</button>
                            <button class="mb-2 mr-2 btn btn-outline-primary btn-block">Block Normal</button>
                            <button class="mb-2 mr-2 btn btn-outline-primary btn-sm btn-block">Block Small</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Wider</h5>
                            <div class="text-center">
                                <button class="btn-wide mb-2 mr-2 btn btn-outline-primary btn-lg">Wider Large</button>
                                <button class="btn-wide mb-2 mr-2 btn btn-outline-primary">Wider Normal</button>
                                <button class="btn-wide mb-2 mr-2 btn btn-outline-primary btn-sm">Wider Small</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Sizing</h5>
                            <div class="text-center">
                                <button class="mb-2 mr-2 btn btn-outline-primary btn-lg">Large</button>
                                <button class="mb-2 mr-2 btn btn-outline-primary">Normal</button>
                                <button class="mb-2 mr-2 btn btn-outline-primary btn-sm">Small</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Checkbox Buttons</h5>
                            <div class="text-center">
                                <div role="group" class="mb-2 btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-primary">One</button>
                                    <button type="button" class="btn btn-outline-primary">Two</button>
                                    <button type="button" class="btn btn-outline-primary">Three</button>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-success">One</button>
                                    <button type="button" class="btn btn-outline-success">Two</button>
                                    <button type="button" class="btn btn-outline-success">Three</button>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-alternate">One</button>
                                    <button type="button" class="btn btn-outline-alternate">Two</button>
                                    <button type="button" class="btn btn-outline-alternate">Three</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Radio Buttons</h5>
                            <div class="text-center">
                                <div role="group" class="mb-2 btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="options" id="option111" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="options" id="option122" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="options" id="option133" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-success">
                                        <input type="radio" name="options" id="option144" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-outline-success">
                                        <input type="radio" name="options" id="option155" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-outline-success">
                                        <input type="radio" name="options" id="option166" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-info">
                                        <input type="radio" name="options" id="option177" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-outline-info">
                                        <input type="radio" name="options" id="option188" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-outline-info">
                                        <input type="radio" name="options" id="option199" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Loading Buttons</h5>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-primary" data-style="expand-left"><span class="ladda-label">Expand Left</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-secondary" data-style="expand-right"><span class="ladda-label">Expand Right</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-focus" data-style="zoom-in"><span class="ladda-label">Zoom In</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-alternate" data-style="zoom-out"><span class="ladda-label">Zoom Out</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-light" data-style="slide-left"><span class="ladda-label">Slide Left</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-dark" data-style="slide-right"><span class="ladda-label">Slide Right</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-danger" data-style="slide-up"><span class="ladda-label">Slide Up</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-warning" data-style="slide-down"><span class="ladda-label">Slide Down</span><span class="ladda-spinner"></span></button>
                                </div>
                            </div>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-success" data-style="expand-up"><span class="ladda-label">Expand Up</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-info" data-style="expand-down"><span class="ladda-label">Expand Down</span><span class="ladda-spinner"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Color States</h5>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary">Primary</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-secondary">Secondary</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-success">Success</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-info">Info</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-warning">Warning</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-danger">Danger</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-focus">Focus</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-alternate">Alt</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-light">Light</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-dark">Dark</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-link">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Active State</h5>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary active">Primary</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-secondary active">Secondary</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-success active">Success</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-info active">Info</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-warning active">Warning</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-danger active">Danger</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-focus active">Focus</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-alternate active">Alt</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-light active">Light</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-dark active">Dark</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-link active">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Disabled State</h5>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary disabled">Primary</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-secondary disabled">Secondary</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-success disabled">Success</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-info disabled">Info</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-warning disabled">Warning</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-danger disabled">Danger</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-focus disabled">Focus</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-alternate disabled">Alt</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-light disabled">Light</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-dark disabled">Dark</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-outline-2x btn-outline-link disabled">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Block Level</h5>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary btn-lg btn-block">Block Large</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary btn-block">Block Normal</button>
                            <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary btn-sm btn-block">Block Small</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Wider</h5>
                            <div class="text-center">
                                <button class="btn-wide mb-2 mr-2 btn btn-outline-2x btn-outline-primary btn-lg">Wider Large</button>
                                <button class="btn-wide mb-2 mr-2 btn btn-outline-2x btn-outline-primary">Wider Normal</button>
                                <button class="btn-wide mb-2 mr-2 btn btn-outline-2x btn-outline-primary btn-sm">Wider Small</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Sizing</h5>
                            <div class="text-center">
                                <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary btn-lg">Large</button>
                                <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary">Normal</button>
                                <button class="mb-2 mr-2 btn btn-outline-2x btn-outline-primary btn-sm">Small</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Checkbox Buttons</h5>
                            <div class="text-center">
                                <div role="group" class="mb-2 btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-2x btn-outline-primary">One</button>
                                    <button type="button" class="btn btn-outline-2x btn-outline-primary">Two</button>
                                    <button type="button" class="btn btn-outline-2x btn-outline-primary">Three</button>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-2x btn-outline-success">One</button>
                                    <button type="button" class="btn btn-outline-2x btn-outline-success">Two</button>
                                    <button type="button" class="btn btn-outline-2x btn-outline-success">Three</button>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-2x btn-outline-alternate">One</button>
                                    <button type="button" class="btn btn-outline-2x btn-outline-alternate">Two</button>
                                    <button type="button" class="btn btn-outline-2x btn-outline-alternate">Three</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Radio Buttons</h5>
                            <div class="text-center">
                                <div role="group" class="mb-2 btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-2x btn-outline-primary">
                                        <input type="radio" name="options" id="option111" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-outline-2x btn-outline-primary">
                                        <input type="radio" name="options" id="option122" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-outline-2x btn-outline-primary">
                                        <input type="radio" name="options" id="option133" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-2x btn-outline-success">
                                        <input type="radio" name="options" id="option144" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-outline-2x btn-outline-success">
                                        <input type="radio" name="options" id="option155" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-outline-2x btn-outline-success">
                                        <input type="radio" name="options" id="option166" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-2x btn-outline-info">
                                        <input type="radio" name="options" id="option177" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-outline-2x btn-outline-info">
                                        <input type="radio" name="options" id="option188" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-outline-2x btn-outline-info">
                                        <input type="radio" name="options" id="option199" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Loading Buttons</h5>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-primary" data-style="expand-left"><span class="ladda-label">Expand Left</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-secondary" data-style="expand-right"><span class="ladda-label">Expand Right</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-focus" data-style="zoom-in"><span class="ladda-label">Zoom In</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-alternate" data-style="zoom-out"><span class="ladda-label">Zoom Out</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-light" data-style="slide-left"><span class="ladda-label">Slide Left</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-dark" data-style="slide-right"><span class="ladda-label">Slide Right</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-danger" data-style="slide-up"><span class="ladda-label">Slide Up</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-warning" data-style="slide-down"><span class="ladda-label">Slide Down</span><span class="ladda-spinner"></span></button>
                                </div>
                            </div>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-success" data-style="expand-up"><span class="ladda-label">Expand Up</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-outline-2x btn-outline-info" data-style="expand-down"><span class="ladda-label">Expand Down</span><span class="ladda-spinner"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Color States</h5>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-primary">Primary</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-secondary">Secondary</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-success">Success</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-info">Info</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-warning">Warning</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-danger">Danger</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-focus">Focus</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-alternate">Alt</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-light">Light</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-dark">Dark</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-link">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Active State</h5>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-primary active">Primary</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-secondary active">Secondary</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-success active">Success</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-info active">Info</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-warning active">Warning</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-danger active">Danger</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-focus active">Focus</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-alternate active">Alt</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-light active">Light</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-dark active">Dark</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-link active">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Disabled State</h5>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-primary disabled">Primary</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-secondary disabled">Secondary</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-success disabled">Success</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-info disabled">Info</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-warning disabled">Warning</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-danger disabled">Danger</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-focus disabled">Focus</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-alternate disabled">Alt</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-light disabled">Light</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-dark disabled">Dark</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-dashed btn-outline-link disabled">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Block Level</h5>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-primary btn-lg btn-block">Block Large</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-primary btn-block">Block Normal</button>
                            <button class="mb-2 mr-2 btn btn-dashed btn-outline-primary btn-sm btn-block">Block Small</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Wider</h5>
                            <div class="text-center">
                                <button class="btn-wide mb-2 mr-2 btn btn-dashed btn-outline-primary btn-lg">Wider Large</button>
                                <button class="btn-wide mb-2 mr-2 btn btn-dashed btn-outline-primary">Wider Normal</button>
                                <button class="btn-wide mb-2 mr-2 btn btn-dashed btn-outline-primary btn-sm">Wider Small</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Sizing</h5>
                            <div class="text-center">
                                <button class="mb-2 mr-2 btn btn-dashed btn-outline-primary btn-lg">Large</button>
                                <button class="mb-2 mr-2 btn btn-dashed btn-outline-primary">Normal</button>
                                <button class="mb-2 mr-2 btn btn-dashed btn-outline-primary btn-sm">Small</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Checkbox Buttons</h5>
                            <div class="text-center">
                                <div role="group" class="mb-2 btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-dashed btn-outline-primary">One</button>
                                    <button type="button" class="btn btn-dashed btn-outline-primary">Two</button>
                                    <button type="button" class="btn btn-dashed btn-outline-primary">Three</button>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-dashed btn-outline-success">One</button>
                                    <button type="button" class="btn btn-dashed btn-outline-success">Two</button>
                                    <button type="button" class="btn btn-dashed btn-outline-success">Three</button>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-dashed btn-outline-alternate">One</button>
                                    <button type="button" class="btn btn-dashed btn-outline-alternate">Two</button>
                                    <button type="button" class="btn btn-dashed btn-outline-alternate">Three</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Radio Buttons</h5>
                            <div class="text-center">
                                <div role="group" class="mb-2 btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-dashed btn-outline-primary">
                                        <input type="radio" name="options" id="option111" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-dashed btn-outline-primary">
                                        <input type="radio" name="options" id="option122" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-dashed btn-outline-primary">
                                        <input type="radio" name="options" id="option133" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-dashed btn-outline-success">
                                        <input type="radio" name="options" id="option144" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-dashed btn-outline-success">
                                        <input type="radio" name="options" id="option155" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-dashed btn-outline-success">
                                        <input type="radio" name="options" id="option166" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-dashed btn-outline-info">
                                        <input type="radio" name="options" id="option177" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-dashed btn-outline-info">
                                        <input type="radio" name="options" id="option188" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-dashed btn-outline-info">
                                        <input type="radio" name="options" id="option199" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Loading Buttons</h5>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-primary" data-style="expand-left"><span class="ladda-label">Expand Left</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-secondary" data-style="expand-right"><span class="ladda-label">Expand Right</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-focus" data-style="zoom-in"><span class="ladda-label">Zoom In</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-alternate" data-style="zoom-out"><span class="ladda-label">Zoom Out</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-light" data-style="slide-left"><span class="ladda-label">Slide Left</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-dark" data-style="slide-right"><span class="ladda-label">Slide Right</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-danger" data-style="slide-up"><span class="ladda-label">Slide Up</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-warning" data-style="slide-down"><span class="ladda-label">Slide Down</span><span class="ladda-spinner"></span></button>
                                </div>
                            </div>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-success" data-style="expand-up"><span class="ladda-label">Expand Up</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-dashed btn-outline-info" data-style="expand-down"><span class="ladda-label">Expand Down</span><span class="ladda-spinner"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-4" role="tabpanel">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Color States</h5>
                            <button class="mb-2 mr-2 btn btn-gradient-primary">Primary</button>
                            <button class="mb-2 mr-2 btn btn-gradient-secondary">Secondary</button>
                            <button class="mb-2 mr-2 btn btn-gradient-success">Success</button>
                            <button class="mb-2 mr-2 btn btn-gradient-info">Info</button>
                            <button class="mb-2 mr-2 btn btn-gradient-warning">Warning</button>
                            <button class="mb-2 mr-2 btn btn-gradient-danger">Danger</button>
                            <button class="mb-2 mr-2 btn btn-gradient-focus">Focus</button>
                            <button class="mb-2 mr-2 btn btn-gradient-alternate">Alt</button>
                            <button class="mb-2 mr-2 btn btn-gradient-light">Light</button>
                            <button class="mb-2 mr-2 btn btn-gradient-dark">Dark</button>
                            <button class="mb-2 mr-2 btn btn-gradient-link">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Active State</h5>
                            <button class="mb-2 mr-2 btn btn-gradient-primary active">Primary</button>
                            <button class="mb-2 mr-2 btn btn-gradient-secondary active">Secondary</button>
                            <button class="mb-2 mr-2 btn btn-gradient-success active">Success</button>
                            <button class="mb-2 mr-2 btn btn-gradient-info active">Info</button>
                            <button class="mb-2 mr-2 btn btn-gradient-warning active">Warning</button>
                            <button class="mb-2 mr-2 btn btn-gradient-danger active">Danger</button>
                            <button class="mb-2 mr-2 btn btn-gradient-focus active">Focus</button>
                            <button class="mb-2 mr-2 btn btn-gradient-alternate active">Alt</button>
                            <button class="mb-2 mr-2 btn btn-gradient-light active">Light</button>
                            <button class="mb-2 mr-2 btn btn-gradient-dark active">Dark</button>
                            <button class="mb-2 mr-2 btn btn-gradient-link active">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Disabled State</h5>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-primary disabled">Primary</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-secondary disabled">Secondary</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-success disabled">Success</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-info disabled">Info</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-warning disabled">Warning</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-danger disabled">Danger</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-focus disabled">Focus</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-alternate disabled">Alt</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-light disabled">Light</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-dark disabled">Dark</button>
                            <button disabled="" class="mb-2 mr-2 btn btn-gradient-link disabled">link</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Block Level</h5>
                            <button class="mb-2 mr-2 btn btn-gradient-primary btn-lg btn-block">Block Large</button>
                            <button class="mb-2 mr-2 btn btn-gradient-primary btn-block">Block Normal</button>
                            <button class="mb-2 mr-2 btn btn-gradient-primary btn-sm btn-block">Block Small</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Wider</h5>
                            <div class="text-center">
                                <button class="btn-wide mb-2 mr-2 btn btn-gradient-primary btn-lg">Wider Large</button>
                                <button class="btn-wide mb-2 mr-2 btn btn-gradient-primary">Wider Normal</button>
                                <button class="btn-wide mb-2 mr-2 btn btn-gradient-primary btn-sm">Wider Small</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Sizing</h5>
                            <div class="text-center">
                                <button class="mb-2 mr-2 btn btn-gradient-primary btn-lg">Large</button>
                                <button class="mb-2 mr-2 btn btn-gradient-primary">Normal</button>
                                <button class="mb-2 mr-2 btn btn-gradient-primary btn-sm">Small</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Checkbox Buttons</h5>
                            <div class="text-center">
                                <div role="group" class="mb-2 btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-gradient-primary">One</button>
                                    <button type="button" class="btn btn-gradient-primary">Two</button>
                                    <button type="button" class="btn btn-gradient-primary">Three</button>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-gradient-success">One</button>
                                    <button type="button" class="btn btn-gradient-success">Two</button>
                                    <button type="button" class="btn btn-gradient-success">Three</button>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-gradient-alternate">One</button>
                                    <button type="button" class="btn btn-gradient-alternate">Two</button>
                                    <button type="button" class="btn btn-gradient-alternate">Three</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Radio Buttons</h5>
                            <div class="text-center">
                                <div role="group" class="mb-2 btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-gradient-primary">
                                        <input type="radio" name="options" id="option111" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-gradient-primary">
                                        <input type="radio" name="options" id="option122" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-gradient-primary">
                                        <input type="radio" name="options" id="option133" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-gradient-success">
                                        <input type="radio" name="options" id="option144" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-gradient-success">
                                        <input type="radio" name="options" id="option155" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-gradient-success">
                                        <input type="radio" name="options" id="option166" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                                <div class="divider"></div>
                                <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-gradient-info">
                                        <input type="radio" name="options" id="option177" autocomplete="off" checked> Active
                                        One
                                    </label>
                                    <label class="btn btn-gradient-info">
                                        <input type="radio" name="options" id="option188" autocomplete="off" checked> Active
                                        Two
                                    </label>
                                    <label class="btn btn-gradient-info">
                                        <input type="radio" name="options" id="option199" autocomplete="off" checked> Active
                                        Three
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Loading Buttons</h5>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-primary" data-style="expand-left"><span class="ladda-label">Expand Left</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-secondary" data-style="expand-right"><span class="ladda-label">Expand Right</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-focus" data-style="zoom-in"><span class="ladda-label">Zoom In</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-alternate" data-style="zoom-out"><span class="ladda-label">Zoom Out</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-light" data-style="slide-left"><span class="ladda-label">Slide Left</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-dark" data-style="slide-right"><span class="ladda-label">Slide Right</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-danger" data-style="slide-up"><span class="ladda-label">Slide Up</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-warning" data-style="slide-down"><span class="ladda-label">Slide Down</span><span class="ladda-spinner"></span></button>
                                </div>
                            </div>
                            <div class="text-center row">
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-success" data-style="expand-up"><span class="ladda-label">Expand Up</span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="ladda-button mb-2 mr-2 btn btn-gradient-info" data-style="expand-down"><span class="ladda-label">Expand Down</span><span class="ladda-spinner"></span></button>
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