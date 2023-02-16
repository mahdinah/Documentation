<?php
$items=array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo "Hello sir, do you have "
    . $items[0] . ", "
    . $items[1] . ", "
    . "and "
    . $items[2] . "? Also if you sell fruits can I find a "
    . $items[5] . "?</br>";

?>
<?php
$grocery=array( "eggs" => array("balade", "mazere3"),
                "milk" => array("Fresh", "Taanayel"),
                "water-pack" => array("Tanoureen", "Reem"),
);
echo "Hey Sir, Please I need 1 pack of balade eggs and 3 Reem Water Pack";
echo "<br>Hey Sir, Please I need 1 pack of "
    . $grocery["eggs"][0]
    . " eggs and 3 "
    . $grocery["water-pack"][1]
    . " Water Pack.";
?>