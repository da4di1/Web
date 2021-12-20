<?php

session_start();
require_once 'connect.php';

$login = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE (`Username` = '$login' OR `Email` = '$login') AND `Password` = '$password'");
if (mysqli_num_rows($check_user) != 0){

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['Id'],
        "username" => $user['Username'],
        "email" => $user['Email'],
        "courses" => [
            "sharp" => [],
            "pluses" => [],
            "java" => [],
            "python" => [],
            "js" => []
        ]
    ];

    header('Location: ../index.php');

}else{
    $_SESSION['message'] = 'Неправильний логін або пароль!';
    header('Location: ../Login.php');
}

?>