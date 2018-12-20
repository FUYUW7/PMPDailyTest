<?php 
var_dump(CountSteps(3,3));
function CountSteps($x,$y){
	$arr=[];
	for ($i=0; $i <=$x ; $i++) { 
		for ($j=0; $j <=$y ; $j++) { 
			if($i==0 || $j==0){
				$arr[$i][$j]=1;
			}else{
				$arr[$i][$j]=$arr[$i-1][$j]+$arr[$i][$j-1];
			}
		}
	}
	return $arr[$x][$y];
}

?>