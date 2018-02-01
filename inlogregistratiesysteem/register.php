<?php
  echo "Registratie";
  var_dump($_POST);

  include("./connect_db.php");
  include("./functions/functions.php");

  $email = sanitize($_POST["email"]);
  $conditions = sanitize($_POST["conditions"]);

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
  header("Location: ./index.html");
?>