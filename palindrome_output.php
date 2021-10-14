<?php

function pal($input){

    $reverse = '';
    for($i=strlen($input)-1; $i>=0; $i--){
        $reverse = $reverse.$input[$i];
    }
    if($reverse == $input)
        echo 'It is a Palindrome';
    else
        echo "It is not Palindrome";

    
    
}

 $input = $_POST["string_input"];

$call = pal($input);

?>
<br>

<button > <a href="palindrome.php">back</a></button>

  
    

