<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="table.css">

    <title>Tugas Bootcamp-CI</title>
  </head>
  <body>

<?php
$nama1 = "ahmad";
$nama2 = "badrun";
$nama3 = "diki";
$nim1 = "198203";
$nim2 = "210921";
$nim3 = "220088";
$nilaiuts1 = 70;
$nilaiuas1 = 70;
$nilaiuts2 = 80;
$nilaiuas2 = 80;
$nilaiuts3 = 90;
$nilaiuas3 = 90;
?>
      <h1>DAFTAR NILAI MAHASISWA</h1>
  <table class="table table-bordered table-warning">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Total Nilai</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $nama1 ?></td>
      <td><?php echo $nim1 ?></td>
      <td><?php echo $nilaiuts1+$nilaiuas1 ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $nama2 ?></td>
      <td><?php echo $nim2 ?></td>
      <td><?php echo $nilaiuts2+$nilaiuas2 ?></td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td><?php echo $nama3 ?></td>
      <td><?php echo $nim3 ?></td>
      <td><?php echo $nilaiuts3+$nilaiuas3 ?></td>
    </tr>
  </tbody>
</table>

    

    
  </body>
</html>