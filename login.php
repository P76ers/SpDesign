<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();
session_start();
$_SESSION["startzeit"] = date("d.m.Y, H:i:s");

// echo '<pre>', var_dump($_SESSION), '</pre>';
// echo '<pre>', var_dump($_POST), '</pre>', die();

$title = 'LogIn';
$bgImage = '/SpDesign/resources/images/background/login.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/formLogin.php");
?>


<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>