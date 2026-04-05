<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="personal.css">
	<style type="text/css">
		label,input
		{
					font-family: 'Poppins', sans-serif;

		}
		label
		{
			padding-left:26px;
    		width:220px;
    		text-transform: uppercase;
    		display:inline-block
		}
		input
		{
			padding-left: 5px;
		}
		select[name="bd"],select[name="gender"]
		{
			width:230.33px;
			height: 30.33px;
		}
		.card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          border-radius: 5px;
          width: 50%;
          margin-left: 25%;
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
		label{
			text-align: left;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>

</body>
</html>
<?php include('personalnav.php'); ?>

	<?php
								
								$e = $_SESSION['email'];
								$conn = mysqli_connect("localhost","root","","boly")or die(mysqli_error());
								$query = "SELECT * FROM register WHERE email='$e' ";
								$run = mysqli_query($conn,$query);
								$data = mysqli_fetch_assoc($run); 
?>


	<div class="card-space" style="width: 90vw;margin-left: 5vw;">
		<div class="card" align="left" style="min-height:79vh; ">
	  			<div class="container" style="font-family: 'Poppins', sans-serif;
">
	  				<form method="POST" action="editsubmit.php">

	  					<h1 align="center" style="font-family: 'Poppins', sans-serif;">Profile</h1>
					<div align="center">
		  				<div class="label-pad" style="margin-top: 2.5vh">	
		  					<label>FIRST NAME:   </label>
		  					<input type="text" name="fname" value="<?php echo $data['fname'] ?>" class="text1">
		  				</div>
		  				<div class="label-pad">
		  					<label>LAST NAME:   </label>
		  					<input type="text" name="lname" value="<?php echo $data['lname'] ?>" class="text1">
		  				</div>
	  					<div class="label-pad">	
	  						<label>DOB:   </label>
		  					<input type="text" name="dob" value="<?php echo $data['dob'] ?>" class="text1">
		  				</div>
		  				<div class="label-pad">
		  					<label>AGE:   </label>
		  					<input type="text" name="age" value="<?php echo $data['age'] ?>" class="text1">
		  					
		  				</div>
	  					
	  					<div class="label-pad">	
		  					<label>ADDRESS:   </label>
		  					<input type="text" name="add" value="<?php echo $data['ad'] ?>" class="text1">
		  				</div>
		  				<div class="label-pad">
		  					<label>AlTERNATE ADDRESS:   </label>
		  					<input type="text" name="aadd" value="<?php echo $data['ald'] ?>" class="text1">
		  				</div>
	  					
	  					<div class="label-pad">	
		  					<label>EMAIL:  </label>
		  					<input type="text" name="email" value="<?php echo $data['email'] ?>" class="text1" disabled>
		  				</div>
		  				<div class="label-pad">
		  					<label>MOBILE NO:  </label>
		  					<input type="text" name="mno" value="<?php echo $data['mno'] ?>" class="text1">
		  				</div>
	  					
	  					
	  					<div class="label-pad">	
		  					<label>INTERESTED BID TYPE:  </label>
		  					<select name="bd" class="text1">
		  						<option value="<?php echo $data['bd']; ?>"><?php echo $data['bd']; ?></option>
		  						<?php 
		  						$x=$data['bd'];
		  						if($x=='Antique')
		  						{
		  							?>
		  							<option value="Car">Car</option>
		  							<option value="Bike">Bike</option>
		  							<option value="Daily Use">Daily Use</option>
		  							<option value="Mobile">Mobile</option>
		  							<?php
		  						}
		  						
		  						else if($x=='Car')
		  						{
		  							?>
		  							<option value="Antique">Antique</option>
			  						<option value="Bike">Bike</option>
			  						<option value="Daily Use">Daily Use</option>
			  						<option value="Mobile">Mobile</option>
		  							<?php
		  						}
		  						
		  						else if($x=='Bike')
		  						{
		  							?>
		  							<option value="Antique">Antique</option>
			  						<option value="Car">Car</option>
			  						<option value="Daily Use">Daily Use</option>
			  						<option value="Mobile">Mobile</option>
		  							<?php
		  						}

		  						else if($x=='Daily Use')
		  						{
		  							?>
		  							<option value="Antique">Antique</option>
			  						<option value="Car">Car</option>
			  						<option value="Bike">Bike</option>
			  						<option value="Mobile">Mobile</option>
		  							<?php
		  						}

		  						else if($x=='Mobile')
		  						{
		  							?>
		  							<option value="Antique">Antique</option>
			  						<option value="Car">Car</option>
			  						<option value="Bike">Bike</option>
			  						<option value="Daily Use">Daily Use</option>
		  							<?php
		  						}
		  						
		  						else
		  						{
		  		
		  							echo abc;
		  						}?>
		  					</select>
		  				</div>
		  				<div class="label-pad">
		  					<label>Gender:  </label>
		  					<select name="gender" class="text1">
		  						<option value="<?php echo $data['gender']; ?>"><?php echo $data['gender']; ?></option>
		  						<?php 
		  						$x=$data['gender'];
		  						if($x=='Male')
		  						{
		  							?>
		  							<option value="Female">Female</option>
		  							<option value="Others">Others</option>
		  							<?php
		  						}
		  						
		  						else if($x=='Female')
		  						{
		  							?>
		  							<option value="Male">Male</option>
		  							<option value="Others">Others</option>
		  							<?php
		  						}
		  						
		  						else if($x=='Others')
		  						{
		  							?>
		  							<option value="Male">Male</option>
		  							<option value="Female">Female</option>
		  							<?php
		  						}
		  						
		  						else
		  						{
		  		
		  							echo abc;
		  						}?>
		  					</select>
		  				</div>
	  					
	  					<div class="label-pad">	
		  					<label>Security Question:  </label>
		  					<input type="text" name="sq" value="<?php echo $data['sq'] ?>" class="text1">
		  				</div>
	  					<br>
	  					<div class="button-pad" align="center" style="padding-left: 0;">
	  						<button class="update" type="submit" align="center">Update</button>
	  					</div>
	  				</div>	
	  				</form>
	  			</div>
		</div>
	</div>
	<br><br>
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
