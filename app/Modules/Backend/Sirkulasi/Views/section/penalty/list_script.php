<script>
    var t = setDataTable('#tbl_sirkulasis', disableOrderCols = [0, 4], defaultOrderCols = [1, 'desc'], autoNumber = true);

	function accordion (tr) {
		var id = tr.data('id');
		var table = 'tbl_'+id;
		var tbody = 'tbody_'+id;

		return `
			<div class="table-responsive">
				<table style="width: 100%;" id="`+table+`" class="table table-striped table-bordered">
					<thead class="bg-corporate-secondary2 text-white">
						<tr>
							<th>No. Barcode</th>
							<th>Judul</th>
							<th>Penerbitan</th>
							<th>Tanggal Peminjaman</th>
							<th>Jatuh Tempo</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="`+tbody+`">
					</tbody>
				</table>
			</div>
		`;
	}

	$('#tbl_sirkulasis tbody').on('click', '.details-control', function () {
        var tr = $(this).closest('tr'); 
		var row = t.row(tr);

        if ( row.child.isShown() ) {
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            row.child(accordion(tr)).show();

			var id = tr.data('id');
			var url = tr.data('url');
			var table = 'tbl_'+id;
			var tbody = 'tbody_'+id;

			makeAjaxCall(url, "GET").then(function(respJson){
				$('#'+tbody).empty();
				$.each(respJson, function(i, item) {
					$('#'+tbody).append(`
						<tr class="rm-row">
							<td width="100"><b>`+item.barcode_no+`</b></td>
							<td>`+item.title+`</td>
							<td width="150">`+item.publication+`</td>
							<td width="150">`+item.loan_date+`</td>
							<td width="100">`+item.due_date+`</td>
							<td width="90" class="text-left">
								
							</td>
						</tr>
					`);
				});
			}, function(reason){
				console.log("Error in processing your request", reason);
			});

            tr.addClass('shown');
        }
    });

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