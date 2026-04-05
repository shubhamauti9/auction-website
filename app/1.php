<html>
<head>
<title>Your Details</title>
<style>
	th
	{
		background-color: #212529;
		color:white;
	}
	td
	{
		color:#808080;
	}
	td,th
	{
		text-align: left;
		font-size: 16px;
		padding: 8px;
	}
	
	tr:nth-child(odd) 
	{
	    background-color: #f5f5f5;
	}

	table 
	{
		border-radius: 10px;
		border:1px solid rgba(0,0,0,0.4);
		border-collapse: collapse;
	}
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

<h1 align="center" style="color: red">Welcome <?php echo$_POST['fname']." ". $_POST['lname']; ?></h1>
<h2 align="center" style="color: red">Your Details</h2>

<table align="center" cellspacing="0">
<tr>
<th>Information</th>
<th>Response</th>
</tr>
<tr>
<td>First Name</td>
<td><?php echo $_POST['fname']; ?></td>
</tr>

<tr>
<td>Last Name</td>
<td><?php echo $_POST['lname']; ?></td>
</tr>

<tr>
<td>Date Of Birth (yyyy-mm-dd)</td>
<td><?php echo $_POST['dob']; ?></td>
</tr>

<tr>
<td>Age</td>
<td><?php echo $_POST['age']; ?></td>
</tr>

<tr>
<td>Gender</td>
<td><?php echo $_POST['gender']; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo $_POST['email']; ?></td>
</tr>

<tr>
<td>Password</td>
<td><?php echo md5($_POST['password']); ?></td>
</tr>

<tr>
<td>Mobile.No</td>
<td><?php echo $_POST['mno']; ?></td>
</tr>

<tr>
<td>Address</td>
<td><?php echo $_POST['address']; ?></td>
</tr>

<tr>
<td>Security Question(Your First School)</td>
<td><?php echo $_POST['sq']; ?></td>
</tr>

<tr>
<td>Interested Bid Type</td>
<td><?php echo $_POST['bidlist']; ?></td>
</tr>

<tr>
<td>Alternate Address</td>
<td><?php echo $_POST['budget']; ?></td>
</tr>
</table>
<center><a href="homepage.html" >go to home page</a></center>
	
<?php


include('2.php');

?>
</body>
</html>

