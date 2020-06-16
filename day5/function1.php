<?php
	function penjumlahan ($a, $b){
		$c = $a + $b;
		return 'Hasil penjumlahan '.$a.' dan '.$b.' adalah '.$c;
	}
	
	function pengurangan ($a, $b){
		$c = $a - $b;
		return '<br>Hasil pengurangan '.$a.' dan '.$b.' adalah '.$c;
	}
	
	function perkalian ($a, $b){
		$c = $a * $b;
		return '<br>Hasil perkalian '.$a.' dan '.$b.' adalah '.$c;
	}
	
	function pembagian ($a, $b){
		$c = $a / $b;
		return '<br>Hasil pembagian '.$a.' dan '.$b.' adalah '.$c;
	}
	
	$x = 50;
	$y = 10;
	$hasil = penjumlahan($x, $y);
	echo $hasil;
	
	$x = 50;
	$y = 10;
	$hasil = pengurangan($x, $y);
	echo $hasil;
	
	$x = 50;
	$y = 10;
	$hasil = perkalian($x, $y);
	echo $hasil;
	
	$x = 50;
	$y = 10;
	$hasil = pembagian($x, $y);
	echo $hasil;
?>