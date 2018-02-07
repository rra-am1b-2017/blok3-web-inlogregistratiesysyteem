<?php
  // **************Gegevens database localhost******************************
  // We hebben hieronder constanten gedefinieerd voor de
  // servernaam, user, password en databasenaam.
  define("SERVER_NAME", "localhost");
  define("USER_NAME", "am1b_loginregis18");
  define("PASSWORD", "Geheim!");
  define("DATABASE_NAME", "am1b_loginregistration");
  // Met myqli_connect maken we contact met onze mysql-server.
  $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);
  // ***********************************************************************
?>