<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
session_start();

// echo '<pre>', var_dump($_SESSION), '</pre>';
// echo '<pre>', var_dump($_POST), '</pre>';

if (
  isset($_POST["user"]) &&
  isset($_POST["pass"]) &&
  isset($_POST["eingabe"]) &&
  isset($_SESSION["startzeit"])
) {
  $_SESSION["user"] = $_POST["user"];

  $con = dbConnect();
  $sql = 'SELECT Email, Password 
            FROM kunden 
            WHERE Email="' . $_POST["user"] . '" 
              AND Password="' . $_POST["pass"] . '";
            ';

  $result = mysqli_query($con, $sql);

  $erg = mysqli_num_rows($result);

  if (
    $_SESSION["cap"] == $_POST["eingabe"] &&
    $erg == 1
  ) {
    $_SESSION["login"] = true;
    header("Location:produkte.php");
  } else {
    $_SESSION["login"] = "falsches Passwort!";
    header("Location:login.php");
  }
} else {
  // header("Location:index.php");
}

?>