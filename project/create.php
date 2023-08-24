<html>
	<body>
		<?php
			try{
				$con = mysqli_connect('localhost:3307','root','','student');
				if(!$con){  
	 				die('Error occured'.mysqli_error()); 
				}  
				else { 
					echo "Connected Successfully";
				} 
				$qry1 = "CREATE TABLE login2 ( uname varchar(40) NOT NULL , pwd varchar(20) NOT NULL)";
		
				$tab = mysqli_query($con , $qry1);

				if($tab)
					echo "<br> Login Table created";
				else
					echo "<br> Login Table Not created";
				mysqli_close($con); 
			}
			catch(Exception $e){
				echo 'Error Occurred ' .$e->getMessage();
			}   
		?>
	</body>
</html>
