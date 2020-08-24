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
include('../dbcon.php');
$sid=$_GET['sid'];
$q="SELECT * FROM `student` WHERE id='$sid'";
$run=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);
?>
<form method="POST" action="updatedata.php" enctype="multipart/form-data">
	<table border="1" align="center" style="width:70%; margin-top:40px; text-align: center;">
		<tr>
			<td>Roll No.</td>
			<td><input type="text" name="rollno" value=<?php echo $data['rollno'];?> required></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" value=<?php echo $data['name'];?> required></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value=<?php echo $data['city'];?> required></td>
		</tr>
		<tr>
			<td>Contact No.</td>
			<td><input type="text" name="contact" value=<?php echo $data['contact'];?> required></td>
		</tr>
		<tr>
			<td>Branch</td>
			<td><input type="text" name="branch" value=<?php echo $data['branch'];?> required></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>

			<td colspan="2">
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
				<input type="submit" value="Submit" name="submit"></td></tr>
	</table>
</form>
</body>
</html>