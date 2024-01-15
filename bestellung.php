<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();
session_start();
// echo '<pre>', var_dump($_SESSION), '</pre>', die();

$title = 'Bestellung';
$bgImage = '/SpDesign/resources/images/background/typ.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/pay.php");
?>


<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>