<?php
$id = $_GET['id'];
$conn  = mysqli_connect("127.0.0.1","root","","Bebas");
mysqli_query($conn,"delete from info_siswa where id_siswa='$id'");
header("location: http://localhost/ProjectBaru/index.php");
echo "aa";
 ?>
