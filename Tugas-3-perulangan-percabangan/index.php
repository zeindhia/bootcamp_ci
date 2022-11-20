<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title>Tugas Bootcamp-CI</title>
  </head>
  <body>

<?php
$nama= ["Andi", "Aldi", "Badrun", "Cery", "Elis", "Fira", "Haikal"];
$nilai= [77, 90, 88, 54, 23, 0, 98];
$predikat=0;
?>
      <h1>DAFTAR NILAI MAHASISWA</h1>
  <table class="table table-bordered table-warning">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nilai</th>
      <th scope="col">Predikat</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php for($i=0; $i<7; $i++) { ?>
    <tr>
      <th scope="row"><?=$i ?></th>
      <td><?php echo $nama[$i]; ?></td>
      <td><?php echo $nilai[$i]; ?></td>

      <?php
      if($nilai[$i] >=80){
        $predikat= "A";
      }
      else if(79 >= $nilai[$i] && $nilai[$i] >= 70){
        $predikat= "B";
      }
      else if(69 >= $nilai[$i] && $nilai[$i] >= 50){
        $predikat= "C";
      }
      else if(59 >= $nilai[$i] && $nilai[$i] >= 40){
        $predikat= "D";
      }else{
        $predikat= "E";
      }
      
      ?>
      <td><?php echo $predikat ?></td>

      
      <td><?php
      if($nilai[$i] >=70){
        echo "LULUS";
      }else{
        echo "TIDAK LULUS";
      }
      ?></td>
    </tr>
  <?php } ?>

    
  </tbody>
</table>




  </body>
</html>