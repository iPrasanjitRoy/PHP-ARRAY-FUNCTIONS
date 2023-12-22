<?php
$marks = [
    "Krishna" => [
        "Physics" => 85,
        "Maths" => 80,
        "Chemistry" => 90
    ],
    "Salman" => [
        "Physics" => 60,
        "Maths" => 75,
        "Chemistry" => 75
    ],
    "Mohan" => [
        "Physics" => 60,
        "Maths" => 65,
        "Chemistry" => 90
    ]
];

echo "<pre>";
print_r($marks);
echo "</pre>";


foreach ($marks as $key => $v1) {
    echo $key;
    foreach ($v1 as $v2) {
        echo $v2 . " ";
    }
    echo "</br>";
}


/* Table Representation  */
echo "<table border='2px' cellpadding='5px' cellspacing='0'>
    <tr>
        <th>Student Name</th>
        <th>Physics</th>
        <th>Math</th>
        <th>Chemistry</th>
    </tr>";
foreach ($marks as $key => $v1) {
    echo "<tr>
          <td>$key</td>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";


?>