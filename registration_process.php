<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    
    $mysqli = new mysqli("localhost", "root", "", "shop");

    if ($mysqli->connect_error) {
        die("Ошибка подключения: " . $mysqli->connect_error);
    }

    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $insert = $mysqli->query($sql);


    if ($insert) {
        header('location: login.php');
    }
}
?>
