<?php

function output($str){

    $chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY );


    $s = strlen($str);
    $div =  $s/2;
    $mod = $s%2;
    $new1="";
    $new2 = "";
    $j=0;

    if($mod != 0){
        $divnew = ceil($div);

        for($i =1 ;$i<$divnew;$i++){
                $new1 = $new1.$chars[$i-1];
                $new2 = $new2.$chars[$divnew+$j];
                $j++;          
            }

            if($new1 === $new2){
                echo("true");
            }
        
            else{
                echo('false') ;
            }
        }
    


    else{
        $divnew = $div;

        for($i =0 ;$i<$divnew;$i++){
                $new1 = $new1. $chars[$i];
                $new2 = $new2.$chars[$divnew+$j];
                $j++;
                
            
            }
            
            if($new1 === $new2){
                echo("true");
            }
        
            else{
                echo('false') ;
            }   
        }

    }

    $a = $_POST['string_input'];

    $call = output($a);
   
?>

<br>

<button > <a href="substring_sequence.php">back</a></button>
