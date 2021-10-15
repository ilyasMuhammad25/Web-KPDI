<?php
$request = \Config\Services::request();
$request->uri->setSilent();
?>

<?php $core = config('Core'); $layout = (!empty($core->layout_backend)) ? $core->layout_backend : 'hamkamannan\adminigniter\Views\layout\backend\main';?>
<?=$this->extend($layout);?>
<?= $this->section('style'); ?>
<?= $this->endSection('style'); ?>

<?=$this->section('page');?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-strong-bliss"></i>
                </div>
                <div><?=lang('Anggota.module')?>
                    <div class="page-title-subheading"><?=lang('Anggota.info.list_all')?>
                        <?=lang('Anggota.module')?> </div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('anggota')?>"><i class="fa fa-home"></i>
                                <?=lang('Anggota.label.home')?></a></li>
                        <li class="active breadcrumb-item" aria-current="page"><?=lang('Anggota.module')?> </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-header"><i class="header-icon lnr-list icon-gradient bg-plum-plate">
            </i><?=lang('Anggota.label.table')?> <?=lang('Anggota.module')?>
            <div class="btn-actions-pane-right actions-icon-btn">

                <?php if (is_allowed('anggota/create')): ?>
                    <a href="<?=base_url('anggota/create')?>" class=" btn btn-success" title=""><i class="fa fa-plus"></i> <?=lang('Anggota.action.add')?> <?=lang('Anggota.module')?> </a>
                <?php endif;?>
            </div>

        </div>
        <div class="card-body">
            <?=get_message('message');?>
            <table style="width: 100%;" id="tbl_anggotas" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th><?=lang('Anggota.field.no')?> </th>
                        <th align="center"><?=lang('Banner.field.photo')?> </th>
                        <th><?=lang('Anggota.field.name')?></th>
                        <th><?=lang('Anggota.field.MemberNo')?></th>
                        <th><?=lang('Anggota.field.Email')?></th>
                        <th><?=lang('Anggota.field.active')?></th>
                        <th><?=lang('Anggota.field.created_by')?></th>
                        <th><?=lang('Anggota.field.updated_by')?></th>
                        <th width="90"><?=lang('Anggota.label.action')?></th>
                    </tr>
                </thead>
				<thead>
                    <tr>
                        <th></th>
						<th></th>
                        <th><input type="text" id="name" class="form-control form-control-sm" placeholder="Cari" /></th>
                        <th><input type="text" id="MemberNo" class="form-control form-control-sm" placeholder="Cari" /></th>
                        <th><input type="text" id="Email" class="form-control form-control-sm" placeholder="Cari" /></th>
                        <th></th>
						<th></th>
						<th></th>
						<th></th>
                    </tr>
                </thead>
                <tbody >
                </tbody>
            </table>
        </div>
    </div>
</div>
<?=$this->endSection('page');?>

<?=$this->section('script');?>
<script>
    var tbl_anggotas = $('#tbl_anggotas').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url: '<?=base_url('anggota/json')?>',
        },
        columns: [
            {"data": "id",
    render: function (data, type, row, meta) {
        return meta.row + meta.settings._iDisplayStart + 1;
    }},
            {data: 'file_image', name: 'file_image'},
            {data: 'name', name: 'name'},
            {data: 'MemberNo', name: 'MemberNo'},
            {data: 'Email', name: 'Email'},
            {data: 'active', name: 'active'},
            {data: 'created_name', name: 'created_name'},
            {data: 'updated_by', name: 'updated_by'},
            {data: 'id', name: 'id'},
        ],
        columnDefs:[

            {
                targets:1, data:'id', render: function(data,type,full,meta) { 
                    var file_image = '<img width="100" class="rounded" src="<?=base_url('uploads/anggota/')?>/'+data+'" alt="">';
                    var button_delete = '<button type="button" class="btn btn-primary btn-sm mt-2">Ambil gambar</button>';
                    return file_image + button_delete;
                },
            },
            {
                targets:8, data:'id', render: function(data,type,full,meta) { 
                    var button_edit = '<a href="<?=base_url('anggota/edit')?>/'+data+'" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Param"><i class="pe-7s-note font-weight-bold"> </i></a> ';
                    var button_delete = '<a href="javascript:void(0);" data-href="<?=base_url('anggota/delete')?>/'+data+'" class="btn btn-danger remove-data" data-toggle="tooltip" data-placement="top" title="Hapus Param"><i class="pe-7s-trash font-weight-bold"> </i></a>';
                    return button_edit + button_delete;
                },
            },
			{
                "searchable": false,
                "orderable": false,
                "targets": [8]
            }
        ],
        order: [[7, 'desc']]
    });

	// tbl_anggotas.on('order.dt search.dt', function() {
	// 	tbl_anggotas.column(0, {
	// 		search: 'applied',
	// 		order: 'applied'
	// 	}).nodes().each(function(cell, i) {
	// 		cell.innerHTML = i + 1;
	// 	});
	// }).draw();

    $('#name').on( 'keyup', function (e) {
        tbl_anggotas.columns('name:name').search( this.value ).draw();
    });

    $('#MemberNo').on( 'keyup', function () {
        tbl_anggotas.columns('MemberNo:name').search( this.value ).draw();
    });

    $('#Email').on( 'keyup', function () {
        tbl_anggotas.columns('Email:name').search( this.value ).draw();
    });

    $('#tbl_anggotas').on('click', '.remove-data', function() {
        var url = $(this).attr('data-href');
        Swal.fire({
            title: '<?= lang('App.swal.are_you_sure') ?>',
            text: "<?= lang('App.swal.can_not_be_restored') ?>",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#dd6b55',
            confirmButtonText: '<?= lang('App.btn.yes') ?>',
            cancelButtonText: '<?= lang('App.btn.no') ?>'
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        });
        return false;
    });

    $(".apply-param-status").on('change', function() {
        var switchStatus = $(this).is(':checked');
        var paramName = $(this).attr('data-param');
        var paramValue = $(this).attr('data-class');

        if (switchStatus) {
            setParameter(paramName, 1);
        } else {
            setParameter(paramName, 0);
        }
    });
</script>

<script>

    $("body").on("click", ".remove-data", function() {
        var url = $(this).attr('data-href');
        Swal.fire({
            title: '<?= lang('App.swal.are_you_sure') ?>',
            text: "<?= lang('App.swal.can_not_be_restored') ?>",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#dd6b55',
            confirmButtonText: '<?= lang('App.btn.yes') ?>',
            cancelButtonText: '<?= lang('App.btn.no') ?>'
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        });
        return false;
    });
</script>
<?=$this->endSection('script');?>
