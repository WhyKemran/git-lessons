<?php



$servername = 'localhost';
$username = 'root';
$db_password = '';
$db = 'users';
$mysqli = mysqli_connect($servername, $username, $db_password, $db);

if (!$mysqli){
    
    die("Connection failed: " . mysqli_connect_error());
}

$customers = $mysqli->query("SELECT id, first_name, last_name, gender, email, password FROM users");

$findemail = $mysqli->query("SELECT email FROM users");

$comments = $mysqli->query("SELECT name, email, com FROM comments");

$admin = 'kemransdv5@gmail.com';
$admin_pass = password_hash(12345678, PASSWORD_BCRYPT);

$mysqli->query("INSERT INTO users (first_name, last_name,  email, password, gender) VALUES ('Kemran', 'Saidov', '$admin', '$admin_pass', 'm') ");


session_start();
