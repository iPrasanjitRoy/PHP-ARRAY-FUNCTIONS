<?php
/* -----------Array Fill Keys----------- */
$keys = array(1, 2, 3, 4, 5, 10);
$filledArray = array_fill_keys($keys, "World");

echo "<pre>";
print_r($filledArray);
echo "</pre>";



/* -----------Array Fill----------- */
$filledArray = array_fill(0, 5, "Hello");
echo "<pre>";
print_r($filledArray);
echo "</pre>";

?>