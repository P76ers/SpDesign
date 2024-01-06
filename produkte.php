<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();

$title = 'Produkte';
$bgImage = '/SpDesign/resources/images/banner-bg.jpg';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");

?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/produkt.php");

?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>