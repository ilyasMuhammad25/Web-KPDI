<?php
$request = \Config\Services::request();
$request->uri->setSilent();
helper('menu');
?>
<div class="app-sidebar <?= get_parameter('sidebar-cs-class'); ?>">
	<div class="app-header__logo <?= get_parameter('sidebar-cs-class'); ?>">
        <div class="logo-src">
			<?php if(get_parameter('show-logo-sidebar') == 0):?>
				<div class="site-name">
					<a style="text-decoration: none; padding-right:9px; padding-bottom:3px;" href="<?= base_url() ?>" class="<?= get_parameter('text-cs-class', 'text-white'); ?>"><?=get_parameter('site-name','Backoffice')?> </a>
				</div>
			<?php endif;?>
        </div>
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
                <?php if (get_parameter('sidebar-mode') == 'auto') : ?>
					<?php 
						$where = '';
						if(is_admin()){
							$admin_exclude_menus = get_parameter('admin-exclude-menus','122');
							$where = "AND a.id NOT IN (".$admin_exclude_menus.")";
						}
					?>
                    <?=display_menu_backend2(0,1, $where);?>
                <?php else : echo $this->include('Core\layout\backend\partialnavigation');
                endif; ?>
            </ul>
        </div>
    </div>
</div>