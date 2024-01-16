<?php
session_start();
echo "SAVE TO DB";

unset($_SESSION["caddy"]);
$_SESSION["shopped"] = true;

echo '<pre>', var_dump($_SESSION), '</pre>';
echo '<pre>', var_dump($_POST), '</pre>';

header("Location: /SpDesign/services.php");
?>

<a href="/SpDesign/index.php">home</a>