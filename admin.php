<?php

//require
    require "db.php";

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
    <h1>
        С возвращением!
    </h1>

   
    <div class="enter">
        <label> Все оставленные комментарии от пользователей
            <a class="enter-help" href="logout.php">Выйти</a>
        </label>
    </div>


    </div>


       

    <? foreach( $comments as $com ) : ?>
        <div class="container-1">
            <h1><?= $com['name']; ?> |
            <?= $com['email']; ?>
            </h1>
            <label>
                <br>
                <?= $com['com']; ?>
                
            </label>

        </div>
    <? endforeach ?>
</body>
