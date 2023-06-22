<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Add</title>
<link href="user.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" a href="login.css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="admin.css" rel="stylesheet" type="text/css">
</head>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">IST Web Portal&nbsp;</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse navbg" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="#https://www.ist.edu.pk/">Home Page <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="#http://my.ist.edu.pk/welcome.asp">Faculty Web Pages</a> </li>
      <li class="nav-item"> <a class="nav-link disabled" href="#">Results</a> </li>
    </ul>
    <form class="form-inline my-lg-0">
      <button type="button" class="btn btn-danger logoutbtn"><a href="login form.html" class="textdecor">Log Out&nbsp;</a>	</button>
    </form>
  </div>
</nav>
<nav class="menu" tabindex="0">
  <div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="IST Logo.png" alt class="logo rounded"/>
    <h2 class="studentsarea">Admin Access&nbsp;&nbsp;</h2>
  </header>
	<ul class="menu-options">
	<li tabindex="0" class="icon-dashboard"><a href="admin_dashboard.html"><span class="textdecor">Dashboard</span></li></a> 
    <li tabindex="1" class="icon-customers"><a href="admin_view1.php"><span class="textdecor">View Students</span></li></a> 
    <li tabindex="2" class="icon-users"><a href="admin_add.html"><span class="textdecor">Add Student Info</span></li></a> 
	<li tabindex="3" class="icon-users"><a href="admin_courses.html"><span class="textdecor">Add/Remove Student Courses</span></li></a> 
	<li tabindex="4" class="icon-users"><a href="admin_results.html"><span class="textdecor">Add/Remove Results</span></li></a> 
	<li tabindex="5" class="icon-users"><a href="admin_attendance.html"><span class="textdecor">Add Attedance Info</span></li></a> 
    <li tabindex="6" class="icon-settings"><a href="admin_edit.html"><span class="textdecor">Edit Student</span></li></a> 
	<li tabindex="7" class="icon-settings"><a href="admin_delete.html"><span class="textdecor">Delete Student</span></li></a> 
  </ul>
</nav>


<html>
<head>
<title>Update Student Data</title>
</head>
<body>
<form action="" method="GET">
<h3 class="p_info">Edit Personal Information</h3>
			<tr>
				<td><input type="text" name="reg" value="<?php echo $_GET['reg'] ?>"	 id="reg"  required class="form-control" placeholder="Registration Number"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" name="name" value="<?php echo $_GET['name'] ?>"	 id="name"  required class="form-control" placeholder="Name"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" name="fname" value="<?php echo $_GET['fname'] ?>" id="fname"required class=" form-control" placeholder="Father's Name"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input  type="text" onkeypress="return /[0-9]/i.test(event.key)" name="admsn_year" value="<?php echo $_GET['admsn_year'] ?>" id="admsn_year" required class="form-control" placeholder="Admission Year"  aria-describedby="contentaddon1"</td>
			</tr>
			<tr>
				<td><input type="text" name="batch" value="<?php echo $_GET['batch'] ?>" id="batch" required class="form-control" placeholder="Batch"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" name="program" value="<?php echo $_GET['program'] ?>" id="program" required class="form-control" placeholder="Program"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" onkeypress="return /[0-9]/i.test(event.key)" class="form-control" name="mobile" value="<?php echo $_GET['mobile'] ?>" id="mobile" required placeholder="Mobile"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" name="address" value="<?php echo $_GET['address'] ?>" required class="form-control" id="address" placeholder="Address"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="date" name="dob" value="<?php echo $_GET['dob'] ?>" id="dob" required class="form-control date" placeholder="Date of Birth"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
    			<td>  <input type="submit" name="submit" value="Update" id="submit" class="btn btn-success submit"/></td>
   			</tr>
		</table>
	</form>
</body>
</html>

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
error_reporting(0);	  
	 $_GET['reg'];
	 $_GET['name'];
	 $_GET['fname'];
	 $_GET['admsn_year'];
	 $_GET['batch'];
	 $_GET['program'];
	 $_GET['mobile'];
	 $_GET['address'];
	 $_GET['dob'];

if($_GET['submit'])
{
	 $reg1 = $_GET['reg'];
	 $name1 = $_GET['name'];
	 $fname1 = $_GET['fname'];
	 $admsn_year1 = $_GET['admsn_year'];
	 $batch1 = $_GET['batch'];
	 $program1 = $_GET['program'];
	 $mobile1 = $_GET['mobile'];
	 $address1 = $_GET['address'];
	 $dob1 = $_GET['dob'];
	
	$sql = "update p_info set Name='$name1', F_name='$fname1', Admsn_year='$admsn_year1', Batch='$batch1', Program='$program1', Mobile='$mobile1', DOB='$dob1' WHERE RegistrationNumber='$reg1'";
	
	$check = mysqli_query($con, $sql);
	if ($check)
	{
		echo "<font color='blue'>Changes Saved";
	}
	else
	{
		echo "Record Not Updated";
	}
	
}
else
{
	echo "<font color='blue'> Click the Update Button to save changes";
}
	  
?>

