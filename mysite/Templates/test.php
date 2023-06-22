<?php 

$host="localhost";
$user="root";
$password="";
$db="uni portal";

mysqli_connect($host,$user,$password,$db);


if(isset($_POST['Registration Number'])){
    
    $ureg=$_POST['Registration Number'];
    $password=$_POST['Password'];
    
    $sql="select * from logininfo where RegistrationNumber='".$ureg."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="image/login.png"/>
		<form>
			<div class="form-input">
				<input type="text" name="text" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>


