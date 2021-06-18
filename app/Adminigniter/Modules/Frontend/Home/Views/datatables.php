<?= $this->extend('layout/backend/blank'); ?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate"> </i><?= lang('User.heading.sub.table') ?>
            <div class="btn-actions-pane-right actions-icon-btn">
                <a data-toggle="modal" data-target="#modal_create" href="javascript:void(0);" class=" btn btn-success" title="Tambah User"><i class="fa fa-plus"></i> Tambah User</a>
            </div>
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="tbl_users" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Option Name</th>
                        <th>Option Value</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th><input type="text" id="column0_search" class="form-control" placeholder="Search" /></th>
                        <th><input type="text" id="column1_search" class="form-control" placeholder="Search" /></th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>

<?= $this->section('script'); ?>

<script>
    var dTable = $('#tbl_users').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url: 'http://localhost:8080/home/json',
        },
        columns: [
            {data: 'option_name', name: 'option_name'},
            {data: 'option_value', name: 'option_value'},
            {data: 'description', name: 'description'},
        ],
    });

    $('#column0_search').on( 'keyup', function () {
        dTable
            .columns(0)
            .search( this.value )
            .draw();
    });

    $('#column1_search').on( 'keyup', function () {
        dTable
            .columns(1)
            .search( this.value )
            .draw();
    });

</script>
<?= $this->endSection('script'); ?>


