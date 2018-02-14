<?php
  // Bestaat de $_GET["status"] variabele
  if (isset($_GET["status"])) { 
    // We maken een whitelist van scripts die geladen mogen worden
    $whitelist = array("success", 
                       "empty_email",
                       "emailexists",
                       "conditions_not_checked");
    // include de schoonmaakfunctie
    include("./functions/functions.php");

    // maak de $_GET["status"] variabele schoon
    $status = sanitize($_GET["status"]);

    // Kijk of $_GET["status"] in $whitelist bekend is.
    if (in_array($status, $whitelist)) {
      echo "<script src='./js/registerform/{$_GET["status"]}.js'></script>";      
    }    
  }
?>
