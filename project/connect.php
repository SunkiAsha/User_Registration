<html>
<body>
<?php
$con = mysqli_connect('localhost','root','');
		if(!$con)
		{
			die('Error in Connection'.mysqli_error());
		}
		else
		{
			echo "Connection to server was successufull";
		}
?>
</body>
</html>