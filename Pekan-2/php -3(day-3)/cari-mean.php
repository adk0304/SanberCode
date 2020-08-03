<?php

function cari_mean($arr){
//kode di sini
	$count = count($arr);
	$sum = array_sum($arr);
	$mean = $sum/$count;
	return $mean;
}

echo cari_mean([1, 2, 3, 4, 5]); // 3
echo "<br>".cari_mean([3, 5, 7, 5, 3]); // 5
echo "<br>".cari_mean([6, 5, 4, 7, 3]); // 5
echo "<br>".cari_mean([1, 3, 3]); // 2
echo "<br>".cari_mean([7, 7, 7, 7, 7]); // 7

?>