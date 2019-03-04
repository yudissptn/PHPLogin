<?php
session_start();
//session_unset();
session_destroy();
header("location: http://localhost/ProjectBaru/index.php");
//die;
?>
