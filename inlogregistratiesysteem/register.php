<?php
  echo "Registratie";
  var_dump($_POST);

  include("./connect_db.php");
  include("./functions/functions.php");

  $email = sanitize($_POST["email"]);
  $conditions = sanitize($_POST["conditions"]);

  $sql = "INSERT INTO `login` (`id`,
                               `email`,
                               `conditions`) 
                       VALUES (NULL,
                               '{$email}',
                               '{$conditions}')";

  // Vuur de query af op de database
  mysqli_query($conn, $sql);

  // Hiermee wordt de verbinding verbroken.
  mysqli_close($conn);
  
  // Met deze code kun je even blijven op de pagina en dan teruggaan
  // header("refresh:40; url=./index.php");
  // Je wordt nu direct teruggestuurd naar index.php
  header("Location: ./index.html");
?>