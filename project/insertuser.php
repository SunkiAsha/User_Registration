<!-- Inserting Users Data : Code for insertuser.php -->
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
		{
			echo " <br> Database not selected";
		}
		
		$name = $_POST['un'];
		$pwd = $_POST['pw'];
		$qry2 = "INSERT INTO login1(uname,pword) VALUES('$name' , '$pwd')";
		$ins = mysqli_query($con , $qry2);
		if(!$ins)
			echo "<br> Login data Not inserted successfully";
		echo "<br> User $name data inserted successfully";
		echo"<br> <a href='login.php'>Move to Home Page </a>";
		mysqli_close($con);
		?>
	</body>
</html>