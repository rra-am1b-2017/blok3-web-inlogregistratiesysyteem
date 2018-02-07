$(document).ready(function() {
  // We laten het modalscherm weer zakken met de mededeling dat er succesvol is geregistreerd
  // We selecteren de modal div en roepen de modal method aan. We geven deze method 'show' mee
  $("#exampleModalCenter").modal("show");

  // We maken de modal-body div leeg
  $(".modal-body").empty();

  // We zetten in de modal-body div tekst.
  $(".modal-body").append("<p>U bent succesvol geregistreerd. U krijgt een email toegestuurd met een activatielink.</p>");

  // We maken de modal-footer div leeg
  $(".modal-footer").empty();

  setTimeout(function() {
    $("#exampleModalCenter").modal("hide");
    window.location.replace("./index.php");
  }, 3000)
});