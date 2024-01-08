<?php
include("connection.php");

$con = mysqli_connect($host, $user, $passw);

$sql = "CREATE DATABASE IF NOT EXISTS suits";
mysqli_query($con, $sql);

$con = mysqli_connect($host, $user, $passw, $db);

$sql = "CREATE TABLE IF NOT EXISTS artikelkategorien
            (
              KategorieID int AUTO_INCREMENT PRIMARY KEY,
              Kategoriename varchar(20),
              Url varchar(40), 
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
              Url varchar(40), 
              Auslaufartikel tinyint(1),
              KategorieNr int(11),
              CONSTRAINT fkArtikelkategorien FOREIGN KEY (KategorieNr) 
                REFERENCES artikelkategorien(KategorieID)
            ) 
            Engine=InnoDB;
          ";
mysqli_query($con, $sql);

$sql = "CREATE TABLE IF NOT EXISTS termine
            (
              TerminID int(11) AUTO_INCREMENT PRIMARY KEY,
              Status int(11),
              Datum  varchar(10),
              Uhrzeit varchar(10),
              Berater varchar(10)
            ) 
            Engine=InnoDB;
          ";
mysqli_query($con, $sql);

$sql = "CREATE TABLE IF NOT EXISTS kunden 
        (
          KundenID int AUTO_INCREMENT PRIMARY KEY, 
          Vorname varchar(20), 
          Nachname varchar(20), 
          Straße varchar(60), 
          PLZ varchar(10), 
          Ort varchar(15), 
          Telefon varchar(24), 
          Email varchar(50), 
          TerminNr int, 
          CONSTRAINT fkKunden FOREIGN KEY (TerminNr) 
            REFERENCES termine (TerminID),
          UNIQUE (Email)
        ) Engine=InnoDB;";
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
              Bestelldatum varchar(20),
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
?>