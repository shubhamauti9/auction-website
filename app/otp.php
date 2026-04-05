<!DOCTYPE html>
<html>
<head>
	<title>Enter Otp</title>
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
	<div class="card-space" style="width: 90vw;margin-left: 5vw;">
		<div class="card" align="left">
	  			<div class="container" style="font-family: 'Poppins', sans-serif;">
		<?php
		session_start();
		$conn = mysqli_connect("localhost","root","","boly");
		if($_SESSION['success'] == 1)
		{
			//echo "Check your email ".$_SESSION["email"]." for OTP having ID: ".$_SESSION['oid'];
			echo "<p style='margin-left:5%;'>Check your email ".$_SESSION["email"]." for OTP having ID: ".$_SESSION['oid']."</p>";
			?>
			<form name="otp" method="POST">
				<label class="loginup">Enter Otp:<br><input class="loginup" type="number" name="otp" placeholder="123456" required></label>
				<br><br>
				<button type="submit" id="submit-button" name="check">Submit</button>
			</form>
			<?php
		}
		$success="";
		if(isset($_POST["check"])) 
		{
			$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE id= '" . $_SESSION['oid'] . "' AND otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 10 MINUTE)");
			$count  = mysqli_num_rows($result);
			if(!empty($count)) 
			{
				$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
				mysqli_commit($conn);
				header("location:5.php");
			} 
			else 
			{
				$success = 2;
			}
		}
		if($success == 2)
		{
			?>
			<?php echo "<p style='margin-left:35%;color:red;'>Invalid OTP!</p>";?>

			<?php
		}

		?>

	</div>
</div>
</div>
</body>
</html>