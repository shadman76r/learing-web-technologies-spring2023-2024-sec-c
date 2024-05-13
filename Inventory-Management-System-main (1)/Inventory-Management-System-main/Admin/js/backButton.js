document.addEventListener("DOMContentLoaded", function () {
  var backButton = document.querySelector(".back-button");
  backButton.addEventListener("click", function () {
    window.location.href = "adminlogin.php";
  });
});
