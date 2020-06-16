<?php
	function penjumlahan ($a=1, $b=5){
		$c = $a + $b;
		return 'Hasil penjumlahan '.$a.' dan '.$b.' adalah '.$c;
	}
	
	function pengurangan ($a, $b){
		$c = $a - $b;
		return '<br>Hasil pengurangan '.$a.' dan '.$b.' adalah '.$c;
	}
	
	function shift_up($gigi = 'N'){
		if($gigi == 'N') $gigi = 1;
		else $gigi = $gigi +1;
		return 'Gigi Mobil = '.$gigi;
	}
	
	$math = penjumlahan();
	$rs = shift_up(2);
	echo $math;
?>