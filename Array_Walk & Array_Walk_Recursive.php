<?php
/* -------Array Walk-------*/
$fruits = array(
    "A" => "Lemon",
    "B" => "Orange",
    "C" => "Banana",
    "D" => "Apple"
);

array_walk($fruits, "myFunction");

function myFunction($value, $key)
{
    echo "$key : $value <br><br>";
}

array_walk($fruits, "myFunction1", "IS A Key Of");

function myFunction1($value, $key, $param)
{
    echo "$key $param $value <br>";
}

/* -------Array_Walk_Recursive-------*/


$veggie = array("1" => "Carrot", "2" => "Tomatoes");

$fruits1 = array(
    $veggie,
    "A" => "Lemon",
    "B" => "Orange",
    "C" => "Banana",
    "D" => "Apple"
);

array_walk_recursive($fruits1, "myFunction2", "IS A Key Of");

function myFunction2($value, $key, $param)
{
    echo "$key $param $value <br>";
}
?>