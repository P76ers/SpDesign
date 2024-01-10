<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();

$title = 'Login';
$bgImage = '/SpDesign/resources/images/background/login.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");

include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/formLogin.php");
?>


<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>