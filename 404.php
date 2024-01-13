<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");

$title = 'Services';
$bgImage = '/SpDesign/resources/images/background/typ2.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
?>


<?php
$header = "HTTP 404";
$text = "Page not found- redirect in 5 sek";
$class = "alert-danger";
$redirect = true;
$redirectUrl = "/SpDesign/index.php";
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/modal.php");
?>


<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>