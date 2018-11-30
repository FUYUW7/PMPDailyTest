<?php 
$res=fbnq(3);

function fbnq($m){
	$arr=[];
	for ($i=0; $i <=$m ; $i++) { 
		if($i==0){
			$arr[$i]=0;
			continue;
		}
		if($i==1){
			$arr[$i]=1;
			continue;
		}else{
			$arr[]=$arr[$i-1]+$arr[$i-2];
		}
		if($i==$m){
			print_r($arr[$i]);
		}
	}
}

?>