<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();
session_start();

$title = 'Produkte';
$bgImage = '/SpDesign/resources/images/background/peachall.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/table.php");
if (isset($_SESSION["show"]) && $_SESSION["show"] == true) {
  unset($_SESSION["show"]);
  $header = "Success";
  $text = "Sie sind eingeloggt";
  $class = "alert-success";
  $redirect = false;
  $timerShow = 2000;
  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/modal.php");
} else if (isset($_SESSION["newUser"]) && $_SESSION["newUser"] == true) {
  unset($_SESSION["newUser"]);
  $header = "Success";
  $text = "Sie haben sich erfolgreich registriert!";
  $class = "alert-success";
  $redirect = false;
  $timerShow = 2000;
  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/modal.php");
} else if (isset($_SESSION["anfrage"]) && $_SESSION["anfrage"] == true) {
  $header = "Anfrage gesendet";
  $text = "Termin zum " . $_SESSION["datum"] . " wird bearbeitet";
  $class = "alert-success";
  $redirect = false;
  $timerShow = 5000;
  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/modal.php");
}
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
?>