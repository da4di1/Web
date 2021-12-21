<?php

session_start();
require_once '../../inc/connect.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Мова для тебе</title>
        <link rel="stylesheet" href="./quiz.css" type="text/css"/>
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
                        <div class="nav-link courses_button">Каталог курсів</div>
                        <ul hidden class="courses_list">
                            <li><a href = "../catalogue/csharp.php" class="courses_link">C#</a></li>
                            <li><a href = "../catalogue/cpluses.php" class="courses_link">C++</a></li>
                            <li><a href = "../catalogue/java.php" class="courses_link">Java</a></li>
                            <li><a href = "../catalogue/python.php" class="courses_link">Python</a></li>
                            <li><a href = "../catalogue/js.php" class="courses_link">JavaScript</a></li>
                        </ul>
                        <a style = "color: #fff5ee" class="nav-link" href = "./quiz.php">Підбери курс</a>
                        <a class="nav-link" href = "../answers/Answers.php">Відповіді на питання</a>
                        <a class="nav-link" href = "../activity rating/rating.php">Рейтинг активності</a>
                    </nav>
                </div>
            </div>
        </div>

        <script src="../../Site.js"></script>
        <script type="text/javascript">
        (function(d,s,id,u){
        if (d.getElementById(id)) return;
        var js, sjs = d.getElementsByTagName(s)[0],
        t = Math.floor(new Date().getTime() / 1000000);
        js=d.createElement(s); js.id=id; js.async=1; js.src=u+'?'+t;
        sjs.parentNode.insertBefore(js, sjs);
        }(document, 'script', 'os-widget-jssdk', 'https://www.opinionstage.com/assets/loader.js'));
        </script><div id="os-widget-945760" class="os_widget quiz" data-path="/%D0%B2%D0%B0%D0%B4%D0%B8%D0%BC-%D0%BA%D0%BE%D0%B2%D0%B0%D0%BB%D1%8C/%D1%8F%D0%BA%D0%B8%D0%B9-%D0%BA%D1%83%D1%80%D1%81-%D1%82%D0%BE%D0%B1%D1%96-%D0%BF%D1%96%D0%B4%D1%85%D0%BE%D0%B4%D0%B8%D1%82%D1%8C-%D0%BD%D0%B0%D0%B9%D0%B1%D1%96%D0%BB%D1%8C%D1%88%D0%B5" data-of="%D0%B2%D0%B0%D0%B4%D0%B8%D0%BC-%D0%BA%D0%BE%D0%B2%D0%B0%D0%BB%D1%8C" data-opinionstage-widget="8185179b-4e36-4a04-81fa-269957d2854a"></div>
    </body>
</html>