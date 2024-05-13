function register() {
  let user = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    username: document.getElementById("username").value,
    password: document.getElementById("password").value,
    confPassword: document.getElementById("conf-password").value,
    org: document.getElementById("org").value,
    role: document.getElementById("role").value,
    gender: getRadioValue("gender"),
    dob: document.getElementById("dob").value,
    type: document.getElementById("user-type").value
  };

  let data = JSON.stringify(user);

  let xhttp = new XMLHttpRequest();

  xhttp.open("POST", "../controllers/reg.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("data=" + data);

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let response = JSON.parse(this.responseText);
      if (response.status == "success") {
        window.location.href = "../views/login.php";
      } else {
        alert(response.message);
      }
    }
  }
}

function getRadioValue(radioGroup) {
  let elements = document.getElementsByName(radioGroup);
  for (let i = 0; i < elements.length; i++) {
    if (elements[i].checked) return elements[i].value;
  }
}
