<?php
  session_start();
  if (!empty($_POST["email"]) && !empty($_POST["password"])) {

    // Maak contact met de mysql-server
    include("./connect_db.php");

    // Maak de sanitize-functie beschikbaar
    include("./functions/functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    // Maak een select query voor email
    $sql = "SELECT * FROM `login` 
            WHERE `email`    = '{$email}'";

    // Vuur de query af op de database. 
    $result = mysqli_query($conn, $sql);

    // mysqli_num_rows() telt het aantal gevonden records in de database. Er zijn twee mogelijkheden
    // Er wordt precies 1 record gevonden (true) of geen record (false)
    if (mysqli_num_rows($result)) {

      // mysqli_fetch_array() maakt van het onleesbare result een array genaamd $record.
      $record = mysqli_fetch_array($result);

      // password_verify het gehashte password vergelijken met het niet gehashte ingevoerde password
      if (password_verify($password, $record["password"])) {
        
        $_SESSION["id"] = $record["id"];
        $_SESSION["email"] = $record["email"];
        $_SESSION["userrole"] = $record["userrole"];

        echo $_SESSION["id"]; 
        echo session_id(); 
        //exit();

        // Verdergaan met inlogprocedure 
        switch ($record["userrole"]) {
          case "subscriber":
            header("Location: http://www.inlogregistratiesysteem.am1b.nl/index.php?action=subscriber_home");
            break;
          case "superadmin":
            header("Location: http://www.inlogregistratiesysteem.am1b.nl/index.php?action=superadmin_home");
            break;
          case "administrator":
            header("Location: http://www.inlogregistratiesysteem.am1b.nl/index.php?action=administrator_home");            
            break;
          default:
            header("Location: http://www.inlogregistratiesysteem.am1b.nl/index.php?action=home");            
            break;
        }
      } else {
          header("Location: ./index.php?action=loginform&status=accessdenied");          
      }

    } else {
        header("Location: ./index.php?action=loginform&status=accessdenied");
    }
  } else {
    header("Location: ./index.php?action=loginform&status=emptyfields");
  }
?>