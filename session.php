<?php
session_start();
include "header.php";


if(isset($_POST['name']) &&  isset($_POST['email']) && isset($_POST['date']) ) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['date'] = $_POST['date'];
}

echo "<br>";
echo "Name is ".$_SESSION['name'];
echo "<br>";
echo "<br>";
echo "Email is ".$_SESSION['email'];
echo "<br>";
echo "<br>";
echo "Date of birth is ".$_SESSION['date'];
echo "<br>";
echo "<br>";
echo "Sessions are stored in xamp/tmp folder.";




