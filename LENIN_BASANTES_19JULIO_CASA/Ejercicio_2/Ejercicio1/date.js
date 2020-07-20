// JavaScript Document
$(document).ready(function () {
  $.getJSON("ajax.json", function (data) {
    for (i in data.fechas) {
      $("#fechas").append("<option>" + data.fechas[i].fecha + "</option>");
    }
  });
});
function convertToDate() {
  $.getJSON("ajax.json", function (data) {
    for (i in data.fechas) {
      var parts = data.fechas[i].fecha.split("-");
      var mydate = new Date(parts[0], parts[1] - 1, parts[2]);
      console.log(mydate.toDateString());
      $("#fechasCambiadas").append(
        "<option>" + mydate.toDateString() + "</option>"
      );
    }
  });
}
