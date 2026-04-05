<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="personal.css">
	<style type="text/css">
		.card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          border-radius: 5px;
          width: 70%;
          margin-left: 15%;
          height: 65vh;
		}
		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}
		.container {
		  padding: 10px 50px;
		}
		#space-h1{
		  padding: 15px 35px 0px 35px;
		}
		.card-space{
		  padding-top: 9vh;
		}
		.site-description h1
{
  text-align:center;
  margin-top:30vh;
  font-size: 60px;
}
.site-description h4
{
  text-align:center;
}
		.Home
{
	background: url(https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);
	background-size: cover;
	background-position: center;
	height: 93vh;
}
*
{ 
	margin: 0; 
	padding: 0; 
	border: none; 
}
body
{
  overflow-x: hidden;
}
/* nav */
.nav-padding
{
	padding-top: 0px;
}
.left
{
	margin-left: 2%;
}
li[class="nav-padding left hamcon1"]
{
  padding-top: 8px;
}
.right1
{
	margin-left:2%;
}
.nav-content li
{
	margin-top:0.5%; 
	float:left;
	list-style-type: none;
	margin-right: 10px;
	font-family: 'Poppins', sans-serif;
}
li[class="nav-padding right1 hamcon2"]
{
  float: right;
  margin-right: 15vw;
  padding-top: 8px;
}

li[class="nav-padding right2 hamcon3"]
{
  float: right;
  margin-right: 2vw;
  padding-top: 8px;
}
.nav-content li a
{
	text-decoration: none;
	color:white;
	font-size: 18px;
}
.nav-content li a i
{
	margin-left: 5px;
}
#logo
{
	font-family: 'Alfa Slab One', cursive;
	font-size: 25px;
  padding-top: 1px;
}
.nav-content li a:hover,.nav-content li i:hover
{
	color:#A0A0C8;
}

.navbar
{
	border: 1px solid transparent;
	width: 100%;
	height:7%;
	position: fixed;
  z-index: 1;
  background: transparent;
  color: black;
 /* background:linear-gradient(to bottom, rgba(9,12,30,0.9) 0%,rgba(0,0,0,0.9) 100%);
*/
}
.navbarscroll
{
	border: 1px solid transparent;
	width: 100%;
	height:7%;
	position: fixed;
	background-color: white;
  z-index: 1;
}

.dropdown .dropbtn 
{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 0;
  background-color: transparent;
  font-family: inherit;
  margin-bottom: 1.9vh;
}
.dropbtn:hover
{
	color:#A0A0C8;
}
.dropdown-content 
{
  display: none;
  position: absolute;
  top:7vh;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a[class="dropanch"] 
{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover 
{
  background-color: #f9f9f9;
}
.dropdown-content a[class="dropanch"]:hover
{
  color: #A0A0C8;
}

.dropdown:hover .dropdown-content 
{
  display: block;
}



.overlay
{
    color: white;
    background:rgba(0,0,0,0.7);
    height: 100vh;
}







.sidenav {
		  height: 100%;
		  width: 0;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  transition: 0.5s;
		  padding-top: 60px;
		  max-width: 300px;
		}

		.sidenav a {
		  padding: 8px 8px 8px 32px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #818181;
		  display: block;
		  transition: 0.3s;
		}

		.sidenav a:hover {
		  color: #f1f1f1;
		}

		.sidenav .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 36px;
		  margin-left: 50px;
		}

li i[class="fa fa-bars anchor2"]
{
	font-size: 36px;
	color:white;
	margin-right:12vw;
	margin-left: 1vw;
	margin-top:0;
}

.text1{
  height: 25px;
  width: 220px;
  font-size: 14px; 
  border-style: groove;
}
.label-pad{
  margin-bottom: 10px;
}
.update{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
  border-radius: 5px;
}

.update:hover {
  background-color: #008CBA;
  color: white;
}

.mapouter{
  text-align:right;
  height:500px;
  width:100%;
}
.gmap_canvas{
  overflow:hidden;
  background:none!important;
  height:450px;
  width:100%;
  padding-left: 1%;
}
	</style>
	<link rel="stylesheet" type="text/css" href="footer.css">
	    

</head>
<body>

</body>
</html>
<nav class="navbar" id="navid">
					<ul class="nav-content">
						<li id="logo" style="margin-left: 15vw;"><a href="homepage.php" class="anchor" style="font-size: 25px;">Boly.com</a></li>
						
							<li class="nav-padding left hamcon1">
								<div class="dropdown">
								    <button class="dropbtn" >
								    	<a href="homeabout_us.php"><font class="anchor">About</font></a> 
								    </button>
								 </div>
							</li>
							<li class="nav-padding left hamcon1">
								<div class="dropdown">
								    <button class="dropbtn" >
								    	<a href="homecontact_us.php"><font class="anchor3">Contact Us</font> </a>
								    </button>
								 </div>
							</li>
						
							<li class="nav-padding right2 hamcon3" style="margin-right: 15vw;"><a href="login.php" class="anchor3">Login<i class="fa fa-user"></i></a></li>
						<li class="nav-padding right1 hamcon2" style="margin-right: 2vw;"><a href="signup.html" class="anchor3" >Sign Up<i class="fa fa-user-plus"></i></a></li>
					</ul>
		</nav>
		<div class="Home" style="height: 100vh;">
			<div class="overlay">
				<br>				

				<div class="site-description" align="center">
				<h1 style="font-family: 'Poppins', sans-serif;">An Auction Win is Not a Sin</h1>
				<h4 style="font-family: 'Poppins', sans-serif;">We provide a robust platform to buy or sell any product through auction!</h4>
			</div>
			</div>
		</div>


		<footer class="l1">
			<div class="fp">
				<p class="logo1">Boly.com</p>
				<br>
	    		<ul id="inline-content">
	    			<div id="fc1">
	    				<li class="di"><a href="#">©2019 Boly pvt. ltd.</a></li>
	    			</div>
	    			<div id="fc2">
	    				<li class="di"><a href="#">Terms & conditions&nbsp|</a><a href="#">&nbspPrivacy Policy</a></li>
	    			</div>
	    			<div id="fc3">
						<li><a href="#"><i class="fa fa-facebook footer-short-icon"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin footer-short-icon"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram footer-short-icon"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter footer-short-icon"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube footer-short-icon"></i></a></li>
	    			</div>
				</ul>
			</div>
		</footer>

