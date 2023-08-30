<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    
    $mysqli = new mysqli("localhost", "root", "", "shop");

    if ($mysqli->connect_error) {
        die("Ошибка подключения: " . $mysqli->connect_error);
    }

    
    $query = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt === false) {
        die("Ошибка подготовки запроса: " . $mysqli->error);
    }

    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $username, $hashed_password);

            if ($stmt->fetch() && $password === strval($hashed_password)) {
                
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                header("Location: index.php");
                exit;
            } else {
                echo "Неверное имя пользователя или пароль.";
            }
        } else {
            echo "Неверное имя пользователя или пароль.";
        }
    } else {
        echo "Ошибка в запросе: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
}
?>
