<!DOCTYPE html>
<html>
	<head>
		<title>STUDENT RECORD</title>
		<meta charset="UTF-8">
		<meta name="description" content="Student Record">
		<meta name="keywords" content="sample code, html, php">
		<meta name="author" content="Kristine Mae Baran">
		
		<style>
		#header {
			background-color:gray;
			color:darkblue;
			text-align:center;
			padding:25px;
			border: 2px solid;
			margin-top: 5em;
			margin-left: 25em;
			margin-right: 25em;
			font-family: arial black;
			font-size: 20px;
		}

		#form {
			padding-left:150px;
			padding-top: 60px;
			padding-bottom: 60px;
			background-color:darkgray;
			color: darkblue;
			border: 1px solid;
			margin-left: 31.2em;
			margin-right: 31.2em;
			font-family: arial black;
			font-size: 100%;
		}
		body{
			background-color: lightgrey;
			border: 2px groove;
			border-color: darkblue;
			
		}
		input, option{
			padding: 5px;
		}
		#footer {
			background-color:grey;
			border-top: 2px dotted;
			border-color: darkblue;
			color:white;
			clear:both;
			margin-top: 100px;
			text-align:bottom;
			padding: 5px;
			height: 70px;
		}
		


		

		</style>

	</head>
	
	<body>
	<div id="header">	
		<h1>Student Record</h1>
	</div>
	
		<div id="form">
		<form action="save.php" method="post">
		  <b> Id number&colon; </b> &nbsp; &nbsp; &nbsp; <input type="integer" name="idno" size="50" placeholder="Id number" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <b>Family name&colon;</b> &nbsp; <input type="text" name="fname" size="50" placeholder="Family name" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <b>First name&colon;</b> &emsp14; &nbsp; &nbsp; <input type="text" name="frstname" size="50" placeholder="First name" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <b>Middle name&colon;</b> &nbsp; <input type="text" name="midname" size="50" placeholder="Middle name" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <b> Age&colon; </b> &emsp; &emsp; &emsp; &emsp; <input type="integer" name="age" size="50" placeholder="Age" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <b>Gender&colon; &nbsp; &nbsp; <input type="radio" name="gender" value="Male" checked> <i>Male</i>
						<input type="radio" name="gender" value="Female"> <i>Female </i></b>
		  <br><br>
		  <b>Course&colon; </b> &emsp; &emsp; &emsp;
				<select name="course" required="required" style="color: gray; width: 150px; height: 40px; border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
					<option value="Bachelor of Arts">Bachelor of Arts</option>
					<option value="Bachelor of Secondary Education major in Social Studies">Bachelor of Secondary Education major in Social Studies"</option>
					<option value="Bachelor of Secondary Education major in Filipino">Bachelor of Secondary Education major in Filipino</option>
					<option value="Bachelor of Secondary Education major in English">Bachelor of Secondary Education major in English</option>
					<option value="Bachelor of Secondary Education major in Mathematics">Bachelor of Secondary Education major in Mathematics</option>
					<option value="Bachelor of Secondary Education major in Music, Arts Physical Education, and Health">Bachelor of Secondary Education major in Music, Arts Physical Education, and Health</option>
					<option value="Bachelor of Secondary Education major in Physical Science">Bachelor of Secondary Education major in Physical Science</option>
					<option value="Bachelor of Secondary Education major in Biological Science">Bachelor of Secondary Education major in Biological Science</option>
					<option value="Bachelor of Elementary Education">Bachelor of Elementary Education</option>
					<option value="Special Education">Special Education</option>
					<option value="BS in Accountancy">BS in Accountancy</option>
					<option value="BS in Business Administration">BS in Business Administration</option>
					<option value="BS in Civil Engineering">BS in Civil Engineering</option>
					<option value="BS in Commerce">BS in Commerce</option>
					<option value="BS in Computer Engineering">BS in Computer Engineering</option>
					<option value="BS in Criminology">BS in Criminology</option>
					<option value="BS in Customs Administration">BS in Customs Administration</option>
					<option value="BS in Electrical Engineering">BS in Electrical Engineering</option>
					<option value="BS in Electronics and Comm. Engineering">BS in Electronics and Comm. Engineering</option>
					<option value="BS in Hotel and Restaurant Management (LAD)">BS in Hotel and Restaurant Management (LAD)</option>
					<option value="BS in Industrial Engineering">BS in Industrial Engineering</option>
					<option value="BS in Information Technology (LAD)">BS in Information Technology (LAD)</option>
					<option value="BS in Mechanical Engineering">BS in Mechanical Engineering</option>
					<option value="BS in Naval Arch. & Marine Engineering">BS in Naval Arch. & Marine Engineering</option>
					<option value="BS in Office Administration">BS in Office Administration</option>
					<option value="BS in Real Estate Management">BS in Real Estate Management</option>
					<option value="BS in Social Work">BS in Social Work</option>
					<option value="Asso. In Computer Technology">Asso. In Computer Technology</option>
					<option value="Asso. in Hotel and Restaurant Mgt.">Asso. in Hotel and Restaurant Mgt.</option>
					<option value="ETEEAP">ETEEAP</option>
					<option value="Doctor of Education (Ed. D.)">Doctor of Education (Ed. D.)</option>
					<option value="Doctor of Philosophy in Criminal Justice with specialization in Criminology (Ph. D.)">Doctor of Philosophy in Criminal Justice with specialization in Criminology (Ph. D.)</option>
					<option value="Doctor in Business Administration">Doctor in Business Administration</option>
					<option value="Master of Business Administration (MBA) – Thesal and Non-thesal Program">Master of Business Administration (MBA) – Thesal and Non-thesal Program</option>
					<option value="Master of Science in Elementary Management (MSEM)">Master of Science in Elementary Management (MSEM)</option>
					<option value="Master of Science in Criminal Justice with Specialization in Criminology (MSCJ)">Master of Science in Criminal Justice with Specialization in Criminology (MSCJ)</option>
					<option value="Master of Arts in Nursing (MAN)">Master of Arts in Nursing (MAN)</option>
					<option value="Master of Science in Teaching (MST)">Master of Science in Teaching (MST)</option>
					<option value="MS Elementary School Management">MS Elementary School Management</option>
				</select>
		  <br><br>
		  <b>Year level&colon; </b> &emsp; &emsp; 
				<select name="yrlvl" input type="integer" required="required" style="color: gray; width: 150px; height: 40px; border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
		   <br><br>
		  <b>Street number&colon;</b> &emsp14; <input type="text" name="stno" size="50" placeholder="Street number" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <b>Barangay&colon;</b> &emsp; &emsp; <input type="text" name="brgy" size="50" placeholder="Barangay" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <b>Municipality&colon;</b> &emsp; <input type="text" name="municipality" size="50" placeholder="Municipality" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <b>Email&colon;</b> &emsp; &emsp; &emsp; &emsp14; <input type="text" name="email" size="50" placeholder="Email" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <br>
		  <input type="submit" name="submit" style="color: gray; width: 150px; height: 40px; border: 2px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		</div>
		
		</form>
		<?php
		if(isset($_POST['submit']))
		{
		echo "<b> Id number&colon; </b>". 
		$idno= $_POST ['idno'];
				if(!filter_var($idno, FILTER_VALIDATE_INT)==true)
				{
					$message="ID No. is not an integer.";
				}
				echo "<script type='text/javascript'> alert('message');</script>";
		echo '<br><br>';
		echo "<b> Name&colon; </b>". " " . 
		$name = ($_POST ['frstname']). " " . ($_POST ['midname']). " " . ($_POST ['fname']);
		
		echo '<br><br>';
		echo "<b> Age&colon; </b>".
		$age = $_POST ['age'];
					if(!filter_var($age, FILTER_VALIDATE_INT))
						{
							$message="Age is not an integer.";
						}
						echo "<script type='text/javascript'> alert('message');</script>";
								
		echo '<br><br>';
		echo "<b> Gender&colon; </b>".
		$gender = $_POST ['gender'];
		echo '<br><br>';
		echo "<b> Courser&colon; </b>".
		$course = $_POST ['course'];
		echo '<br><br>';
		echo "<b> Year level&colon; </b>".
		$yrlvl = $_POST ['yrlvl'];
		echo '<br><br>';
		echo "<b> Home Address&colon; </b>".
		$address = ($_POST ['stno']). ", " . ($_POST ['brgy']). ", " . ($_POST ['municipality']);
		echo '<br><br>';
		echo "<b> Email Address&colon; </b>".
		$email = $_POST ['email'];

			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
			exit("E-mail is not valid");
			}
		echo '<br><br>';
		echo '<br><br>';
		
			
				
			
		}
		?>
	<div id="footer">
	Copyright © myforms.com
	</div>

	</body>
</html>