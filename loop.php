<?php
//loops
// while loop
echo "While Loop::";
echo "<br/>";
$a = 1;
while ($a <= 10) {
    echo $a;
    echo " ";
    $a++;
}
echo "<br/>";
echo "do-while loop::";
echo "<br/>";
//do...while loop
$b = 10;
do {
    echo $b;
    echo " ";
    $b++;
} while ($b <= 20);
echo "<br/>";

//for loop
echo "For Loop::";
echo "<br/>";
for ($c = 20; $c <= 30; $c++) {
    echo $c;
    echo " ";
}
echo "<br/>";
//foreach loop
echo "Foreach Loop::";
echo "<br/>";
$car = array("BMW", "Lamborghini", "Ferrari", "Audi", "Mercedes", "Porsche");
foreach ($car as $names) {
    echo $names;
    echo " ";
}
echo "<br/>";
foreach ($car as $key => $value) {
    echo $key . " " . $value;
    echo "<br/>";
}

?>