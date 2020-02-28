const element = document.querySelector('form');
function signupvalidation(e) {
  e.preventDefault(); 
var fname = document.getElementById('firstname').value;
console.log(fname);
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
  // return false;
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
    } else {
        document.getElementById('lastnameerror').innerHTML = "";
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

element.addEventListener('onmouseleave',signupvalidation); 
// element.onmouseout = signupvalidation;

/* commented to the end here

// Defining a function to display error message
function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
  // Retrieving the values of form elements 
  var firstname = document.tenantreg.firstname.value;
  var lastname = document.tenantreg.lastname.value;
  var username = document.tenantreg.username.value;
  var dob = document.tenantreg.dob.value;
  var email = document.tenantreg.email.value;
  var phonenumber = document.tenantreg.phonenumber.value;
  var initialpassword = document.tenantreg.initialpassword.value;
  var password = document.tenantreg.password.value;
  var gender = document.tenantreg.gender.value;
  var address = document.tenantreg.address.value;

  // var hobbies = [];
  // var checkboxes = document.getElementsByName("hobbies[]");
  // for(var i=0; i < checkboxes.length; i++) {
  //     if(checkboxes[i].checked) {
  //         // Populate hobbies array with selected values
  //         hobbies.push(checkboxes[i].value);
  //     }
  // }
  
// Defining error variables with a default value
  var firstnameerror = lastnameerror = usernameerror = doberror = emailerror = phonenumbererror = initialpassworderror = passworderror = genderErr = addresserror = true;
  
  // Validate firstname
  if(firstname == "") {
      printError("firstnameerror", "Please enter your name");
  } else {
      var regex = /^[a-zA-Z\s]+$/;                
      if(regex.test(firstname) === false) {
          printError("firstnameerror", "Please enter a valid name");
      } else {
          printError("firstnameerror", "");
          firstnameerror = false;
      }
  }

  element.addEventListener('mouseout',validateForm);

    
//   // Validate lastname
//   if(lastname == "") {
//     printError("lastnameerror", "Please enter your name");
// } else {
//     var regex = /^[a-zA-Z\s]+$/;                
//     if(regex.test(name) === false) {
//         printError("nameErr", "Please enter a valid name");
//     } else {
//         printError("nameErr", "");
//         nameErr = false;
//     }
// }

  
//   // Validate username
//   if(name == "") {
//     printError("nameErr", "Please enter your name");
// } else {
//     var regex = /^[a-zA-Z\s]+$/;                
//     if(regex.test(name) === false) {
//         printError("nameErr", "Please enter a valid name");
//     } else {
//         printError("nameErr", "");
//         nameErr = false;
//     }
// }


  
//   // Validate dob
//   if(name == "") {
//     printError("nameErr", "Please enter your name");
// } else {
//     var regex = /^[a-zA-Z\s]+$/;                
//     if(regex.test(name) === false) {
//         printError("nameErr", "Please enter a valid name");
//     } else {
//         printError("nameErr", "");
//         nameErr = false;
//     }
// }
  
//   // Validate email address
//   if(email == "") {
//       printError("emailErr", "Please enter your email address");
//   } else {
//       // Regular expression for basic email validation
//       var regex = /^\S+@\S+\.\S+$/;
//       if(regex.test(email) === false) {
//           printError("emailErr", "Please enter a valid email address");
//       } else{
//           printError("emailErr", "");
//           emailErr = false;
//       }
//   }
  
//   // Validate mobile number
//   if(mobile == "") {
//       printError("mobileErr", "Please enter your mobile number");
//   } else {
//       var regex = /^[1-9]\d{9}$/;
//       if(regex.test(mobile) === false) {
//           printError("mobileErr", "Please enter a valid 10 digit mobile number");
//       } else{
//           printError("mobileErr", "");
//           mobileErr = false;
//       }
//   }
  
//   if (initial_password == "") {
//     // valid = false;
//     document.getElementById('initialpassworderror').innerHTML = "Password is required.";
//     }
//     if (secondpassword == "") {
//     // valid = false;
//     document.getElementById('passworderror').innerHTML = "Password is required.";
//     }
    
//     if (initial_password != secondpassword) {
//     // valid = false;
//     document.getElementById('passworderror').innerHTML = "Both passwords must be same.";
//     }
  

//   // Validate gender
//   if(gender == "") {
//       printError("genderErr", "Please select your gender");
//   } else {
//       printError("genderErr", "");
//       genderErr = false;
//   }

//     // Validate address
//     if(gender == "") {
//       printError("genderErr", "Please select your gender");
//   } else {
//       printError("genderErr", "");
//       genderErr = false;
//   }

  
  // Prevent the form from being submitted if there are any errors
//   if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
//      return false;
//   }
//   } else {
//       // Creating a string from input data for preview
//       var dataPreview = "You've entered the following details: \n" +
//                         "Full Name: " + name + "\n" +
//                         "Email Address: " + email + "\n" +
//                         "Mobile Number: " + mobile + "\n" +
//                         "Country: " + country + "\n" +
//                         "Gender: " + gender + "\n";
//       if(hobbies.length) {
//           dataPreview += "Hobbies: " + hobbies.join(", ");
//       }
//       // Display input data in a dialog box before submitting the form
//       alert(dataPreview);
//   }
// };

// element.addEventListener('onmouseleave',validateForm);