
<!DOCTYPE html>
<html>
<head>
	<title>OTP</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">

</head>
<body>

	<div class="card-space" style="width: 90vw;margin-left: 5vw;">
		<div class="card" align="left">
	  			<div class="container" style="font-family: 'Poppins', sans-serif;">
		<font id="login-heading">Forgot Password</font>
		<br><br>
		<?php
		session_start();
		?>
		<form name="rotp" method="POST">
			<label class="loginup">Email<br><input class="loginup" type="email" name="email" placeholder="xyz@gmail.com" required></label>
			<br><br>
			<button type="submit" id="submit-button" name="sendotp" value="Send OTP">Send Otp</button>
		</form>


			<?php
			error_reporting(0);
			date_default_timezone_set("Asia/Kolkata");
			$conn = mysqli_connect("localhost","root","","boly");
			$success = "";
			if(isset($_POST['sendotp']))
			{
				$_SESSION['email'] = $_POST['email'];
				$result = mysqli_query($conn,"SELECT * FROM register WHERE email='" . $_POST["email"] . "'");
				$count  = mysqli_num_rows($result);
				if($count==1) 
				{
					$_SESSION['success'] = 1;
					$id = uniqid();
					$otp = rand(100000,999999);
					$_SESSION['oid'] = $id;
					require_once("sendOTP.php");
					$mail_status = sending($_SESSION["email"],$otp,$id);
					if($mail_status == 1) 
					{
						$result = mysqli_query($conn,"INSERT INTO otp_expiry(id,otp,is_expired,create_at) VALUES ('" . $id . "','" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
						header("location:otp.php");
					}
				}
				else
				{
					echo"<p style='margin-left:32%;color:red;font-size:16px;'>Email Doesn't Exist!</p>";

				}

			}
			?>

			

	</div>
	</div>
</div>
</body>
</html>
