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

  $(".btn").click(function () {
    validateAndProcessForm();
  });

  function validateAndProcessForm() {
    // Validation for first name
    if ($("#fname").val().length <= 3 || /\d/.test($("#fname").val())) {
      window.alert(
        "First name should be more than 3 characters and should not contain numbers"
      );
      return;
    }
    var firstName = $("#fname").val();

    // Validation for last name
    if ($("#lname").val().length <= 3 || /\d/.test($("#lname").val())) {
      window.alert(
        "Last name should be more than 3 characters and should not contain numbers"
      );
      return;
    }
    var lastName = $("#lname").val();

    // Validation for email
    if (!$("#email").val().includes("@") && !$("#email").val().includes(".")) {
      window.alert("Invalid email format");
      return;
    }
    var email = $("#email").val();

    // Validation for phone number
    if ($("#phone").val().length != 10) {
      window.alert("Invalid phone number");
      return;
    }
    var phone = $("#phone").val();
    var message = $("#message").val();

    // If all validations pass, you can now use the variables (firstName, lastName, email, phone, message) as needed.

    console.log("Form data:");
    console.log("First Name: " + firstName);
    console.log("Last Name: " + lastName);
    console.log("Email: " + email);
    console.log("Phone: " + phone);
    console.log("Message: " + message);
  }
});
