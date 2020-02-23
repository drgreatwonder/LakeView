<?php
include "dbconnection.php";
// $firstnameError = " ";
// $lastnameError = " ";
// $emailError = "";
// $phonenumberError = "";
// $genderError = "";
// $hostError = "";

//set the variables to empty
$firstnameError = $lastnameError = $emailError = $phonenumberError = $genderError = $hostError = "";
 

    session_start();

if (isset ($_POST["submitvisitorsreg"])) {
    if (empty($_POST["firstname"])) {

        $firstnameError="This Field is Required";

    } else {

        $firstname=Check_User_Input($_POST["firstname"]);
        if(!preg_match("/^[A-Za-z. ]*$/", $firstname)) {

            $firstnameError="Only letters and whitespace allowed";
        }
    }



    if (empty($_POST["lastname"])) {

        $lastnameError="This Field is Required";

    } else {

        $lastname=Check_User_Input($_POST["lastname"]);
        if(!preg_match("/^[A-Za-z. ]*$/", $lastname)) {

            $lastnameError="Only letters and whitespace allowed";
        }
    }



    if (empty($_POST["email"])) {

        $emailError="This Field is Required";

    } else {

        $email=Check_User_Input($_POST["email"]);

        if(!preg_match("/[a-zA-Z0-9._-] {3,} @ [a-zA-Z0-9._-] {3,} [.] {1} [a-zA-Z0-9.\-_\/?\$=&\#\~`!]/", $email)) {

            $email="This is not a valid email";
        }
    }


    if (empty($_POST["phonenumber"])) {

        $phonenumberError="This Field is Required";

    } else {

        $phonenumber=Check_User_Input($_POST["phonenumber"]);
        if(!preg_match("/[0-9_+]/", $phonenumber)) {

            $phonenumber="This is not a valid phone number";
        }
    }


    if (empty($_POST["gender"])) {

        $genderError="This Field is Required";

    } else {

        $gender=Check_User_Input($_POST["gender"]);
    }




    if (empty($_POST["host"])) {

        $hostError="This Field is Required";

    } else {

        $host=Check_User_Input($_POST["host"]);
        if(!preg_match("/^[A-Za-z. ]*$/", $host)) {

            $hostError="Only letters and whitespace allowed";
        }
    }


}

function Check_User_Input ($info) {

    return $info;
}



/*
Name: /^[A-Za-z. ]*$/
Email: /[a-zA-Z0-9._-] {3,} @ [a-zA-Z0-9._-] {3,} [.] {1} [a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/
