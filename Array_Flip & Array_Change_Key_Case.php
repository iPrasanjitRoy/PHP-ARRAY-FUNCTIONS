<?php
/*--------Array Flip---------*/
$a = array(
    "Bill" => 10,
    "Joe" => 20,
    "Peter" => 30
);

$newArray = array_flip($a);

echo "<pre>";
print_r($newArray);
echo "</pre>";


/* -----Array_Change_Key_Case----- */
$newArray2 = array_change_key_case($a);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

/* --------CASE_UPPER CASE_LOWER-------- */
$newArray3 = array_change_key_case($a, CASE_UPPER);

echo "<pre>";
print_r($newArray3);
echo "</pre>";

?>