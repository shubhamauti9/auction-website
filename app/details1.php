<?php
session_start();
$fa=array();
$fa=$_SESSION['fc'];
//unset($_SESSION['fc']);
if(isset($_POST['bsubmit']))
{
if($_POST['bsubmit'] == 1)	
{
print_r($fa[1]);
}
}
else
{
echo "hello";
}
?>