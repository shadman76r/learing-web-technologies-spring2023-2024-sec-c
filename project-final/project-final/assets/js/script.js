function loginValidate() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (username === "") {
        alert("Username is required.");
        return false;
    }
    if (username.length < 2) {
        alert("Username must be at least 2 characters.");
        return false;
    }
    if(!((username[0]>='A' && username[0]>='Z') || (username[0]>='a' && username[0] <='z'))){
        alert("Must start with a letter");
        return false;
    }
    if (password === "") {
        alert("Password is required.");
        return false;
    }

    return true;
}

function signupValidate() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let gender = document.querySelector('input[name="gender"]:checked');
    let usertype = document.querySelector('input[name="usertype"]:checked');
    let dob = document.getElementById('dob').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmpassword').value;

    if (name === "" || email === "" || username === "" || password === "" || confirmPassword === "" ||  gender ==="" || dob === "" || usertype === "") {
        alert("All fields are required.");
        return false;
    }
    if (name === "") {
        alert(" name is required.");
        return false;
    }
    if (name.length < 2) {
        alert("Name must be at least 2 characters.");
        return false;
    }
    if(!((name[0]>='A' && name[0]<='Z') || (name[0]>='a' && name[0] <='z'))){
        alert("Name can contain a-z or A-Z & Must start with a letter");
        return false;
    }

    if (email === "") {
        alert("Email is required.");
        return false;
    } else if (!email.includes('@') || !email.includes('.')) {
        alert("Email must be valid.");
        return false;
    }

    if (gender === "") {
        alert("Gender is required.");
        return false;
    }

    if (usertype === "") {
        alert("Usertype is required.");
        return false;
    }

    if(dob === ""){
        alert("Date Of Birth is required.");
        return false;
    }

    if (username === "") {
        alert("Username is required.");
        return false;
    } else if(!((username[0]>='A' && username[0]<='Z') || (username[0]>='a' && username[0] <='z'))){
        alert("Must start with a letter");
        return false;
    }

    if (password === " ") {
        alert("Password is required.");
        return false;
    }
    if (password.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }


    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

function chngpassValidate(){
    let currentPassword = document.getElementById('currentPassword').value;
    let newPassword = document.getElementById('newPassword').value;
    let confirmPassword = document.getElementById('retypePassword').value;

    if ( currentPassword === "" || newPassword === "" || confirmPassword === "") {
        alert("All fields are required.");
        return false;
    }

    if (currentPassword === "") {
        alert("currentPassword is required.");
        return false;
    } 

    if (newPassword.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }
    if (newPassword !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

function forgotpassValidate(){
    let newPassword = document.getElementById('newPassword').value;
    let confirmPassword = document.getElementById('retypePassword').value;

    if (newPassword === "" || confirmPassword === "") {
        alert("All fields are required.");
        return false;
    }
    
    if (newPassword.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }

    if (newPassword !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

function old_ajax(){
    let name = document.getElementById('name').value;
    let gender = document.querySelector('input[name="gender"]:checked');
    let usertype = document.querySelector('input[name="usertype"]:checked');
    let dob = document.getElementById('dob').value;
    let email = document.getElementById('email').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirmpassword = document.getElementById('confirmpassword').value;

    let user_data = {
        'name': name,
        'email': email,
        'gender': gender,
        'usertype': usertype,
        'dob': dob,
        'username': username,
        'password': password,
        'confirmpassword': confirmpassword
    }

    let data = JSON.stringify(user_data);

    let xhttp = new XMLHttpRequest();
   
    //xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.open('POST', '../../controllers/reg.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    //xhttp.send('name='+name);
    //xhttp.send('gender='+gender);
    //xhttp.send('usertype='+usertype);
    //xhttp.send('dob='+dob);
    //xhttp.send('email='+email);
    //xhttp.send('username='+username);
    //xhttp.send('password='+password);
    //xhttp.send('confirmpassword='+confirmpassword);

    xhttp.send('data='+data);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
        }
    }
}

function ajax() {
    event.preventDefault();
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirmpassword = document.getElementById('conf-password').value;
    let org = document.getElementById('org').value;
    let role = document.getElementById('role').value;
    // let gender = document.querySelector('input[name="gender"]:checked');
    let gender = getRadioValue('gender');
    let dob = document.getElementById('dob').value;
    // let usertype = document.querySelector('input[name="user-type"]:checked');
    let usertype = getRadioValue('user-type')

    let xhttp = new XMLHttpRequest();
   
    //xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.open('POST', '../controllers/reg.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    // xhttp.send('name='+name);
    // xhttp.send('gender='+gender);
    // xhttp.send('usertype='+usertype);
    // xhttp.send('dob='+dob);
    // xhttp.send('email='+email);
    // xhttp.send('username='+username);
    // xhttp.send('password='+password);
    // xhttp.send('org='+org);
    // xhttp.send('role='+role);
    // xhttp.send('conf-password='+confirmpassword);

    let data = `name=${name}&email=${email}&username=${username}&password=${password}&conf-password=${confirmpassword}&org=${org}&role=${role}&gender=${gender}&dob=${dob}&usertype=${usertype}`;

    console.log('sending data');
    xhttp.send(data);
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if (this.responseText === "success") {
                // If signup successful, show a message or redirect
                alert("Sign up successful!");
                window.location.href = "../views/login.php";
            } else {
                // If signup failed, show an error message
                alert("Sign up failed!");
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
  
function upvote(productId) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/upvoteSet.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('product_id=' + productId);
}
