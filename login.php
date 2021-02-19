<?php
include "docta.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
</head>
<style type="text/css">
	body{
		background-image: url(doctor2.jpg);
		 background-repeat: no-repeat;
  background-size: 700px 800px;


	}
	form{
		background-color:#678999;
		border: 20px;
		border-color:blue;
		font-size: 30px;
		padding: 10px;
		border-radius: 3px;
		width: 800px;
		margin: 0 auto;
		color: white;
		margin-top: 50px;
		text-align: center;
		margin-right: 30px;
	}
	.sign{
		margin-left: 600px;
		background-color: white;
		margin-right: 30px;
		text-align: center;
	}
	input{
		font-size:20px;

	}

	input[type='submit']{
		background-color:blue;
		color: white;
		border-radius: 30px;
		font-size: 40px;
	}
input[type='submit']:hover,a:hover{
		background-color:brown;
		color: white;
		margin-bottom: 20px;
		cursor: pointer;

	}
	input:hover;a:hover{
		border-color: brown;
	}
	h1{
		background-color: gray;
		color: white;
		text-align: center;
	}
	.msg{
		text-align: center;
		color: red;
		background-color:black;
		margin: 0 auto;
	}
.back{
	text-align: right;
}
.back:hover,a:hover{
	text-decoration: none;
	cursor: pointer;


}
</style>
<body>
	<h1>Diabetes prediction Login Form</h1>
<form method="post" action="docta.php">
	<div class="sign"> <a href="http://localhost/diabetes/signin.php"> Sign In</a> </div><br>
	<div class="data">
		User Name:&nbsp;&nbsp;<input type="text" name="username" placeholder="Insert user name"><br><br>
	Password:&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="password" placeholder="Insert your password"><br><br>
	</div>
	<div>
		<p class="msg">
		<?php
		echo $message;

		?>
	</p>
	</div>
<div class="submit"><input type="submit" name="loginD" value="Login"></div>
<div><h4>Forgot password <a href="http://localhost/diabetes/reset.php">reset</a></h4>
 </div>
<div class="back"><a href="http://localhost/diabetes"> Back</a></div>
</form>

<?php
include('db.php');
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,
  "SELECT * FROM `registration` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="http://localhost/diabetes/index.php">
Click here</a> to reset password.</p>';
 }else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
  ?>
  <br />
  <form method="post" action="" name="update">
  <input type="hidden" name="action" value="update" />
  <br /><br />
  <label><strong>Enter New Password:</strong></label><br />
  <input type="password" name="pass1" maxlength="15" required />
  <br /><br />
  <label><strong>Re-Enter New Password:</strong></label><br />
  <input type="password" name="pass2" maxlength="15" required/>
  <br /><br />
  <input type="hidden" name="email" value="<?php echo $email;?>"/>
  <input type="submit" value="Reset Password" />
  </form>
<?php
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  } 
} // isset email key validate end
 
 
if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
$pass1 = md5($pass1);
mysqli_query($con,
"UPDATE `users` SET `password`='".$pass1."', `trn_date`='".$curDate."' 
WHERE `email`='".$email."';"
);
 
mysqli_query($con,"DELETE FROM `registration` WHERE `email`='".$email."';");
 
echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="http://localhost/diabetes/login.php">
Click here</a> to Login.</p></div><br />';
   } 
}
?>


</body>
</html>