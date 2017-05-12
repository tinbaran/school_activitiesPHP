<!DOCTYPE html>
<html>
	<head>
		<title>PALINDROME</title>
		<meta charset="UTF-8">
		<meta name="description" content="Palindrome">
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
		<h1>Palindrome</h1>
	</div>
	
		<div id="form">
		<form action="" method="POST">
		  <b>Input&colon;</b> &nbsp; <input type="text" name="word" size="50" placeholder="Word" required="required" style="border: 1px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		  <br><br>
		  <br>
		  <input type="submit" name="submit" style="color: gray; width: 150px; height: 40px; border: 2px solid; border-color: darkblue; padding: 10px; font-family: arial black">
		</div>
		
		</form>
		<?php
		if(isset($_POST['submit']))
		{
			$submit = $_POST['submit'];
			
			$word = $_POST ['word'];
					$reverse = strrev($word);
								
			echo '<br><br>';
			echo '<br><br>';
			
					
					$message = "Input: " . $word;
					$palOutput = "<br>Output: This string is a palindrome  <br>";
					$res = $word . ": " . strlen('$word') . " characters ";
					
					$save = $message . $palOutput . $res;
					
					if ($word == $reverse){	
						file_put_contents("palindrome.txt", $save, FILE_APPEND);
					}
					
		}
		?>
	<div id="footer">
	Copyright © myforms.com
	</div>

	</body>
</html>
