<?php
session_start(); 

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
        <?php include("navigation.php"); ?> 
        <h2>Добро пожаловать, <?php echo $_SESSION["username"]; ?>!</h2>
        
    </div>
</body>

</html>

   