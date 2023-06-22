<?php
$host="localhost";
$user="root";
$password="";
$db="uni portal";
$con = mysqli_connect("localhost","root","","uni portal");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

$reg1 = $_GET['reg'];
$sql = "Delete from p_info where RegistrationNumber='$reg1'";
$check = mysqli_query($con, $sql);
if($check)
{
	echo"<script>alert('Record Deleted')</script>";
}
else
{
	echo"<font color = 'red'> Failed to Delete";
}

?>