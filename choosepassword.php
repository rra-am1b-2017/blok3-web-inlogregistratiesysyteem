<main class="container">


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="./activate.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Activeren &amp; wachtwoord</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputPassword1">Wachtwoord</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord" name="password">
              <small id="passwordHelp" class="form-text text-muted">Kies een geschikt wachtwoord.</small>            
            </div>
            <div class="form-group">
              <label for="exampleInputPassword2">Bevestig wachtwoord</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Bevestig wachtwoord" name="confirmPassword">
              <small id="passwordHelp" class="form-text text-muted">Herhaal uw gekozen wachtwoord.</small>            
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Verzenden</button>        
        </div>
      </form>
    </div>
  </div>
</div>
</main>