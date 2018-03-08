<?php
  // Bestaat de $_GET["status"] variabele
  if (isset($_GET["status"])) { 
    // We maken een whitelist van scripts die geladen mogen worden
    $whitelist = array( "registerform" => array("success", 
                                                "empty_email",
                                                "emailexists",
                                                "conditions_not_checked",
                                                "choosepassword",
                                                "emptypassword",
                                                "notequalpassword",
                                                "registerform",
                                                "passwordsuccess"),
                        "loginform"    => array("loginform",
                                                "emptyfields",
                                                "accessdenied"));
    // include de schoonmaakfunctie
    include("./functions/functions.php");

    // maak de $_GET["status"] variabele schoon
    $status = sanitize($_GET["status"]);

    foreach ($whitelist as $key => $value)  {
      // Kijk of $_GET["status"] in $whitelist bekend is.
      if (in_array($status, $value)) {
        echo "<script src='./js/{$key}/{$status}.js'></script>";      
      } 
    }   
  }
?>
