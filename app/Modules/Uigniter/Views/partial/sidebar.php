<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>
<div class="app-sidebar sidebar-shadow bg-danger sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">               
                <li class="app-sidebar__heading">UIgniter</li>
                <li class="<?= ($request->uri->getSegment(2) == 'dashboards') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display1"></i>
                        Dashboards
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li class="<?= ($request->uri->getSegment(3) == 'crm' || $request->uri->getSegment(3) == 'crm_variation') ? 'mm-active' : ''; ?>">
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                CRM
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/crm'); ?>" class="<?= ($request->uri->getSegment(3) == 'crm') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Variation 1
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/crm_variation'); ?>" class="<?= ($request->uri->getSegment(3) == 'crm_variation') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Variation 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'minimal' || $request->uri->getSegment(3) == 'minimal_variation') ? 'mm-active' : ''; ?>">
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Minimal
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/minimal'); ?>" class="<?= ($request->uri->getSegment(3) == 'minimal') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Variation 1
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/minimal_variation'); ?>" class="<?= ($request->uri->getSegment(3) == 'minimal_variation') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Variation 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'analytics' || $request->uri->getSegment(3) == 'analytics_variation') ? 'mm-active' : ''; ?>">
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Analytics
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/analytics'); ?>" class="<?= ($request->uri->getSegment(3) == 'analytics') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Variation 1
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/analytics_variation'); ?>" class="<?= ($request->uri->getSegment(3) == 'analytics_variation') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Variation 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'commerce' || $request->uri->getSegment(3) == 'commerce_variation') ? 'mm-active' : ''; ?>">
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Commerce
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/commerce'); ?>" class="<?= ($request->uri->getSegment(3) == 'commerce') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Variation 1
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/commerce_variation'); ?>" class="<?= ($request->uri->getSegment(3) == 'commerce_variation') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Variation 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/dashboards/sales'); ?>" class="<?= ($request->uri->getSegment(3) == 'sales') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Sales
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'chart_boxes' || $request->uri->getSegment(3) == 'chart_boxes_2' || $request->uri->getSegment(3) == 'chart_boxes_3' || $request->uri->getSegment(3) == 'profile_boxes') ? 'mm-active' : ''; ?>">
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Board Widgets
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/chart_boxes'); ?>" class="<?= ($request->uri->getSegment(3) == 'chart_boxes') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon pe-7s-graph">
                                        </i>Chart Boxes 1
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/chart_boxes_2'); ?>" class="<?= ($request->uri->getSegment(3) == 'chart_boxes_2') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon pe-7s-way">
                                        </i>Chart Boxes 2
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/chart_boxes_3'); ?>" class="<?= ($request->uri->getSegment(3) == 'chart_boxes_3') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon pe-7s-ball">
                                        </i>Chart Boxes 3
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/dashboards/profile_boxes'); ?>" class="<?= ($request->uri->getSegment(3) == 'profile_boxes') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon pe-7s-id">
                                        </i>Profile Boxes
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(3) == 'login' || $request->uri->getSegment(3) == 'login_boxed' || $request->uri->getSegment(3) == 'register' || $request->uri->getSegment(3) == 'register_boxed' || $request->uri->getSegment(3) == 'forgot_password' || $request->uri->getSegment(3) == 'forgot_password_boxed') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-lock"></i>
                        Membership
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url('uigniter/membership/login'); ?>" class="<?= ($request->uri->getSegment(3) == 'login') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon"></i>
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/membership/login_boxed'); ?>" class="<?= ($request->uri->getSegment(3) == 'login_boxed') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Login Boxed
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/membership/register'); ?>" class="<?= ($request->uri->getSegment(3) == 'register') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Register
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/membership/register_boxed'); ?>" class="<?= ($request->uri->getSegment(3) == 'register_boxed') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Register Boxed
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/membership/forgot_password'); ?>" class="<?= ($request->uri->getSegment(3) == 'forgot_password') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Forgot Password
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/membership/forgot_password_boxed'); ?>" class="<?= ($request->uri->getSegment(3) == 'forgot_password_boxed') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Forgot Password Boxed
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(2) == 'applications') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-plugin"></i>
                        Applications
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url('uigniter/applications/mailbox'); ?>" class="<?= ($request->uri->getSegment(3) == 'mailbox') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Mailbox
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/applications/chat'); ?>" class="<?= ($request->uri->getSegment(3) == 'chat') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Chat
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/applications/faq_section'); ?>" class="<?= ($request->uri->getSegment(3) == 'faq_section') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>FAQ Section
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(2) == 'elements') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Elements
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li class="<?= ($request->uri->getSegment(3) == 'buttons_standard' || $request->uri->getSegment(3) == 'buttons_pills' || $request->uri->getSegment(3) == 'buttons_square' || $request->uri->getSegment(3) == 'buttons_shadow' || $request->uri->getSegment(3) == 'buttons_icons') ? 'mm-active' : ''; ?>">
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Buttons
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= base_url('uigniter/elements/buttons_standard'); ?>" class="<?= ($request->uri->getSegment(3) == 'buttons_standard') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Standard
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/elements/buttons_pills'); ?>" class="<?= ($request->uri->getSegment(3) == 'buttons_pills') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Pills
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/elements/buttons_square'); ?>" class="<?= ($request->uri->getSegment(3) == 'buttons_square') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Square
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/elements/buttons_shadow'); ?>" class="<?= ($request->uri->getSegment(3) == 'buttons_shadow') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>Shadow
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('uigniter/elements/buttons_icons'); ?>" class="<?= ($request->uri->getSegment(3) == 'buttons_icons') ? 'mm-active' : ''; ?>">
                                        <i class="metismenu-icon">
                                        </i>With Icons
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'dropdowns') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/dropdowns'); ?>" class="<?= ($request->uri->getSegment(3) == 'dropdowns') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Dropdowns
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'icons') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/icons'); ?>" class="<?= ($request->uri->getSegment(3) == 'icons') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Icons
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'badges_labels') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/badges_labels'); ?>" class="<?= ($request->uri->getSegment(3) == 'badges_labels') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Badges
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'cards') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/cards'); ?>" class="<?= ($request->uri->getSegment(3) == 'cards') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Cards
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'loaders') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/loaders'); ?>" class="<?= ($request->uri->getSegment(3) == 'loaders') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Loading Indicators
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'list_group') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/list_group'); ?>" class="<?= ($request->uri->getSegment(3) == 'list_group') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>List Groups
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'navigation') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/navigation'); ?>" class="<?= ($request->uri->getSegment(3) == 'navigation') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Navigation Menus
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'timelines') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/timelines'); ?>" class="<?= ($request->uri->getSegment(3) == 'timelines') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Timelines
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'utilities') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/elements/utilities'); ?>" class="<?= ($request->uri->getSegment(3) == 'utilities') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Utilities
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(2) == 'components') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-box2"></i>
                        Components
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li class="<?= ($request->uri->getSegment(3) == 'tabs') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/tabs'); ?>" class="<?= ($request->uri->getSegment(3) == 'tabs') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Tabs
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'accordions') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/accordions'); ?>" class="<?= ($request->uri->getSegment(3) == 'accordions') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Accordions
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'notifications') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/notifications'); ?>" class="<?= ($request->uri->getSegment(3) == 'notifications') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Notifications
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'modals') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/modals'); ?>" class="<?= ($request->uri->getSegment(3) == 'modals') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Modals
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'loading_blocks') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/loading_blocks'); ?>" class="<?= ($request->uri->getSegment(3) == 'loading_blocks') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Loading Blockers
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'progress_bar') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/progress_bar'); ?>" class="<?= ($request->uri->getSegment(3) == 'progress_bar') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Progress Bar
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'tooltips_popovers') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/tooltips_popovers'); ?>" class="<?= ($request->uri->getSegment(3) == 'tooltips_popovers') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Tooltips & Popovers
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'carousel') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/carousel'); ?>" class="<?= ($request->uri->getSegment(3) == 'carousel') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Carousel
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'calendar') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/calendar'); ?>" class="<?= ($request->uri->getSegment(3) == 'calendar') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Calendar
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'pagination') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/pagination'); ?>" class="<?= ($request->uri->getSegment(3) == 'pagination') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Pagination
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'count_up') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/count_up'); ?>" class="<?= ($request->uri->getSegment(3) == 'count_up') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Count Up
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'scrollable_elements') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/scrollable_elements'); ?>" class="<?= ($request->uri->getSegment(3) == 'scrollable_elements') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Scrollable
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'tree_view') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/tree_view'); ?>" class="<?= ($request->uri->getSegment(3) == 'tree_view') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Tree View
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'maps') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/maps'); ?>" class="<?= ($request->uri->getSegment(3) == 'maps') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Maps
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'ratings') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/ratings'); ?>" class="<?= ($request->uri->getSegment(3) == 'ratings') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Ratings
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'image_crop') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/image_crop'); ?>" class="<?= ($request->uri->getSegment(3) == 'image_crop') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Image Crop
                            </a>
                        </li>
                        <li class="<?= ($request->uri->getSegment(3) == 'guided_tours') ? 'mm-active' : ''; ?>">
                            <a href="<?= base_url('uigniter/components/guided_tours'); ?>" class="<?= ($request->uri->getSegment(3) == 'guided_tours') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Guided Tours
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(2) == 'tables') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-server"></i>
                        Tables
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url('uigniter/tables/data_tables'); ?>" class="<?= ($request->uri->getSegment(3) == 'data_tables') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Data Tables
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/tables/regular'); ?>" class="<?= ($request->uri->getSegment(3) == 'regular') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Regular Tables
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/tables/grid'); ?>" class="<?= ($request->uri->getSegment(3) == 'grid') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Grid Tables
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(2) == 'forms') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Forms
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url('uigniter/forms/controls'); ?>" class="<?= ($request->uri->getSegment(3) == 'controls') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Controls
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/forms/layouts'); ?>" class="<?= ($request->uri->getSegment(3) == 'layouts') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Layouts
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/forms/validation'); ?>" class="<?= ($request->uri->getSegment(3) == 'validation') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Validation
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/forms/wizard'); ?>" class="<?= ($request->uri->getSegment(3) == 'wizard') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Wizard
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(2) == 'widgets') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-airplay"></i>
                        Widgets
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url('uigniter/widgets/datepicker'); ?>" class="<?= ($request->uri->getSegment(3) == 'datepicker') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Datepicker
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/widgets/range_slider'); ?>" class="<?= ($request->uri->getSegment(3) == 'range_slider') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Range Slider
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/widgets/input_selects'); ?>" class="<?= ($request->uri->getSegment(3) == 'input_selects') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Input Selects
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/widgets/toggle_switch'); ?>" class="<?= ($request->uri->getSegment(3) == 'toggle_switch') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Toggle Switch
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/widgets/wysiwyg_editor'); ?>" class="<?= ($request->uri->getSegment(3) == 'wysiwyg_editor') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>WYSIWYG Editor
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/widgets/input_mask'); ?>" class="<?= ($request->uri->getSegment(3) == 'input_mask') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Input Mask
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/widgets/clipboard'); ?>" class="<?= ($request->uri->getSegment(3) == 'clipboard') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Clipboard
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/widgets/textarea_autosize'); ?>" class="<?= ($request->uri->getSegment(3) == 'textarea_autosize') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon">
                                </i>Textarea Autosize
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($request->uri->getSegment(2) == 'charts') ? 'mm-active' : ''; ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-graph3"></i>
                        Charts
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url('uigniter/charts/chartjs'); ?>" class="<?= ($request->uri->getSegment(3) == 'chartjs') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>ChartJS
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/charts/apexcharts'); ?>" class="<?= ($request->uri->getSegment(3) == 'apexcharts') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon pe-7s-graph">
                                </i>Apex Charts
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('uigniter/charts/sparklines'); ?>" class="<?= ($request->uri->getSegment(3) == 'sparklines') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon pe-7s-graph1">
                                </i>Chart Sparklines
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>