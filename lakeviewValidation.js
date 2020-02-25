const element = document.querySelector('form');
function signupvalidation(e) {
  e.preventDefault(); 
var fname = document.getElementById('firstname').value;
var lname = document.getElementById('lastname').value;
var uname = document.getElementById('username').value;
var dofb = document.getElementById('dob').value;
var emailvar = document.getElementById('email').value;
var phone_number = document.getElementById('phonenumber').value;
var initial_password = document.getElementById('initialpassword').value;
var secondpassword = document.getElementById('password').value;
var malefemale = document.getElementById('gender').value;
var homeaddress = document.getElementById('address').value;


var fnameRegex = /^[a-zA-Z ]*$/;
var lnameRegex =/^[a-zA-Z ]*$/;
var unameRegex = /^[a-zA-Z ]*$/;
var emailvarRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
// var phonenumberRegex = /^[0-9]{3}-[0-9]{4}-[0-9]{4}$/;
// var addressRegex = /^\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\./;


// var valid = true;
  //alert(firstname);
if (fname == "") {

//   valid = false;
  document.getElementById('firstnameerror').innerHTML = "First name is required.";
  //return false;
}else {
      if (!fnameRegex.test(fname)) {
          valid = false;
          document.getElementById('firstnameerror').innerHTML = "Invalid name format.";
      }
}

if (lname == "") {

// valid = false;
document.getElementById('lastnameerror').innerHTML = "Last name is required.";
//return false;
}else {
    if (!lnameRegex.test(lname)) {
        valid = false;
        document.getElementById('lastnameerror').innerHTML = "Invalid name format.";
    }
}

if (uname == "") {

// valid = false;
document.getElementById('usernameerror').innerHTML = "User name is required.";
//return false;
}else {
    if (!unameRegex.test(uname)) {
        valid = false;
        document.getElementById('usernameerror').innerHTML = "Invalid name format.";
    }
}

if (dofb == "") {

// valid = false;
document.getElementById('doberror').innerHTML = "Date of Birth is required.";
// return false;
}

if (malefemale == "Select") {

// valid = false;
document.getElementById('gendererror').innerHTML = "Gender is required.";
// return false;
}

if (emailvar == "") {
//   valid = false;
  document.getElementById('emailerror').innerHTML = "Email is required.";
} else {
  if (!emailvarRegex.test(email)) {
    //   valid = false;
      document.getElementById('emailerror').innerHTML = "Invalid email format.";
     // return false;
  }
}


if (phone_number == "") {

    // valid = false;
    document.getElementById('phonenumbererror').innerHTML = "Phone number is required.";
    // console.log(phonenumber)
    // return false;
    }


if (initial_password == "") {
// valid = false;
document.getElementById('initialpassworderror').innerHTML = "Password is required.";
}
if (secondpassword == "") {
// valid = false;
document.getElementById('passworderror').innerHTML = "Password is required.";
}

if (initial_password != secondpassword) {
// valid = false;
document.getElementById('passworderror').innerHTML = "Both passwords must be same.";
}


if (homeaddress == "") {

    // valid = false;
    document.getElementById('addresserror').innerHTML = "Address is required.";
    // return false;
    }

//return valid;
}

element.addEventListener('submit',signupvalidation); 