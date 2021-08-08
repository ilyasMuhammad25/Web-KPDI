<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?? 'Adminigniter'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="<?= base_url('themes/uigniter'); ?>/css/base.min.css">
    <style>
        .app-page-title {
            padding: 15px 30px;
        }

        .app-page-title .page-title-icon {
            padding: 0px;
            width: 50px;
            height: 50px;
        }

        .errors {
            color: red;
        }

        .app-header__logo .logo-src {
            width: 150px;
        }
    </style>
    <?= $this->renderSection('style'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar <?= $class_sidebar ?? ''; ?>">
        <!--Header START-->
        <?= $this->include('Uigniter\Views\partial\header'); ?>
        <!--Header END-->
        <!--THEME OPTIONS START-->
        <?= $this->include('Uigniter\Views\partial\setting'); ?>
        <!--THEME OPTIONS END-->
        <div class="app-main">
            <?= $this->include('Uigniter\Views\partial\sidebar'); ?>
            <div class="app-main__outer">
                <?= $this->renderSection('page'); ?>
                <?= $this->include('Uigniter\Views\partial\footer'); ?>
            </div>
        </div>
    </div>
    <!--DRAWER START-->
    <?= $this->include('Uigniter\Views\partial\drawer'); ?>
    <!--DRAWER END-->
    <?= $this->include('Uigniter\Views\partial\script'); ?>
    <?= $this->renderSection('script'); ?>
</body>

</html>