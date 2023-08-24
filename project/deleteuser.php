<!-- Deleta a record from users data : Code for deleteuser.php -->
<html>
	<body>
	<?php
		$con = mysqli_connect('localhost:3307','root','','emp');
		if(!$con)
		{
			die('Error in Connection'.mysqli_error());
		}
		$sel = mysqli_select_db($con , 'emp');
		if(!$sel)
			echo " <br> Database not selected";
		$name = $_POST['user'];
		mysqli_query($con ,"DELETE FROM login1 WHERE uname='$name'");
		echo "<br> Deleted User Data Successfully ";
		echo"<br> <a href='login.php'>Move to Home Page </a>";
		mysqli_close($con);
	?>
	</body>
</html>