<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="footer.css">
		<style type="text/css">
				td, th 
	{
  		border: 3px solid #AA55CD;
  		text-align: left;
  		padding: 8px;
	}

	tr:nth-child(even) 
	{
	    background-color: #FFFFCC;
	}

	table 
	{
	   border: 5px solid #D3D3D3;
	   border-collapse: collapse;
	   	   width: auto;

	}
			.card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          border-radius: 5px;
          width: auto;
          margin-left: auto;
          width: fit-content;
          margin-right: auto;
		}
		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}
		.container {
		  padding: 10px 50px;
		}
		#space-h1{
		  padding: 15px 35px 0px 0px;
		}
		.card-space{
		  padding-top: 9vh;
		}
		</style>

</head>
<body>
	<?php include('adminnnav.php'); ?>

	<div class="card-space" >
		<div class="card" style="min-height: 79vh;height: auto;">
	  			<div class="container" style="font-family: 'Poppins', serif">
	  					  		<h1 id="space-h1" style="font-family: 'Poppins', serif" style="padding-left: 0;">OTP Expiry</h1>

	    		<table>
  <tr>
  	<th>id</th>
    <th>otp</th>
    <th>is_expired</th>
    <th>create_at (Y-M-D H:M)</th>
    <th>delete</th>
  </tr>
<?php
$conn = mysqli_connect("localhost","root","","boly");
$run = mysqli_query($conn,"SELECT * FROM otp_expiry");
$total = mysqli_num_rows($run);
?>
<?php
if($total != 0)
{
	while($d = mysqli_fetch_assoc($run))
	{
	?>
	<tr>
    <td><?php echo $d['id']?></td>
    <td><?php echo $d['otp']?></td>
    <td><?php echo $d['is_expired']?></td>
    <td><?php echo $d['create_at']?></td>
    <td>
   <a href="otp_expiry1.php?delete=<?php echo $d['id']; ?>" onclick="return deleteo()">Delete</a>
   </td>
    
  	
<?php
}
?>
</tr>
</table>
<?php
}


if(isset($_GET['delete']))
{
$query1 = "DELETE FROM otp_expiry WHERE id = '".$_GET['delete']."'";
	$r = mysqli_query($conn,$query1);

}


?>
<a href="otp_expiry1.php?delete1=all" onclick="return deleteoo()">Delete All</a>
<script type="text/javascript">
	function deleteo()
	{
		if(confirm("Delete record from the table"))
		{
			return true;
		}
	}
	function deleteoo()
	{
		if(confirm("Delete all records from the table"))
		{
			return true;
		}
	}
</script>
<?php 
if(isset($_GET['delete1']))
{$query2 = "TRUNCATE TABLE otp_expiry";
	$r = mysqli_query($conn,$query2);

}

 ?>
	</div>


	  			</div>
		</div>

		
		<br>

	<!--<footer class="l1">
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
-->
</body>
</html>