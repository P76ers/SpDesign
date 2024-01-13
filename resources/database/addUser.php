<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
session_start();

if (
  isset($_POST["user"]) &&
  isset($_POST["pass"]) &&
  isset($_POST["eingabe"]) &&
  isset($_SESSION["startzeit"])
) {
  $_SESSION["user"] = $_POST["user"];
  $_SESSION["error"] = "";

  $con = dbConnect();
  $sql = 'SELECT Email 
          FROM kunden 
          WHERE Email="' . $_POST["user"] . '"
          ';

  $result = mysqli_query($con, $sql);

  $erg = mysqli_num_rows($result);

  // echo '<pre>', var_dump($erg), '</pre>';
  // echo '<pre>', var_dump($_SESSION), '</pre>';
  // echo '<pre>', var_dump($_POST), '</pre>';

  if ($erg == 1 && $_SESSION["cap"] != $_POST["eingabe"]) {
    $_SESSION["error"] = "UserCaptcha";
    header("Location:/SpDesign/Signup.php");
  } else if ($erg == 1 && $_SESSION["cap"] == $_POST["eingabe"]) {
    $_SESSION["error"] = "user";
    header("Location:/SpDesign/Signup.php");
  } else if ($_SESSION["cap"] != $_POST["eingabe"]) {
    $_SESSION["error"] = "captcha";
    header("Location:/SpDesign/Signup.php");
  } else if ($erg == 0 && $_SESSION["cap"] == $_POST["eingabe"]) {

    $sql = 'INSERT INTO kunden 
            (
              Email, 
              Password,
              Privilegien
            )
            VALUES
            (
              "' . $_POST["user"] . '",
              "' . $_POST["pass"] . '",
              "none"
            )
            ';

    // echo '<pre>', var_dump($sql), '</pre>';

    mysqli_query($con, $sql);

    unset($_SESSION["error"]);
    unset($_SESSION["cap"]);
    $_SESSION["login"] = true;
    $_SESSION["newUser"] = true;

    header("Location:/SpDesign/produkte.php");
  }
}

?>