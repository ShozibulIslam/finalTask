<?php

$arr = [4,5,3,6,10,12];
$k= 0;

for($i=0;$i<sizeof($arr);$i++){
   for($j = 1;$j<sizeof($arr);$j++){
      
       $newArr1[$k] = $arr[$i]+ $arr[$j];
       $k++;
   }
}
  
  

   

  

?>