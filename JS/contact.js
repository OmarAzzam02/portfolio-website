$(document).ready(function () {
  var inputList = document.querySelectorAll("input");

  for (var i = 0; i < inputList.length; i++) {
    var input = inputList[i];

    input.addEventListener("input", function () {
      var label = this.nextElementSibling;
      if (this.value.trim() !== "") {
        label.classList.add("label-up");
      } else {
        label.classList.remove("label-up");
      }
    });
  }

  $("#contact").submit(function (event) {
    if (!validateAndProcessForm()) {
      event.preventDefault(); // Prevent form submission if validation fails
    }
  });
});

function validateAndProcessForm() {
  var count = 0;

  // Validation for first name
  if ($("#fname").val().length < 3 || /\d/.test($("#fname").val())) {
    window.alert(
      "First name should be more than 2 characters and should not contain numbers"
    );
    return false;
  }

  // Validation for last name
  if ($("#lname").val().length < 3 || /\d/.test($("#lname").val())) {
    window.alert(
      "Last name should be more than 2 characters and should not contain numbers"
    );
    return false;
  }

  // Validation for email
  if (!$("#email").val().includes("@") || !$("#email").val().includes(".")) {
    window.alert("Invalid email format");
    return false;
  }

  // Validation for phone number
  if ($("#phone").val().length !== 10 || !/\d/.test($("#phone").val())) {
    window.alert("Invalid phone number");
    return false;
  }

  // Validation for message
  if ($("#message").val().trim() === "") {
    window.alert("Message cannot be empty");
    return false;
  }

  return true;
}
