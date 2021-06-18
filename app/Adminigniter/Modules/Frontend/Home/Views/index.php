<?= $this->extend('layout/frontend/home'); ?>

<?= $this->section('style'); ?>

<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>
    <?= $this->include(APPPATH.'Adminigniter/Modules/Frontend/Home/Views/section/slider'); ?>
    <?= $this->include(APPPATH.'Adminigniter/Modules/Frontend/Home/Views/section/about'); ?>
<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<?= $this->endSection('script'); ?>
