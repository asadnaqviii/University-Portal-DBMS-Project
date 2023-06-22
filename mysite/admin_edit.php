<?php
echo "test";
$id=$_REQUEST['RegistrationNumber'];
echo $id;
?>

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
<form>
<h3 class="p_info">Edit Personal Information</h3>
			<tr>
				<td><input type="text" name="name" 	 id="name" required class="form-control" placeholder="Name"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" name="fname" id="fname"required class=" form-control" placeholder="Father's Name"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input  type="text" onkeypress="return /[0-9]/i.test(event.key)" name="admsn_year" id="admsn_year" required class="form-control" placeholder="Admission Year"  aria-describedby="contentaddon1"</td>
			</tr>
			<tr>
				<td><input type="text" name="batch" id="batch" required class="form-control" placeholder="Batch"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" name="program" id="program" required class="form-control" placeholder="Program"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" onkeypress="return /[0-9]/i.test(event.key)" class="form-control" name="mobile" id="mobile" required placeholder="Mobile"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="text" name="address" required class="form-control" id="address" placeholder="Address"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
				<td><input type="date" name="dob" id="dob" required class="form-control date" placeholder="Date of Birth"  aria-describedby="contentaddon1"></td>
			</tr>
			<tr>
    			<td>  <input type="submit" value="Update" id="submit" class="btn btn-success submit"/></td>
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

$id=$_REQUEST['RegistrationNumber'];
echo $id;


//echo $_REQUEST['RegistrationNumber'];
echo "test print";
if(count($_POST)>0) {
mysqli_query($con,"UPDATE p_info set Name='" . $_POST['name'] . "', F_name='" . $_POST['fname'] . "', RegistrationNumber='" . $_POST['RegistrationNumber'] . "', Admsn_year='" . $_POST['admsn_year'] . "' ,Batch='" . $_POST['batch'],"' ,Program='" . $_POST['program']  . "', Mobile='" . $_POST['mobile']  . "', Address='" . $_POST['address']  . "', DOB='" . $_POST['dob']  . "' WHERE RegistrationNumber='" . $_POST['reg'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM p_info WHERE RegistrationNumber='" . $_GET['RegistrationNumber'] . "'");
$row= mysqli_fetch_array($result);
?>