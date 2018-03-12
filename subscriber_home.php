<main class="container">
  <h1>Subscriber Startpagina</h1>
  <?php 
    //if (isset($_SESSION["email"]))  {
      session_start();
      echo "Welkom " . $_SESSION["email"];
      var_dump($_SESSION);
    //}
  ?>
</main>