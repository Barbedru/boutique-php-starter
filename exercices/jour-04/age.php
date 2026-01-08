<?php

$age = 33;

if ($age < 18) {
    echo "Minor";
} elseif ($age >= 18 && $age <=25) {
    echo"Young adult";
} elseif ($age >=26 && $age <= 64) {
    echo"Adult";
} elseif ($age >= 65) {
    echo"Senior";
}

?>
