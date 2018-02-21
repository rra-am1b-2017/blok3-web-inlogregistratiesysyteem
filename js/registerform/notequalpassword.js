$(document).ready(function () {
  $("#exampleModalCenter").modal("show");

  var emptyPassword = $('<div class="alert alert-danger" role="alert">Uw ingevoerde wachtwoorden zijn niet gelijk.</div>');

  $("#empty_password").after(emptyPassword);
});