<?php
  // var_dump($_POST);
  include('./functions/functions.php');

  $password = sanitize($_POST["password"]);
  $confirmPassword = sanitize($_POST["confirmPassword"]);

  echo "Check of het veld leeg is: " . empty($password);

  if ( !empty($password) && !empty($confirmPassword)) {
    // Verder gaan met het registratieproces
  } else {
    header("Location: ./index.php?action=choosepassword&status=emptypassword");
  }

?>