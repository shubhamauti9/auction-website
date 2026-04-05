<!DOCTYPE html>
<html>
<head>
	<title>Boly</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="personal.css">
	
	<script type="text/javascript">
		function openNav() {
		  document.getElementById("mySidenav").style.width = "220px";
		  
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}
	</script>

	
	
</head>
<body>
		<nav class="navbar" id="navid">
					<ul class="nav-content">
						<li id="logo" style="margin-left: 15vw;"><a href="#" class="anchor" style="font-size: 25px;">Boly.com</a></li>
							<li class="nav-padding left hamcon1">
								<div class="dropdown">
								    <button class="dropbtn" >
								    	<a href="registert.php"><font class="anchor">Register</font></a>
								    </button>
								</div>
							</li>
							<li class="nav-padding left hamcon1">
								<div class="dropdown">
								    <button class="dropbtn" >
								    	<a href="otp_expiry1.php"><font class="anchor">OTP</font></a> 
								    </button>
								 </div>
							</li>
							<li class="nav-padding left hamcon1">
								<div class="dropdown">
								    <button class="dropbtn" >
								    	<a href="productt.php"><font class="anchor3">Product</font> </a>
								    </button>
								 </div>
							</li>
							
							<li class="nav-padding right2 hamcon3" style="margin-right: 15vw;">
								<form action="homepage.php" method="POST">
									<button type="submit" name="logsubmit" style="background-color: transparent;border: none;outline: none;color: white;font-size: 18px;font-family: inherit;" onmouseover="this.style.color='#A0A0C8'" onmouseout="this.style.color='white'"> Logout </button>				
								</form>
							</li>
						<li class="nav-padding right1 hamcon2" style="margin-right: 2vw;"><a href="#" class="anchor3" >Admin</a></li>
					</ul>
		</nav>



 

</body>
</html>
	<?php

if(isset($_POST['logsubmit']))
{
	session_destroy();

}




?>