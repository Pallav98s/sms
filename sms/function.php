<?php
include('dbcon.php');
function showdetails($branch,$rollno)
{
	include('dbcon.php');
	$q="SELECT * FROM `student` WHERE rollno='$rollno' AND branch='$branch'";
	$run=mysqli_query($con,$q);
	
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<table align="center" style="width: 60%; margin-top: 30px; height: 350px; color: white;" border="1" bgcolor="brown">
			<tr>
				<th colspan="3">Student Details</th>
			</tr>
			
			<tr>
				<td rowspan="5" align="center"><img src="simg/<?php echo $data['image']; ?>" style="max-width: 120px; max-height: 150px; "></td>
				<th>Roll No.</th>
				<td><?php echo $data['rollno']; ?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name']; ?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $data['city']; ?></td>
			</tr>
			<tr>
				<th>Contact</th>
				<td><?php echo $data['contact']; ?></td>
			</tr>
			<tr>
				<th>Branch</th>
				<td><?php echo $data['branch']; ?></td>
			</tr>
			
		</table>
		<?php
	}
	else{
		echo "<script> alert('No Student Found');</script>";
	}
}
?>