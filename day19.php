<?php 
$arr=[1,2,4,5,7,8,9,11,13];
//对半查询
$res=dailyOne($arr,7);
// var_dump($res);
function dailyOne($arr,$n){
	$count=count($arr);
	$i=floor($count/2);
	while ($n!=$arr[$i]) {
		if($arr[$i]>$i){
			$i=floor($i/2);
		}
		if($arr[$i]<$i){
			$i=floor(($i+$count)/2);
		}
	}
	return $i;
}

//递归
$count=count($arr);
$i=floor($count/2);

$data=dailyTwo($arr,4,$i,$count);
var_dump($data);
function dailyTwo($arr,$n,$i,$count){
	if($arr[$i]>$n){
		return dailyTwo($arr,$n,floor($i/2),$count);
	}
	if($arr[$i]<$n){
		return dailyTwo($arr,$n,floor(($i+$count)/2),$count);
	}
	return $i;
}

?>