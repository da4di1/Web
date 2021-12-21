<?php

session_start();
require_once '../../inc/connect.php';

$course = mysqli_query($connect, "SELECT * FROM course WHERE course.ProgrammingLanguage = 'Python'");
$course = mysqli_fetch_all($course);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Курси з Python</title>
        <link rel="stylesheet" href="./catalogue.css" type="text/css"/>
        <link href="https://uk.allfont.net/allfont.css?fonts=lobster" rel="stylesheet" type="text/css" />
        <link href="https://uk.allfont.net/allfont.css?fonts=rodchenkoctt" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://yastatic.net/share2/share.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header_inner">
                    <a class="logo" href="../../index.php">Bangtsar.com</a>
                    <div class="login">
                        <?php
                        if ($_SESSION['user']){
                            echo '<span class="log-nickname"> ' . $_SESSION['user']['username'] . ' </span>';
                            echo '<a class="log-link" href = "../../inc/logout.php">Вихід</a>';
                        }else{
                            echo '<a class="log-link" href = "../../Login.php">Вхід</a>';
                            echo '<a class="log-link" href = "../../Registration.php">Реєстрація</a>';
                        }
                        unset($_SESSION['message']);
                        ?>
                    </div>
                    <nav class="nav">
                        <div style = "color: #fff5ee" class="nav-link courses_button">Каталог курсів</div>
                        <ul hidden class="courses_list">
                            <li><a href = "./csharp.php" class="courses_link">C#</a></li>
                            <li><a href = "./cpluses.php" class="courses_link">C++</a></li>
                            <li><a href = "./java.php" class="courses_link">Java</a></li>
                            <li><a href = "./python.php" class="courses_link">Python</a></li>
                            <li><a href = "./js.php" class="courses_link">JavaScript</a></li>
                        </ul>
                        <a class="nav-link" href = "../quiz/quiz.php">Підбери курс</a>
                        <a class="nav-link" href = "../answers/Answers.php">Відповіді на питання</a>
                        <a class="nav-link" href = "../activity rating/rating.php">Рейтинг активності</a>
                    </nav>
                </div>
            </div>
        </div>

        <?php
        for ($i = 0; $i < count($course); $i++){
        
        $course_id = $course[$i][0];
        $teacher = mysqli_query($connect, "SELECT teacher.Name, teacher.Email, teacher.PhoneNumber FROM 
        (teacher INNER JOIN coursesconducting ON coursesconducting.TeacherId = teacher.Id) 
        INNER JOIN course ON coursesconducting.CourseId = course.Id 
        WHERE coursesconducting.CourseId = '$course_id'");
        $teacher = mysqli_fetch_all($teacher);

       echo'<div class="slide">
            <div class="container">
                <div class="slide_inner">
                    <h1 class="slide_title">Python</h1>
                    <ul class="slide_subtitle">';
                        echo '<li><span class="bold">Назва:</span> ' . $course[$i][1] . ',</li>';
                        echo '<li><span class="bold">Ціна:</span> ' . $course[$i][2] . ' грн,</li>';
                        echo '<li><span class="bold">Викладач: </span>'; 
                        for ($k = 0; $k < count($teacher); $k++){
                            echo '' .$teacher[$k][0] . ', ';
                        } echo '</li>';
                        echo '<li><span class="bold">Номер телефону: </span>'; 
                        for ($k = 0; $k < count($teacher); $k++){
                            echo '' . $teacher[$k][2] . ', ';
                        } echo '</li>';
                        echo '<li><span class="bold">E-mail: </span>'; 
                        for ($k = 0; $k < count($teacher); $k++){
                            echo '' . $teacher[$k][1] . ', ';
                        } echo '</li>';
                        echo '<li><span class="bold">Тривалість курсу:</span> ' . $course[$i][5] .  ' місяців,</li>';
                        echo '<li><span class="bold">Вхідний рівень знань:</span> ' . $course[$i][3] . ',</li>';
                        echo '<li><span class="bold">Рейтинг:</span> ' . $course[$i][4] . '/5.</li>
                    </ul>';
                    
                    $userId = $_SESSION['user']['id'];
                    $registered = mysqli_query($connect, "SELECT UserId FROM `coursesregistration` WHERE `CourseId` = '$course_id'");
                    $registered = mysqli_fetch_all($registered);

                    $flag = false;
                    for ($k = 0; $k < count($registered); $k++){
                        if (in_array($userId, $registered[$k])){
                            $flag = true;
                        }
                    }
                    if ($_SESSION['user']){       
                        if(!$flag){
                        echo 
                        '<form method="post" autocomplete="off" action="../../inc/regoncourse.php">
                        <input type = "checkbox" value = "' . $course_id .'" name = "Course" required><span id = "confirm">Я підтверджую реєстрацію на курс.</span>
                        <input type = "submit" value = "Зареєструватися">
                        </form>';
                        }else{
                        echo 
                        '<form method="post" autocomplete="off" action="">
                        <input type = "checkbox" value = "' . $course_id .'" name = "Course" required><span id = "confirm">Я підтверджую реєстрацію на курс.</span>
                        <input style = "margin-left: 150px; border-color:orange; color:orange" type = "submit" value = "Ви вже зареєструвалися" disabled>
                        </form>'; 
                        }
                    }else{
                        echo 
                        '<form method="post" autocomplete="off" action="../../Login.php">
                        <input type = "checkbox" value = "' . $course_id .'" name = "Course" required><span id = "confirm">Я підтверджую реєстрацію на курс.</span>
                        <input type = "submit" value = "Зареєструватися">
                        </form>'; 
                    }
                echo
                '</div>
            </div>
        </div>';
        }
        ?>

        <script src="../../Site.js"></script>
    </body>
</html>