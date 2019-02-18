<?php
$base_url = "http://".$_SERVER['SERVER_NAME'].'/ProjectBaru/';
include 'vars.php';
 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1">
     <title>Taxation Online</title>
     <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css" type="text/css">
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
   <body>
   <?php 
   session_start();
   if(isset($_SESSION['Username']) && $_SESSION['Username'] != ''){
    echo 'Login sukses. Klik untuk logoff';?>
    <a href="logoff.php"><button class="tombol-tabel"  style="margin-left:20px">Logoff</button></a>
    <div class="form-style-8">
    <h2>
    <?php   
      echo "Welcome ".$_SESSION['Nama']."!!";   
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
       <td><?= $_SESSION['Nama']; ?></td>
       <td><?= $_SESSION['NRP']; ?></td>
       <td><?= $_SESSION['Jurusan']; ?></td>
       <td><?= $_SESSION['Username']; ?></td>
       <td><?= $_SESSION['Alamat']; ?></td>
       <td><?= $_SESSION['Company']; ?></td>
     </tr>
    </table>
   </div>
   <?php
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
         <input type="submit" value="Login!" name="login" id="login" onClick=checkInput();><br>
       </div>
     </form>
   <?php } ?>
   <script>
   function tampilkanTabel(){
     let tabelData = document.getElementsByClassName("tabel");
     tabelData[0].style.display = 'block';
   }
   function checkInput(){
     var username = document.getElementById("username").value;
     var password = document.getElementById("password").value;
     console.log("hhhh");
     if(username == '' && password == ''){
       alert("Isi Username dan Password");
       return true;
     }else if(password == ''){
       alert("Isi password");
       return false;
     }    
   }
   </script>
   </body>
 </html>
