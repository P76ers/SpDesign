<?php
session_start();

if (isset($_SESSION["login"]) == true) {
  session_destroy();
  session_unset();
  $_SESSION = "leer";

  header("location: /SpDesign/index.php");
}

?>