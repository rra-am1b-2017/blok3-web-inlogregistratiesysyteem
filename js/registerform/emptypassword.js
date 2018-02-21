$(document).ready(function () {
  $("#exampleModalCenter").modal("show");

  var emptyPassword = $('<div class="alert alert-danger" role="alert">Vul beide wachtwoordvelden in.</div>');

  $("#empty_password").after(emptyPassword);
});