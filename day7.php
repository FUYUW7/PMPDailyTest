<?php 
$res=GetUglyNumber_Solution(12);
var_dump($res);

function GetUglyNumber_Solution($n){
	while($n%2==0){
		$n=$n/2;
	}
	while($n%3==0){
		$n=$n/3;
	}
	while($n%5==0){
		$n=$n/5;
	}
	if($n==1){
		return 'yes';
	}else{
		return 'no';
	}
}

?>