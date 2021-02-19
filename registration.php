<?php
$username=$_POST['username'];
$email=$_POST['Email'];
$password=$_POST['password'];
$status=$_POST['Status'];
$gender=$_POST['gender'];
if (!empty($username) || !empty($email) || !empty($password) || !empty($status) || !empty($gender)) {
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="diabetes";
	$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
	if (mysqli_connect_error()){
		die('connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else {
		$SELECT="SELECT  email FROM registration WHERE  email=? limit 1";
		$INSERT="INSERT INTO registration (username,email,password,status,gender) value(?,?,?,?,?)";
		//prepare statement
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		if ($rnum==0) {
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("sssss",$username,$email,$password,$status,$gender);
			$stmt->execute();
			echo 'registration is completed successfully!';
			
		}
		else {
			echo 'some one already registerd using this email. please, Change your email address ';
		}
		$stmt->close();
		$conn->close();

	}
}
else {
	echo 'All field is required!';
	die();
}
?>
