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
<div style="right: 800;">		
<br><br><br>
	<br>
<h1>Student Detail:</h1>
<br>
<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>
<?php
error_reporting(0);
$host="localhost";
$user="root";
$password="";
$db="uni portal";
$con = mysqli_connect("localhost","root","","uni portal");
if(count($_POST)>0) {
$reg=$_POST[reg];
$result = mysqli_query($con,"SELECT * FROM p_info Where RegistrationNumber = $reg");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<th>  Name </th>
<th>  Father Name  </th>
<th>  Registration Number  </th>
<th>  Admission Year  </th>
<th>  Batch  </th>
<th>  Program  </th>
<th>  Mobile  </th>
<th>  Address  </th>
<th>  Date of Birth  </th> 
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>aa
	

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['F_name'] . "</td>";
  echo "<td>" . $row['RegistrationNumber'] . "</td>";
  echo "<td>" . $row['Admsn_year'] . "</td>";
  echo "<td>" . $row['Batch'] . "</td>";
  echo "<td>" . $row['Program'] . "</td>"; 
  echo "<td>" . $row['Mobile'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
  echo "<td>" . $row['DOB'] . "</td>";

  echo "</tr>";

$i++;
}
?>
	

</table>
</body>
</html>