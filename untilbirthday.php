<?php

session_start();
include "header.php";


date_default_timezone_set('Asia/Tbilisi');

echo "<br>";

$rem = strtotime($_SESSION['date']) - time();
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600 );
$min = floor(($rem % 3600) / 60);

echo "<br>";
echo "<br>";


echo "$day days $hr hours $min minutes remaining until ".$_SESSION['name']."s birthday!";









