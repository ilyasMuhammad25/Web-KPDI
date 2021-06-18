<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Hamka Mannan">
    <!-- description -->
    <meta name="description" content="<?=get_parameter('site-description')?>">
    <!-- keywords -->
    <meta name="keywords" content="<?=get_parameter('site-description')?>">

    <title><?= get_parameter('site-description') ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(get_parameter('favicon')) ?>">
    <?= $this->include('layout/frontend/partial/style'); ?>
    <?= $this->include('layout/frontend/partial/custom_style'); ?>
    <?= $this->renderSection('style'); ?>
</head>
<body data-mobile-nav-style="classic">
    <?= $this->include('layout/frontend/partial/header'); ?>
    <?= $this->renderSection('page'); ?>
    <?= $this->include('layout/frontend/partial/footer'); ?>
    <?= $this->include('layout/frontend/partial/script'); ?>
    <?= $this->include('layout/frontend/partial/custom_script'); ?>
    <?= $this->renderSection('script'); ?>
</body>
</html>


