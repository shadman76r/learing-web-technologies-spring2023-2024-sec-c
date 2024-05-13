function validateAdminLogin() {
  var uname = document.forms["adminLoginForm"]["uname"].value;
  var pass = document.forms["adminLoginForm"]["pass"].value;

  if (uname == "") {
    alert("Username must be filled out");
    return false;
  }
  if (pass == "") {
    alert("Password must be filled out");
    return false;
  }
  return true;
}
