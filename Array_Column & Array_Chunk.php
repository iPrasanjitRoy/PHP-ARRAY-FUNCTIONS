<?php
/*------------Array_Column------------ */
// Sample Multi Dimensional Array
$students = array(
    array('id' => 1, 'name' => 'John', 'age' => 20),
    array('id' => 2, 'name' => 'Jane', 'age' => 25),
    array('id' => 3, 'name' => 'Doe', 'age' => 30),
);

// Get An Array Of Names From The 'Name' Column
$names = array_column($students, 'name');

echo "<pre>";
print_r($names);
echo "</pre>";

/* ------With 3RD Parameter AS A Key------ */
$namesById = array_column($students, 'name', 'id');

echo "<pre>";
print_r($namesById);
echo "</pre>";



/* -------Array Chunk------- */
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$chunks = array_chunk($numbers, 3);

echo "<pre>";
print_r($chunks);
echo "</pre>";

$chunksWithKeys = array_chunk($numbers, 3, true);

echo "<pre>";
print_r($chunksWithKeys);
echo "</pre>";


?>