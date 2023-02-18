<?php
function palindrome($strng){
    $n=strrev($strng);
    // echo   $n;
    if ($n<>$strng){
        echo "$strng is not a palindrome word </br>";
    }
    else 
    echo "$strng is a palindrome word </br>";
}


return palindrome("nursesrun");


?>