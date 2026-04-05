<!DOCTYPE html>
<html>
<head>
	<title>Forgot</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>




<div class="card-space" style="width: 90vw;margin-left: 5vw;">
		<div class="card" align="left">
	  			<div class="container" style="font-family: 'Poppins', sans-serif;">
				<font id="login-heading">Forgot Password</font>
				<br><br>
				<form method="POST">
					<label class="loginup">Email<br><input class="loginup" type="text" name="email" placeholder="xyz@gmail.com" required></label>
					<br><br>
					<label class="loginup">Security Question<br><input class="loginup" type="password" name="s1" placeholder="Your first school" required></label>
					<br>
					
					<br>
					<button id="submit-button" name="submit">Submit</button>

					<div id="phplogin">
						<?php
							session_start();
							error_reporting(0);

							$conn = mysqli_connect("localhost","root","","boly");

							if($conn === false)
							{
							    die("ERROR: Could not connect. " . mysqli_connect_error());
							}

							$e = $_POST['email'];
							$_SESSION['email'] = $e;
							$sq = $_POST['s1'];
							$query = "SELECT email,sq FROM register WHERE email = '$e' ";
							$run = mysqli_query($conn,$query);
							$data = mysqli_fetch_assoc($run);
							if(isset($_POST['submit']))
							{
							if($data['email'] == $e)
							{
								if($data['sq'] == $sq)
								{
									
									header("location:5.php");
								}
								else
								{
									echo"<p style='margin-left:30%;color:red'>Wrong school!</p>";
								}
							}
							else
							{
								echo"<p style='margin-left:30%;color:red'>Invalid EmailId!</p>";
							}
							}

							mysqli_commit($conn);

							mysqli_close($conn);
							session_write_close();
						?>
					</div>
					<br><br>
				</form>
	</div>
</div>
</div>

</body>

</html>