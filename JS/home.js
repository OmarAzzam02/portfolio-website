$(document).ready(function () {
  var icons = document.getElementsByClassName("fab");

  icons[0].addEventListener("click", function (e) {
    window.open("https://www.linkedin.com/in/omar-azzam-533407276/", "_blank");
  });

  icons[1].addEventListener("click", function (e) {
    window.open("https://github.com/OmarAzzam02", "_blank");
  });

  $(".btn").click(function (e) {
    window.open("contact.php", "_self");
  });
});
