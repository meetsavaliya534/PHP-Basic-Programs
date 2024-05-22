<?php
//array sorting in ascending order
echo "Array sorting in ascending order";
echo "</br>";
$num = array(1,5,6,8,9,2,200,12,563,4998,5226,21,12,35);
sort($num);
foreach($num as $n)
{
    echo $n." ";
}
echo "</br>";

//array find max from an array
echo "Array find max from an array::";
echo "</br>";
$num = array(1,5,6,8,9,2,200,12,563,4998,5226,21,12,35);
echo max($num);
echo "</br>";

//array find min from an array
echo "Array find min from an array::";
echo "</br>";
$num = array(1,5,6,8,9,2,200,12,563,4998,5226,21,12,35);
echo min($num);
echo "</br>";

//array find element and replace
echo "Array find element and replace::";
echo "</br>";
$num = array(1,5,6,8,9,2,200,12,563,4998,5226,21,12,35);
$index = array_search(563,$num);
echo $index;
echo "</br>";
$num[$index] = 1000;
foreach($num as $n)
{
    echo $n." ";
}
echo "</br>";

//sum of element
echo "Sum of elements::";
echo "</br>";
$num = array(1,5,6,8,9,2,200,12,563,4998,5226,21,12,35);
echo array_sum($num);
echo "</br>";

//prime or armstrong

// print triangle pattern

$a = 10;
for($i = 1; $i <= $a; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo "* ";
    }
    echo "<br/>";
}
//print piramid pattern
for($i = 1; $i <= $a; $i++)




?>
