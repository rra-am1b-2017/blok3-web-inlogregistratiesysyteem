<?php
  // var_dump($_POST);
  include('./functions/functions.php');

  $password = sanitize($_POST["password"]);
  $confirmPassword = sanitize($_POST["confirmPassword"]);

  if ( !empty($password) && !empty($confirmPassword)) {
    
    if ( !strcmp($password, $confirmPassword)) {
      // Verder gaan met het registratieproces
      $password = password_hash($password, PASSWORD_BCRYPT);

    } else {
      header("Location: ./index.php?action=choosepassword&status=notequalpassword");
    }

  } else {
    header("Location: ./index.php?action=choosepassword&status=emptypassword");
  }

?>