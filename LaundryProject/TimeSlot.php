<?php 
//GET THE USER ACCOUNT ID 
session_start();
$userid = $_SESSION ["userid"];
echo "<p style='font-weight: bold;font-size:24'> ACCOUNT FOR ".$userid."</p>";
//CONNECT TO THE DATABASE
include "connect.php";
//CHECK IF THE TIMESLOT IS OPEN
if(isset($_REQUEST["TimeSlot"]))
{
	$TimeSlot = $_REQUEST["TimeSlot"];
	$sql = "INSERT INTO LaundryProject.TimeSlot (Laundry_TimeSlot, User_UserName) VALUES ('".$userid."','".passwd."');";
	$result = mysqli_query($connect,$sql);
}
?>
<?php
//CHECK THE TIME SLOT LIST
include "TimeSlotList.php";
//LIST THE AVAILABLE TIME SLOT LIST
include "availableTime.php";
	echo "<p>";
	echo "<table><tr><td> <form action='signin.php' method ='post'> <input type='submit'>
	
?>

