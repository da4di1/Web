<?php

session_start();
require_once '../../inc/connect.php';


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Рейтинг активності</title>
        <link rel="stylesheet" href="./rating.css" type="text/css"/>
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
                        if (isset($_SESSION['user'])){
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
                            <li><a href = "../catalogue/csharp.php" class="courses_link">C#</a></li>
                            <li><a href = "../catalogue/cpluses.php" class="courses_link">C++</a></li>
                            <li><a href = "../catalogue/java.php" class="courses_link">Java</a></li>
                            <li><a href = "../catalogue/python.php" class="courses_link">Python</a></li>
                            <li><a href = "../catalogue/js.php" class="courses_link">JavaScript</a></li>
                        </ul>
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">Підбери курс</a>
                        <a class="nav-link" href = "../answers/Answers.php">Відповіді на питання</a>
                        <a class="nav-link" href = "./rating.php">Рейтинг активності</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class = "table">
        <div class="container">
        <?php
        echo "
        <table align = 'center'>
            <tr>
                <th>Нікнейм користувача</th>
                <th>Кількість зарєєстрованих курсів</th>
                <th>Звання</th>
            </tr>
            ";

            $users = mysqli_query($connect, "SELECT user.Username, COUNT(coursesregistration.CourseId) as courseAmount FROM coursesregistration INNER JOIN user ON coursesregistration.UserId = user.Id 
            GROUP BY user.Username ORDER BY courseAmount DESC");
            $users = mysqli_fetch_all($users);

            foreach ($users as $user) {

                if ($user[1] <= 3) {
                    $rank = "Junior";
                } elseif ($user[1] > 3 AND $user[1] <= 6) {
                    $rank = "Middle";
                } elseif ($user[1] > 6 AND $user[1] <= 9) {
                    $rank = "Senior";
                } elseif ($user[1] > 9) {
                    $rank = "Lead";
                }
                if ($user[0] == isset($_SESSION['user']['username'])){
                echo '
                <tr>
                <td style = "background: #728db8">' . $user[0] . '</td>
                <td style = "background: #728db8">' . $user[1] . '</td>
                <td style = "background: #728db8">' . $rank . '</td>
                </tr>
                ';
                } else{
                echo '
                <tr>
                <td>' . $user[0] . '</td>
                <td>' . $user[1] . '</td>
                <td>' . $rank . '</td>
                </tr>
                ';
                }
            }
        echo '
        </table>
        ';
        ?>
        </div>
        </div>
        

        <script src="../../Site.js"></script>
    </body>
</html>