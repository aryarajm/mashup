<?php 
 function trinary_test($n){
 	$r=$n>30
 	? "greater than 30"
 	:($n>20
 	? "greater than 20"
 		:($n>10
 	? "greater than 10"	
 	: "input a number atleast greater than10!"));
    echo $n.":".$r."\n";
  }
    trinary_test(25);
    trinary_test(15);
    trinary_test(35);
   
 ?>