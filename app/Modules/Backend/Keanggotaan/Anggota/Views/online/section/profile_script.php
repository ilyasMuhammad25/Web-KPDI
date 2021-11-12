<script>
$('.select2').select2();
$(".tags").select2({
	allowClear: true,
	tags: true,
	tokenSeparators: [',']
});
</script>
<script>
$(document).ready(function() {
    $('#Provincy').change(function() {
        var propinsi_id = $(this).val();
        var uriParam = '?propinsi_id=' + propinsi_id;
        getDropdown('City', uriParam, 'Pilih', false, false);
    });
});
</script>
<script>
$(document).ready(function() {
    $('#ProvincyNow').change(function() {
        var propinsi_id = $(this).val();
        var uriParam = '?propinsi_id=' + propinsi_id;
        getDropdown('CityNow', uriParam, 'Pilih', false, false);
    });
});
</script>