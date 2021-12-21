<?php

session_start();
require_once 'connect.php';

$courseId = $_POST['Course'];
$userId = $_SESSION['user']['id'];

$registered = mysqli_query($connect, "SELECT CourseId FROM `coursesregistration` WHERE `UserId` = '$userId'");
$registered = mysqli_fetch_all($registered);
$flag = false;
for ($k = 0; $k < count($registered); $k++){
    if (in_array($courseId, $registered[$k])){
        $flag = true;
    }
}
if(!($flag)){
    mysqli_query($connect, "INSERT INTO coursesregistration (Id, UserId, CourseId) VALUES (NULL, '$userId', '$courseId')");
}

$language = mysqli_query($connect, "SELECT course.ProgrammingLanguage FROM course WHERE `Id` = '$courseId '");
$language = mysqli_fetch_assoc($language);

switch ($language["ProgrammingLanguage"]) {
    case "C#":
        header('Location: ../tabs/catalogue/csharp.php');
        break;
    case "C++":
        header('Location: ../tabs/catalogue/cpluses.php');
        break;
    case "Java":
        header('Location: ../tabs/catalogue/java.php');
        break;
    case "Python":
        header('Location: ../tabs/catalogue/python.php');
        break;
    case "JS":
        header('Location: ../tabs/catalogue/js.php');
        break;
    }
    
?>