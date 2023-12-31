<!DOCTYPE html>
<html lang="en">
<head>
<style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        .container {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        
        h2 {
            text-align: center;
            color: #333;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        
        a {
            text-decoration: none;
            color: #007bff;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
            </style>
         

</head>
<body>
    <div class="container">
        <h2>Вход</h2>
        <form action="login_process.php" method="POST">
            <label for="username">Имя пользователя:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <br>

            <input type="submit" value="Войти">
        </form>
        <p><a href="registration.php">Зарегистрироваться</a></p>
    </div>
</body>
</html>

    