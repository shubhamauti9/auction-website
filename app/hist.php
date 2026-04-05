<!DOCTYPE html>
<html>
<head>
	<title>buy</title>
	<link rel="stylesheet" type="text/css" href="cards1.css">
		<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">

	<style type="text/css">
	h1,h2,h4,input,button
	{
		font-family: 'Poppins', sans-serif;
	}
	
	button[class="btn btn-primary"],input[name="bid"]
	{
		margin-top: 2vh;

	}
	input[name="bid"]
	{
		border:1px solid #008CBA;
	}
	.card-img-top
	{
		max-width:392px; 
		min-width:392px;
		max-height:263px; 
		min-height:263px;
	}
	.card-body
	{
		min-width:372px; 
		max-width:372px;
	}
	.card
	{
		min-width:392px;
		max-width:392px;
				margin: 1% 0.3% 5% 0.3%;
	}

	footer 
{ 
  display: block;
  padding: 2vh 15vw 0 15vw;
  height:auto;
}
.l1
{
  background: url(https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);
  background-size: cover;
  background-position: center;
  background:linear-gradient(to bottom, rgba(9,12,30,0.9) 0%,rgba(0,0,0,0.9) 100%);
  color: white;
}
.logo1
{
  font-family: 'Alfa Slab One', cursive;
  font-size: 25px;
  text-align: center;
}
#inline-content
{
  padding-bottom: 4%;
}
#fc1
{
  display: flex;
  justify-content: center;
}
#fc1 li
{
  margin-right: 1vw;
}
#fc2
{
  display: flex;
  justify-content: center;
}
#fc2 li
{
  margin-right: 1vw;
}
#fc3
{
  display: flex;
  justify-content: center;
}
#fc3 li
{
  margin-right: 1vw;
}
#f1
{
  font-size: 20px;
}
li a
{
  font-size: 16px;
  color: white;
  text-decoration: none;
}

ul#inline-content li
{
  list-style-type: none;
}
ul#inline-content li a
{
  font-family: 'Roboto', sans-serif;
}
</style>
</head>
<body>

<?php include('personalnav.php'); ?>
<div style="min-height: 79vh;">
<br><br><br>

<?php
error_reporting(0);
session_start();
$e = $_SESSION['email'];
$conn = mysqli_connect("localhost","root","","boly");
$result = "SELECT * FROM product WHERE NOW() > edate   AND buyer = '$e' ";
$run = mysqli_query($conn,$result);
$total = mysqli_num_rows($run);


if($total != 0)
{
	?>
	<h1 style="margin-left: 2.5vw;">History</h1>

			<div style="display: flex;flex-wrap: wrap;max-width: 100vw;justify-content: center;">

	<?php
	while($d = mysqli_fetch_assoc($run))
	{
		?>

	 <div class="card d-block d-sm-inline">
		 <a href="<?php echo $d['img']?>"> <img src="<?php echo $d['img']?>" class="card-img-top" alt="..." width="50px" height="50px"></a>
		  <div class="card-body">
		    <h2 class="card-title" style="font-size: 40px;margin: 0 0;"><?php echo $d['name'];?></h2>
		    <p class="card-text"><h4 style="display: inline;">Description: <?php echo $d['des'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">End Date: <?php echo $d['edate'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Base Amount: <?php echo $d['bamount'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Current Amount: <?php echo $d['camount'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Bid Type: <?php echo $d['bd'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Email:<?php echo $d['buyer'];?></h4></p>
		    		    <p class="card-text"><h4 style="display: inline;">Seller Details:</h4></p>

		    		     <?php
		    $r = "SELECT * FROM register WHERE email = '".$d["seller"]."' ";
		    $rs = mysqli_query($conn,$r);
		    $dx = mysqli_fetch_assoc($rs);
		    ?>

		    <p class="card-text"><h4 style="display: inline;">Name:<?php echo $dx['fname']." ".$dx['lname'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Email:<?php echo $d['seller'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Mobile No:<?php echo $dx['mno'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Address:<?php echo $dx['ad'];?></h4></p>

		  </div>
		  </div>
	<?php
	}

	while($d = mysqli_fetch_assoc($run))
	{
		?>

		 <div class="card d-block d-sm-inline" style="max-width: 400px;">
		 <a href="<?php echo $d['img']?>"> <img src="<?php echo $d['img']?>" class="card-img-top" alt="..." width="50px" height="50px"></a>
		  <div class="card-body">
		    <h2 class="card-title" style="font-size: 40px;margin: 0 0;"><?php echo $d['name'];?></h2>
		    <p class="card-text"><h4 style="display: inline;">Description: <?php echo $d['des'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">End Date: <?php echo $d['edate'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Base Amount: <?php echo $d['bamount'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Current Amount: <?php echo $d['camount'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Bid Type: <?php echo $d['bd'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Email:<?php echo $d['buyer'];?></h4></p>
		    		    <p class="card-text"><h4 style="display: inline;">Seller Details:</h4></p>

		    		     <?php
		    $r = "SELECT * FROM register WHERE email = '".$d["seller"]."' ";
		    $rs = mysqli_query($conn,$r);
		    $dx = mysqli_fetch_assoc($rs);
		    ?>

		    <p class="card-text"><h4 style="display: inline;">Name:<?php echo $dx['fname']." ".$dx['lname'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Email:<?php echo $d['seller'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Mobile No::<?php echo $d['mno'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Address:<?php echo $d['ad'];?></h4></p>

		  </div>
		  </div>
	<?php
	}

	while($d = mysqli_fetch_assoc($run))
	{
		?>

		  <div class="card d-block d-sm-inline" style="max-width: 400px;">
		 <a href="<?php echo $d['img']?>"> <img src="<?php echo $d['img']?>" class="card-img-top" alt="..." width="50px" height="50px"></a>
		  <div class="card-body">
		    <h2 class="card-title" style="font-size: 40px;margin: 0 0;"><?php echo $d['name'];?></h2>
		    <p class="card-text"><h4 style="display: inline;">Description: <?php echo $d['des'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">End Date: <?php echo $d['edate'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Base Amount: <?php echo $d['bamount'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Current Amount: <?php echo $d['camount'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Bid Type: <?php echo $d['bd'];?></h4></p>
		    <p class="card-text"><h4 style="display: inline;">Email:<?php echo $d['buyer'];?></h4></p>
		    		    <p class="card-text"><h4 style="display: inline;">Seller Details:</h4></p>

		    		     <?php
		    $r = "SELECT * FROM register WHERE email = '".$d["seller"]."' ";
		    $rs = mysqli_query($conn,$r);
		    $dx = mysqli_fetch_assoc($rs);
		    ?>

		    <p class="card-text"><h4 style="display: inline;">Name:<?php echo $dx['fname']." ".$dx['lname'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Email:<?php echo $d['seller'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Mobile No::<?php echo $d['mno'];?></h4></p>

		    <p class="card-text"><h4 style="display: inline;">Address:<?php echo $d['ad'];?></h4></p>

		  </div>
		  </div>




	


	<?php
	}
}

else
{
	?>
	<h1 style="margin-left: 2vw;"><?php echo "You have not won any products" ?></h1>
	<?php
}
?>
</div>
</div>

	<footer class="l1" >
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




</body>
</html>







