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
                    alert("Ohne Ihre Einwilligung zur Verarbeitung Ihrer Daten können wir Sie nicht kontaktieren");
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
                        if (isset($_SESSION['user'])){
                            echo '<span class="log-nickname"> ' . $_SESSION['user']['username'] . ' </span>';
                            echo '<a class="log-link" href = "inc/logout.php">Eingang</a>';
                        }else{
                            echo '<a class="log-link" href = "Login.php">Ausgang</a>';
                            echo '<a class="log-link" href = "Registration.php">Anmeldung</a>';
                        }
                        unset($_SESSION['message']);
                        ?>
                    </div>
                    <nav class="nav">
                        <div class="nav-link courses_button">Kurskatalog</div>
                        <ul hidden class="courses_list">
                            <li><a href = "./tabs/catalogue/csharp.php" class="courses_link">C#</a></li>
                            <li><a href = "./tabs/catalogue/cpluses.php" class="courses_link">C++</a></li>
                            <li><a href = "./tabs/catalogue/java.php" class="courses_link">Java</a></li>
                            <li><a href = "./tabs/catalogue/python.php" class="courses_link">Python</a></li>
                            <li><a href = "./tabs/catalogue/js.php" class="courses_link">JavaScript</a></li>
                        </ul>
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">Wähle Kurs</a>
                        <a class="nav-link" href = "./tabs/answers/Answers.php">Antworten Fragen</a>
                        <a class="nav-link" href = "./tabs/activity rating/rating.php">Aktivitätsbewertung</a>
                    </nav>
                </div>
                <!---->
                <div class="languages">
                <div class="lang_button">
                    <a href="http://localhost/Web-main/Labs/UKR/" width="20px"><img src="./images/Flag_of_Ukraine.png" width="20px" 
                        border="0" alt="UKR"></a>
                    </div>
                    <div class="lang_button">
                    <a href="http://localhost/Web-main/Labs/DEU/" width="20px"><img src="./images/Flag_of_Germany.png" width="20px" 
                        border="0" alt="DEU"></a>
                    </div>
                    <div class="lang_button">
                        <a href="http://localhost/Web-main/Labs/JPN/" width="20px"><img src="./images/Flag_of_Japan.png" width="20px" 
                        border="0" alt="JPN"></a>
                    </div>
                </div>
                <!---->
            </div>
        </div>

        <div class="intro">
            <div class="container">
                <div class="intro_inner">
                    <h1 class="intro_title">Website zum Erlernen von Programmiersprachen</h1>
                    <h3 class="intro_subtitle">Mit unserer Seite können Sie ganz einfach herausfinden, welche Programmiersprache für Sie perfekt ist! 
                    Und nach bestandener Prüfung sehen Sie eine Liste mit Kursen, damit Sie keine Zeit verlieren und sofort mit dem Studium beginnen können. Lerne mehr Sprachen, besuche mehr Kurse und
                    in der Erfolgsrangliste nach oben klettern. Zeigen Sie allen, wer ein echter Polyglott im Programmieren ist! 
                    </h3>
                </div>
            </div>
        </div>

        <div class="second_slide">
            <div class="container">
                <div class="sec_slide_inner">
                    <h1 class="sec_slide_title">Warum wir?</h1>
                    <ul class="sec_slide_subtitle">
                        <li>Wir sind Partner vieler weltweit führender Anbieter beim Vergleichen und Verkaufen von Kursen!</li>
                        <li>Wir bieten Schulungen für weltweit führende Unternehmen an!</li>
                        <li>Die Zahl der zufriedenen Kunden hat 1.000.000.000 überschritten!</li>
                        <li>Wir helfen Ihnen, online einen neuen Beruf zu erlernen und erhalten aktuelles Wissen von anerkannten Experten!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="third_slide">
            <div class="container">
                <div class="third_slide_inner">
                    <h1 class="third_slide_title">TOP-1-Kurs</h1>
                    <h2 class="third_slide_subtitle">Wenn wir die Machtverhältnisse im Gebrüll der Programmiersprachen analysieren, empfehlen wir jedem, der seine Karriere mit der Softwareentwicklung verbinden möchte, Python zu beherrschen. 
                    Dadurch wird der Zugang zu einer riesigen Liste von Bibliotheken eröffnet, die bestimmte Aufgaben in verschiedenen Bereichen lösen sollen. Der Kurs "Python in 1 Stunde" ist der beliebteste auf unserer Seite.</h2>
                </div>
            </div>
        </div>
        <div class="fourth_slide">
            <div class="container">
                <div class="fourth_slide_inner">
                    <h1 class="fourth_slide_title">Statistiken</h1>
                    <div class="table">
                          <table border="2" align="center" cellspacing="0" cellpadding="15">
                            <tr>
                             <th>№</th>
                             <th>Sprache</th>
                             <th>Marktanteil</th>
                             <th>Favoritenindex</th>
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
                    <h1 class="fifth_slide_title">Kontaktiere uns</h1>
                    <p class="fifth_slide_subtitle">Bei Fragen können Sie jederzeit schreiben und wir werden Ihnen innerhalb einer Stunde antworten!</p>
                    <form method="post" autocomplete="off" action="http://localhost:8080/login.php">
                        <input type=text name="name" id="full_name" placeholder="Your full name" required><br>
                        <input type=text name="email" id="email" placeholder="E-mail" required>
                        <input type=text name="number" id="number"placeholder="Phone number" required>
                        <p class="sure_text"><input type="checkbox" id = "PersonalDataCheckbox" onclick="uncheckAlert()" name="Personal data" required> 
                        Ich stimme der Verarbeitung personenbezogener Daten zu</p>
                        <input type="submit" id="ContactsSubmitButton" value="Senden">
                    </form>
                    <div class="ya-share2" data-curtain data-size="l" data-shape="round" data-lang="en" data-color-scheme="blackwhite" data-services="facebook,telegram,twitter,pinterest"></div>
                </div>
            </div>
        </div>
        
        <script src="Site.js"></script>
    </body>
</html>