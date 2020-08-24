<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Student Management System</title>
	<link rel="stylesheet" href="">
</head>
<body bgcolor="teal">
	
	<h2 align="right" style="margin-right: 40px;"><a href="login.php">Admin Login</a></h2> 
	<h1 align="center" style="margin-top: 20px;">Welcome to Student Management System</h1>
	<form action="index.php" method="POST">
	<table style="width:30%; color: white; margin-top: 40px; width: 400px; height: 200px;" border="1" align="center" bgcolor="black">
		<tr >
			<td colspan="2" align="center">Student Information
			</td>
		</tr>
		<tr >
			<td align="left">Choose Branch</td>
			<td align="center" >
				<select name="branch" required style="width: 200px;">
					<option>CSE</option>
					<option>Civil</option>
					<option>EC</option>
					<option>IT</option>
					<option>ME</option>
				</select>
				
			</td>
		</tr>
		<tr >
			<td align="left">Enter RollNo.</td>
			<td align="center" ><input type="text" name="rollno" required style="width: 200px;"></td>
		</tr>
		<tr >
			<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info."></td>
		</tr>	
	</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$branch=$_POST['branch'];
	$rollno=$_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($branch,$rollno);
}
?>