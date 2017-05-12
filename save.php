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
			font-family: arial black;
			font-size: 20px;
		}
		
		th {
			text-align: center;
			background-color:#2F4F4F;
			border-color: #708090;
			color: #ffffff;
			border: 2px solid;
			height: 50px;
			font-family: arial black;
			
		}
		
		td {
			text-align: left;
			background-color:#68838B;
			color: #ffffff;
			border: 1px solid;
			padding: 15px;
			vertical-align: bottom;
			border-bottom: 1px solid #ddd;
			font-family: arial black;
			
		}
		
		tr:hover {
			background-color: #f5f5f5;
		}
		tr:nth-child(even) {background-color: #5F9EA0}
		
		table {
			border-spacing: 5px;
			border-collapse: collapse;
		}
		
		body{
			background-color: #B0C4DE;
			border-style: double;
			border-color: #708090;
			border-collapse: collapse;
		}
		
		#form{
			background-color: #B0C4DE;
			padding-bottom: 10px;
			font-size: 100%;
			
		}
		

		</style>

	</head>

	<body>

<div id="header">	
		<h1>Student Grade</h1>
</div>

<div id = "form">
<?php
	$nameError ="";
	
	echo '<table style="width:100%">
		
    <tr>
        <th>Student Name</th>
        <th>Grade</th>
		<th>Remarks</th>
    </tr>';
		
			
				if(isset($_POST['submit']))
				{
					
					
				$studName = $_POST ['studName'];
				echo '<br><br>';
				
				$grade= $_POST ['grade'];
						/*if(!filter_var($grade, FILTER_VALIDATE_INT)==true)
						{
							$message="Invalid input.";
						}
						echo "<script type='text/javascript'> alert('message');</script>";
						*/
					if ($grade <= 3.0 && $grade >= 1.0)
						{
								$remarks = "PASSED";
						}
						elseif ($grade > 3.0 && $grade <= 5.0)
						{
								$remarks = "FAILED";
						}	
						
						
						
				echo '<br><br>';
				
				echo '
				<tr>
					<td>'.$studName.'</td>
					<td>'.$grade.'</td>
					<td>'.$remarks.'</td>
					
					</tr>';
				}
	
	echo '
	</table>';	
	
	
?>
</div>

<p><a href="StudGrade.php">Add new record</a></p>
</body>

</html>


