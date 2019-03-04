<?php
  $conn = mysqli_connect("127.0.0.1", "root", "", "Bebas");
  $nikbaru = $_GET['nik'];
  $namabaru = $_GET['nama'];
  $alamatbaru = $_GET['alamat'];

  $sql          = "UPDATE info_siswa SET nik='$nikbaru',nama='$namabaru',alamat='$alamatbaru' where id_siswa=".$_GET['id_siswa'];
  $sql_query    = mysqli_query($conn, $sql);
  header("location: http://localhost/ProjectBaru/index.php");
 ?>
