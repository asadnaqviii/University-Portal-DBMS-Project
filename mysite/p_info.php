<html>
<link href="user.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" a href="login.css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<head>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">IST Web Portal&nbsp;</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse navbg" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="#https://www.ist.edu.pk/">Home Page <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="#http://my.ist.edu.pk/welcome.asp">Faculty Web Pages</a> </li>
      <li class="nav-item"> <a class="nav-link disabled" href="#">Results</a> </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button type="button" class="btn btn-danger logoutbtn"><a href="login form.html">Log Out&nbsp;</a>	</button>
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
<div style="right: 800;">		
<br><br><br>
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
$qu="SELECT * FROM p_info Where RegistrationNumber='$rl' ";
$result = mysqli_query($con,$qu);

 

echo "<table border='1'>

<tr>

<th>  Name </th>
<th>  Father Name  </th>
<th>  Registration Number  </th>
<th>  Adminssion Year  </th>
<th>  Batch  </th>
<th>  Program  </th>
<th>  Mobile  </th>
<th>  Address  </th>
<th>  Date of Birth  </th> 

</tr>";

 

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

  }

echo "</table>";

 

mysqli_close($con);

?>
	</div>

</body>

</html>