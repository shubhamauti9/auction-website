<?php

$conn = mysqli_connect("localhost","root","","boly");
$query = "DELETE FROM product WHERE pid = '".$_POST['delete']."'";
$r = mysqli_query($conn,$query);
if($r == true)
{
	header('location:unsellp.php');
}


?>