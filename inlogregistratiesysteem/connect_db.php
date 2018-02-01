<?php
  // **************Gegevens database localhost******************************
  // We hebben hieronder constanten gedefinieerd voor de
  // servernaam, user, password en databasenaam.
  define("SERVER_NAME", "localhost");
  define("USER_NAME", "rra_loginregistration");
  define("PASSWORD", "Geheim!");
  define("DATABASE_NAME", "rra_loginreg18");
  // Met myqli_connect maken we contact met onze mysql-server.
  $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);
  // ***********************************************************************
?>