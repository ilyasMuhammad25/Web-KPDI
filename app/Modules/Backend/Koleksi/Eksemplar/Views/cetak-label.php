
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

<body bgcolor="#181a1c">
<td style="width:50%;">
				<table cellpadding="0" cellspacing="0" style="width:255px;" nobr="true">
					<tr style="vertical-align:center">
					<td style="border:solid 1px #CCC; height:53px; width:212px; text-align: center; ">Perpustakaan Demo Jabar</td>
					<td style="width:17%;border-top:solid 1px #CCC;border-bottom:solid 1px #CCC; border-right:solid 1px #CCC;text-align: center " rowspan="2">' . str_replace(' ', '<br>', $LabelData['CallNumber']) . '</td>
					</tr>
					<tr>
						<td style="height:90px; width:83%; text-align: center;padding-left: 3px; padding-right: 3px;border-left:solid 1px #CCC; border-bottom:solid 1px #CCC; border-right:solid 1px #CCC;">
							<span style="font-size: 12px;">
                           BRC12300005
							<br>
							<!-- <tcpdf method="write1DBarcode" params="' . $params . '" /> -->
							<br>							
							</span>
							<!-- *' . $LabelData['Barcode'] . '* -->
						</td>						
					</tr>
				</table>
			</td>

</body>

</html>



