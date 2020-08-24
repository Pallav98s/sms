<?php
session_start();
if(isset($_SESSION['uid']))
	{
		header('location:admin/admindash.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Login</title>
	<link rel="stylesheet" href="">
</head>
<body bgcolor="teal">
	<h1 align="center" style="margin-top: 30px; color: black;" >Admin Login</h1>
	<h3><a href="index.php" style="float: left;">Back</a></h3>
	<form method="POST" action="login.php">
		<table align="center" style="margin-top: 100px; color: white; width: 300px; height: 150px;" bgcolor="black" >
			<tr>
				<td>UserName</td><td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="login" name="login"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>
<?php
	include('dbcon.php');
	
	if(isset($_POST['login']))
	{
		$username=$_POST['uname'];

		$password=$_POST['pass'];
		$q="SELECT * FROM `db` WHERE username='$username' AND password='$password'";
		$result=mysqli_query($con,$q);
		$row=mysqli_num_rows($result);

		if($row<1)
		{
			?>
			<script>alert('username or password is not match!!');
					window.open('login.php','_self');
			</script>
		<?php
		}
		else
		{
			$data=mysqli_fetch_assoc($result);
			$id=$data['id'];
			
			$_SESSION['uid']=$id;
			header('location:admin/admindash.php');
			
		}

	}
?>