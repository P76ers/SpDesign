<?php
session_start();

if (isset($_SESSION["login"]) && is_bool($_SESSION["login"]) && isset($_SESSION["caddy"]) && $_SESSION["caddy"] != "") {
  header("Location:/SpDesign/bestellung.php");
}
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();


$title = 'Produkte';
$bgImage = '/SpDesign/resources/images/background/peachall.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
?>

<br>
<?php

// echo '<pre>', var_dump($_SESSION), '</pre>';
// echo '<pre>', var_dump($_POST), '</pre>';


include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/table.php");
if (isset($_SESSION["newUser"]) && $_SESSION["newUser"] == true) {
  unset($_SESSION["newUser"]);
  $header = "Success";
  $text = "Sie haben sich erfolgreich registriert!";
  $class = "alert-success";
  $redirect = false;
  $timerShow = 2000;
  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/modal.php");
} else if (isset($_SESSION["anfrage"]) && $_SESSION["anfrage"] == true && isset($_SESSION["datum"])) {
  $header = "Anfrage gesendet";
  $text = "Termin zum " . $_SESSION["datum"] . " wird bearbeitet";
  $class = "alert-success";
  $redirect = false;
  $timerShow = 3000;
  unset($_SESSION["show"]);
  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/modal.php");
} else if (isset($_SESSION["show"]) && $_SESSION["show"] == true) {
  unset($_SESSION["show"]);
  $header = "Success";
  $text = "Sie sind eingeloggt";
  $class = "alert-success";
  $redirect = false;
  $timerShow = 2000;
  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/modal.php");
}
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
unset($_SESSION["datum"]);
?>