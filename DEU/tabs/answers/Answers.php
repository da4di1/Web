<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Antworten auf Fragen</title>
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
                        if (isset($_SESSION['user'])){
                            echo '<span class="log-nickname"> ' . $_SESSION['user']['username'] . ' </span>';
                            echo '<a class="log-link" href = "../../inc/logout.php">Eingang</a>';
                        }else{
                            echo '<a class="log-link" href = "../../Login.php">Ausgang</a>';
                            echo '<a class="log-link" href = "../../Registration.php">Anmeldung</a>';
                        }
                        unset($_SESSION['message']);
                        ?>
                    </div>
                    <nav class="nav">
                        <div class="nav-link courses_button">Kurskatalog</div>
                        <ul hidden class="courses_list">
                            <li><a href = "../catalogue/csharp.php" class="courses_link">C#</a></li>
                            <li><a href = "../catalogue/cpluses.php" class="courses_link">C++</a></li>
                            <li><a href = "../catalogue/java.php" class="courses_link">Java</a></li>
                            <li><a href = "../catalogue/python.php" class="courses_link">Python</a></li>
                            <li><a href = "../catalogue/js.php" class="courses_link">JavaScript</a></li>
                        </ul>
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">Wähle Kurs</a>
                        <a class="nav-link" href = "./Answers.php">Antworten Fragen</a>
                        <a class="nav-link" href = "../activity rating/rating.php">Aktivitätsbewertung</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="questions_container">
            <div class="accordion">
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Von welcher Programmiersprache aus lernen?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    Es hängt davon ab, welchen Bereich der Programmierung Sie entwickeln möchten. Statistiken der beliebtesten Sprachen werden auf unserer Website präsentiert. Sie können auch einen Kurs speziell für Ihre Anforderungen auswählen.
                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Wie lange dauert es, die Programmiersprache zu beherrschen?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    Ein echter Programmierer hört nie auf, seine Fähigkeiten zu verbessern, daher dauert das Studium ein Leben lang. Den Großteil des notwendigen Wissens erhaltet ihr jedoch in 1-2 Kursen, die etwa ein Jahr dauern.
                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Wie viel kann ich als Programmierer verdienen?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    Das Gehalt variiert je nach Ihren Fähigkeiten, Fähigkeiten und Berufserfahrung. Wenn ein Junior-Entwickler etwa 400 bis 700 US-Dollar im Monat verdient, übersteigt das Gehalt eines Senior-Entwicklers oder Teamleiters 4.000 US-Dollar.
                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Wie können Sie uns kontaktieren?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    Füllen Sie das Formular unten auf der Hauptseite der Site aus. Wir werden Ihnen innerhalb von 48 Stunden antworten.
                    </p>
                </div>

                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Was kann ich für die Spitzenplätze in den Ranglisten der Website-Aktivitäten bekommen?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    Auf unserer Seite gibt es keine expliziten Preise, da Sie sich zunächst selbst Wissen aneignen. Andere Website-Besucher werden jedoch sehen, wer der wahre "König des Dschungels" ist!
                    </p>
                </div>

                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">Wie viele Kurse werden im Site-Katalog präsentiert?</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    Natürlich können wir nicht alle Kurse der Welt vorführen, aber wir haben die besten und beliebtesten ausgewählt. Stellen Sie sicher, dass Sie viel Material zu fast jeder Programmiersprache finden.
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