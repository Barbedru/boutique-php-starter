<?php

$name = "there";

function greet(){
    echo "Bienvenue sur la boutique !";
}

function greetClient($name){
    echo "Hello $name !";
}
greetClient($name);
greet($name);
greetClient("LE S");
?>