<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();
session_start();

$title = 'Home';
$bgImage = '/SpDesign/resources/images/background/blackall.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/produkt.php");
?>



<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>