<!DOCTYPE html>
<html>
<head>
	<title>Sign in form</title>
</head>
<style type="text/css">
	body{
		background-image: url(doctor.jpg);
		 background-repeat: no-repeat;
  background-size: 700px 700px;


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
	input[type='checkbox']{
		background-color:blue;
		color: white;
		border-radius: 30px;
		font-size: 40px;
	}
input[type='submit']:hover,a:hover{
		background-color:brown;
		color: white;
		margin-bottom:20px;
	}
	input:hover;a:hover{
		border-color: brown;
	}
	h1{
		background-color: gray;
		color: white;
		text-align: center;
	}
	table{
		margin-left: 300px;
		text-align: center;
	}
	h3{
		border-bottom: 10px double blue;
	}
	.back{
		text-align:right;
	}
</style>
<body>
	<h1>Welcome To Our  &nbsp;System</h1>
<form method="post" action="registration.php">
<fieldset>
	<h3>Registration Form</h3>
	<div class="data">
		User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" placeholder="Insert user name"required><br><br>
		Email Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Email" name="Email" placeholder="Insert your Email Address"><br>

	Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="password" placeholder="Insert your password"required><br>

	 <table>
	 	<tr>
	 		<td>Status:</td>
	 		<td><input type="radio" name="Status" value="d"required>Doctor<br>
	 			<input type="radio" name="Status" value="p"required>Patient<br>
	 			<input type="radio" name="Status" value="a"required>Admin
	 		</td>
	 	</tr>
	 	<td>Gender:</td>
	 		<td><input type="radio" name="gender" value="m"required>Male<br>
	 			<input type="radio" name="gender" value="f"required>Female
	 		</td>
	 	</tr>
	 </table>
	</div>
<div class="submit"><input type="submit" name="submit" value="Sign In"><br></div>
<div class="back"><a href="http://localhost/diabetes/login.php">Back</a></div>
</fieldset>
</form>
</body>
</html>