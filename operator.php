<?php
//operators in php
//Arithmetic operators
// +,-,*,/,%\
echo "Arithmetic operators";
echo "<br/>";
echo "A = 5, B = 10";
echo "<br/>";
$a = 5;
$b = 10;
$c = $a+$b;
echo "addition: ".$c;
echo "<br/>";
$c = $a-$b;
echo "subtraction: ".$c;
echo "<br/>";
$c = $a*$b;
echo "multiplication: ".$c;
echo "<br/>";
$c = $a/$b;
echo "division: ".$c;
echo "<br/>";
$c = $a%$b;
echo "modulus: ".$c;
echo "<br/>";
echo "<br/>";

//logical operators
echo "logical operators";
echo "<br/>";
$a = true;
$b = false;
$c = ($a AND $b);
echo "logical and: ".$c;
echo "<br/>";
$c = ($a OR $b);
echo "logical or: ".$c;
echo "<br/>";
$c = ($a XOR $b);
echo "logical xor: ".$c;
echo "<br/>";
echo "<br/>";

//comparison operators
echo "comparison operators";
echo "<br/>";
$a = 5;
$b = 10;
$c = ($a==$b);
echo "equal to: ".$c;
echo "<br/>";
$c = ($a!=$b);
echo "not equal to: ".$c;
echo "<br/>";
$c = ($a>$b);
echo "greater than: ".$c;
echo "<br/>";
$c = ($a<$b);
echo "less than: ".$c;
echo "<br/>";

?>