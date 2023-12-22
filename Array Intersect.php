<?php
/* -------Match Only Value ------- */
$array1 = array("Red", "Green", "Blue");
$array2 = array("Green", "Blue", "Yellow");
$array3 = array("Blue", "Yellow", "Orange");

$result = array_intersect($array1, $array2, $array3);

echo '<pre>';
print_r($result);
echo '</pre>';

$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");

$newArray = array_intersect($a1, $a2);

echo '<pre>';
print_r($newArray);
echo '</pre>';

/* ----------- Match Only Key------------- */
$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");

$newArray1 = array_intersect_key($a1, $a2);

echo '<pre>';
print_r($newArray1);
echo '</pre>';

/* ---------Match Key And Value Both---------- */
$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");

$newArray2 = array_intersect_assoc($a1, $a2);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

/* ---------Match Key And Value Both With Callback Function----------- */
function compare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");

$newArray3 = array_intersect_uassoc($a1, $a2, "compare");

echo "<pre>";
print_r($newArray3);
echo "</pre>";

$newArray4 = array_uintersect_assoc($a1, $a2, "compare");

echo "<pre>";
print_r($newArray4);
echo "</pre>";

/* ----------Match Only Key With Function------------ */
$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");
$newArray5 = array_intersect_ukey($a1, $a2, "compare");

echo "<pre>";
print_r($newArray5);
echo "</pre>";

/* --------Match Only Value With Function----------- */
$newArray6 = array_uintersect($a1, $a2, "compare");

echo "<pre>";
print_r($newArray6);
echo "</pre>";

/* --------Match Both Value And Key With Two Different Functions----------- */
function compareValue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$newArray7 = array_uintersect_uassoc($a1, $a2, "compare", "compareValue");

echo "<pre>";
print_r($newArray7);
echo "</pre>";
?>