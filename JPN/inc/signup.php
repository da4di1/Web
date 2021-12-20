<?php

session_start();
require_once 'connect.php';

$login = $_POST['username'];
$password = $_POST['password'];
$repeated_password = $_POST['repeated_password'];
$email = $_POST['email'];

$all_users = mysqli_query($connect, "
SELECT user.Username, user.Email 
FROM user");
$all_users = mysqli_fetch_all($all_users);

$alreadyRegistered = false;
for ($i = 0; $i < count($all_users); $i++){
    if (in_array($login, $all_users[$i]) or in_array($email, $all_users[$i])){
        $alreadyRegistered = true;
        break;
    }
}
if (!$alreadyRegistered){
    if ($password === $repeated_password){
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO user (Id, Username, Password, Email) VALUES (NULL, '$login', '$password', '$email')");
        $_SESSION['message'] = 'Реєстрація пройшла успішно!';
        header('Location: ../Login.php');
    }else{
        $_SESSION['message'] = 'Вказані паролі не співпадають!';
        header('Location: ../Registration.php');
    }
}else{
    $_SESSION['message'] = "Акаунт з вказаним іменем чи поштою вже існує!";
    header('Location: ../Registration.php');
}

?>