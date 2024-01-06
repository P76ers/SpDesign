<?php

function urlIs($value)
{
  return $_SERVER["REQUEST_URI"] === $value;
}

function wrongUrl()
{
  $url = parse_url($_SERVER["REQUEST_URI"])["path"];
  // echo $url;

  $routes = [
    "/SpDesign/index.php" => "",
    "/SpDesign/produkte.php" => "",
    "/SpDesign/services.php" => "",
    "/SpDesign/kontakt.php" => "",
    "/SpDesign/login.php" => ""
  ];


  if (array_key_exists($url, $routes) == false) {
    header("location: 404.php");
  }
}

?>