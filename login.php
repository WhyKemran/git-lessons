<?php

    require "db.php";

    $data = $_POST;

    if (isset($data['do_login'])){

        



        $errors = [];
        foreach($customers as $find){
            if ($find['email'] == $data['email']){
                $user = $find;
            }
        }

        
        if ($user){
            
            if (password_verify($data['password'], $user['password'])){
                $_SESSION['logged_user'] = $user;
                header('Location: index.php');
            } else {
                $errors[] = "Неверный пароль";
            }
            if ($user['email'] == $admin and empty($errors)){
                header('Location: admin.php');
            }
        } else {
            $errors[] = "Пользователь не найден";
        }
        if ( !empty($errors)){
            echo '<div class="alert-f">'.array_shift($errors).'</div>';
        }
    }

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Вход в аккаунт</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h1>Воход в аккаунт</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <br/>
                <input class="inp" type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <br/>
                <input class="inp" type="password" id="password" name="password" required>
            </div>
                
            <button type="submit" name="do_login">Войти в аккаунт</button>

            <div class="enter">
                <label>
                    Нет аккаунта? 
                    <a class="enter-btn" href="signup.php">Создать аккаунт</a>
                </label>
            </div>

            <div class="enter">
                <label>
                        
                    <a class="enter-help" href="help.php">Связаться с нами</a>
                </label>
            </div>

        </form>






    </div>
</body>