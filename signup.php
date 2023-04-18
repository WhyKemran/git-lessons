<?php
    require "db.php";


    $data = $_POST;
    if (isset($data['do_signup'])) {

        $errors = array();
        if( trim($data['password-2']) != trim($data['password'])){
            $errors[] = "Повторный пароль введен не верно!";
        }
        foreach($customers as $find){
            if ($find['email'] == $data['email']){
                $errors[] = "Пользователь с таким email уже существует";
            }
        }
        if (empty($errors)){
            $first_name = trim($_REQUEST['first_name']);
            $last_name = trim($_REQUEST['last_name']);
            $gender = $_REQUEST['gender'];
            $email = trim($_REQUEST['email']);
            $password = password_hash(trim($_REQUEST['password']), PASSWORD_BCRYPT );

            $mysqli->query("INSERT INTO users (first_name, last_name,  email, password, gender) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender') ");

            echo '<div class="alert-t">Аккаунт успешно зарегестрирован!</div>';
        } else {
            echo '<div class="alert-f">'.array_shift($errors).'</div>';
        }
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>




<div class="container">
        <h1>Создание аккаунта</h1>
        <form action="signup.php" method="post">
            <div class="form-group">
                <label for="first_name">Имя</label>
                <br/>
                <input class="inp" type="text" id="first_name" name="first_name" value="<?php echo @$data['first_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия</label>
                <br/>
                <input class="inp" type="text" id="last_name" name="last_name" value="<?php echo @$data['last_name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <br/>
                <input class="inp" type="email" id="email" name="email" value="<?php echo @$data['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <br/>
                <input class="inp" type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password-2">Введите пароль ещё раз</label>
                <br/>
                <input class="inp" type="password" id="password-2" name="password-2" required>
            </div>

            <div>
                <label>Ваш пол</label>
                <br />
                <div class="rad-btn">
                    <input id="rad-1" type="radio" name="gender" value="m" checked>
                    <label for="rad-1">Мужчина</label>
                </div>
                <div class="rad-btn">
                    <input id="rad-2" type="radio" name="gender" value="f">
                    <label for="rad-2">Женщина</label>
                </div>
            </div>
            
            <button type="submit" name="do_signup">Создать аккаунт</button>
            

            <div class="enter">
                <label>
                    Уже есть аккаунт? 
                    <a class="enter-btn" href="login.php">Войти в аккаунт</a>
                </label>
            </div>


            <div class="enter">
                <label>
                    
                    <a class="enter-help" href="help.php">Связаться с нами</a>
                </label>
            </div>

            

        </form>

    




   </div>
