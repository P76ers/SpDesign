<?php
session_start();

if (isset($_SESSION["login"]) && is_bool($_SESSION["login"])) {
  header("Location:produkte.php");
} else {

  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
  // wrongUrl();
  $_SESSION["startzeit"] = date("d.m.Y, H:i:s");

  $title = 'SignUp';
  $bgImage = '/SpDesign/resources/images/background/signUp.png';
  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");

  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/formSignUp.php");


  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
}
