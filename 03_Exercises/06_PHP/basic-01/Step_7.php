<?php
$birth_year=rand(1996,2021);
$current_year=date('Y');
echo "$birth_year </br>";
echo "$current_year";
if ($current_year-$birth_year>18){
    echo "</br>you'r older than 18";

}else echo "</br>you still young";

?>