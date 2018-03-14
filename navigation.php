<main class="container">
<?php
  if (isset($_SESSION["id"])) {

    switch ($_SESSION["userrole"]) {
      case 'superadmin':
        echo '<a href="./index.php?action=superadmin_home">Home</a> ';
        // Zet hier alle superadmin links 
        break;
      case 'administrator':
        echo '<a href="./index.php?action=administrator_home">Home</a> ';
        // Zet hier alle administator links
        break;
      case 'subscriber':
        echo '<a href="./index.php?action=subscriber_home">Home</a> ';    
        // Zet hier alle subscriber links    
        break;
      default: 
        header("Location: ./index.php?action=logout");        
        break;
    } 

    echo '<a href="./index.php?action=games">Games</a> ';
    echo '<a href="./index.php?action=logout">Uitloggen</a> ';
  } else {
    echo '<a href="./index.php?action=home">Home</a> ';
    echo '<a href="./index.php?action=registerform&amp;status=registerform">Registreer</a> ';
    echo '<a href="./index.php?action=loginform&amp;status=loginform">Inloggen</a>';
  }
?>  
</main>