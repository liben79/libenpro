
<!DOCTYPE html>
<html>
<head>
	<title>diabet test prediction</title>
</head>
<style type="text/css">
	body{
		background-image: url(doctor1.jpg);
		 background-repeat: no-repeat;
  background-size: 500px 700px;
  margin-top: 10px;


	}
h1{
	
		margin: 0 auto;
		background-color: gray;
		color: white;
		font-size: 30px;
		padding: 10px;
		margin-bottom: 20px;
		margin-top: 40px;
		text-align: center;
}
	form{
		background-color:#678999;
		border: 20px;
		border-color:blue;
		font-size: 30px;
		padding: 10px;
		border-radius: 3px;
		width: 1000px;
		margin: 0 auto;
		color: white;
		margin-right: 20px;
	}
	
	input{
		font-size: 20px;
	}


input[type='submit']{
	margin-left: 20px;
	font-size: 30px;
	color: white;
	border-radius: 10px;
	background-color: blue;
}
input[type='submit']:hover,a:hover{
	background-color: brown;
	margin-bottom: 20px;
}
.logout{
	text-align: right;
	font-size: 30px;
	border-radius: 60px;
	text-decoration: none;
	border:5px white;
}
.logout:hover, a:hover{
	color: white;
	text-decoration: none;
	margin-bottom: 20px;
	border-radius: 60px;
}
</style>
<body>
<h1>Diabet test prediction project</h1>
<form method="POST" action="">
	<h2>Input your dataset for diabetes patient prediction</h2>
<div class="name">
	Frist Name:<input type="text" name="pregnancies">
 &nbsp&nbsp &nbsp&nbsp&nbspLast Name:<input type="text" name="bp">
</div>
<div class="dataset">
	<br><br>
	Pregnancies:<input type="text" name="preg">
&nbsp;&nbsp; &nbsp;&nbsp;Blood pressure:<input type="number" name="bp"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glucose:<input type="number" name="glucose">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skin Thickness:<input type="number" name="Skin"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBMI:<input type="number" name="BMI">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInsulin<input type="number" name="Insulin"><br>
	Pedigree function:<input type="number" name="Pedigree">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAge:<input type="number" name="Age"><br><br><br><br>
</div>
<div class="submit">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="Result">&nbsp;&nbsp;&nbsp;&nbsp;<input type="textbox" name="num">
</div>

<div class="logout"><a href="http://localhost/diabetes/logout.php">Log_out</a></div>
</form>
</body>
</html>