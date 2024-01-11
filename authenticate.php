<?php
session_start();
$user["Susan"] = "pw1";

echo '<pre>', var_dump($_SESSION), '</pre>';
echo '<pre>', var_dump($_POST), '</pre>';

if (
  isset($_POST["user"]) &&
  isset($_POST["pass"]) &&
  isset($_POST["eingabe"]) &&
  isset($_SESSION["startzeit"])
) {
  $_SESSION["user"] = $_POST["user"];

  if (
    $_SESSION["cap"] == $_POST["eingabe"] &&
    $user[$_POST["user"]] == $_POST["pass"]
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