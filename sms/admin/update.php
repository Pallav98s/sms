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
<table align="center">
	<form action="update.php" method="POST">
		<tr>
			<th>
			Enter Branch
			</th>
				<td><input type="branch" placeholder="Enter Branch" name="branch">
				</td>
			
		
			<th>
			Enter Student Name
			</th>
				<td><input type="text" placeholder="Enter Name" name="name">
				</td>

				<td colspan="2"><input type="submit" name="submit" value="Search"/></td>
			
		</tr>
	
	</form>
</table>
<table align="center" width="80%" border="1" style="margin-top: 20px;">
<tr style="background-color: #000; color: #fff;"><th>No</th>
	<th>Name</th>
	<th>Image</th>
	<th>RollNo.</th>
	<th>City</th>
	<th>Branch</th>
	<th>Contact</th>
	<th>Edit</th>
	
</tr>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$branch=$_POST['branch'];
	$name=$_POST['name'];
	$q="SELECT * FROM `student` WHERE branch='$branch' AND name LIKE '%$name%'";
	$result=mysqli_query($con,$q);
	if(mysqli_num_rows($result)<1)
	{
		echo "<tr><td colspan='7'>Not found</td></tr>";
	}
	else{
		$count=0;
		while($data=mysqli_fetch_assoc($result))
		{
			$count++;
			?>
			<tr align="center"><td><?php echo $count; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><img src="../simg/<?php echo $data['image']; ?>" style="max-width: 100px;"/></td>
				<td><?php echo $data['rollno']; ?></td>
				<td><?php echo $data['city']; ?></td>
				<td><?php echo $data['branch']; ?></td>
				<td><?php echo $data['contact']; ?></td>
				<td><a href="edit.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
	
			</tr>
			<?php

		}
	}
}
?>
</table>
