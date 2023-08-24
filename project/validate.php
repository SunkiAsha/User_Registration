<!-- Server validating form -->
<html>
<body>
<?php
	$flag=true;
	$msg ="";
	if($_POST['uname'])
		{
			if(preg_match("/[^A-Z a-z]/" , $_POST['uname']))
			{
				$msg = (" Eneter Valid User Name")."<br>";
				$flag=false;
			}
		}

	if(!$_POST['pwd']) //checks for empty
		{
			$msg = $msg.(" Enter valid password");
			$flag = false;
		}
		
	if($flag==false)
	{
	//goback to complete form data correctly.
echo $msg."<BR>"."<input type='button' value='back' onClick='history.go(-1)'>";
	}
else
{
echo "Correct data";
//check with database.
}
?>
</body>
</html>