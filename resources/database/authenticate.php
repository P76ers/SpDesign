<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
session_start();

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
    $_SESSION["show"] = true;
    header("Location:/SpDesign/produkte.php");
  } else {
    $_SESSION["login"] = "falsches Passwort!";
    header("Location:/SpDesign/login.php");
  }
} else {
  header("Location:/SpDesign/index.php");
}

?>