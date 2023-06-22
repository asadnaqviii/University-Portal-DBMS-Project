<?php
$host="localhost";
$user="root";
$password="";
$db="uni portal";
$con = mysqli_connect("localhost","root","","uni portal");

		$reg = $_POST['reg'];
		$course_id = $POST['course_id'];
		$total_lectures = $POST['total_lectures'];
		$days_present = $POST['days_present'];
		$days_absent = $POST['days_absent'];


$sql = "INSERT INTO attendance(RegistrationNumber, Course_id, Total_lectures, Days_present, Days_absent) VALUES ('$reg','$course_id','$total_lectures','$days_present','$days_absent')";
		
$result = mysqli_query($con, $sql);

	
if ($result){
	header("?msg=New Record Created Sucessfully");
}
else{
	echo "Failed " .mysqli_error($con);
}
?>
	
	
