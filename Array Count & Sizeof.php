<?php
$food = array('Orange', 'Banana', 'Apple');

echo count($food) . '<br>';

$food1 = array(
    'fruits' => array('Orange', 'Banana', 'Apple'),
    'veggie' => array('Carrot', 'Collard', 'Pea')
);

echo sizeof($food1, 1) . '<br>';

echo sizeof($food1['fruits'], 1) . '<br>';


$len = count($food);
for ($i = 0; $i < $len; $i++) {
    echo $food[$i] . "<br>";
}

$food2 = array('Orange', 'Banana', 'Orange', 'Apple');

echo "<pre>";
print_r(array_count_values($food2));
echo "</pre>";
?>