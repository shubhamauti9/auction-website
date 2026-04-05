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
	   margin-left: 2%;
	}
		</style>

</head>
<body>
	<?php include('adminnnav.php'); ?>
	<div style="min-height: 79vh;">
		
		<h2 style="text-align: center; color: red">register</h2>
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
	if($r == true)
	{
		header('location:registert.php');
	
	}
}


?>
<a href="registert.php?delete1=all" onclick="return deleteoo()">Delete All</a>
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
	if($r == true)
	{
		header('location:registert.php');
	
	}
}

 ?>
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

</body>
</html>