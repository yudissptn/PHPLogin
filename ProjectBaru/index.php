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
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
   <body>
     <form name="Taxation" action="<?php echo $base_url; ?>login.php" id="taxation_form" method="get">
       <div class="form-style-logo">
         <a href="<?php echo $base_url; ?>pajak"><img src="<?php echo $base_url; ?>images/main_logo.png" width="200" height="55"></a>
       </div>
       <div class="form-style-8">
         <h2>Form Taxation</h2>
         <input type="text" name="username" placeholder="username" id="username"><br>
         <input type="password" name="password" placeholder="password" id="password"><br>
         <br><br>
         <input type="submit" value="Login!" name="login" id="login"/><br>
       </div>
     </form>
   </body>
 </html>
