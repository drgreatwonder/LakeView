<?php
// include "dbconnection.php";
$firstnameerror = "";
$lastnameerror = "";
$usernameerror = "";
$doberror = "";
$emailerror = "";
$phonenumbererror = "";
$passworderror = "";
$gendererror = "";

if (isset($_POST["submittest"])) {

    if(empty($_POST["firstname"])) {

        $firstnameerror = "This Field is Required";

    } else {

        $firstname=check_user_input($_POST["firstname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$firstname)) {

            $firstnameerror = "Only letters and white space allowed";   
        };
    }



    
    if(empty($_POST["lastname"])) {

        $lastnameerror = "This Field is Required";

    } else {

        $lastname=check_user_input($_POST["lastname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$lastname)) {

            $lastnameerror = "Only letters and white space allowed";   
        };
    }


       
    if(empty($_POST["username"])) {

        $usernameerror = "This Field is Required";

    } else {

        $username=check_user_input($_POST["username"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$username)) {

            $usernameerror = "Only letters and white space allowed";   
        };
    }


    if(empty($_POST["dob"])) {

        $doberror = "This Field is Required";

    } else {

        $dob=check_user_input($_POST["dob"]);
        // if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {

        //     $doberror = "not a valid date";   
        // };
    }



    if(empty($_POST["email"])) {

        $emailerror = "This Field is Required";

    } else {

        $email=check_user_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";
          };
    }



    if(empty($_POST["phonenumber"])) {

        $phonenumbererror = "This Field is Required";

    } else {

        $phonenumber=check_user_input($_POST["phonenumber"]);
    }


    if(empty($_POST["password"])) {

        $passworderror = "This Field is Required";

    } else {

        $passworderror=check_user_input($_POST["password"]);
    }


    if(empty($_POST["gender"])) {

        $gendererror = "This Field is Required";

    } else {

        $gendererror=check_user_input($_POST["gender"]);
    }
}

function check_user_input($data) {

    return $data;

}

?>