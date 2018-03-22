<?php
  // Maak contact met de mysql-server
  include("./connect_db.php");

  // Selecteer alle users uit de tabel login
  $sql = "SELECT * FROM `login`";

  // Vuur de query af op de database
  $result = mysqli_query($conn, $sql);

  function match($userrole, $option) {
    if ( $userrole == $option) {
      return "selected";
    }
  }

  $tableContent = "";
  while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $tableContent .= "<tr>
                        <form action='./change_userrole_action.php' method='post'>
                          <th scope='row'>" . $record["id"]. "</th>
                          <td>" . $record["email"] . "</td>
                          <td>
                            <select class='form-control form-control-sm' name='userrole'>
                            <option ". match($record['userrole'], "superadmin") .">superadmin</option>
                            <option ". match($record['userrole'], "administrator") .">administrator</option>
                            <option ". match($record['userrole'], "subscriber") .">subscriber</option>
                            </select>
                          </td>
                          <td>
                            <input type='hidden' name='id' value='" . $record["id"] . "'>
                            <button type='submit' class='btn btn-outline-info btn-sm'>opslaan</button>
                          </td>
                        </form>
                      </tr>";
  }

  

?>




<div class="container">
  <div class="row">
    <div class="col-12">
    <!-- Jumbotron -->
      <div class="jumbotron">
        <h1 class="display-4">Wijzigen gebruikersrollen</h1>
        <p class="lead">U kunt als superadmin gebruikersrollen wijzigen van andere gebruikers.</p>
        <hr class="my-4">
        <p>U bent de enige die dit mag doen.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="./index?action=home" role="button">terug naar home</a>
        </p>
      </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <!-- Table -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">E-mail</th>
            <th scope="col">Gebruikersrol</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php echo $tableContent; ?>
        </tbody>
      </table>    
    </div> <!-- col-8 div -->
    <div class="col-2"></div>  
  </div> <!-- row -->
</div> <!-- container -->