<html>
<head>
</head>
<body>
<?php

$color1="red";
$color2="yellow";
$color3="green";

echo $color1;

$colors=array("red","yellow","green","blue"); 

//echo $colors; // dont't print array by echo

//print_r($colors);

//echo $colors[1]."<br>";

foreach($colors as $value)
{
	echo "color is :".$value."<br>";
}
?>
</body>
</html>