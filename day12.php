<?php 
$res=Sum_Solution(5);
var_dump($res);
function Sum_Solution($n){
	$num=$n;
	$n!=1 && $num=$n+Sum_Solution($n-1); 
	return $num;
} 

?>