<?php
session_start();
if (isset($_SESSION["login"]) && is_bool($_SESSION["login"])) {
  header("Location:index.php");
} else {

  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
  wrongUrl();


  $title = 'Login';
  $bgImage = '/SpDesign/resources/images/background/signUp.png';
  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");

  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/formSignUp.php");




  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");

}
