<!DOCTYPE html>
<html>
<head>
	<title>OTP</title>
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="card-space" style="width: 90vw;margin-left: 5vw;">
		<div class="card" align="left">
	  			<div class="container" style="font-family: 'Poppins', sans-serif;">
<?php
error_reporting(0);
require_once("sendOTP.php");
session_start();
date_default_timezone_set("Asia/Kolkata");
$conn = mysqli_connect("localhost","root","","boly");
$success = "";
if(isset($_POST["submit"])) {
	$result = mysqli_query($conn,"SELECT * FROM register WHERE email='" . $_POST["email"] . "'");
	$count  = mysqli_num_rows($result);
	if($count==0) 
	{
		$success = 1;
		$id = uniqid();
		$otp = rand(100000,999999);
		$_SESSION['fname'] = $_POST['fname'];
		$_SESSION['lname'] = $_POST['lname'];
		$_SESSION['dob'] = $_POST['dob'];
		$_SESSION['age'] = $_POST['age'];
		$_SESSION['gender'] = $_POST['gender'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['pass'] = $_POST['password'];
		$_SESSION['mno'] = $_POST['mno'];
		$_SESSION['add'] = $_POST['address'];
		$_SESSION['sq'] = $_POST['sq'];
		$_SESSION['bd'] = $_POST['bidlist'];
		$_SESSION['limit'] = $_POST['budget'];
		$_SESSION['oid'] = $id;
		$mail_status = sending($_POST["email"],$otp,$id);
		
		if($mail_status == 1) 
		{
			$result = mysqli_query($conn,"INSERT INTO otp_expiry(id,otp,is_expired,create_at) VALUES ('" . $id . "','" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
			$success=1;
		}
	}
	else
	{

		echo "<p style='margin-left:5%;'>".$_POST['email'] ."&nbspalready exists use another EmailId";
		?>
		<br><br>
		<a href="javascript:history.go(-1)" style="margin-left: 32%">go to form</a> 
		<br><br>
		<a href="homepage.html" style="margin-left: 25%">go to home page</a>	
		<?php
		
	}
}

if(isset($_POST["check"])) 
{
	$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE id= '" . $_SESSION['oid'] . "' AND otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 10 MINUTE)");
	$count  = mysqli_num_rows($result);
	if(!empty($count)) 
	{
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		mysqli_commit($conn);
		header("location:2.php");

	} 
	else 
	{
		$success = 2;

	}
	
}
if($success == 1)
{
echo "<p style='margin-left:5%;'>Check your email ".$_POST["email"]." for OTP having ID: ".$id." </p>";
?>
<form name="otp" method="POST">
	<label class="loginup">Enter Otp:<br><input class="loginup" type="number" name="otp" placeholder="123456"></label>
	<br><br>
	<button type="submit" id="submit-button" name="check">Submit</button>
	<br><br>
	<button type="submit" id="submit-button" name="resend">Resend</button>
</form>
<?php
}
if($success == 2)
{
	?><h1><?php echo "Invalid OTP!";?></h1>
	<?php
	echo "Check your email ".$_SESSION["email"]." for OTP having ID: ".$_SESSION['oid'];
	?>
<form name="otp" method="POST">
	<label class="loginup">Enter Otp:<br><input class="loginup" type="number" name="otp" placeholder="123456"></label>
	<br><br>
	<button type="submit" id="submit-button" name="check">Submit</button>
	<br><br>
	<button type="submit" id="submit-button" name="resend">Resend</button>
</form>
	<?php
}
if(isset($_POST['resend']))
{
	$id = uniqid();
	$otp = rand(100000,999999);
	$_SESSION['oid'] = $id;
	$mail_status = sending($_SESSION["email"],$otp,$id);
	if($mail_status == 1) 
	{
		$result = mysqli_query($conn,"INSERT INTO otp_expiry(id,otp,is_expired,create_at) VALUES ('" . $id . "','" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
		
		echo "<p style='margin-left:5%;'>Check your email ".$_SESSION["email"]." for OTP having ID: ".$id." </p>";
		?>
	<form name="otp" method="POST">
		<label class="loginup">Enter Otp:<br><input class="loginup" type="number" name="otp" placeholder="123456"></label>
		<br><br>
		<button type="submit" id="submit-button" name="check">Submit</button>
		<br><br>
		<button type="submit" id="submit-button" name="resend">Resend</button>
	</form>
<?php
	}
}

?>

	</div>
</div>
</div>
</body>
</html>

