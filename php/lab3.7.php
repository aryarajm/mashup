<?php 
 function factorial($n){
 	$factorial=1;
 	 for($i=1;$i<=$n;$i++){
 	 	 	 	$factorial=$factorial*$i;
 	 	
 	 }
 	 echo "factorial  :$factorial";
 	 echo "\n";
 }
 factorial(3);
 factorial(4);
  ?>