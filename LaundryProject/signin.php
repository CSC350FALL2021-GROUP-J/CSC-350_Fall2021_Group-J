<?php
$ok = true;
//check if the user is registering
if(isset($_REQUEST["userid"]) && isset ($_REQUEST["password"]))
{
	$userid = $_REQUEST ["userid"]; $passwd=$_REQUEST["password"];
//CONNECT THE DATABASE
include "connect.php";
//Check if the user exist with the entered userid and password
$sql="SELECT * FROM LaundryProject.user where UserName='".$userid."' AND UserPass='".$passwd."'";//create query string
$result = mysqli_query($connect,$sql);
if (mysqli_time_slots($result) > 0)
{
	$ok=false;
}
else 
{
	$sql = "INSERT INTO LaundryProject.user (UserName, UserPass) VALUES ('".$userid."','".passwd."');"; //create query string
	$result = mysqli_query($connect,$sql);
	$connect->close();
	header("Location: signin.php"); //redirect to signin.php
}
}
$inputtype = "SIGN IN";
$handlername = "signin.php";
include 'login.html";
?>