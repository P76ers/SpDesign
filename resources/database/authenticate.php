<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
session_start();

if (isset($_SESSION["login"]) && is_bool($_SESSION["login"]) && isset($_POST["datum"])) {
  $_SESSION["datum"] = $_POST["datum"];
  header("Location:/SpDesign/produkte.php");
} else

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
      if (isset($_POST["datum"])) {
        $_SESSION["datum"] = $_POST["datum"];
        header("Location:/SpDesign/produkte.php");
      }
      $_SESSION["login"] = true;
      $_SESSION["show"] = true;
      header("Location:/SpDesign/produkte.php");

    } else {
      $_SESSION["login"] = "falsches Passwort!";
      if (isset($_SESSION["anfrage"]) && is_bool($_SESSION["anfrage"])) {
        header("Location:/SpDesign/kontakt.php");
      } else {
        header("Location:/SpDesign/login.php");
      }
    }
  } else {
    header("Location:/SpDesign/index.php");
  }

?>