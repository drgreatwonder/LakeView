<?php 
session_start();
require "dbconnection1.php";
// if ($user =$_SESSION['signed_in']){
//   unset($_SESSION['signed_in']);

  if (session_destroy()){
  header("location:index.php");

}
?>