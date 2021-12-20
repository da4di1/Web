<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>質問への回答</title>
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
                            echo '<a class="log-link" href = "../../inc/logout.php">入り口</a>';
                        }else{
                            echo '<a class="log-link" href = "../../Login.php">出口</a>';
                            echo '<a class="log-link" href = "../../Registration.php">登録</a>';
                        }
                        unset($_SESSION['message']);
                        ?>
                    </div>
                    <nav class="nav">
                        <div class="nav-link courses_button">コースのカタログ</div>
                        <ul hidden class="courses_list">
                            <li><a href = "../catalogue/csharp.php" class="courses_link">C#</a></li>
                            <li><a href = "../catalogue/cpluses.php" class="courses_link">C++</a></li>
                            <li><a href = "../catalogue/java.php" class="courses_link">Java</a></li>
                            <li><a href = "../catalogue/python.php" class="courses_link">Python</a></li>
                            <li><a href = "../catalogue/js.php" class="courses_link">JavaScript</a></li>
                        </ul>
                        <a class="nav-link" href = "https://www.instagram.com/da4di1/?hl=ru">コースを選択してください</a>
                        <a class="nav-link" href = "./Answers.php">質問への回答</a>
                        <a class="nav-link" href = "../activity rating/rating.php">アクティビティの評価</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="questions_container">
            <div class="accordion">
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">どのプログラミング言語から学習を開始しますか？</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    それはあなたが開発したいプログラミングの分野に依存します。 最も人気のある言語の統計は、私たちのサイトに表示されます。 要件に合わせてコースを選択することもできます。
                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">プログラミング言語をマスターするのにどれくらい時間がかかりますか？</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    真のプログラマーはスキルを向上させるために立ち止まることはないので、研究は一生続きます。 ただし、1〜2コースで受ける必要のある知識のほとんどは、約1年続きます。
                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">プログラマーとして働くことでいくら稼げますか？</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    給与はあなたのスキル、能力、仕事の経験によって異なります。 ジュニア開発者が月に約400ドルから700ドル稼ぐ場合、シニア開発者またはチームリーダーの給与は4,000ドルを超えます。                    </p>
                </div>
      
                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">どうすればお問い合わせいただけますか？</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    サイトのメインページの下部にあるフォームに記入します。 48時間以内に返信いたします。
                    </p>
                </div>

                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">サイト活動ランキングの上位に何を得ることができますか？</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    まず第一にあなたはあなた自身のための知識を得るので、私たちのサイトには明確な賞品はありません。 しかし、他のサイト訪問者は、本当の「ジャングルの王」が誰であるかを見るでしょう！                    </p>
                </div>

                <div class="accordion-item">
                    <div class="item-header">
                        <h1 class="title">サイトカタログにはいくつのコースがありますか？</h1>
                        <div class="icon">+</div>
                    </div>
                    <p class="text">
                    もちろん、世界のすべてのコースをデモンストレーションすることはできませんが、その中から最も人気のあるコースを選択しました。 ほとんどすべてのプログラミング言語でたくさんの資料を見つけるようにしてください。                    </p>
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