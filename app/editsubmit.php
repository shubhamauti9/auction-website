<?php
session_start();
$conn = mysqli_connect("localhost","root","","boly");

$fname = $_POST['fname'];   
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$mno = $_POST['mno'];
$add = $_POST['add'];
$sq = $_POST['sq'];
$bd = $_POST['bd'];
$limit = $_POST['aadd'];
$e=$_SESSION['email'];
$query = "UPDATE register SET fname='$fname',lname='$lname',dob='$dob',age='$age',gender='$gender',mno='$mno',ad='$add',sq='$sq',bd='$bd',ald='$limit' where email='$e' ";

$run = mysqli_query($conn,$query);
if($run == true)
{
	
	header("location:3.php");
}
mysqli_commit($conn);
mysqli_close($conn);

?>