<?php

$personnage = [
    'name' => 'Dustin',
    'age' => 15,
    'city' => 'Hawkins',
    'job' => 'Student'
];

foreach ($personnage as $key => $value){
    echo "<strong>$key</strong> : $value<br>";
}

?>