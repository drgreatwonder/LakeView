const element = document.querySelector('form');
function signupvalidation(e) {
  e.preventDefault(); 
var firstname = document.getElementById('firstname').value;
var lastname = document.getElementById('lastname').value;
var username = document.getElementById('username').value;
var dob = document.getElementById('dob').value;
var email = document.getElementById('email').value;
var phonenumber = document.getElementById('phonenumber').value;
var initialpassword = document.getElementById('initialpassword').value;
var password = document.getElementById('password').value;
var gender = document.getElementById('gender').value;
console.log(gender)
var address = document.getElementById('address').value;


var firstnameRegex = /^[a-zA-Z ]*$/;
var lastnameRegex =/^[a-zA-Z ]*$/;
var usernameRegex = /^[a-zA-Z ]*$/;
var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
var phonenumberRegex = /^[0-9]{3}-[0-9]{4}-[0-9]{4}$/;
var addressRegex = /^\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\./;


// var valid = true;
  //alert(firstname);
if (firstname == "") {

//   valid = false;
  document.getElementById('firstnameerror').innerHTML = "First name is required.";
  //return false;
}else {
      if (!firstnameRegex.test(firstname)) {
          valid = false;
          document.getElementById('firstnameerror').innerHTML = "Invalid name format.";
      }
}

if (lastname == "") {

// valid = false;
document.getElementById('lastnameerror').innerHTML = "Last name is required.";
//return false;
}else {
    if (!lastnameRegex.test(lastname)) {
        valid = false;
        document.getElementById('lastnameerror').innerHTML = "Invalid name format.";
    }
}

if (username == "") {

// valid = false;
document.getElementById('usernameerror').innerHTML = "User name is required.";
//return false;
}else {
    if (!usernameRegex.test(username)) {
        valid = false;
        document.getElementById('usernameerror').innerHTML = "Invalid name format.";
    }
}

if (dob == "") {

// valid = false;
document.getElementById('doberror').innerHTML = "Date of Birth is required.";
// return false;
}

if (gender == "Select") {

// valid = false;
document.getElementById('gendererror').innerHTML = "Gender is required.";
// return false;
}

if (email == "") {
//   valid = false;
  document.getElementById('emailerror').innerHTML = "Email is required.";
} else {
  if (!emailRegex.test(email)) {
    //   valid = false;
      document.getElementById('emailerror').innerHTML = "Invalid email format.";
     // return false;
  }
}


if (phonenumber == "") {
//   valid = false;
  document.getElementById('phonenumbererror').innerHTML = "Phone Number is required.";
} else {
  if (!phonenumberRegex.test(phonenumber)) {
    //   valid = false;
      document.getElementById('phonenumbererror').innerHTML = "Invalid phone number format.";
    //  return false;
  }
}


if (initialpassword == "") {
// valid = false;
document.getElementById('initialpassworderror').innerHTML = "Password is required.";
}
if (password == "") {
// valid = false;
document.getElementById('passworderror').innerHTML = "Password is required.";
}

if (initialpassword != password) {
// valid = false;
document.getElementById('passworderror').innerHTML = "Both passwords must be same.";
}


if (address == "") {
    // valid = false;
    document.getElementById('addresserror').innerHTML = "Address is required.";
} else {
    if (!addressRegex.test(address)) {
        // valid = false;
        document.getElementById('addresserror').innerHTML = "Invalid address format.";
      //  return false;
    }
}

//return valid;
}

element.addEventListener('submit',signupvalidation); 