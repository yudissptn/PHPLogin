<?php
$base_url = "http://".$_SERVER['SERVER_NAME'].'/ProjectBaru/';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Page</title>
    <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css" type="text/css">
  </head>
  <body>
    <form name="Taxation" action="<?php echo $base_url; ?>action_update.php" id="taxation_form" method="get">
      <div class="form-style-8">
        <?php
        $conn             = mysqli_connect("127.0.0.1", "root", "", "Bebas");
        $sql              = 'select s.id_siswa, s.nik, s.nama, s.alamat,
        h.nama_hobi from info_siswa s left join hobi h on h.id_siswa=s.id_siswa where s.id_siswa='.$_GET['id_siswa'];
        //echo $sql;die;
        $sql_query        = mysqli_query($conn, $sql);
        $sql_fetch_row    = mysqli_fetch_row($sql_query);
         ?>
        <h2>Update Data</h2>
        <input type="hidden" name="id_siswa" id="id_siswa" value="<?php echo $_GET['id_siswa']; ?>">
        <input type="text" name="nik" id="nik" value="<?php echo $sql_fetch_row[1]; ?>"><br>
        <input type="text" name="nama" id="nama" value="<?php echo  $sql_fetch_row[2]; ?>"><br>
        <input type="text" name="alamat" id="alamat" value="<?php echo  $sql_fetch_row[3]; ?>"><br>
        <br><br>
        <input type="submit" value="Update!" name="update" id="update"/><br>
      </div>
    </form>

  </body>
</html>
