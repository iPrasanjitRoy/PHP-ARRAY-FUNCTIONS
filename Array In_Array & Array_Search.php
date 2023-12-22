<?php
$food = array('Orange', 'Banana', 'Apple', 'Grapes');
echo in_array("Banana", $food);


/* ---- If Condition InArray------ */
if (in_array("No Food", $food)) {
    echo "Find Successfully.";
} else {
    echo "Can't Find.";
}

$food = array('Orange', 'Banana', 'Apple', 'Grapes', '55');
echo in_array(55, $food, true); /* ---- Strict Mode 3 Parameter------ */


/* ----------Array Search------------- */
echo array_search("Apple", $food);


/* --------Multipledimensional Associative Array------------- */
$a = array(array('A', 'B'), array('C', 'D'), 'XYZ');

if (in_array(array('A', 'B'), $a)) {
    echo "Find Successfully.";
} else {
    echo "Can't Find.";
}



/* -----------Associative Array-------------- */
$food = array('A' => 'Orange', 'B' => 'Banana', 'C' => 'Apple', 'D' => 'Grapes');

echo in_array("Apple", $food);
echo array_search("Apple", $food);

?>