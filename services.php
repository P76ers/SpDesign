<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
wrongUrl();
session_start();

$title = 'Mein Konto';
$bgImage = '/SpDesign/resources/images/background/typ.png';
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/header.php");
if (isset($_SESSION["shopped"]) && $_SESSION["shopped"] == true) {
  unset($_SESSION["shopped"]);
  $header = "Success";
  $text = "Sie haben erfolgreich eingekauft";
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
}

// echo '<pre>', var_dump($_SESSION), '</pre>';
// echo '<pre>', var_dump($_POST), '</pre>';
?>


<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/footer.php");
unset($_SESSION["datum"]);
unset($_SESSION["anfrage"]);

?>