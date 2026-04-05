<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
		var a = '';
		function generateCaptcha() 
		{
   			var possible = "ABCDEFGHIKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    		for (var i = 0; i < 7; i++) 
    		{
        		a += possible.charAt(Math.floor(Math.random() * possible.length));       
    		}
    		document.getElementById("captcha").value = a;   
		}

		function passcheck()
		{

  			var p = document.myForm.pass.value;
    		if(p.length < 5)
    		{
      			alert("Password is weak increase the length");
      			return false;  
    		}
    		else if(p.length > 15)
    		{
     	 		alert("Maximum limit is 15");
      			return false;
    		}
    		else
    		{
      		return true;
    		}
		}

		function validate()
		{
			var p = document.myForm.pass.value;
    		if (p == "") 
    		{
      			alert("Please create the Password");
      			return false;    
    		}

    		var letterNumber = /^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*_()]).+$/;
    		if (!p.match(letterNumber)) 
    		{
      			alert("Password should be alphanumeric"); 
      			return false; 
    		}

    		if(p != "")
    		{
      			passcheck();
    		}
  
    		var con = passcheck();
    		if(con == true)
    		{
        		var ap = document.myForm.apass.value;
        		if(ap != p)
        		{
          			alert("Please check password authentication");
          			return false;
        		}

        		var input = document.getElementById("it").value;
        		var captcha = document.getElementById("captcha").value;
        		if(input != captcha)
        		{
          			alert("Check captcha");
		            return false;
        		}
        		return true;
        	}
        }

	</script>
	<style type="text/css">
		input[id="captcha"]
		{
			background-color: white;
			color: red;
			width:80px;
			padding-right: 0;
			text-decoration: line-through;
			font-weight: bold;
			text-shadow: 2px 2px yellow;
			border:none;
			font-size:16px;
		}
		a
		{
			text-decoration: none;
			color:white;
		}
		.login-content
		{
			height: 51vh;
		}
	</style>
</head>
<body onload="generateCaptcha()">
	<div class="card-space" style="width: 90vw;margin-left: 5vw;">
		<div class="card" align="left">
	  			<div class="container" style="font-family: 'Poppins', sans-serif;">
		<font id="login-heading" align="center">Reset Password</font>
		<br>
		<?php  
			session_start();
			error_reporting(0);
			$e = $_SESSION['email'];
			?> 
		<h5 class="loginup"> <?php echo "Email:"." ".$e; ?> </h5>
		<form name="myForm" onsubmit="return validate()" method="POST" action="">
			<label class="loginup">New Password<br><input type="password" name="pass" placeholder="**********" class="loginup" required></label>
			<br><br>
			<label class="loginup">Confirm Password<br><input type="password" name="apass" placeholder="**********" class="loginup" required></label>
			<br><br>
			<input  type="text" id="captcha" disabled class="loginup">
			<input  type="text" id="it" placeholder="Captcha" class="loginup" style="width:100px;margin-left: 0;">
			<br><br>
			<button id="submit-button" type="submit" name="submit" value="Submit">Submit</button>
			<br>
	
			<br>
		</form>
		<button id="submit-button"><a href="login.php">Login</a></button>
				<div id="phplogin" style="margin-left:30%;">
			<?php
				$conn = mysqli_connect("localhost","root","","boly");

				if($conn === false)
				{
		    		die("ERROR: Could not connect. " . mysqli_connect_error());
				}

				$p = $_POST['pass'];
				$ps = md5($p);
				$query = "UPDATE register SET pass='$ps' WHERE email='$e'";
				$run = mysqli_query($conn,$query);
				mysqli_commit($conn);
				if(isset($_POST['submit']))
				{
					if($run == true)
					{
						echo"password updated";
					}		
					else
					{
						echo"something when wrong";
					}
				}
				mysqli_close($conn);
				//session_destroy();
			?>
			</div>
		<br><br>
	</div>
	</div>
</div>

</body>
</html>