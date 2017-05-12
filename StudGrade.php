<!DOCTYPE html>
<html>
	<head>
		<title>STUDENT GRADE</title>
		<meta charset="UTF-8">
		<meta name="description" content="Student Grade">
		<meta name="keywords" content="sample code, html, php">
		<meta name="author" content="Kristine Mae Baran">
		
		<style>
		#header {
			background-color:#2F4F4F;
			color:#ffffff;
			text-align:center;
			padding:25px;
			border: 2px solid;
			margin-top: 5em;
			margin-left: 20em;
			margin-right: 20em;
			font-family: arial black;
			font-size: 20px;
		}

		#form {
			padding-left:90px;
			padding-top: 60px;
			padding-bottom: 60px;
			background-color:#68838B;
			color: #ffffff;
			border: 1px solid;
			margin-left: 25em;
			margin-right: 25em;
			font-family: arial black;
			font-size: 100%;
		}
		body{
			background-color: #B0C4DE;
			border-color: #708090;
			
		}
		input, option{
			padding: 5px;
		}
		
		.fields {width: 500px;}
		.fields > label { display:inline-block; width:150px; font-weight:bold; vertical-align:bottom; }
		.fields > span { display: inline-block; }

		

		</style>

	</head>
	
	<body>
	<div id="header">	
		<h1>Student Grade</h1>
	</div>
	
		<div id="form">
		<form action="save.php" method="post">
		
			<div class="fields">
				<label><b>Student Name&colon;</b></label>
				<span><input id="studName" name="studName" size="30" type="text" placeholder="Enter Name" required="required" style="border: 1px solid; border-color: #708090; padding: 10px; font-family: arial black" /></span>
			</div>
			<br>
			<div class="fields">
				<label><b>Grade&colon;</b></label>
				<span><input id="grade" name="grade" size="30" type="number" step = "0.01" placeholder="Enter grade" required="required" style="border: 1px solid; border-color: #708090; padding: 10px; font-family: arial black" /></span>
			</div>
		  
		  <br><br>
		  <br>
		  <input type="submit" name="submit" style="color: gray; width: 150px; height: 40px; border: 2px solid; border-color: #708090; padding: 10px; font-family: arial black">
		</div>
		
		</form>
		

	</body>
</html>