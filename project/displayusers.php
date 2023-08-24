<!—Retriving Users - Displaying users data -->
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
		$res = mysqli_query($con ,"SELECT * From login1");
		echo "<center>";
		echo "<table border=2>";
		echo "<caption> Users Details </caption>";
		echo "<tr> <th> USER NAME </th> <th> PASSWORD </th> </tr> ";
		while($row = mysqli_fetch_array($res))
		{
			echo "<tr> <td> ";
			echo $row['uname'];
			echo "</td>";
			echo " <td> ";
			echo $row['pword'];
			echo "</td></tr>";
		}
		echo "</table>";
		echo "</ceneter>";
		echo"<br> <a href='login.php'>Move to Home Page </a>";
		mysqli_close($con);
		?>
	</body>
</html>