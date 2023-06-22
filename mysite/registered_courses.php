<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="user.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" a href="login.css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
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
      <button type="button" class="btn btn-danger logoutbtn"><a href="login form.html">Log Out&nbsp;</a></button>
    </form>
  </div>
</nav>
	<body style="padding-top: 70px">
<nav class="menu" tabindex="0">
  <div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="IST Logo.png" alt class="logo rounded"/>
    <h2 class="studentsarea">Students Area&nbsp;</h2>
  </header>
	<ul class="menu-options">
	<li tabindex="0" class="icon-dashboard"><a href="dashboard.php"><span class="textdecor">Dashboard</span></li></a> 
    <li tabindex="1" class="icon-customers"><a href="p_info.php"><span class="textdecor">Student Profile</span></li></a> 
    <li tabindex="2" class="icon-users"><a href="attendance.php"><span class="textdecor">Attendance</span></li></a> 
	<li tabindex="3" class="icon-users"><a href="fee_info.php"><span class="textdecor">Fee Details</span></li></a> 
	<li tabindex="4" class="icon-users"><a href="registered_courses.php"><span class="textdecor">Registered Courses</span></li></a> 
	<li tabindex="5" class="icon-users"><a href="active_courses.php"><span class="textdecor">Active Courses</span></li></a> 
    <li tabindex="6" class="icon-settings"><a href="sessional_results.php"><span class="textdecor">Sessional Result</span></li></a> 
	<li tabindex="7" class="icon-settings"><a href="semester_result.php"><span class="textdecor">Semester Result</span></li></a> 
  </ul>
</nav>
</body>
	
<div style="right: 800;">		
<br><br><br>
<h1>Registered Courses</h1>
<br>
<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

	
	

$con = mysqli_connect("localhost","root","","uni portal");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

#mysqli_select_db("uni portal", $con);
  session_start();
 $rl=$_SESSION['regi'];
$qu="SELECT * FROM courses Where RegistrationNumber='$rl'";
$result = mysqli_query($con,$qu);

 

echo "<table border='1'>

<tr>

<th> Registration Number </th>
<th> Session</th>
<th> Semester</th>
<th> Course ID </th>
<th> Registration Date</th>
<th> Status</th>
</tr>";

 
while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";
  echo "<td>" . $row['RegistrationNumber'] . "</td>";
  echo "<td>" . $row['Session'] . "</td>";
  echo "<td>" . $row['Semester'] . "</td>";
  echo "<td>" . $row['Course_id'] . "</td>";
  echo "<td>" . $row['Reg_date'] . "</td>";
  echo "<td>" . $row['Status'] . "</td>";
  echo "</tr>";
  }

echo "</table>";

 

mysqli_close($con);

?>
	</div>

</body>

</html>
