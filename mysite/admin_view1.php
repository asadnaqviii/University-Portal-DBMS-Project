

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
    <li tabindex="6" class="icon-settings"><a href="admin_view1.php"><span class="textdecor">Edit/Delete Student</span></li></a> 
  </ul>
</nav>
<body>
	<div class="container containersearch">
			   <h3 class="search">Search Student by Registration Number&nbsp;</h3>
		<form class="form-inline"  action="admin_view.php" method="POST">
    		<input type="text" name="reg" required	 id="reg" onkeypress="return /[0-9]/i.test(event.key)" class="form-control search1" placeholder="Search by Reg No...">
   		 	<button type="submit" name="save" class="btn btn-primary searchbox">Search</button>
  		</form>
	  		
</div>
	<div class="container">
			   <h3 class="search">Display Student Info&nbsp;</h3>
		
<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

		<body bgcolor="#EEFDEF">
		<?php

$con = mysqli_connect("localhost","root","","uni portal");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }


#mysqli_select_db("uni portal", $con);
  session_start();
$qu="SELECT * FROM p_info";
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
<th>  Edit  </th>
<th>  Delete  </th>

</tr>";
?>
 <?php
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>
				<td>".$row['Name']." </td>
				<td>".$row['F_name']." </td>
				<td>".$row['RegistrationNumber']." </td>
				<td>".$row['Admsn_year']." </td>
				<td>".$row['Batch']." </td>
				<td>".$row['Program']." </td>
				<td>".$row['Mobile']." </td>
				<td>".$row['Address']." </td>
				<td>".$row['DOB']." </td>
				<td><a href='admin_edit2.php?reg=$row[RegistrationNumber]&name=$row[Name]&fname=$row[F_name]&admsn_year=$row[Admsn_year]&batch=$row[Batch]&program=$row[Program]&mobile=$row[Mobile]&address=$row[Address]&dob=$row[DOB]'>Edit</a></td>
				<td><a href='admin_delete.php?reg=$row[RegistrationNumber]&name=$row[Name]&fname=$row[F_name]&admsn_year=$row[F_name]&batch=$row[Batch]&program=$row[Program]&mobile=$row[Mobile]&address=$row[Address]&dob=$row[DOB]'>Delete</a></td>
				
				</tr>";
			}
			
			
			/*$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["Name"]; ?></td>
		<td><?php echo $row["F_name"]; ?></td>
		<td><?php echo $row["RegistrationNumber"]; ?></td>
		<td><?php echo $row["Admsn_year"]; ?></td>
		<td><?php echo $row["Batch"]; ?></td>
		<td><?php echo $row["Program"]; ?></td>
		<td><?php echo $row["Mobile"]; ?></td>
		<td><?php echo $row["Address"]; ?></td>
		<td><?php echo $row["DOB"]; ?></td>
		<td><a href="admin_edit2.php?reg=$row['RegistrationNumber']&name=$row['Name']&fname=$row['F_name']&admsn_year=$row['F_name']&batch=$row['Batch']&program=$row['Program']&mobile=$row['Mobile']&address=$row['Address']&dob=$row['DOB']">Edit</a></td>
		<td><a href="admin_delete.php?id=<?php echo $row["RegistrationNumber"]; ?>">Delete</a></td>
      </tr>
			<?php
			$i++;
			}
					mysqli_close($con);
?>
			
<?php
			//reg=$row['RegistrationNumber']&name=$row['Name']&fname=$row['F_name']&admsn_year=$row['F_name']&batch=$row['Batch']&program=$row['Program']&mobile=$row['Mobile']&address=$row['Address']&dob=$row['DOB']">Edit</a></td>
/*while($row = mysqli_fetch_array($result))

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
  //echo "<td> <a href='admin_edit'> echo $row["RegistrationNumber"]>Edit</a>;
  
  echo "<td>  <input type='button' class='edit_button'  value='Edit' </td> " ;
  echo "<td> <input type='button' class='delete_button'  value='Delete' </td> " ;

  }

echo "</table>";*/

 

mysqli_close($con);

?>
    		
  		</form>
	  	
	
</body>
</html>