<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");

$text = "";
$i = 0;
foreach ($_POST as $key => $value) {
  $i <= (count($_POST) - 2) ? $text .= "ArtikeliD=" . $key . " OR " : $text .= "ArtikeliD=" . $key;
  $i++;
}

$_SESSION["caddy"] = $text;

// echo '<pre>', var_dump($_SESSION), '</pre>';
// echo '<pre>', var_dump($_POST), '</pre>', die();


if (isset($_SESSION["login"]) && is_bool($_SESSION["login"])) {
  // echo '<pre>', var_dump($_SESSION), '</pre>';
  // echo '<pre>', var_dump($_POST), '</pre>', die();

  header("Location:/SpDesign/bestellung.php");

} else if (!isset($_SESSION["login"])) {
  header("Location:/SpDesign/login.php");
}

?>