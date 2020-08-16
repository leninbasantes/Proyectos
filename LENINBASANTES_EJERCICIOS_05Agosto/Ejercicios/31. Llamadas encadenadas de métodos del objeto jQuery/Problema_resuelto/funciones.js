// JavaScript Document
$(document).ready(function () {
  $("#menu a").click(function () {
    $("#detalles").load($(this).attr("href")); 
    return false;
  })
})