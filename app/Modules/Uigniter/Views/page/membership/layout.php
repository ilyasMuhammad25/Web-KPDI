<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>UIgniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="<?= base_url('themes/uigniter'); ?>/css/base.min.css">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <?= $this->renderSection('page'); ?>
    </div>
    <!--DRAWER END-->
    <?= $this->include('uigniter/partial/script'); ?>
</body>

</html>