<?php
  if ( !isset($_SESSION["id"])) {
    // Stuur de hacker door naar algemene homepage
    header("Location: ./index.php?action=home");
    exit();
  } else if (!in_array($_SESSION["userrole"], $userrole)) {
    // Stuur de hacker door naar algemene homepage
    header("Location: ./index.php?action=home");
    exit();
  }
?>