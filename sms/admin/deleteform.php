<?php
include('../dbcon.php');
		$id=$_REQUEST['sid'];
		$q="DELETE FROM `student` WHERE id='$id'";
		
		$result=mysqli_query($con,$q);
		
		if($result==true)
		{
			?>
			<script>
			alert('Data Deleted Successfully');
			window.open('delete.php','_self');
		</script>
			<?php
			
		}
?>		