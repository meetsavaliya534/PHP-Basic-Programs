<?php
// Define an indexed array
$colors = array("red", "green", "blue");
echo $colors[0]."</br>";

$colors[0] = "Red";
$colors[1] = "Green";
$colors[2] = "Blue";
echo $colors[2]."</br>";

// Define an associative array
$ages = array("Peter"=>22, "clark"=>32, "John"=>28);
echo $ages["Peter"]."</br>";

$ages["Peter"] = 22;
$ages["Clark"] = 32;
$ages["John"] = 28;
echo $ages["Clark"]."</br>";

// define a multidimensional array

$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clark@mail.com",
    ),
)
?>