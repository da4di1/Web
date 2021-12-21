<?php

session_start();

if (isset($_SESSION['user'])){
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <style> 
            input[type = text] {
              padding: 12px 20px;
              margin: 8px 0;
              box-sizing: border-box;
              border: 2px solid rgb(127, 175, 236);
              border-radius: 30px;
              background-color:rgb(238, 238, 252);
              outline: none;
              box-shadow: 10px 4px 10px 3px #888;
              text-align: left;
            }
            input[type=password]{
              padding: 12px 20px;
              margin: 8px 0;
              box-sizing: border-box;
              border: 2px solid rgb(127, 175, 236);
              border-radius: 30px;
              background-color:rgb(238, 238, 252);
              outline: none;
              box-shadow: 10px 4px 10px 3px #888;
              text-align: left;
            }
            input[type=submit]{
              padding: 10px 10px;
              margin: 2px 0;
              box-sizing: border-box;
              border: 5px solid rgb(61, 61, 73);
              border-radius: 1px;
              background-color:rgb(0, 0, 0);
              color:white;
              outline: none;
              box-shadow: 10px 4px 10px 3px #888;
              text-align: left;
              cursor: pointer;
            }
            input[type=submit]:hover {background-color: #333f33}

            input[type=submit]:active {
               background-color: #1d201d;
               box-shadow: 0 5px #666;
               transform: translateY(4px);
            }
            p.Header {
              text-decoration: overline;
              font-family: 'Exo 2', sans-serif;
              font-size: large;
              margin-top: 2px;
              font-weight:bold;
              font-size:20px;
            }
            p.TaCText{
              text-decoration: underline
            }
            div.RegistrationForm{
              position: relative;
              left: 41%;
              top: 40px;
              text-align: center;
              width: 330px;
              height: 620px;
              padding: 60px 0;  
              background-image: url('./images/register_box.jpg');
              background-repeat: no-repeat;
              background-size: 100% 93%;
              background-position: bottom;
            }
            form{
              margin-top:-10px;
            }
            .pass_confirm{
              border: 3px solid gray;
              font-weight:bold;
              border-radius:3px;
              padding:8px;
              text-align:center;
              font-size:14px;
              margin-bottom:-5px;
            }
            </style>
    </head>
    <body>
      <div class=RegistrationForm>
        <p class=Header>Registrierungsdaten eingeben</p>
        <br>
        <form method="post" autocomplete="off" action="inc/signup.php">
            <?php
            if (isset($_SESSION['message'])){
              echo '<p class = "pass_confirm"> ' . $_SESSION['message'] . ' </p>';
              echo '<style>form{margin-top:-48px;}</style>';
            }
            unset($_SESSION['message']);
            ?>
            <p><input type=text name="email" placeholder="E-mail" required></p>
            <p><input type=text name="username" placeholder="Username" required></p>
            <p><input type=password name="password" placeholder="Password" required></p>
            <p><input type=password name="repeated_password" placeholder="Repeat your password" required></p>
            <p class=TaCText><input type="checkbox" name="Terms and Conditions" required> 
            Ich habe die Nutzungsbedingungen gelesen und stimme ihnen zu</p>
            <input type="submit" value="Registrieren">
        </form>
      </div>
    </body>
</html>