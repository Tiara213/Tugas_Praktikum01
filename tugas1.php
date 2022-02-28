<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Array</title>
  </head>
  <body>
    <h1 align="center" >Tiara-0110121082-SI04</h1>

    <?php
      $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
      $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
      $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
      $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

      $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

    ?>
    <h3 align="center" >Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
    <thead>
    <tr bgcolor="aqua">
    <th>No</th><th>NIM</th><th>UTS</th>
    <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
    </tr>
    </thead>
    <tbody>
    <?php
      $nomor = 1;
      foreach($ar_nilai as $ns){
        $warna = ($nomor%2 == 0)?"linen":"khaki";
      echo '<tr bgcolor="'.$warna.'"><td align="center">'.$nomor.'</td>';
      echo '<td align="center">'.$ns['nim'].'</td>';
      echo '<td align="center">'.$ns['uts'].'</td>';
      echo '<td align="center">'.$ns['uas'].'</td>';
      echo '<td align="center">'.$ns['tugas'].'</td>';
      $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
      echo '<td align="center">'.number_format($nilai_akhir,2,',','.').'</td>';
      echo '<tr/>';
      $nomor++;
      }
    ?>
    </tbody>
    </table>

  </body>
</html>