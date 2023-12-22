<?php
$studentx = array(
    'name' => 'John',
    'age' => 20,
    'grade' => 'A',
    'is_active' => true
);
$student = [
    'Name' => 'John',
    'Age' => 20,
    'Grade' => 'A',
    'is_active' => true
];


echo "Name: " . $student['Name'] . "<br>";
echo "Age: " . $student['Age'] . "<br>";
echo "Grade: " . $student['Grade'] . "<br>";
echo "Is Active: " . ($student['is_active'] ? 'Yes' : 'No') . "<br>";


$student['Age'] = 30;


$student['Gender'] = 'Male';


echo "<pre>";
print_r($student);
echo "</pre>";


echo "<ul>";
foreach ($student as $key => $value) {
    echo "<li>$key: $value</li>";
}
echo "</ul>";


echo "<pre>";
var_dump($student);
echo "</pre>";
?>