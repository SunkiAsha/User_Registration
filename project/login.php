<!-- Login Details Entry Form -> login.php page (home page)-->
<html>
	<body>
		<form name="f2" method="post" action="insertuser.php">
		<center>
		<table border="2" >
		<caption style="color:red"> Register Window </caption>
		<tr>
			<td> User Name :</td>
			<td> <input type="text" name="un" size=30 ></td>
		</tr>
		<tr>
			<td> Password : </td>
			<td> <input type="password" name="pw" size=30 > </td>
		</tr>
		<tr>
			<td align="left" >
			<input type="Submit" value="Insert User Details"> &nbsp;&nbsp;
			<td> <a href="displayusers.php"> Display Users </a>
			<a style="color:red" href="verifyuser.php"> &nbsp;Existing User Verify </a> </td>
			</td>
		</tr>
		<tr>
			<td> <a href="updateform.php"> Update Password </td>
			<td> <a href="deleteform.php"> Delete User </a> </td>
		</tr>
		<tr>
			<td align="right"> <input type="reset" value="Clear"> </td>
		<td> </td>
		</tr>
		</table>
	</center>
	</form>
	</body>
</html>