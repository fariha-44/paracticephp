<?php
echo"welcome-array</br>";

$student_info = array (
    "id" => 234,
    "name" => "ikraan mohamed",
    "age" => 20,
    "address" => "Hodan District",
    "status" => "single",
    "weight" => 46.5
);

print_r ($student_info);

echo "<br>";

echo $student_info['address'];

echo "<br>";


$students = array (
    array (101, "Mohamed", 20, "single"),
    array (102, "Abdi", 30, "single"),
    array (103, "Jamac", 33, "married"),
    array (104, "Amina", 40, "single"),
    array (105, "Farah", 50, "married")
);

print_r($students);

echo "<br>";

echo $students[2][1]; 

echo "<br>";

echo $students[3][4]; 

echo "<br>";

foreach ($students as $info) {
    foreach ($info as $value) {
        echo "$value, ";
    }
    echo "<br>";
}

?>