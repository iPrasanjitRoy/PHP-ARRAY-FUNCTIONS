<?php
$colors = array('Red', 'Yellow', 'Blue', 'Green');
echo $colors[0] . "<br>";


$Colors = ['Red', 'Yellow', 'Blue', 'Green'];


echo "<pre>";
print_r($Colors);
echo "</pre>";


$colorss[0] = "Red";
$colorss[1] = "Green";
$colorss[2] = "Yellow";
$colorss[3] = "Blue";


echo "<ul>";
for ($i = 0; $i < 4; $i++) {
    echo "<li>$colorss[$i]</li>";
}
echo "</ul>";

?>