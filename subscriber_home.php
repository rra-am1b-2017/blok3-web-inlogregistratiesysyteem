<main class="container">
  <h1>Subscriber Startpagina</h1>
  <?php 
    if (isset($_SESSION["email"]))  {
      echo "Welkom " . $_SESSION["email"];
    }
  ?>
</main>