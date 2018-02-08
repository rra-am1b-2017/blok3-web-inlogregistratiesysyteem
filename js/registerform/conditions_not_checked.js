// We gaan eerst wachten tot de gehele pagina index.php geladen is
$(document).ready(function(){
  // We laten het modalscherm zakken
  $("#exampleModalCenter").modal("show");
  // We gaan een nieuwe small-tag toevoegen aan het formulier
  $("#lbl_checkbox").after("<small class='checkbox_error_style'>Check de checkbox en ga akkoord met de algemene voorwaarden.</small>");
  $(".checkbox_error_style").css({"color"  : "red",
                                  "border" : "1px solid grey",
                                  "border-radius" : "4px",
                                  "padding" : "0.5em",
                                  "padding-left" : "1em",
                                  "margin-top" : "1em",
                                  "display" : "block" });
});