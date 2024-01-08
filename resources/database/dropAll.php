<?php
include("connection.php");

$con = mysqli_connect($host, $user, $passw, $db);

$sql = "DROP DATABASE suits";
mysqli_query($con, $sql);

