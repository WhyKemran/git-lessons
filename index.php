<?php
    require "db.php";
?>


<head>
    <meta charset="UTF-8">
    <title>Вход в аккаунт</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>


<body>


    <div class="container">

        <?php if( isset($_SESSION['logged_user'])){ ?>
            <h1>
                Добро пожаловать!
            
            </h1>
            <h2>
                Теперь вы в списке наших участников!)
            </h2>
           
            <div class="out">
                <label>
                    <a class="enter-btn " href="logout.php">Перейти в главное меню</a>
                </label>
            </div>

            <div class="enter">
                <label>
                    
                    <a class="enter-btn" href="help.php">Связаться с нами</a>
                </label>
            </div>
    </div>
            
    
    
    <div class="cont">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Пол</th>
                        
                </tr>
            </thead>
            <tbody>
                <?php foreach($customers as $customer) {?>
                    <tr>
                        <th scope="row"><?php echo $customer['id']; ?></th>
                        <td> <?php echo $customer['first_name']; ?></td>
                        <td> <?php echo $customer['last_name']; ?></td>
                        <td> <?php echo $customer['email']; ?></td>
                        <td> <?php echo $customer['gender']; ?></td>
                    </tr>
                    <?php } ?>

            </tbody>
        </table>


    </div>




    
        <?php } else{ ?>
            <div >
                <h1>Выберите дальнейшие действия</h1>
                <div class="btns">
                    <a class="log-btn" href="signup.php">Регистрация аккаунта</a>
                </div> 
                <div class="btns">
                    <a class="log-btn" href="login.php">Вход в аккаунт</a>
                </div>
                <div class="btns">
                    <a class="log-btn" href="help.php">Связаться с нами</a>
                </div>
            </div>
        <?php } ?>


    

</body>