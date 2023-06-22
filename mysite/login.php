<?php 

$host="localhost";
$user="root";
$password="";
$db="uni portal";

$con=mysqli_connect($host,$user,$password,$db);
echo $_POST['reg'];
echo $_POST['Password'];
echo $_POST['entry'];
$regi=$_POST['reg'];
$ri=$regi;

if(isset($_POST['reg'])){
    
    $ureg=$_POST['reg'];
    $password=$_POST['Password'];
	$usertype=$_POST['entry'];
	session_start();
	$_SESSION['regi']=$_POST['reg'];
    
    $sql="select * from logininfo where RegistrationNumber='".$ureg."' AND Password='".$password."' AND user_type='".$usertype."'";
		
	$result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1)
	{
		if ($_POST['entry']=='Student')
		{
			header("location:..//mysite/dashboard.php");
			//echo " You Have Successfully Logged in as a Student";
		}
		else if ($_POST['entry']=='Admin')
		{
			header("location:..//mysite/admin_dashboard.html");
			//echo " You Have Sucessfully Logged in as an Administrator";
		}
       exit();
    }
    else{
        header("location:..//mysite/invalidinfo.php");
        exit();
    }
        
}
?>

