<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <title>Inlogregistratiesysteem</title>
</head>

<body>
  <main class="container">
    <h1>Inlogregistratiesysteem</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      registreer
    </button>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registreren</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="./register.php" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">E-mail adres</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer uw e-mailadres in" name="email">
                <small id="emailHelp" class="form-text text-muted">Uw e-mailadres wordt niet verder gedeeld.</small>
              </div>
              <div class="form-check" id="lbl_checkbox">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="conditions">
                <label class="form-check-label" for="exampleCheck1">U gaat akkoord met de algemene voorwaarden</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Verstuur</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <?php
    if (isset($_GET["status"])) {
      if ($_GET["status"] == "succes") {
        echo "<script src='./js/registerform/success.js'></script>";
      } else if ($_GET["status"] == "emailexists") {
        echo "<script src='./js/registerform/emailexists.js'></script>";        
      } else if ($_GET["status"] == "conditions_not_checked") {
        echo "<script src='./js/registerform/conditions_not_checked.js'></script>";                
      }
    }

  ?>
</body>

</html>