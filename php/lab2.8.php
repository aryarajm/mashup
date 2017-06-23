<?php 
   /*$number = 123.4;
   setlocale(LC_MONETARY, 'en_IN');
   echo money_format("The price is %i", $number);*/

   $number = 123.4;
setlocale(LC_MONETARY, 'en_USA');
echo money_format('%i', $number);

 ?>