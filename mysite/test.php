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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Login Form in HTML5 and CSS3</title>
<link rel="stylesheet" a href="login.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>
<body class="bgimg" style="padding-top: 70px">
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> </div>
      </li>
      <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
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
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
