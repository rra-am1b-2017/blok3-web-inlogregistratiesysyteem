$(document).ready(function(){
  $("#exampleModalCenter").modal("show");
  $("#emailHelp").after("<small class='email_error_style'>Vul een ander e-mailadres in astublieft.</small>");
  $(".email_error_style").css({"color"  : "red",
                               "border" : "1px solid grey",
                               "border-radius" : "4px",
                               "padding" : "0.5em",
                               "padding-left" : "1em",
                               "margin-top" : "2em" });
});