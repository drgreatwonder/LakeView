<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "lakeviewEstate";


//create connection for procedural
$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn) {
    die("Failed to Connect: " . mysqli_connect_error());
}

echo "Connection Successful";


//check connection for object_oriented below
//$conn = new mysqli($servername, $username, $password, $db);

//check connection (not a must but wise)
/*if ($conn->connect_error) {

    die("Not Connected: ". $conn->connect_error);
}

echo "Connection Successful";
*/
?>