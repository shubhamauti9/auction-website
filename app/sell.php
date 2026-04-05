
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
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
          width: fit-content;
          margin-left: auto;
          margin-right: auto;
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

				label,input
		{
					font-family: 'Poppins', sans-serif;

		}
		label
		{
			padding-left:26px;
    		width:220px;
    		text-transform: uppercase;
    		display: inline-block;
		}
		input
		{
			padding-left: 5px;
		}
		select[name="bd"]
		{
			width: 230.33px;
			height: 30.33px;
		}
		.ta *
		{
			vertical-align: middle;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="footer.css">
		<script type="text/javascript" src="seller.js"></script>

</head>
<body>

</body>
</html>
<?php include('personalnav.php'); ?>

 <div class="card-space" >
		<div class="card" style="min-height: 79vh;height: auto;">
	  			<div class="container" style="font-family: 'Poppins', serif">
	    			<form name="seller" onsubmit="return validate()"  method = "POST"  enctype="multipart/form-data">
					<h1>SELL FORM</h1>
					<br><br>
					<div class="label-pad" >	
		  					<label>Product Name:  </label>
		  					<input type="text" name="pname" class="text1">
		  			</div>
					<br>

					<div class="label-pad ta"  style="vertical-align: middle;">	
													  					<label>Description:  </label>

		  					<textarea type="text" name="des" class="text4" style="resize: none;width: 230.33px;box-sizing: border-box;padding: 5px;"></textarea>
		  			</div>
					<br>
					<div class="label-pad">	
		  					<label>Product Type:  </label>
		  					<select  name="bd" class="text3 st1">
								<option value="select">select</option>
								<option value="antique">Antique</option>
								<option value="bike">Bike</option>
								<option value="car">Car</option>
								<option value="dailyuse">Daily use</option>
								<option value="mobile">Mobile</option>		
							</select>
		  			</div>
		  			<!--use class:class="st1" in above which shubham removed from mishra code-->
					<br>
					<div class="label-pad">	
		  					<label>Base Amount :  </label>
		  					<input type="number" name="bamount" min="0.00" step="0.01" class="text1"> &nbsp &nbsp
							<label>(In Rupees)</label>
		  			</div>
					<br>
					<div class="label-pad">	
		  					<label>Bid Closing Time:  </label>
		  					<input type="datetime-local" name="etime" class="text1">
		  			</div>
					<br>
					<div class="label-pad">	
		  					<label>Product Image:  </label>
		  					<input type="file" name="img" class="text2">
		  			</div>
					<br>

					<br>
					<div class="button-pad">
	  						<input type="submit" name="submit" class="update">
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


<?php
$e = $_SESSION['email'];
if(isset($_POST['submit']))
{
	$n = $_POST['pname'];
	$des = $_POST['des'];
	$bd = $_POST['bd'];
	$am = $_POST['bamount'];
	$et = $_POST['etime'];
	$fi = $_FILES['img']['name'];
	$temping = $_FILES['img']['tmp_name'];
	$f = "img/".$fi;
	$conn = mysqli_connect("localhost","root","","boly");
	move_uploaded_file($temping,$f);
	$sql = "INSERT INTO product (name,des,img,bamount,bd,edate,seller) VALUES ('$n','$des','$f','$am','$bd','$et','$e')";
	$run = mysqli_query($conn,$sql);
	
	
	echo '<script type="text/javascript"> 
		  alert("Product Uploaded Successfully");
		 	</script>';	
	
		mysqli_commit($conn);
		mysqli_close($conn);
}
?>