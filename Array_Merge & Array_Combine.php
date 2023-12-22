<?php
/* Array_Merge To Merge Two Indexed Arrays */
$fruit = ["Orange", "Banana", "Grapes"];
$veggie = ['Carrot', 'Pea'];

$newArray = array_merge($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";


/* -------------Multiple Array Merge -------------------- */
$color = ['Red', 'Blue'];

$newArray = array_merge($fruit, $veggie, $color);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* ------------ASSOCIATIVE Index Array------------------ */
$fruit = ['A' => "Orange", 'B' => "Banana", 'C' => "Grapes"];
$veggie = ['D' => 'Carrot', 'E' => 'Pea', 1 => 1, 2 => "Tomato"];

$newArray = array_merge($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* In PHP, When You Use Array_Merge With Arrays That Have The Same Keys, The Values From The Later Arrays Overwrite The Values From The Earlier Arrays */
$fruit = ['A' => "Orange", 'B' => "Banana", 'C' => "Grapes"];
$veggie = ['A' => 'Carrot', 'D' => 'Pea']; /* ---- Also With SAME KEY */
$newArray = array_merge($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* -------------Numberic Value Enter----------------- */
$fruit = ['A' => "Orange", 'B' => "Banana", 'C' => "Grapes"];
$veggie = ['D' => 'Carrot', 'E' => 'Pea', 55, 100];
$newArray = array_merge($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* ---------If U Want The Duplicate Key Entry Of First Array---------- */
$fruit = ['A' => "Orange", 'B' => "Banana", 'C' => "Grapes"];
$veggie = ['A' => 'Carrot', 'D' => 'Pea', 55, 100];
$newArray = $fruit + $veggie;

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* ----------Array_Merge_Recursive-------------- */
/* Array_Merge_Recursive() Function Merges One Or More Arrays Into One Array. */
/* The Difference Between This Function And The Array_Merge() Function Is When Two Or More Array Elements Have The Same Key. Instead Of Override The Keys, The Array_Merge_Recursive() Function Makes The Value As An Array.*/

$fruit = ['A' => "Orange", 'B' => "Banana", 'C' => "Grapes"];
$veggie = ['A' => 'Carrot', 'D' => 'Pea', 55, 100];


$newArray = array_merge_recursive($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";


$fruit = ['A' => "Orange", 'B' => "Banana", 'C' => "Grapes"];
$veggie = ['B' => ['Color' => ['Red', 'Blue', 'Green']],
    'E' => 'Pea',
    55,
    105
];

$newArray = array_merge_recursive($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* --------Array Combine-------- */
/* Array_Combine To Create An Associative Array From Two Arrays */
$name = array("Ram", "Mohan", "Salman");
$age = array("50", "100", "105");

$newArray = array_combine($name, $age);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>