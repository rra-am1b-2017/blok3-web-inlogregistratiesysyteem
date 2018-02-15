<?php
  // var_dump($_POST); exit();

  include("./connect_db.php");
  include("./functions/functions.php");

  if (isset($_POST["conditions"])) {
    echo "gechecked";
    $email = sanitize($_POST["email"]);
    $conditions = sanitize($_POST["conditions"]);

    if (empty($_POST["email"])) {
      header("Location: ./index.php?status=empty_email");
    } else {
      // Maak een selectie query om te kijken in de database of het emailadres al bestaat
      $sql = "SELECT * FROM `login` WHERE `email` = '{$email}'";

      // Vuur de query af op de database
      $result = mysqli_query($conn, $sql);
      
      // Tel het aantal rijen dat voldoet aan de selectie query
      $number_of_rows = mysqli_num_rows($result);

      // Als mysqli_num_rows aantal gevonden rijen 1 teruggeeft dan...
      if (mysqli_num_rows($result)) {
        // Echo dat het emailadres al bestaat anders...
        header("Location: ./index.php?status=emailexists");
      } else {
        $sql = "INSERT INTO `login` (`id`,
                                    `email`,
                                    `conditions`,
                                    `userrole`) 
                                VALUES (NULL,
                                    '{$email}',
                                    '{$conditions}',
                                    'subscriber')";

        // Vuur de query af op de database
        mysqli_query($conn, $sql);

        // Hiermee wordt de verbinding verbroken.
        mysqli_close($conn);

        // Onderwerp email
        $subject = "Registratie dyslexie.nl";

        $message = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <meta http-equiv="X-UA-Compatible" content="ie=edge">
                      <title>Document</title>
                      <style>
                        body {
                          background-color : "rgb(220,220,220)";
                          font-size : "14px";
                        }
                      </style>
                    </head>
                    <body>
                      <h3>Beste bezoeker van de site</h3>
                      <p>Bedankt voor het registreren, klik <a href="http://www.inlogregistratiesysteem.am1b.nl">hier</a> om uw account te activeren</p>
                      <p>Met vriendelijk groet,</p>
                      <p>Superadmin</p>
                    </body>
                    </html>';

        $headers =  "Content-Type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: superadmin@dyslectie.nl \r\n";
        $headers .= "Cc: superadmin@dyslectie.nl, adruijter@gmail.com \r\n";
        $headers .= "Bcc: subscriber@dyslectie.nl, rra@mboutrecht.nl";

        mail($email, $subject, $message, $headers);

        // Je wordt nu direct teruggestuurd naar index.php
        header("Location: ./index.php?status=success");
      }
    }
  } else {
    header("Location: ./index.php?status=conditions_not_checked");
  }  
?>