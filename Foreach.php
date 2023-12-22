<?php
$colors = [
    "Red",
    "Green",
    "Blue"
];

foreach ($colors as $value) {
    echo $value . "<br>";
}

$age = [
    "Bill" => 25,
    "Steve" => 30,
    "Elon" => 20,
];

foreach ($age as $value) {
    echo "$value <br>";
}


echo "<ul>";
foreach ($age as $key => $value) {
    echo "<li>$key = $value </li>";
}
echo "</ul>";



?>