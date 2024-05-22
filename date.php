<?php

$tz = 'Asia/Kolkata';
date_default_timezone_set($tz);
$today = date("d/m/Y D");
echo "Today is $today";
echo "</br>";
echo date("h:i:s")."<br>";
echo date("F d, Y h:i:s A")."<br>";
echo date("h:i a")."<br>";

$timestamp = time();
echo "Timestamp value:",$timestamp."<br>";
echo date('d-m-Y h:i:s a', $timestamp)."<br>";
?>