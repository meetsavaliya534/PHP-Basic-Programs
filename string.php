<?php
$str="Marwadi UNIversity!";
$str=strtolower($str);
echo $str."<br/>";

$str="Marwadi University!";
$str=strtoupper($str);
echo $str."<br/>";

$str="Marwadi University!";
$str=strrev($str);
echo $str."<br/>";

$str="Marwadi University!";
$str=strlen($str);
echo $str."<br/>";

echo str_word_count("Marwadi University!")."<br/>";

echo strpos("Marwadi University!","University")."<br/>";

echo str_replace("world","Marwadi University!","Hello world")."<br/>";

?>