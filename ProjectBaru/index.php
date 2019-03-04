<?php
$base_url = "http://".$_SERVER['SERVER_NAME'].'/ProjectBaru/';
 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1">
     <title>Taxation Online</title>
     <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css" type="text/css">
        </head>
   <body>
     <?php
     session_start();
     if(isset($_SESSION['username']) and $_SESSION['username'] != ''){
       $conn  = mysqli_connect("127.0.0.1","root","","Bebas");
       $sql = 'select s.*, h.nama_hobi from info_siswa s left join hobi h on h.id_siswa=s.id_siswa';
       $sql_query = mysqli_query($conn,$sql);
       echo "<div class='form-style-8'>";
       echo "<table width = '100%>'";
       echo "<tr><th>No</th><th>NIK</th><th>Nama</th><th>Alamat</th><th>Hobi</th><th>Action</th></tr>";
       if (mysqli_num_rows($sql_query) > 0) {
         $nomor=1;
         while ($row = mysqli_fetch_assoc($sql_query)) {
           echo '<tr><td>'.$nomor.'</td><td>'.$row['nik'].'</td><td>'.$row['nama'].'</td><td>'.$row['alamat'].'</td><td>'.$row['nama_hobi'].'</td>
           <td><a href="update.php/?id_siswa='.$row['id_siswa'].'">Update</a> &nbsp;
           <a href="hapus.php?id='.$row['id_siswa'].'">Delete</a></td></tr>';
        $nomor++;
         }
       } else {
         echo "<tr><td>Data tidak ditemukan</td><td>";
       }
        echo "</table>";
        echo '<a href="logoff.php"><input type="submit" value="Logoff!" name="logoff" style="margin-left:200px;"/><br></a>';
        echo "</div>";
             }else{
      ?>
     <form name="Taxation" action="<?php echo $base_url; ?>login.php" id="taxation_form" method="get">
       <div class="form-style-logo">
         <a href="<?php echo $base_url; ?>pajak"><img src="<?php echo $base_url; ?>images/main_logo.png" width="200" height="55"></a>
       </div>
       <div class="form-style-8">
         <h2>Form Taxation</h2>
         <input type="text" name="username" placeholder="username" id="username"><br>
         <input type="password" name="password" placeholder="password" id="password"><br>
         <br><br>
         <input type="submit" value="Login!" name="login" id="login" onclick="checkInput()"/><br>
       </div>
     </form>
   <?php } ?>
   <script type="text/javascript">
    function checkInput(){
      console.log("tes");
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      if (username == '' && password == '') {
        alert("Isi username dan password");
      }else if (password == '') {
        alert("Isikan password");
      }
    }
   </script>

   </body>
 </html>
