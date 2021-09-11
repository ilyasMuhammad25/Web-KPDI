<script>
    /* Sidebar */
    $('.close-sidebar-btn').click(function() {
        var classToSwitch = $(this).attr('data-class');
        var containerElement = '.app-container';
        $(containerElement).toggleClass(classToSwitch);

        var closeBtn = $(this);

        if (closeBtn.hasClass('is-active')) {
            closeBtn.removeClass('is-active');
        } else {
            closeBtn.addClass('is-active');
        }
    });

    /* Toastr */
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

    /* Magnific Popup */
    $('.ajax-popup-link').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<style>.mfp-iframe-holder .mfp-content {max-width: 95%;height:95%}</style>' +
                '<div class="mfp-iframe-scaler" >' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div></div>'
        },
    });

    $('.image-link').magnificPopup({
        type: 'image'
    });

    /* Data Table*/
    function setDataTable(dom, disableOrderCols = [4, 6, 7], defaultOrderCols = [0, 'asc'], autoNumber = false) {
        var t = $(dom).DataTable({
            "oLanguage": {
                "sSearch": "<i class='fa fa-search'></i> _INPUT_",
                "sLengthMenu": "_MENU_",
                "sInfo": "Show _START_ to _END_ of _TOTAL_ records",
                "oPaginate": {
                    "sNext": "Next",
                    "sPrevious": "Prev",
                }
            },
            "drawCallback": function( settings ) {
                $('.apply-status').bootstrapToggle();

                $(".apply-status").on('change', function() {
                    var href = $(this).attr('data-href');
                    var field = $(this).attr('data-field');
                    var id = $(this).attr('data-id');
                    var switchStatus = $(this).is(':checked');

                    if (switchStatus) {
                        var url = href + '/' + id + '?field=' + field + '&value=1';
                        window.location.href = url;
                    } else {
                        var url = href + '/' + id + '?field=' + field + '&value=0';
                        window.location.href = url;
                    }
                });
            },
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": disableOrderCols
            }],
            "order": [
                defaultOrderCols
            ]
        });

        if (autoNumber) {
            t.on('order.dt search.dt', function() {
                t.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        }
    }

    /* Parameter*/
    function setParameter(name, value) {
        var data_post = {
            name: name,
            value: value,
            '<?= csrf_token() ?>': '<?= csrf_hash() ?>',
        };

        $('.loading').show();

        $.ajax({
                url: '<?= base_url('api/parameter/create') ?>',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                window.location.reload();
            })
            .fail(function(res) {
                Swal.fire({
                    title: 'Oups',
                    text: 'Parameter gagal disimpan',
                    type: 'warning',
                    showConfirmButton: false,
                    timer: 3000
                });
            })
            .always(function() {
                $('.loading').hide();
            });

        return false;
    }

    /* Dropzone*/
    function setDropzone(domID, routePath, acceptedFiles = 'application/pdf', maxFiles = 1, maxFilesize = 10){
        Dropzone.autoDiscover = false;

        var baseUrl = "<?=base_url()?>" +"/"+ routePath;
        
        if(maxFiles > 1){
            url = baseUrl + "/do_upload";
            paramName = "file";
        } else {
            url = baseUrl + "/do_upload";
            paramName = "file";
        }

        var file_dropzone = new Dropzone('#'+domID, {
            url: url,
            paramName: paramName,
            maxFiles: maxFiles,
            maxFilesize: maxFilesize,
            addRemoveLinks: true,
            acceptedFiles: acceptedFiles,
            renameFile: function(file) {
                var filename = new Date().getTime() + '_' + file.name.toLowerCase().replace(' ', '_');
                console.log("renameFile");
                console.log(filename);

                return filename;
            },
            accept: function(file, done) {
                console.log("accept");
                console.log(file);
                done();
            },
            init: function() {
                this.on("maxfilesexceeded", function(file) {
                    console.log("max files exceeded");
                    console.log(file);
                });
            },
            success: function(file, response) {
                console.log('success');
                console.log(response);

                var uuid = file.upload.uuid;
                var value = response.data.name;
                var name = domID+'['+uuid+']';

                $('#'+domID+'_listed').append('<input type="hidden" name="'+name+'" value="' + value + '" />');
            },
            removedfile: function(file) {
                console.log('removedfile');
                console.log(file);
                var name = "";
                var path = "<?=WRITEPATH?>" + "/uploads/";
                if (file.upload !== undefined) {
                    name = file.upload.filename;
                } else {
                    name = file.name;
                    path = "<?=ROOTPATH?>" + "/public/uploads/" + routePath;
                }

                $.ajax({
                    type: 'POST',
                    url: baseUrl + "/do_delete",
                    data: "name=" + name + "&path=" + path,
                    dataType: 'html'
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });

        return file_dropzone;
    }    

    function deleteConfirm(callback){
        Swal.fire({
            title: 'Anda yakin ?',
            text: "Data yang sudah dihapus tidak dapat dikembalikan lagi",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#dd6b55',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(callback);   
    }

    function deleteInfo(success = true){
        if(success){
            Swal.fire({
                title: 'Berhasil',
                text: 'Data berhasil dihapus',
                type: 'success',
                showConfirmButton: false,
                timer: 3000
            }); 
        } else {
            Swal.fire({
                title: 'Gagal',
                text: 'Data gagal dihapus',
                type: 'warning',
                showConfirmButton: false,
                timer: 2000
            }); 
        }
    }

    function makeAjaxCall(url, methodType, callback){
        return $.ajax({
            url : url,
            method : methodType,
            dataType : "json"
        })
    }

    function makeAjaxCall2(url, methodType, callback){
        $.ajax({
            url : url,
            method : methodType,
            dataType : "json",
            success : callback,
            error : function (reason, xhr){
                console.log("Error in processing your request", reason);
            }
        });
    }
</script>