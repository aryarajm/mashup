<?php 
  function check_palindrome($string){
  	    if ($string == strrev($string)) 
              echo "$string is palindrome" ;
        else
              echo "$string is not palindrome" ;
        	 
  	}	 
  	 	  	
  	  	  	 check_palindrome('car');
  	 	  	 echo "\n";
  

 ?>