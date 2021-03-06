<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$sidebar_class = 'closed-sidebar';

if(!empty(get_parameter('closed-sidebar-class'))){
	$sidebar_class = get_parameter('closed-sidebar-class');
} else {
	$sidebar = $request->getVar('sidebar') ?? 'show';
	if($sidebar == 'hide'){
		$sidebar_class = 'closed-sidebar';
	} 
}
?>

<?php 
	$cart_ref_code = false;
	$cart_total_items = 0;
	$cart_total = 0;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?= base_url(get_parameter('favicon')) ?>">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?? get_parameter('site-name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="<?= base_url('themes/uigniter'); ?>/css/base.css">
    <?php if (get_parameter('show-logo-sidebar') == '1') : ?>
        <style>
            .app-header__logo .logo-src {
                height: 23px;
                width: 97px;
                background: url("<?= base_url() . get_parameter('logo-small'); ?>");
            }

            .app-header__logo .logo-src {
                background: url("<?= base_url() . get_parameter('logo-small'); ?>");
            }
        </style>
    <?php endif; ?>
    <style>
        .site-name {
            font-size: 18px;
            margin: .75rem 0;
            font-weight: 700;
            color: #fff;
            white-space: nowrap;
            position: relative;
        }
    </style>
    <?= $this->include('Core\layout\backend\partial\style'); ?>
    <?= $this->include('Core\layout\backend\partial\custom_style'); ?>
    <?= $this->renderSection('style'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow <?=$sidebar_class?> <?= get_parameter('container-header-class') ?> <?= get_parameter('container-sidebar-class') ?> <?= get_parameter('container-footer-class') ?>">
        <?= $this->include('Core\layout\backend\partial\header'); ?>
        <?php if (is_admin()) : ?>
            <?php if (get_parameter('show-layout-setting') == '1') : ?>
                <?= $this->include('Core\layout\backend\partial\setting'); ?>
            <?php endif; ?>
        <?php endif; ?>
        <div class="app-main">
            <?= $this->include('Core\layout\backend\partial\sidebar'); ?>
            <div class="app-main__outer">
                <?= $this->renderSection('page'); ?>
                <?= $this->include('Core\layout\backend\partial\footer'); ?>
            </div>
        </div>
    </div>
	<?php if($cart_ref_code):?>
    	<?= $this->include('Core\layout\backend\partial\drawer'); ?>
	<?php endif;?>
    <?= $this->include('Core\layout\backend\partial\script'); ?>
    <?= $this->include('Core\layout\backend\partial\custom_script'); ?>
    <?= $this->renderSection('script'); ?>
</body>

</html>