<!-- program to demonstrate Associative arrays -->
<html>
  <body>
     <?php
        $emps = array("Aryan"=> 452563 , "Bhanu" => 526458 , "vivek"=>42563, "Amit"=>75642);
		print_r($emps);
		echo "<br>";
		
		//for - each loop
		
		foreach($emps as $key1 => $val1)
		{
			echo $key1 . " : " . $val1;
			echo "<br>";
		}
				
		//to display individual elements - accessed using key.
		
		echo $emps["vivek"];
		$emps["vivek"] = 75698;
		echo "<br>";
		echo $emps["vivek"];
		
		echo "<br>";
		
		//Multi Dimensional  Arrays -> Associative array in Numeric Array
		 $students = array(
		                    array( 501 => "Ramesh" , 502 => "Suresh" ,503=>"Ganesh"),
							array(1201 => "Aneesh" , 1202=> "Rishik"),
							array(401 =>  "Shreyan", 402=> "Rithik" , 403=>"Tanvi")
						   );
						
		foreach($students as $branch)
		{
			foreach($branch as  $key => $val)
			{
				echo $key. "->" . $val;
				echo "<br>";
			}
		}
		
	    print_r($students);
	 
	    echo "<br>";
	 //Multi Dimensional  Arrays -> Associative array in Associative Array
		 
		 $states = array( "telangana" => array("hyd" =>34 , "krmn"=>35 ,"niz"=>38),
		                  "ap" =>        array("hyd" =>34 , "krmn"=>35 ,"niz"=>38),
						  "chennai" =>   array("hyd" =>34 , "krmn"=>35 ,"niz"=>38));
						  
		 //using print_r
		  echo print_r($states);
		   echo "<br>";
		 //using for-each
		 
		 foreach ($states as $key1 => $val1)
		 {
			foreach($val1 as $key2=>$val2)
			 {
				 echo $key2 ."--->". $val2;
				 echo "<br>";
			 }
		 }
		 
		 //particular row
		 print_r($states["ap"]);
			       
	 
	 
	   
	 
	  ?>
	</body>
</html>
