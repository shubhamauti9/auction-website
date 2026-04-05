
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
		<link rel="stylesheet" type="text/css" href="cards1.css">

	<style type="text/css">
		.card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          border-radius: 5px;
          width: 70%;
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
		max-width:400px; 
		width: fit-content;
		max-height:263px; 
		min-height:263px;
	}
	.card-body
	{
		min-width:372px; 
		max-width:372px;
	}

	</style>
	<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>

</body>
</html>
<?php include('personalnav.php'); 
//error_reporting(0);?>

 <div class="card-space" >
		<div class="card" style="min-height: 79vh;height: auto;">
	  		<h1 id="space-h1" style="font-family: 'Poppins', serif" style="margin-left: 1%;" align="center">Your Search Result</h1>
	  			<div class="container" style="font-family: 'Poppins', serif">
	  				<?php
						$conn = mysqli_connect('localhost','root','','boly');
						if($conn == true)
						{
						if(isset($_POST['submit']))
						{
							$data = $_POST['search'];
							$query = "SELECT * FROM product WHERE name='$data'";
							$r = mysqli_query($conn,$query);
							$fc = array();
							$c = 1;
							while($d = mysqli_fetch_assoc($r))
							{
								?>
								<form method="POST" action="details1.php">
								<div class="card d-block d-sm-inline" style="max-width: 400px;">
								 <a href="<?php echo $d['img']?>"> <img src="<?php echo $d['img']?>" class="card-img-top" alt="..." width="50px" height="50px"></a>
								  <div class="card-body">
								    <h2 class="card-title" style="font-size: 40px;margin: 0 0;"><?php echo $d['name'];?></h2>
								    <p class="card-text"><h4 style="display: inline;">Description: <?php echo $d['des'];?></h4></p>
								    <p class="card-text"><h4 style="display: inline;">End Date: <?php echo $d['edate'];?></h4></p>
								    <p class="card-text"><h4 style="display: inline;">Base Amount: <?php echo $d['bamount'];?></h4></p>
								    <p class="card-text"><h4 style="display: inline;">Current Amount: <?php echo $d['camount'];?></h4></p>
								    <p class="card-text"><h4 style="display: inline;">Seller: <?php echo $d['seller'];?></h4></p>
								    <p class="card-text"><h4 style="display: inline;">Buyer: <?php echo $d['buyer'];?></h4></p>
								    <p class="card-text"><h4 style="display: inline;">Bid Type: <?php echo $d['bd'];?></h4></p>
								    <p align="center"><input type="number" name="bid" placeholder="Enter the Bid Amount" required min="0.00" step="0.01" style="height: 38px;font-size: 16px;padding-left: 10px;"></p>
									<p align="center"><button type="submit" name="bsubmit"  class="btn btn-primary" value=<?php echo $c;?>>Submit</button></p>
								  </div>
								  </div>
							</form>
							<?php
							$fc += array($c => array($d['pid'],$d['seller'],$d['bamount'],$d['camount'],$d['buyer'],$d['bd']));
							$c++;
							}	
							$_SESSION['fc'] = $fc;
						}
						}
						?>

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
<?php
/*
$csa = 1;
while($csa < $c)
{
	if($_POST['bsubmit'] == $csa)
	{
		//echo $_POST['submitbid'];
		if($fc[$csa][1] == $_SESSION['email'])
		{
			echo'"<script type="text/javascript"> 
			alert("You cannot bid for this product");
			window.location.href="buy.php";
			</script>"';
			
		}
		else
		{
			if($_SESSION['email'] != $fc[$csa][4])
			{
				if($fc[$csa][3] == 0)
				{
		
					if($fc[$csa][2] < $_POST['bid'])
					{
						$v = $fc[$csa][0];
						$query = "UPDATE product SET camount='".$_POST["bid"]."' , buyer='".$_SESSION["email"]."' WHERE pid='$v'";
					 	mysqli_query($conn,$query);
					
							echo'"<script type="text/javascript"> 
								alert("Bid Uploaded successfully");
								window.location.href="buy.php";
								</script>"';
					
					}
			
					else
					{
						echo'"<script type="text/javascript"> 
							alert("Bid cannot be less than base amount");
							window.location.href="buy.php";
							</script>"';

					}
				}
		
				else
				{
					if($fc[$csa][3] < $_POST['bid'])
					{
						$v1 = $fc[$csa][0];
						$query = "UPDATE product SET camount='".$_POST["bid"]."', buyer='".$_SESSION["email"]."' WHERE pid='$v1'";
						mysqli_query($conn,$query);
					
						echo'"<script type="text/javascript"> 
							alert("Bid Uploaded successfully");
							window.location.href="buy.php";

							</script>"';
					
					}
					else
					{
						echo'"<script type="text/javascript"> 
							alert("Bid cannot be less than current amount");
							window.location.href="buy.php";
							</script>"';

					}
				}	
			}
			else
			{
				echo'"<script type="text/javascript"> 
					alert("You cannot bid for this product");
					window.location.href="buy.php";
					</script>"';
			}		
		}
	}
	
	$csa++;
	
}*/
?>