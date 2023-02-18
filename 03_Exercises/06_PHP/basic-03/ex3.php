<?php
$text="The quick brown Fox jumps over the lazy Dog and the baby cry in the corner";
$words = explode(" ", $text);
$now = count($words);
$j = 0;
$i=0;
while($i<$now)
{
if ($words[$i] == "the" or $words[$i] == "The")
{
$j =  $j+1;
}
$i++;
}
echo $j;
?>