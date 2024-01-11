<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
// wrongUrl();
session_start();

$title = 'Member';
$bgImage = '/SpDesign/resources/images/background/login.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
?>

<?php
echo '<pre>', var_dump($_SESSION), '</pre>';

if (isset($_SESSION["login"]) == true) {
  echo "eingeloggt";
} else {
  header("location: logIn.php");
  // echo "NICHT eingeloggt";
}
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>