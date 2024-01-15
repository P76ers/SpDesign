<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
session_start();
$con = dbConnect();

// echo '<pre>', var_dump($_POST), '</pre>', die();

if (isset($_SESSION["login"]) && is_bool($_SESSION["login"]) && isset($_POST["datum"]) && isset($_POST["message"])) {
  $_SESSION["datum"] = $_POST["datum"];
  $_SESSION["message"] = str_replace("\r\n", " ", $_POST["message"]);

  $date = explode(" ", $_POST["datum"]);
  $_SESSION["AnfrageDatum"] = $date[0];
  $_SESSION["AnfrageUhrzeit"] = $date[1];


  $sql = 'INSERT INTO termine 
          (
            Status, 
            Datum, 
            Uhrzeit, 
            Message, 
            KundenNr 
          )
          VALUES 
          (
            "Anfrage", 
            "' . $_SESSION["AnfrageDatum"] . '", 
            "' . $_SESSION["AnfrageUhrzeit"] . '", 
            "' . $_SESSION["message"] . '", 
            "' . $_SESSION["KundenNr"] . '"
          );
          ';

  mysqli_query($con, $sql);
} else {
}
if (isset($_SESSION["login"]) && is_bool($_SESSION["login"]) && isset($_POST["datum"])) {
  $_SESSION["datum"] = $_POST["datum"];
  // $_SESSION["datum"] = $_POST["datum"];
  $date = explode(" ", $_POST["datum"]);
  $_SESSION["AnfrageDatum"] = $date[0];
  $_SESSION["AnfrageUhrzeit"] = $date[1];
  header("Location:/SpDesign/produkte.php");
} else

  if (
    isset($_POST["user"]) &&
    isset($_POST["pass"]) &&
    isset($_POST["eingabe"]) &&
    isset($_SESSION["startzeit"])
  ) {
    $_SESSION["user"] = $_POST["user"];

    // $con = dbConnect();
    $sql = 'SELECT KundenID, Email, Password 
          FROM kunden 
          WHERE Email="' . $_POST["user"] . '" 
            AND Password="' . $_POST["pass"] . '";
          ';

    $result = mysqli_query($con, $sql);

    $erg = mysqli_num_rows($result);

    $zeile = mysqli_fetch_assoc($result);

    $_SESSION["KundenNr"] = $zeile["KundenID"];

    // echo '<pre>', var_dump($zeile), '</pre>';
    // echo '<pre>', var_dump($_SESSION["KundenNr"]), '</pre>', die();
    // echo '<pre>', var_dump($erg), '</pre>';

    if (
      $_SESSION["cap"] == $_POST["eingabe"] &&
      $erg == 1
    ) {
      if (isset($_POST["datum"]) && isset($_POST["message"])) {


        $_SESSION["datum"] = $_POST["datum"];
        $_SESSION["message"] = str_replace("\r\n", " ", $_POST["message"]);

        $date = explode(" ", $_POST["datum"]);
        $_SESSION["AnfrageDatum"] = $date[0];
        $_SESSION["AnfrageUhrzeit"] = $date[1];


        $sql = 'INSERT INTO termine 
                (
                  Status, 
                  Datum, 
                  Uhrzeit, 
                  Message, 
                  KundenNr 
                )
                VALUES 
                (
                  "Anfrage", 
                  "' . $_SESSION["AnfrageDatum"] . '", 
                  "' . $_SESSION["AnfrageUhrzeit"] . '", 
                  "' . $_SESSION["message"] . '", 
                  "' . $_SESSION["KundenNr"] . '"
                );
                ';

        // echo '<pre>', var_dump($sql), '</pre>', die();

        mysqli_query($con, $sql);

        header("Location:/SpDesign/produkte.php");
      }
      $_SESSION["login"] = true;
      $_SESSION["show"] = true;
      header("Location:/SpDesign/produkte.php");

    } else {
      $_SESSION["login"] = "falsches Passwort!";
      if (isset($_SESSION["anfrage"]) && is_bool($_SESSION["anfrage"])) {
        header("Location:/SpDesign/kontakt.php");
      } else {
        header("Location:/SpDesign/login.php");
      }
    }
  } else {
    header("Location:/SpDesign/index.php");
  }

?>