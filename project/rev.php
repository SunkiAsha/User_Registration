<html>
<head><title> Array Reverse Sort </title>
</head>
<body>
<?php
$arr = array(7,6,5,4,32,44,9,17); 
echo "The Array Before Sort is <br>" ;  
print_r ($arr); 
for( $i=0 ; $i < count($arr) ; $i++)  {  
for($j=$i+1; $j < count($arr); $j++) {    
  if($arr[$i] < $arr[$j])   {    
  $temp =   $arr[$i] ;  
  $arr[$i]= $arr[$j];  
 $arr[$j] = $temp;
       }    }   } 
   echo "<br>";   
 echo "The Array After Sort is <br>" ;  
print_r ($arr);       //display each element 
 echo "<br>"; 
   foreach($arr as $x){ 
     echo $x; 
     echo "<br>"; 
    }     
 /* Reverse Sorting using built in functions */  
$arr1 = array(17,16,15,14,132,144,19,117); 
echo "<br>";     
echo "The Array After Sort is <br>" ;
rsort($arr1);   
print_r ($arr1); ?>
</body>
</html>
