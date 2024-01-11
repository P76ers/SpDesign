<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();
session_start();

$title = 'Produkte';
$bgImage = '/SpDesign/resources/images/background/peachall.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/produkt.php");
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/table.php");
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>