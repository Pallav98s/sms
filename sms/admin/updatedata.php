<?php
include('../dbcon.php');
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$contact=$_POST['contact'];
		$id=$_POST['sid'];
		$branch=$_POST['branch'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		move_uploaded_file($tempname,"../simg/$imagename");
		$q="UPDATE `student` SET `rollno` = '$rollno',`name` = '$name',`city` = '$city',`contact` = '$contact',`branch` = '$branch',`image`='$imagename' WHERE `id` =$id";
		
		$result=mysqli_query($con,$q);
		
		if($result==true)
		{
			?>
			<script>
			alert('Data Updated Successfully');
			window.open('edit.php?sid=<?php echo $id; ?>','_self');
		</script>
			<?php
			
		}
?>		