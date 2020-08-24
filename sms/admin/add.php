<?php
session_start();
			if(isset($_SESSION['uid']))
			{
				echo "";
			}
			else
			{
				header('location: ../login.php');
			}
?>	
<?php
include('header.php');
include('title.php');
?>
<form method="POST" action="add.php" enctype="multipart/form-data">
	<table border="1" align="center" style="width:70%; margin-top:40px; text-align: center;">
		<tr>
			<td>Roll No.</td>
			<td><input type="text" name="rollno" placeholder="Enter rollno" required></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" placeholder="Enter Your Name" required></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" placeholder="Enter city" required></td>
		</tr>
		<tr>
			<td>Contact No.</td>
			<td><input type="text" name="contact" placeholder="Enter contactno." required></td>
		</tr>
		<tr>
			<td>Branch</td>
			<td><input type="text" name="branch" placeholder="Enter branch" required></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr><td colspan="2"><input type="submit" value="Submit" name="submit"></td></tr>
	</table>
</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$contact=$_POST['contact'];
		$branch=$_POST['branch'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		move_uploaded_file($tempname,"../simg/$imagename");
		$q="INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `contact`, `branch`, `image`) VALUES (NULL,'$rollno','$name','$city','$contact','$branch','$imagename')";
		
		$result=mysqli_query($con,$q);
		
		if($result==true)
		{
			?>
			<script>
			alert('Data Inserted Successfully');
		</script>
			<?php
			
		}
	}
?>