<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>
<body>
<?php
include "header.php";
?>
    <div class="input">
        <form action="session.php" method="POST">
            Name:<input type="text" name="name" placeholder="Name"> <br>
            Mail: <input type="email" name="email" placeholder="Email"> <br>
            Date: <input type="date" name="date" placeholder="Date of birth"> <br>
            <input type="submit" >
        </form>
    </div>
</body>
</html>

<?php


