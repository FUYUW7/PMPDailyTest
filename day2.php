<?php 

$n=153;
$res=flower($n);
var_dump($res);

function flower($n){
	$num=0;
	$g=intval($n%100%10);
	// return $g;exit;
	$s=intval($n/10%10);
	// return $s;exit;
	$b=floatval($n/100%10);
	// return $b;exit;
	$num=pow($b,3)+pow($s, 3)+pow($g, 3);
	// return $num;
	if($num==$n){
		return true;
	}else{
		return false;
	}
}

?>