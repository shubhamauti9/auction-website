<?php 
$conn = mysqli_connect('localhost','root','','boly');
if($conn == true)
{
	if(isset($_POST['query']))
	{
		$inp = $_POST['query'];
		$query = "SELECT name FROM product WHERE name LIKE '%$inp%'";
		$r = mysqli_query($conn,$query);
		if(mysqli_num_rows($r) > 0)
		{
			while ($row = mysqli_fetch_assoc($r)) 
			{
				echo"<a href='#'' style='text-decoration:none;color:black;'>".$row['name']."</a><br>";
			}
		}
		else
		{
			echo"<p>No record</p>";
		}
	}
}
else
{
	echo"noconnection";
}
?>