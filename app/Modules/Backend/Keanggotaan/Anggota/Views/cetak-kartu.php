

  <h3><center>Kartu Anggota</center></h3>
  <table border="1" cellspacing="0" cellpadding="5" width="100%">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama </th>
        <th>No Anggota</th>
        <th>Telp</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=0;
      foreach ($kartu as $data) {
        $no++;
        echo "<tr>";
          echo "<td><center>".$no."</center></td>";
          echo "<td><center>".$no."</center></td>";
          echo "<td><center>".$no."</center></td>";
       
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
