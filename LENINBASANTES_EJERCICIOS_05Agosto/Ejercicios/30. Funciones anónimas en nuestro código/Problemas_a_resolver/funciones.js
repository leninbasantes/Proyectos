// JavaScript Document
let x = $(document);
x.ready(function () {
  let x = $("#titulo1");
  x.click(function () {
    let x = $("#titulo1");
    x.css("color", "#ff0000");
    x.css("background-color", "#ffff00");
    x.css("font-family", "Courier");
  });
  x = $("#titulo2");
  x.click(function () {
    let x = $("#titulo2");
    x.css("color", "#ffff00");
    x.css("background-color", "#ff0000");
    x.css("font-family", "Arial");
  });
})