<?php
include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/functions/function.php");
session_start();
$con = dbConnect();
// echo '<pre>', var_dump($con), '</pre>';

dbResetAutoincrement("bestellungen");

$sql = 'SELECT max(Bestellid) 
        FROM `bestellungen`; 
        ';

$result = mysqli_query($con, $sql);

$result = mysqli_fetch_assoc($result);

$BestelliD = $result["max(Bestellid)"] + 1;

// echo '<pre>', var_dump($BestelliD), '</pre>';

$sql = 'INSERT INTO bestellungen 
        (
          Bestelldatum,   
          KundenNr 
        )
        VALUES 
        (
          "' . date("d.m.Y") . '",   
          ' . $_SESSION["KundenNr"] . ' 
        );
        ';

// mysqli_query($con, $sql);

$artikel = str_replace("ArtikeliD=", "", $_SESSION["caddy"]);
$artikel = str_replace(" OR ", " ", $artikel);
$artikel = explode(" ", $artikel);

// echo '<pre>', var_dump($artikel), '</pre>', die();

foreach ($artikel as $value) {
  $sql = 'INSERT INTO bestellungdetails 
          (
          ArtikelNr, 
          BestellNr,
          Anzahl 
          ) 
          VALUES 
          (
            ' . $value . ',  
            ' . $BestelliD . ',
            1
          ) 
          ';

  // mysqli_query($con, $sql);
}


/*  */
// echo '<pre>', var_dump($sql), '</pre>';
// echo '<pre>', var_dump($result), '</pre>';
// echo '<pre>', var_dump($_SESSION), '</pre>';
// echo '<pre>', var_dump($_POST), '</pre>';

// die("SAVE TO DB");
/*  */
unset($_SESSION["caddy"]);
$_SESSION["shopped"] = true;



header("Location: /SpDesign/services.php");
?>

<a href="/SpDesign/index.php">home</a>