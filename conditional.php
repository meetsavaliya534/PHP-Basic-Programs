<?php
//conditional statements
//if,if-else,if-elseif-else,switch
//if
$x = date("H");
	if($x <12)
	{
		echo "Good Morning::";
	}
echo "<br/>";
echo "<br/>";
//if-else
$x = date("H");
	if($x <12)
	{
		echo "Good Morning::";
	}
	else
	{
		echo "Good afternoon";
	}

echo "<br/>";
echo "<br/>";
//if-elseif-else
$x = date("H");
	if($x < 12)
	{
		echo "Good Morning::";
	}
	elseif($x > 12 && $x < 18)
    {
        echo "Good Afternoon";
    }
    if($x > 18)
    {
        echo "Good Night";
    }
echo "<br/>";
echo "<br/>";

//switch
echo "Switch Case";
echo "<br/>";
$day = 1;
switch($day){
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid";
        break;
}

?>