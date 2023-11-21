var input_pw = document.getElementById("InputField_Password");

input_pw.addEventListener("keydown", function() {
  input_pw.placeholder = "";
});

input_pw.addEventListener("blur", function() {
  input_pw.placeholder = "Password*";
});