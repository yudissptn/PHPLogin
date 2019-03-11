<?php
  $conn = mysqli_connect("127.0.0.1", "root", "", "Bebas");
  $nikbaru = $_GET['nik'];
  $namabaru = $_GET['nama'];
  $alamatbaru = $_GET['alamat'];
  $hobibaru = $_GET['hobi'];

  $sql          = "INSERT INTO info_siswa (nik, nama, alamat) VALUES ('$nikbaru', '$namabaru', '$alamatbaru')";
  $sql_query    = mysqli_query($conn, $sql);
  $last_id      = mysqli_insert_id($conn);
  $sql1          = "INSERT INTO hobi (id_siswa, nama_hobi) VALUES ('$last_id', '$hobibaru')";
  $sql_query1    = mysqli_query($conn, $sql1);
  header("location: http://localhost/ProjectBaru/index.php");
 ?>
