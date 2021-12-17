<?php

session_start();
require_once '../../inc/connect.php';

$course = mysqli_query($connect, "SELECT * FROM course WHERE course.ProgrammingLanguage = 'Java'");
$course = mysqli_fetch_all($course);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Курси з Java</title>
        <link rel="stylesheet" href="./catalogue.css" type="text/css"/>
        <link href="https://uk.allfont.net/allfont.css?fonts=lobster" rel="stylesheet" type="text/css" />
        <link href="https://uk.allfont.net/allfont.css?fonts=rodchenkoctt" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://yastatic.net/share2/share.js"></script>
        </script>
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
                        <div class="nav-link courses_button">Каталог курсів</div>
                        <ul hidden class="courses_list">
                            <li><a href = "./csharp.php" class="courses_link">C#</a></li>
                            <li><a href = "./cpluses.php" class="courses_link">C++</a></li>
                            <li><a href = "./java.php" class="courses_link">Java</a></li>
                            <li><a href = "./python.php" class="courses_link">Python</a></li>
                            <li><a href = "./js.php" class="courses_link">JavaScript</a></li>
                        </ul>
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">Підбери курс</a>
                        <a class="nav-link" href = "../answers/Answers.php">Відповіді на питання</a>
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">Рейтинг активності</a>
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
                    <h1 class="slide_title">Java</h1>
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
                        echo '<li><span class="bold">Вхідний рівень знань:</span> середній(' . $course[$i][3] . '),</li>';
                        echo '<li><span class="bold">Рейтинг:</span> ' . $course[$i][4] . '/5.</li>';
                    echo '</ul>
                    <form method="post" autocomplete="off" action="">
                    <input type = "checkbox" value = "' . $course_id .'" name = "Course[]" required><span id = "confirm">Я підтверджую реєстрацію на курс.</span>
                    <input type = "submit" value = "Зареєструватися">
                    </form>
                </div>
            </div>
        </div>';
        }
        ?>

        <script src="../../Site.js"></script>
    </body>
</html>