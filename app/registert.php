<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="footer.css">
		<style type="text/css">
			td, th{
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
	   	   margin-left: auto;
	   	   margin-right: auto;

	}
			.card {
           box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          border-radius: 5px;
          width: auto;
          margin-left: 2.5vw;
          width: fit-content;
          margin-right: 2.5vw;
		}
		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}
		.container {
		  padding: 10px 10px;
		}
		#space-h1{
		  padding: 15px 35px 0px 0px;
		}
		.card-space{
		  padding-top: 9vh;
		}
		</style>

</head>

	<?php include('adminnnav.php'); ?>
<body style="overflow-x: auto;">
	<div class="card-space">
		<div class="card" style="min-height: 79vh;height: auto;overflow-x: scroll;">
	  			<div class="container" style="font-family: 'Poppins', serif">
	  					  		<h1 id="space-h1" style="font-family: 'Poppins', serif" style="padding-left: 0;">Register</h1>
<div style="min-height: 79vh;">
	    		<table>
  <tr>
  	<th>first name</th>
    <th>last name</th>
    <th>date of birth <br>&nbsp (Y-M-D)</th>
    <th>age</th>
    <th>gender</th>
    <th>email id</th>
    <th>password</th>
    <th>mobile</th>
    <th>address</th>
    <th>security question</th>
    <th>bid type</th>
    <th>alternate address</th>
    <th>delete</th>
  </tr>
<?php
$conn = mysqli_connect("localhost","root","","boly");
$query = "SELECT * FROM register";
$run = mysqli_query($conn,$query);
$total = mysqli_num_rows($run);
if($total != 0)
{
	while($d = mysqli_fetch_assoc($run))
	{
	?>
	<tr>
	<td><?php echo $d['fname']?></td>
    <td><?php echo $d['lname']?></td>
    <td><?php echo $d['dob']?></td>
    <td><?php echo $d['age']?></td>
    <td><?php echo $d['gender']?></td>
    <td><?php echo $d['email']?></td>
    <td><?php echo $d['pass']?></td>
    <td><?php echo $d['mno']?></td>
    <td><?php echo $d['ad']?></td>
    <td><?php echo $d['sq']?></td>
    <td><?php echo $d['bd']?></td>
    <td><?php echo $d['ald']?></td>
    <td>
   <a href="registert.php?delete=<?php echo $d['email']; ?>" onclick="return deleteo()">Delete</a>
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
	$query1 = "DELETE FROM register WHERE email = '".$_GET['delete']."'";
	$r = mysqli_query($conn,$query1);

}


?>
<a href="registert.php?delete1=all" onclick="return deleteoo()" style="margin-left: 2%;">Delete All</a>
</div>
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
	$query2 = "TRUNCATE TABLE register";
	$r = mysqli_query($conn,$query2);

}

 ?>
	</div>


	  			</div>
		</div>

		<br>

	<!--<footer class="l1" style="position: fixed;bottom: 0;width: 100%;padding-left: 0;">
			<div class="fp" style="">
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