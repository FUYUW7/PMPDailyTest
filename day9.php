<?php 

$res=PrintMinNumber([2,4,1]);

function PrintMinNumber($numbers){
	$num=count($numbers);
	for ($i=0; $i <$num ; $i++){ 
		for ($j=$i+1; $j <$num ; $j++){ 
			if(intval($numbers[$i].''.$numbers[$j])>intval($numbers[$j].''.$numbers[$i])){
				$temp=$numbers[$i];
				$numbers[$i]=$numbers[$j];
				$numbers[$j]=$temp;
			}
		}
	}
	$res=implode('', $numbers);
	var_dump($res);
}