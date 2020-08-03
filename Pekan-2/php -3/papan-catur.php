<?php

function papan_catur($angka) {
// tulis kode di sini
	for ($i=0; $i < $angka ; $i++) { 
		for($j=0;$j<($angka*2)-1;$j++){
			if($j%2==1 && $i%2==1){
			echo " # ";
			}
			else if ($j%2==0 && $i%2 ==0){
				echo " # ";
			}else{
				echo " ";
			}
		}
		echo "<br>";
	}
}

// TEST CASES
echo papan_catur(4)."<br>"; 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)."<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5)."<br>" ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/