<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Відповіді на питання</title>
        <link rel="stylesheet" href="./Answers.css" type="text/css"/>
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
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">Підбери курс</a>
                        <a class="nav-link" href = "./Answers.php">Відповіді на питання</a>
                        <a class="nav-link" href = "../activity rating/rating.php">Рейтинг активності</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="questions_container">
            <div class="accordion">
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">З якої мови програмування почати вивчення?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                        Це залежить від того, в якій галузі програмування ви бажаєте розвиватися. На нашому сайті представлена статистика найпопулярніших мов. Також ви можете підібрати курс спеціально під ваші вимоги.
                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Скільки часу знадобиться на опанування мови програмування?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                        Справжній програміст ніколи не зупиняється в вдосконаленні своїх навичок, тож вивчення триває протягом всього життя. Проте більшість потрібних знань ви отримаєте за проходження 1-2 курсів, які тривають близько року.
                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Скільки я можу заробляти, працюючи програмістом?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                        Зарплатня варіюється в залежності від ваших навичок, вмінь та досвіду роботи. Якщо junior-розробник заробляє приблизно 400$-700$ в місяць, то зарплатня senior-розробника або team-lead'a перевищує 4000$.
                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Як ви можете зв'язатися з нами?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                        Заповніть форму внизу головної сторінки сайту. Ми відповімо вам протягом 48 годин.
                    </p>
                </div>

                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Що я можу отримати за топ-місця в рейтингу активності сайту?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                        Явних призів на нашому сайті не передбачено, адже в першу чергу ви набуваєте знання для самого себе. Проте інші відвідувачі сайту будуть бачити, хто є справжнім "Королем Джунглів"!
                    </p>
                </div>

                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Скільки курсів представлено в каталозі сайту?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                        Звичайно, ми не можемо продемонструвати всі курси світу, проте ми підібрали найкращі та найпопулярніші серед них. Будьте впевнені, що ви знайдете матеріал майже по будь-якій мові програмування в достатній кількості.
                    </p>
                </div>
            </div>
        </div>

        <script src="../../Site.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(".item-header").click(function(){
              $(".accordion-item").removeClass("active");
              $(this).parent().addClass("active");
              $(".icon").text("+");
              $(this).children(".icon").text("-");
            });
        </script>
    </body>
</html>