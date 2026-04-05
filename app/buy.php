<!DOCTYPE html>
<html>
<head>
	<title>buy</title>
	<link rel="stylesheet" type="text/css" href="cards1.css">
		<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lobster|Poppins|Roboto&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
<link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>

<?php include('personalnav.php'); ?>
<div style="min-height: 79vh;">
<br><br><br>
<?php

$e = $_SESSION['email'];
								$conn = mysqli_connect("localhost","root","","boly")or die(mysqli_error());
								$query = "SELECT * FROM register WHERE email='$e' ";
								$run = mysqli_query($conn,$query);
								$data = mysqli_fetch_assoc($run); 

								$bd=$data['bd'];

error_reporting(0);
$c = 1;
$fc = array();
$result = "SELECT * FROM product WHERE NOW() <= edate AND bd != '$bd' ";
$run = mysqli_query($conn,$result);
$total = mysqli_num_rows($run);
if($total != 0)
{
	?>
	<h1 style="margin-left: 0vw;text-align: center;">Buy Products</h1><br>
	<!--<div align="center"><form method="POST" action="details.php">
		<input type="text" name="search" id="search" placeholder="Search...">
		<input type="submit" name="submit" value="Search">
	</form>
	<div>
		<div id="show-list">
			
		</div>
	</div>
	</div>-->

        <div class="searchBox">
        	<form method="POST" action="details.php">
	            <input class="searchInput" type="text" name="search" id="search" placeholder="Search">
	            <button class="searchButton" type="submit" value="Search" name="submit">
	                <i class="fa fa-search"></i>
	            </button>
	        </form>
        </div>
        <br>
		<div id="show-list">
			
		</div>
	<br><br><br>
	

			<div style="display: flex;flex-wrap: wrap;max-width: 100vw;justify-content: center;">
		
	
	<?php
	while($d = mysqli_fetch_assoc($run))
	{
		?>
		<form method="POST">
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
			<p align="center"><button type="submit" name="submit"  class="btn btn-primary" value=<?php echo $c; ?>>Submit</button></p>
		  </div>
		  </div>
			</form>
	<?php
	$fc += array($c => array($d['pid'],$d['seller'],$d['bamount'],$d['camount'],$d['buyer'],$d['bd']));
	$c++;
	
	
	}



	while($d = mysqli_fetch_assoc($run))
	{
		?>
		<form method="POST">
		<div class="card d-block d-sm-inline" style="max-width: 400px;">
		 <a href="<?php echo $d['img']?>"> <img src="<?php echo $d['img']?>" class="card-img-top" alt="..." width="50px" height="50px"></a>
		  <div class="card-body">
		    <h2 class="card-title" style="font-size: 40px;margin: 0 0;"><?php echo $d['name'];?></h2>
		    <p class="card-text"><h4 style="display: inline;">Description: </h4><?php echo $d['des'];?></p>
		    <p class="card-text"><h4 style="display: inline;">End Date: </h4><?php echo $d['edate'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Base Amount: </h4><?php echo $d['bamount'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Current Amount: </h4><?php echo $d['camount'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Seller: </h4><?php echo $d['seller'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Buyer: </h4><?php echo $d['buyer'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Bid Type: </h4><?php echo $d['bd'];?></p>
		    <p align="center"><input type="number" name="bid" placeholder="Enter the Bid Amount" required min="0.00" step="0.01" style="height: 38px;font-size: 16px;padding-left: 10px;"></p>
			<p align="center"><button type="submit" name="submit"  class="btn btn-primary" value=<?php echo $c; ?>>Submit</button></p>
		  </div>
		  </div>
			</form>
	<?php
	$fc += array($c => array($d['pid'],$d['seller'],$d['bamount'],$d['camount'],$d['buyer']));
	$c++;
	
	
	}

	while($d = mysqli_fetch_assoc($run))
	{
		?>
		<form method="POST">
		<div class="card d-block d-sm-inline" style="max-width: 400px;">
		 <a href="<?php echo $d['img']?>"> <img src="<?php echo $d['img']?>" class="card-img-top" alt="..." width="50px" height="50px"></a>
		  <div class="card-body">
		    <h2 class="card-title" style="font-size: 40px;margin: 0 0;"><?php echo $d['name'];?></h2>
		    <p class="card-text"><h4 style="display: inline;">Description: </h4><?php echo $d['des'];?></p>
		    <p class="card-text"><h4 style="display: inline;">End Date: </h4><?php echo $d['edate'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Base Amount: </h4><?php echo $d['bamount'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Current Amount: </h4><?php echo $d['camount'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Seller: </h4><?php echo $d['seller'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Buyer: </h4><?php echo $d['buyer'];?></p>
		    <p class="card-text"><h4 style="display: inline;">Bid Type: </h4><?php echo $d['bd'];?></p>
		    <p align="center"><input type="number" name="bid" placeholder="Enter the Bid Amount" required min="0.00" step="0.01" style="height: 38px;font-size: 16px;padding-left: 10px;"></p>
			<p align="center"><button type="submit" name="submit"  class="btn btn-primary" value=<?php echo $c; ?>>Submit</button></p>
		  </div>
		  </div>
			</form>
	<?php
	$fc += array($c => array($d['pid'],$d['seller'],$d['bamount'],$d['camount'],$d['buyer']));
	$c++;
	
	
	}



}

else
{
	?>
	<h1 style="margin-left: 2vw;"><?php echo "No products are available to buy" ?></h1>
	<?php
}
?>
</div>
<?php
$csa = 1;
while($csa < $c)
{
	if($_POST['submit'] == $csa)
	{
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
}



?>
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

<script type="text/javascript">
	
$(document).ready(function()
{
	$("#search").keyup(function()
	{
		var st = $(this).val();
		if(st != '')
		{
			$.ajax(
			{
				url:'action.php',
				method:'POST',
				data:{query:st},
				success:function(response)
				{
					$("#show-list").html(response);
				}
			});
		}
		else
		{
			$("#show-list").html('');
		}
	});
	$(document).on('click','a',function()
	{
		$("#search").val($(this).text());
		$("#show-list").html('');
	});
});



</script>