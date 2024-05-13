// addadmin.js
document.addEventListener("DOMContentLoaded", function () {
  var form = document.getElementById("addAdminForm");
  var unameInput = document.getElementById("uname");
  var emailInput = document.getElementById("email");

  unameInput.addEventListener("blur", function () {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../control/checkUsername.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        document.getElementById("unameError").textContent =
          this.responseText === "1" ? "Username is already taken." : "";
      }
    };
    xhr.send("uname=" + encodeURIComponent(unameInput.value));
  });

  form.onsubmit = function (e) {
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailInput.value)) {
      document.getElementById("emailError").textContent =
        "Invalid email format";
      e.preventDefault();
    }
  };
});
