<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<style type="text/css">
	body{
		background-image: url(adm.jpg);
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
	}
	input:hover;a:hover{
		border-color: brown;
	}
	h1{
		background-color: gray;
		color: white;
		text-align: center;
	}
</style>
<body>
	<h1>gara dashboard jijjiiramu qaba.</h1>
<form method="POST" action="">

	<div class="data">
		User Name&nbsp;&nbsp;<input type="text" name="text" placeholder="Insert user name"><br><br>
	Password&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="Password" placeholder="Insert your password"><br><br>
	</div>
<div class="submit"><input type="submit" name="submit" value="Login"></div>
</form>
</body>
</html>