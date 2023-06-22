<?php 

$host="localhost";
$user="root";
$password="";
$db="uni portal";

$con=mysqli_connect($host,$user,$password,$db);
echo $_POST['reg'];
echo $_POST['Password'];
echo $_POST['entry'];

if(isset($_POST['reg'])){
    
    $ureg=$_POST['reg'];
    $password=$_POST['Password'];
	$usertype=$_POST['entry'];
	
    
    $sql="select * from logininfo where RegistrationNumber='".$ureg."' AND Password='".$password."' AND user_type='".$usertype."'";
		
	$result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1)
	{
		if ($_POST['entry']=='Student')
		{
			echo " You Have Successfully Logged in as a Student";
		}
		else if ($_POST['entry']=='Admin')
		{
			echo " You Have Sucessfully Logged in as an Administrator";
		}
       exit();
    }
    else{
        echo " Invalid Credentials!";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="login.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body class="bgimg">
<div class="container">
	
  <img src="ist.jpg" alt class="logo"/>
	<form action="login.php" method="post">
			<div class="form-input ">
				<input name="reg" type="text" class="reg" id="reg" placeholder="Registration Number" />	
			</div>
			<div class="form-input">
				<input type="Password" name="Password" id="Password" placeholder="Password" />
			</div>
			<div class="form-input">
				<label class="usertype">User Type:&nbsp; </label>
				<select name="entry" id="entry"class="selecttype"> 
				  <option value="">Select</option>
					<option value="Student"> Student</option>
					<option value="Admin"> Admin</option>
				</select>
			</div>
			<input type="submit" value="LOGIN" class="btn-login"/>
			
  </form>
</div>
</body>
</html>
