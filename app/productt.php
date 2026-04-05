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
	  					  		<h1 id="space-h1" style="font-family: 'Poppins', serif" style="padding-left: 0;">Product</h1>
<table>
  <tr>
  	<th>image</th>
    <th>product id</th>
    <th>name</th>
    <th>description</th>
    <th>base amount</th>
    <th>current amount</th>
    <th>seller</th>
    <th>buyer</th>
    <th>end date (Y-M-D H:M:S)</th>
    <th>bid type</th>
    <th>delete</th>
  </tr>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","boly");
$query = "SELECT * FROM product";
$run = mysqli_query($conn,$query);
$total = mysqli_num_rows($run);
if($total != 0)
{
	while($d = mysqli_fetch_assoc($run))
	{
	?>
	<tr>
	<td><a href="<?php echo $d['img']?>"><img src="<?php echo $d['img']?>" width="100px" height="100px"></a></td>
    <td><?php echo $d['pid']?></td>
    <td><?php echo $d['name']?></td>
    <td><?php echo $d['des']?></td>
    <td><?php echo $d['bamount']?></td>
    <td><?php echo $d['camount']?></td>
    <td><?php echo $d['seller']?></td>
    <td><?php echo $d['buyer']?></td>
    <td><?php echo $d['edate']?></td>
    <td><?php echo $d['bd']?></td>
    <td>
   <a href="productt.php?delete=<?php echo $d['pid']; ?>" onclick="return deleteo()" onclick="window.location.reload(true);">Delete</a>
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
	$query1 = "DELETE FROM product WHERE pid = '".$_GET['delete']."'";
	$r = mysqli_query($conn,$query1);
	if($r == true)
	{
		header('location:productt.php');

	
	}
}


?>
<a href="productt.php?delete1=all" onclick="return deleteoo()">Delete All</a>
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
{
	$query2 = "TRUNCATE TABLE product";
	$r = mysqli_query($conn,$query2);
	if($r == true)
	{
		header('location:productt.php');
	
	}
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