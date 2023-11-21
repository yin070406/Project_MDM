var input_user = document.getElementById("InputField_Username");

input_user.addEventListener("keydown", function() {
  input_user.placeholder = "";
});

input_user.addEventListener("blur", function() {
  input_user.placeholder = "Username*";
});
