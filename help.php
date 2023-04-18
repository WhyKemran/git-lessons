<?php

    require "db.php";




    $data = $_POST;

    if (isset($data['sent'])){

        $to = 'kemransdv5@gmail.com';
        $name = $data['name'];
        $com = $data['message'];
        $from = $data['email'];
        $mysqli->query("INSERT INTO comments(name, email, com) VALUES('$name', '$from', '$com')");
        

        

        if(mail($to, $name, $com)){
            echo '<div class="alert-t">Сообщение отправлено успешно!</div>';
        }


        

    }


?>









<html>
<head>
    <meta charset="UTF-8">
    <title>Помощь</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Связаться с нами</h1>
        <form method="post">
            <div class="form-group">
                <label for="name">Имя:</label><br>
                <input class="inp" type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label><br>
                <input class="inp" type="email" id="email" name="email" required>
            </div>
            
                <label for="message">Сообщение:</label>
                <textarea class="inp" id="message" name="message" required></textarea>
            
            <button type="submit" name="sent">Отправить</button>
        </form>

        <div class="enter">
                <label>
                    
                    <a class="enter-help" href="index.php">Вернуться обратно</a>
                </label>
            </div>


    </div>



</body>