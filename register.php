<?php
  // var_dump($_POST); exit();

  include("./connect_db.php");
  include("./functions/functions.php");

  if (isset($_POST["conditions"])) {
    echo "gechecked";
    $email = sanitize($_POST["email"]);
    $conditions = sanitize($_POST["conditions"]);

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

      // Je wordt nu direct teruggestuurd naar index.php
      header("Location: ./index.php?status=succes");
    }
  } else {
    header("Location: ./index.php?status=conditions_not_checked");
  }  
?>