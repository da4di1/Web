<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bangtsar</title>
        <link rel="stylesheet" href="./Site.css" type="text/css"/>
        <link href="https://uk.allfont.net/allfont.css?fonts=lobster" rel="stylesheet" type="text/css" />
        <link href="https://uk.allfont.net/allfont.css?fonts=rodchenkoctt" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://yastatic.net/share2/share.js"></script>
        <script>
            function uncheckAlert(){
                let checkbox1 = document.getElementById('PersonalDataCheckbox');
                if(checkbox1.checked != true)
                    alert("Ми не зможемо зв'язатися з вами без дозволу на обробку ваших даних");
            }
        </script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header_inner">
                    <a class="logo" href="index.php">Bangtsar.com</a>
                    <div class="login">
                        <?php
                        if ($_SESSION['user']){
                            echo '<span class="log-nickname"> ' . $_SESSION['user']['username'] . ' </span>';
                            echo '<a class="log-link" href = "inc/logout.php">Вихід</a>';
                        }else{
                            echo '<a class="log-link" href = "Login.php">Вхід</a>';
                            echo '<a class="log-link" href = "Registration.php">Реєстрація</a>';
                        }
                        unset($_SESSION['message']);
                        ?>
                    </div>
                    <nav class="nav">
                        <div class="nav-link courses_button">Каталог курсів</div>
                        <ul hidden class="courses_list">
                            <li><a href = "./tabs/catalogue/csharp.php" class="courses_link">C#</a></li>
                            <li><a href = "./tabs/catalogue/cpluses.php" class="courses_link">C++</a></li>
                            <li><a href = "./tabs/catalogue/java.php" class="courses_link">Java</a></li>
                            <li><a href = "./tabs/catalogue/python.php" class="courses_link">Python</a></li>
                            <li><a href = "./tabs/catalogue/js.php" class="courses_link">JavaScript</a></li>
                        </ul>
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">Підбери курс</a>
                        <a class="nav-link" href = "./tabs/answers/Answers.php">Відповіді на питання</a>
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">Рейтинг активності</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="intro">
            <div class="container">
                <div class="intro_inner">
                    <h1 class="intro_title">Сайт для вивчення мов програмування</h1>
                    <h3 class="intro_subtitle">За допомогою нашого сайту ви легко зможете дізнатися, яка мова програмування є ідеальною саме для вас! 
                        А після проходження тесту перед вами з'явиться перелік курсів, щоб ви не гаяли часу та одразу почали навчання. Вивчайте більше мов, проходьте більше курсів і
                        підіймайтесь вверх в <A HREF="JavaScript:alert('Рейтинг успішності ніяк не впливає на отримані сертифікати');">рейтингу успішності*</A>. Покажіть усім, хто тут справжній поліглот в програмуванні! 
                    </h3>
                </div>
            </div>
        </div>

        <div class="second_slide">
            <div class="container">
                <div class="sec_slide_inner">
                    <h1 class="sec_slide_title">Чому ми?</h1>
                    <ul class="sec_slide_subtitle">
                        <li>Ми є партнерами багатьох світових лідерів із зіставлення та продажу курсів!</li>
                        <li>Ми надаємо підготовчі курсі топ світовим компаніям!</li>
                        <li>Кількість задоволенних клієнтів перевищило 1.000.000.000!</li>
                        <li>Ми допоможемо освоїти нову професію онлайн і отримати актуальні знання від визнаних експертів!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="third_slide">
            <div class="container">
                <div class="third_slide_inner">
                    <h1 class="third_slide_title">ТОП-1 курс</h1>
                    <h2 class="third_slide_subtitle">Аналізуючи розстановку сил на рику мов програмування, ми рекомендуємо всім бажаючим пов'язати свою кар'єру з розробкою ПЗ, спробувати освоїти Python. 
                        Це відкриє доступ до величезного переліку бібліотек, призначених для вирішення тих чи інших завдань у різних сферах. Курс "Python за 1 годину" є найпопулярнішим на нашому сайті.
                    </h2>
                </div>
            </div>
        </div>
        <div class="fourth_slide">
            <div class="container">
                <div class="fourth_slide_inner">
                    <h1 class="fourth_slide_title">Статистика</h1>
                    <div class="table">
                          <table border="2" align="center" cellspacing="0" cellpadding="15">
                            <tr>
                             <th>№</th>
                             <th>Мова</th>
                             <th>Частка ринку</th>
                             <th>Індекс вподобання</th>
                            </tr>
                            <tr>
                             <td>1</td>
                             <td>JavaScript</td>
                             <td>18</td>
                             <td>0.55</td>
                            </tr>
                            <tr>
                             <td>2</td>
                             <td>Java</td>
                             <td>14.7</td>
                             <td>0.75</td>
                            </tr>
                            <tr>
                             <td >3</td>
                             <td >C#</td>
                             <td >14.3</td>
                             <td>0.83</td>
                            </tr>
                            <tr>
                             <td >4</td>
                             <td >Python</td>
                             <td >12.1</td>
                             <td>0.72</td>
                            </tr>
                            <tr>
                             <td >5</td>
                             <td >PHP</td>
                             <td >10.1</td>
                             <td>0.7</td>
                            </tr>
                            <tr>
                             <td >6</td>
                             <td >TypeScript</td>
                             <td >6.92</td>
                             <td>0.8</td>
                            </tr>
                            <tr>
                             <td>7</td>
                             <td >C++</td>
                             <td>4.6</td>
                             <td>	0.63</td>
                            </tr>
                            <tr>
                             <td >8</td>
                             <td >Swift</td>
                             <td >3.1</td>
                             <td>0.85</td>
                            </tr>
                            <tr>
                             <td >9</td>
                             <td >Ruby</td>
                             <td >3.0</td>
                             <td>0.72</td>
                            </tr>
                            <tr>
                             <td >10</td>
                             <td >Kotlin</td>
                             <td >2.6</td>
                             <td>0.88</td>
                            </tr>
                            <tr>
                             <td >11</td>
                             <td >Go</td>
                             <td >2.0</td>
                             <td>0.87</td>
                            </tr>
                            <tr>
                             <td >12</td>
                             <td >Scala</td>
                             <td >1.75</td>
                             <td>0.80</td>
                            </tr>
                            <tr>
                             <td >13</td>
                             <td >C</td>
                             <td >1.1</td>
                             <td>0.37</td>
                            </tr>
                            <tr>
                             <td >14</td>
                             <td >1C</td>
                             <td >1</td>
                             <td>0.47</td>
                            </tr>
                            <tr>
                             <td >15</td>
                             <td >T-SQL</td>
                             <td >-</td>
                             <td>0.28</td>
                            </tr>
                            <tr>
                             <td >16</td>
                             <td >Dart</td>
                             <td >-</td>
                             <td>0.72</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="fifth_slide">
            <div class="container">
                <div class=fifth_slide_inner>
                    <h1 class="fifth_slide_title">Зв'яжіться з нами</h1>
                    <p class="fifth_slide_subtitle">Якщо у вас виникли питання, ви завжди можете написати і ми вам відповімо протягом години!</p>
                    <form method="post" autocomplete="off" action="http://localhost:8080/login.php">
                        <input type=text name="name" id="full_name" placeholder="Your full name" required><br>
                        <input type=text name="email" id="email" placeholder="E-mail" required>
                        <input type=text name="number" id="number"placeholder="Phone number" required>
                        <p class="sure_text"><input type="checkbox" id = "PersonalDataCheckbox" onclick="uncheckAlert()" name="Personal data" required> 
                        Я погоджуюсь на обробку особистих данних</p>
                        <input type="submit" id="ContactsSubmitButton" value="Надіслати">
                    </form>
                    <div class="ya-share2" data-curtain data-size="l" data-shape="round" data-lang="en" data-color-scheme="blackwhite" data-services="facebook,telegram,twitter,pinterest"></div>
                </div>
            </div>
        </div>
        
        <script src="Site.js"></script>
    </body>
</html>