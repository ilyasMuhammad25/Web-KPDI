<!-- <!DOCTYPE html>
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

</html> -->

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">
<body>

<div class="w3-card-4 w3-margin" style="width:70%">

<header class="w3-container w3-light-grey">
  <h3>Kartu Anggota Perpustakaan</h3>
</header>

<div class="w3-container">
  <p>1 new friend request</p>
  <hr>
  <img src="img_avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
  <p><?= set_value('name', $anggota->name); ?></p><br>
</div>

<button class="w3-btn-block w3-dark-grey">+ Connect</button>

</div>

</body>
</html> 
