<?php
$base_url = "http://".$_SERVER['SERVER_NAME'].'/ProjectBaru/';
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Bebas";

//Crate connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
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

//mysqli_close($conn);
 ?>

 <html>
 <head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Welcome Page</title>
   <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css" type="text/css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
 <div class="form-style-8">
   <h2>
   <?php 
    if(mysqli_num_rows($result)>0){
      //output data of each row
      while($row = mysqli_fetch_assoc($result)){
        $nama = $row["Nama"];
        $NRP = $row["NRP"];
        $Jurusan = $row["Jurusan"];
        $Username = $row["Username"];
        $Alamat = $row["Alamat"];
        $Company = $row["Company"];
        echo "Welcome ".$nama."!!";
  
        //echo"<br>"."id: ".$row["id_siswa"]." - NIK: ".$row["nik"]." - Nama: ".$row["nama"]." - Alamat: ".$row["alamat"]."<br>";
      }
      }else{
        echo "Username atau Password Salah!!";
      }
   ?>
   </h2>
   <button class="tombol-tabel" onClick=tampilkanTabel();>Detail Information</button> 
   </div>
   <div class="tabel">
     <table width=100%>
     <tr>
       <th>Nama</th>
       <th>NRP</th>
       <th>Jurusan</th>
       <th>Username</th>
       <th>Alamat</th>
       <th>Company</th>
     </tr>
     <tr>
       <td><?= $nama; ?></td>
       <td><?= $NRP; ?></td>
       <td><?= $Jurusan; ?></td>
       <td><?= $Username; ?></td>
       <td><?= $Alamat; ?></td>
       <td><?= $Company; ?></td>
     </tr>
    </table>
   </div>
   <script>
   function tampilkanTabel(){
     let tabelData = document.getElementsByClassName("tabel");
     tabelData[0].style.display = 'block';
   }
   </script>
 </body>
 </html>
