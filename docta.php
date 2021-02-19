<?php
session_start();
require_once "connection.php";

$message="";
$status="";
if (isset($_POST["loginD"])) {
	$username=$_POST["username"];
	$password=$_POST["password"];
 $query="SELECT * FROM `registration` WHERE username='$username' AND password='$password'";
 $result=mysqli_query($conn,$query);
 if (mysqli_num_rows($result)>0) 
 {
 	while ($row=mysqli_fetch_assoc($result)) 
 	{
 	 if ($row["status"]=="d") 
 	 {
 	 	$_SESSION['loginD']=$row["username"];
 	 	header('location:diabet.php');
 	 }
 	 elseif ($row["status"]=="a")  
 	 { 
 	 	$_SESSION['loginD']=$row["username"];
 	 	header('location:dashboard.php');
 	 	
 	 }
 	 elseif ($row["status"]=="p") {
 	 		 	$_SESSION['loginD']=$row["username"];
 	 		 		header('location:Info.php');
 	 }
 	}

 }
 else {
 	$message="Invalid username or password";
 	header("location:login.php");
 }
}

?>