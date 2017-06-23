<?php 
  function prime($n){
  	for($x=2;$x<$n;$x++){
  		if($n % $x == 0){
  			return 0; 
  		}
  	}
  	return 1;
  }
  $a = prime(7);
   if($a==0)
   	 echo " number is not prime";
   else
   	 echo "number is prime";
  echo "\n"
 ?>