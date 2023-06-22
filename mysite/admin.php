<?php

/*$host="localhost";
$user="root";
$password="";
$db="uni portal";
$con = mysqli_connect("localhost","root","","uni portal");

$sql = "INSERT INTO logininfo(RegistrationNumber,Password,user_type) VALUES ('200901072','123', 'Student')";
		
$result = mysqli_query($con, $sql);
*/
//echo "button clicked";
$host="localhost";
$user="root";
$password="";
$db="uni portal";
$con = mysqli_connect("localhost","root","","uni portal");
$var_sd="Student";

//if (isset($_POST['submit'])){
		$reg = $_POST['reg'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $admsn_year = $_POST['admsn_year'];
		$batch = $_POST['batch'];
		$program = $_POST['program'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$dob = $_POST['dob'];
	
echo $name;
echo $fname;
echo $dob;
//}
if($reg.is_numeric() && $admsn_year.is_numeric() && $mobile.is_numeric() ){

$sql = "INSERT INTO logininfo(RegistrationNumber,Password,user_type) VALUES ('$reg','$password','Student')";
$sql1 = "INSERT INTO p_info(Name, F_name, RegistrationNumber, Admsn_year, Batch, Program, Mobile, Address, DOB) VALUES ('$name','$fname', '$reg','$admsn_year','$batch','$program','$mobile','$address','$dob')";
		
$result = mysqli_query($con, $sql);
$result1 = mysqli_query($con, $sql1);
	
if ($result && $result1){
	header("?msg=New Record Created Sucessfully");
	echo "test_if";
}
else{
	echo "Failed " .mysqli_error($con);
	echo "test";
}
	
	
}
else{
	
	echo "you have entered wrong char!";
}
?>

    	
