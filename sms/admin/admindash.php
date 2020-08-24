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

<div class="dashboard">
<table style="width: 50%; " align="center">
	<tr>
		<td>1.</td><td><a href="add.php">Insert Student Details</a></td>
	</tr>
	<tr>
		<td>2.</td><td><a href="update.php">Update Student Details</a></td>
	</tr>
	<tr>
		<td>3.</td><td><a href="delete.php">Delete Student Details</a></td>
	</tr>
</table>
</div>
</body>
</html>