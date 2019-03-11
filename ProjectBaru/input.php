<?php
$base_url = "http://".$_SERVER['SERVER_NAME'].'/ProjectBaru/';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Input Page</title>
    <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css" type="text/css">
  </head>
  <body>
    <form name="Taxation" action="<?php echo $base_url; ?>action_input.php" id="taxation_form" method="get">
      <div class="form-style-8">
        <h2>Update Data</h2>
        <input type="hidden" name="id_siswa" id="id_siswa">
        <input type="text" name="nik" id="nik" placeholder="Input Nik"><br>
        <input type="text" name="nama" id="nama" placeholder="Input Nama"><br>
        <input type="text" name="alamat" id="alamat" placeholder="Input Alamat"><br>
        <input type="text" name="hobi" id="hobi" placeholder="Input Hobi"><br>
        <br><br>
        <input type="submit" value="Update!" name="update" id="update"/><br>
      </div>
    </form>

  </body>
</html>
