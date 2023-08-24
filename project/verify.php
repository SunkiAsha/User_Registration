<!-- verifying user in server - verify.php-->
<html>
	<body>
	<?php
		$name=$_POST['un'];
		$pwd=$_POST['pw'];
		$con = mysqli_connect('localhost:3307','root','','emp');
		if(!$con)
		{
			die('Error in Connection'.mysqli_error());
		}
		$sel = mysqli_select_db($con , 'emp');
		if(!$sel)
			echo " <br> Database not selected";
		$res = mysqli_query($con ,"SELECT * From login1");
		
		while($row = mysqli_fetch_array($res))
		{
			if(strcmp($row['uname'],$name)==0 && strcmp($row['pword'],$pwd)==0)
			{
				echo "Welcome $name";
				break;
			}
		}
		echo"<br> <a href='login.php'>Move to Home Page </a>";
		mysqli_close($con);
		?>
	</body>
</html>