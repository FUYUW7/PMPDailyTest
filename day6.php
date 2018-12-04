<?php 
$res=calFn(1,13);
var_dump($res);
function calFn($n,$m){
	$num=0;
	$sum=0;
	for ($i=$n; $i <=$m ; $i++) { 
		$number=$i;
		while ($number) {
			$num=($number%10);
			if($num==1){
				$sum++;
				// echo $sum;
			}
			$number=floor($number/10);
			// echo $number;
		}
		
	}
	return $sum;
}

?>