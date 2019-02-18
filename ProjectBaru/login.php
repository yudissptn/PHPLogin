<?php
include 'vars.php';
//Check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}else{
  //print_r($conn);
}

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT*FROM info_siswa WHERE Username='$username'and Password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
  session_start();
  $_SESSION['Username'] = $username;
  while($row = mysqli_fetch_assoc($result)){
    $_SESSION['Nama'] = $row["Nama"];
    $_SESSION['NRP'] = $row["NRP"];
    $_SESSION['Jurusan'] = $row["Jurusan"];
    $_SESSION['Alamat'] = $row["Alamat"];
    $_SESSION['Company'] = $row["Company"];
  }
  echo "cek";
  header("location:index.php");
  die;
}else{
  header("location:index.php");
  die;
}
//mysqli_close($conn);
 ?>
