<!DOCTYPE html>
<html>
<head>
	<title>Information</title>
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
		margin-top: 30px;
		text-align: left;
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

	.submit{
	
		color: white;
		border-radius: 40px;
		font-size: 40px;
		text-align: right;
	}
	input[type='checkbox']{
		background-color:blue;
		color: white;
		border-radius: 30px;
		font-size: 40px;
	}
.submit:hover,a:hover{
	
		color: white;
		margin-bottom:20px;
		text-decoration: none;
	

	}
	input:hover;a:hover{
		border-color: brown;
	}
	h1{
		background-color: gray;
		color: white;
		text-align: center;
	}
	.data{

	}
	input[type='submit']:hover,a:hover{
		border-radius: 50px;
		color: white;
		margin-bottom:20px;
	background-size: 100px;
	background-color: blue;
	}
	input[type='submit']{
	    color:black;
		border-radius: 40px;
		font-size: 40px;
		text-align: left;
		margin-left: 10px;
	}
	}
</style>
<body>
	<h1>Welcome To Our  &nbsp;System</h1>
<form method="post" action="">

<fieldset>
		<div class="data">
		<h3>If you feel any of the following symptoms, check  and report it and then press the next.</h3>
<ol>
	<li>	<input type="checkbox" name="checkbox" >Increased thirst
</li>
<li><input type="checkbox" name="checkbox" >	Frequent urination</li>
<li><input type="checkbox" name="checkbox" >Extreme hunger</li>
<li><input type="checkbox" name="checkbox" >	Unexplained weight loss</li>
<li><input type="checkbox" name="checkbox" >	Presence of ketones in the urine</li>
<li><input type="checkbox" name="checkbox" >Fatigue</li>
<li>	<input type="checkbox" name="checkbox" >Irritability</li>
<li><input type="checkbox" name="checkbox" >	Blurred vision</li>
<li><input type="checkbox" name="checkbox" >	Slow-healing sores</li>
<li><input type="checkbox" name="checkbox" >	Frequent infections, such as gums or skin infections</li>
</ol>
	</div>
	<div class="report"><input type="submit" name="submit" value="Report"></div>

<div class="submit">	

	<a href="http://localhost/diabetes/diabet.php">Next</a></div>
</fieldset>
</form>
</body>
</html>