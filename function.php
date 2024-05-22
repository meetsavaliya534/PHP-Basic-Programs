<?php
//PHP Function
//function without parameter
function demo(){
    echo "Hello World";
}
demo();
echo "<br/>";
echo "<br/>";
//function with parameter
function name($name){
    echo "Hello $name";

}
name("Meet");
echo "<br/>";
echo "<br/>";

function add($a,$b){
    $c = $a + $b;
    return $c;
}
echo add(20,10);
echo "<br/>";
echo "<br/>";

function sub($a,$b){
    $c = $a - $b;
    return $c;
}
echo sub(10,20);
echo "<br/>";
echo "<br/>";

?>