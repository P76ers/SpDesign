<?php
session_start();

if (isset($_SESSION["login"]) == true) {
  session_destroy();
  session_unset();
  $_SESSION = "leer";
  // echo '<pre>', var_dump($_SESSION), '</pre>';
  header("location: index.php");
  // echo "Sie sind ausgeloggt, reload in 1 sekunden!";

  // echo "<script type=\"text/javascript\">
  // window.setTimeout('location.href=\"login.php\"', 1000);
  // </script>";
}


?>