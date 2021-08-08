<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>UIgniter HTML Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="<?= base_url('themes/uigniter'); ?>/css/base.min.css">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/originals/city.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Perfect Balance</h3>
                                            <p>UIgniter is like a dream. Some think it's too good to be true! Extensive collection of unified React Boostrap Components and Elements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="position-relative slide-img-bg" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Scalable, Modular, Consistent</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg opacity-6" style="background-image: url('<?= base_url('themes/uigniter'); ?>/images/originals/citydark.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Complex, but lightweight</h3>
                                            <p>We've included a lot of components that cover almost all use cases for any type of application.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-8 col-lg-6">
                            <div class="app-logo"></div>
                            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                                <li class="nav-item">
                                    <a role="tab" class="nav-link" href="<?= base_url('uigniter/index'); ?>">
                                        <span class="fa fa-home"></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" class="nav-link active" href="<?= base_url('uigniter/forgot_password'); ?>">
                                        <span>Forgot Password</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" class="nav-link" href="<?= base_url('uigniter/forgot_password_boxed') ?>">
                                        <span>Forgot Password Boxed</span>
                                    </a>
                                </li>
                            </ul>
                            <h4>
                                <div>Forgot your Password?</div>
                                <span>Use the form below to recover it.</span>
                            </h4>
                            <div>
                                <form class="">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-flex align-items-center">
                                        <h6 class="mb-0"><a href="<?= base_url('uigniter/login') ?>" class="text-primary">Sign in existing account</a></h6>
                                        <div class="ml-auto">
                                            <button class="btn btn-primary btn-lg">Recover Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--SCRIPTS INCLUDES-->

    <!--CORE-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/metismenu"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/app.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/demo.js"></script>

    <!--CHARTS-->

    <!--Apex Charts-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/charts/apex-charts.js"></script>

    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/charts/apex-charts.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/charts/apex-series.js"></script>

    <!--Sparklines-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/charts/charts-sparklines.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/charts/charts-sparklines.js"></script>

    <!--Chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/charts/chartsjs-utils.js"></script>

    <!--FORMS-->

    <!--Clipboard-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/clipboard.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/form-components/clipboard.js"></script>

    <!--Datepickers-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/datepicker.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/daterangepicker.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/moment.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/form-components/datepicker.js"></script>

    <!--Multiselect-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/bootstrap-multiselect.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/form-components/input-select.js"></script>

    <!--Form Validation-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/form-validation.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/form-components/form-validation.js"></script>

    <!--Form Wizard-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/form-wizard.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/form-components/form-wizard.js"></script>

    <!--Input Mask-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/input-mask.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/form-components/input-mask.js"></script>

    <!--RangeSlider-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/wnumb.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/range-slider.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/form-components/range-slider.js"></script>

    <!--Textarea Autosize-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/textarea-autosize.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/form-components/textarea-autosize.js"></script>

    <!--Toggle Switch -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/form-components/toggle-switch.js"></script>


    <!--COMPONENTS-->

    <!--BlockUI -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/blockui.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/blockui.js"></script>

    <!--Calendar -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/calendar.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/calendar.js"></script>

    <!--Slick Carousel -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/carousel-slider.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/carousel-slider.js"></script>

    <!--Circle Progress -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/circle-progress.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/circle-progress.js"></script>

    <!--CountUp -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/count-up.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/count-up.js"></script>

    <!--Cropper -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/cropper.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/jquery-cropper.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/image-crop.js"></script>

    <!--Maps -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/gmaps.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/jvectormap.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/maps-word-map.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/maps.js"></script>

    <!--Guided Tours -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/guided-tours.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/guided-tours.js"></script>

    <!--Ladda Loading Buttons -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/ladda-loading.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/spin.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/ladda-loading.js"></script>

    <!--Rating -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/rating.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/rating.js"></script>

    <!--Perfect Scrollbar -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/scrollbar.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/scrollbar.js"></script>

    <!--Toastr-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/toastr.js"></script>

    <!--SweetAlert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/sweet-alerts.js"></script>

    <!--Tree View -->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/treeview.js"></script>
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/treeview.js"></script>


    <!--TABLES -->
    <!--DataTables-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.19/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" crossorigin="anonymous"></script>

    <!--Bootstrap Tables-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/vendors/tables.js"></script>

    <!--Tables Init-->
    <script src="<?= base_url('themes/uigniter'); ?>/js/scripts-init/tables.js"></script>

</body>

</html>