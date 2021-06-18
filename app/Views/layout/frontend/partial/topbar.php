<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<ul class="navbar-nav alt-font">
    <?php if (get_parameter('topbar-mode') == 'auto') : ?>
        <?=display_menu_frontend(0,1);?>
    <?php else : echo $this->include('layout/frontend/partial/navigation');
    endif; ?>
</ul>