<?php
session_start();
unset($_SESSION["idusuario"]);
unset($_SESSION["usuario"]);
unset($_SESSION["rol"]);
unset($_SESSION["estatus"]);
unset($_SESSION["msj"]);
session_destroy();


header('location: ../index.php');
?>