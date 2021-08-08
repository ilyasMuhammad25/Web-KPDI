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
    <div class="app-container app-theme-white body-tabs-shadow">
        <?= $this->renderSection('page'); ?>
    </div>
    <?= $this->include('Uigniter\Views\partial\script'); ?>
    <?= $this->renderSection('script'); ?>
    <script>
        var toastr_msg = '<?= get_message('toastr_msg'); ?>';
        var toastr_type = '<?= get_message('toastr_type'); ?>';
        if (toastr_msg.length > 0) {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-full-width",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3500",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr[toastr_type](toastr_msg, "Information");
        }
    </script>
</body>

</html>