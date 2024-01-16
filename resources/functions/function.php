<?php

function urlIs($value)
{
  return $_SERVER["REQUEST_URI"] === $value;
}

function wrongUrl()
{
  $url = parse_url($_SERVER["REQUEST_URI"])["path"];
  // echo $url;

  // $routes = [
  //   "/SpDesign/index.php" => "",
  //   "/SpDesign/produkte.php" => "",
  //   "/SpDesign/services.php" => "",
  //   "/SpDesign/kontakt.php" => "",
  //   "/SpDesign/login.php" => "",
  //   "/SpDesign/signUp.php" => ""
  // ];


  // if (array_key_exists($url, $routes) == false) {
  //   header("location: 404.php");
  // }
}

function dbConnect()
{
  $host = "localhost";
  $user = "root";
  $passw = "";
  $db = "suits";

  $con = mysqli_connect($host, $user, $passw, $db);
  // echo "Connecting to";
  return $con;
}

function createDB($db)
{
  $host = "localhost";
  $user = "root";
  $passw = "";

  $con = mysqli_connect($host, $user, $passw);

  $sql = "CREATE DATABASE IF NOT EXISTS " . $db;
  mysqli_query($con, $sql);

  createTables();
}

function createTables()
{
  $con = dbConnect();

  $sql = "CREATE TABLE IF NOT EXISTS artikelkategorien
            (
              KategorieID int AUTO_INCREMENT PRIMARY KEY,
              Kategoriename varchar(20),
              Image varchar(40), 
              Kategoriebeschreibung longtext
            ) 
            Engine=InnoDB;
          ";
  mysqli_query($con, $sql);

  $sql = "CREATE TABLE IF NOT EXISTS artikel
            (
              ArtikeliD int AUTO_INCREMENT PRIMARY KEY,
              Artikelname varchar(40),
              Artikelbeschreibung longtext,
              Einzelpreis decimal(19,2),
              Image varchar(40), 
              Auslaufartikel tinyint(1),
              KategorieNr int(11),
              CONSTRAINT fkArtikelkategorien FOREIGN KEY (KategorieNr) 
                REFERENCES artikelkategorien(KategorieID)
            ) 
            Engine=InnoDB;
          ";
  mysqli_query($con, $sql);


  $sql = "CREATE TABLE IF NOT EXISTS kunden 
        (
          KundenID int AUTO_INCREMENT PRIMARY KEY, 
          Email varchar(50), 
          Password varchar(20),   
          Privilegien varchar(10), 
          UNIQUE (Email)
        ) Engine=InnoDB;";
  mysqli_query($con, $sql);

  $sql = "CREATE TABLE IF NOT EXISTS termine
            (
              TerminID int(11) AUTO_INCREMENT PRIMARY KEY,
              Status varchar(20),
              Datum  varchar(10),
              Uhrzeit varchar(10),
              Message longtext, 
              KundenNr int, 
              CONSTRAINT fkKunden FOREIGN KEY (KundenNr) 
                REFERENCES kunden (KundenID)
            ) 
            Engine=InnoDB;
          ";
  mysqli_query($con, $sql);

  $sql = "CREATE TABLE IF NOT EXISTS bestellungen 
            (
              Bestellid int AUTO_INCREMENT PRIMARY KEY,
              Bestelldatum varchar(20),
              KundenNr int(11),
              CONSTRAINT fkBestellungen FOREIGN KEY (KundenNr) 
                REFERENCES Kunden(KundenID)
            )
            Engine=InnoDB;";
  mysqli_query($con, $sql);

  $sql = "CREATE TABLE IF NOT EXISTS bestellungdetails
            (
              ArtikelNr int(11),
              BestellNr int(11),
              Anzahl  int(11),
              PRIMARY KEY (ArtikelNr, BestellNr),
              CONSTRAINT fkArtikel FOREIGN KEY(ArtikelNr) 
                REFERENCES artikel(ArtikelID),
              CONSTRAINT fkBestellungdetails FOREIGN KEY (BestellNr) 
                REFERENCES bestellungen (BestellID)
            ) 
            Engine=InnoDB;
          ";
  mysqli_query($con, $sql);
}

function dropDB($db)
{
  $con = dbConnect();
  $sql = "DROP DATABASE " . $db;

  mysqli_query($con, $sql);
}

function dbResetAutoincrement($table)
{
  $con = dbConnect();
  $sql = 'ALTER TABLE ' . $table . ' AUTO_INCREMENT = 0
  ';
  mysqli_query($con, $sql);
}

function insertInto(...$tableValues)
{
  // echo '<pre>', var_dump($tableValues), '</pre>';
  $con = dbConnect();

  $table = $tableValues[0];

  $values = "";
  for ($i = 1; $i < count($tableValues); $i++) {
    $values .= $tableValues[$i] . ", ";
  }

  $values = trim($values, ", ");
  // echo $values;

  $header = "";
  switch ($table) {
    case 'artikelkategorien':
      $header = "
                Kategoriename, 
                Image, 
                Kategoriebeschreibung
              ";
      break;

    case 'artikel':
      $header = "
                  Artikelname, 
                  Artikelbeschreibung, 
                  Einzelpreis, 
                  Image, Auslaufartikel, 
                  KategorieNr
                ";
      break;
    case 'kunden':
      $header = "
                  Email, 
                  Password, 
                  Privilegien
                ";
  }
  // echo $header;

  $sql = 'INSERT INTO ' . $tableValues[0] . '
        (
          ' . $header . '
        ) 
        VALUES 
        (
          ' . $values . '
        );';

  // echo $sql;

  mysqli_query($con, $sql);
}

?>