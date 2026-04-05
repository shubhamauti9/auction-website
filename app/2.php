<?php
error_reporting(0);
session_start();
$conn = mysqli_connect("localhost","root","","boly");
$fname = $_SESSION['fname'];   
$lname = $_SESSION['lname'];
$dob = $_SESSION['dob'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$email = $_SESSION['email'];
$pass = md5($_SESSION['pass']);
$mno = $_SESSION['mno'];
$add = $_SESSION['add'];
$sq = $_SESSION['sq'];
$bd = $_SESSION['bd'];
$limit = $_SESSION['limit'];


$query = "INSERT INTO register (fname, lname, dob, age, gender, email, pass, mno, ad, sq, bd, ald) VALUES ('$fname','$lname','$dob','$age','$gender','$email','$pass','$mno','$add','$sq','$bd','$limit')";

$run = mysqli_query($conn,$query);	
if($run == true)
{
	header("location:3.php");
}


mysqli_commit($conn);
mysqli_close($conn);

?>