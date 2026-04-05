<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="card-space" style="width: 90vw;margin-left: 5vw;">
		<div class="card" align="left">
	  			<div class="container" style="font-family: 'Poppins', sans-serif;">
						<font id="login-heading">ACCOUNT LOGIN</font>
						<br><br>
						<form method="POST">
							<label class="loginup"><i class="fa fa-user"></i><input type="text" name="email" placeholder="xyz@gmail.com" style="margin-left: 10px;" value="<?php if(isset($p)){ echo $e; }?>" required></label>
							<br><br>
							<label class="loginup"><i class="fa fa-key"></i> <input type="password" name="pass" placeholder="Password" required></label>
							<br><br>
							<font class="forgot1"><a href="4.php" style="font-size: 1em;">Forgot(By Security Question)?</a></font>
							<br>
							<font class="forgot2"><a href="forotp.php">Forgot(By OTP)?</a></font>
							<br><br>
							<button id="submit-button" name="submit" style="margin-bottom: 5px;">Login</button>
										<div id="phplogin">
							<?php
								error_reporting(0);
								session_start();
								$_SESSION['email'] = $_POST['email'];
								$_SESSION['pass'] = $_POST['pass'];
								$e = $_SESSION['email'];
								$p = $_SESSION['pass'];
								$conn = mysqli_connect("localhost","root","","boly");
								mysqli_commit($conn);
								$query = "SELECT email, pass FROM register WHERE email = '$e' ";
								$run = mysqli_query($conn,$query);
								$data = mysqli_fetch_assoc($run);
								mysqli_commit($conn);
								if(isset($_POST['submit']))
								{
									if($data['email'] == $e)
									{
										if($data['pass'] == md5($p))
										{
											header("location:3.php");
										}
										else
										{
										echo"<p style='margin-left:30%;color:red'>password wrong!</p>";
										}
									}
									else if($e == 'admin123@boly.com')
									{
										if($p == 'Admin123@')
										{
											header("location:registert.php");
										}
										else
										{
											echo"<p style='margin-left:30%;color:red'>password wrong!</p>";
										}
									}
									else
									{
										echo "<p style='margin-left:30%;color:red'>Email doesnt exist!</p>";
									}
								}

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