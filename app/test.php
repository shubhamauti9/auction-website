<!DOCTYPE html>
<html>
<head>
	<title>Boly</title>
	<style type="text/css">
		a
	{
		color: blue;
	}
	a:hover
	{
		color:red;
	}

	</style>
</head>
<body>
	<?php
		error_reporting(0);
		
		$conn = mysqli_connect("localhost","root","","boly");

		if($conn === false)
		{
	    	die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		$email = $_POST['email'];
		$mno = $_POST['mno'];

		$dupquery1 = "SELECT email FROM register WHERE email='$email' ";
		$duplicate1 = mysqli_query($conn,$dupquery1);
		$count1=mysqli_num_rows($duplicate1);

		$dupquery2 = "SELECT mno FROM register WHERE mno='$mno' ";
		$duplicate2 = mysqli_query($conn,$dupquery2);
		$count2=mysqli_num_rows($duplicate2);

		if($count1 > 0)
		{
			?>
			<div align="center">
			<h1 ><?php echo $email ." ". "already exsist use another EmailId" ?></h1>
			<a href="javascript:history.go(-1)">go to form</a> 
			<a href="homepage.html">go to home page</a>	
			</div>
		<?php
		}
		elseif($count2>0)
		{
			?>
			<div align="center">
			<h1><?php echo $mno ." ". "already exsist use another mobile number" ?></h1>
			<a href="javascript:history.go(-1)">go to form</a> 
			<a href="homepage.html">go to home page</a>	
			</div>
			<?php
		}
		else
		{
			include("1.php");
		}
	?>
</body>
</html>
