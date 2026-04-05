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
						<div id="mySidenav" class="sidenav">
					  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					 		<a href="history.php">History</a>
					 		<a href="hist.php">Won Products</a>
					  		<a href="sell.php">Sell</a>
					  		<a href="sellp.php">Sold Products</a>
					 		<a href="unsellp.php">Unsold Products</a>

					  		
						</div>
					<li><i class="fa fa-bars anchor2" onclick="openNav()"></i></li>
						<li id="logo"><a href="3.php" class="anchor" style="font-size: 25px;">Boly.com</a></li>
							<li class="nav-padding left hamcon1">
								<div class="dropdown">
								    <button class="dropbtn" >
								    	<a href="buy.php"><font class="anchor">Buy</font></a>
								    </button>
								</div>
							</li>
							<li class="nav-padding left hamcon1">
								<div class="dropdown">
								    <button class="dropbtn" >
								    	<a href="personalabout.php"><font class="anchor">About</font></a> 
								    </button>
								 </div>
							</li>
							<li class="nav-padding left hamcon1">
								<div class="dropdown">
								    <button class="dropbtn" >
								    	<a href="contact_us.php"><font class="anchor3">Contact Us</font> </a>
								    </button>
								 </div>
							</li>
							<?php
								session_start();
								$e = $_SESSION['email'];
								$conn = mysqli_connect("localhost","root","","boly")or die(mysqli_error());
								$query = "SELECT * FROM register WHERE email='$e' ";
								$run = mysqli_query($conn,$query);
								$data = mysqli_fetch_assoc($run);
							?>
						
						
							<li class="nav-padding right1 hamcon2">
								<form method="POST">
										<button type="submit" name="logsubmit" class="sidenavcontent" style="background-color: transparent;border: none;outline: none;color: white;font-size: 18px;font-family: inherit;" onmouseover="this.style.color='#A0A0C8'" onmouseout="this.style.color='white'">
											Logout
										</button>				
								</form>
							</li>
							<li class="nav-padding right2 hamcon3"><a href="editprofile.php" class="anchor3"><?php  echo "".' '.$data['fname'].' '.$data['lname']; ?></a></li>
						</li>
					</ul>
		</nav>



 
	
</body>
</html>
<?php
if(isset($_POST['logsubmit']))
{
	header('location:homepage.php');
	session_unset();
	
}
?>
<META Http-Equiv="Cache-Control" Content="no-cache">
<META Http-Equiv="Pragma" Content="no-cache">
<META Http-Equiv="Expires" Content="0">
<?php
if($_SESSION['email'] == '')
{

	echo'"<script type="text/javascript"> 
		alert("Please login");
		window.location.href="homepage.php";
		</script>"';

}

?>