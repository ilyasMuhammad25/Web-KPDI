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
    <table border="0" width="600" cellpadding="0" cellspacing="0">
        <tr bgcolor="#19bd9b">
            <td colspan="3" align="center">Dunia Kartu Anggota</a>
            </td>
        </tr>
        <tr bgcolor="#e7e7e7">
            <td width="150">Nama Lengkap</td>
            <td width="250"><?= set_value('name', $anggota->name); ?> :</td>
            <td rowspan="4"><img src="FotoMu.jpg" width="200"></td>
        </tr>
        <tr bgcolor="#e7e7e7">
            <td>Nomor Anggota :</td>
            <td><?= set_value('MemberNo', $anggota->MemberNo); ?></td>
        </tr>
        <tr bgcolor="#e7e7e7">
            <td>Pekerjaan</td>
            <td>Programmer</td>
        </tr>
        <tr bgcolor="#e7e7e7">
            <td>Lulusan</td>
            <td>SMK Negeri 1 Kota Pasuruan</td>
        </tr>
        <tr bgcolor="#19bd9b">
            <td colspan="3" align="center">Perpustakaan Desa</a>
            </td>
        </tr>
    </table>
</body>

</html>