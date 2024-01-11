<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();

$title = 'Login';
$bgImage = '/SpDesign/resources/images/background/signUp.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");

include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/formSignUp.php");
?>


<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>