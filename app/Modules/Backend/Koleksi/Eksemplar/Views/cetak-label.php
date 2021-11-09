
<!DOCTYPE html>
<html>

<head>
    <title>Kartu Nama</title>
    <style type="text/css">
    body {
        font-family: Arial;
    }

    td {
        padding: 10px;
    }

    table {
        margin: auto;
        margin-top: 90px;
    }
    </style>
</head>

<body>
	<table border="1">
		<tr>
			<td colspan="2">
				Perpustakaan Nasional RI
			</td>
		</tr>
		<tr>
			<td>
				<?=$barcode?> <br>
				*<?=$eksempalar->barcode_no ?>*
			</td>
			<td>
				<?=$eksempalar->CallNumber ?>
			</td>
		</tr>
	</table>
</body>

</html>



