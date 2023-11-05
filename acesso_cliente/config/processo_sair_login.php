<?php
session_start();

 $_SESSION['codigo_do_cliente'] = "";
 header("location:" . $BASE_URL . "../View/Index.php");
?>