<?php 
function NumberOf1($n){
	$count=0;
	for ($i=0; $i < 32; $i++) { 
		if(($n >> $i) & 1){
			$count++;
		}
	}
	return $count;
}
echo NumberOf1(10);
?>