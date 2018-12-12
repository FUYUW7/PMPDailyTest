<?php 
$res=Add(3,5);
var_dump($res);

function Add($num1, $num2) {
	$sum=$num1+$num2;
	return $sum;
}

?>