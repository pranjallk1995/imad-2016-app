$(document).ready(function () {
 $("#Lock").click(function () {
 if ($("#matpass1").attr("type")=="password") {
 $("#matpass1").attr("type", "text");
 }
 else{
 $("#matpass1").attr("type", "password");
 }
 if ($("#matpass2").attr("type")=="password") {
 $("#matpass2").attr("type", "text");
 }
 else{
 $("#matpass2").attr("type", "password");
 }
 });
 });