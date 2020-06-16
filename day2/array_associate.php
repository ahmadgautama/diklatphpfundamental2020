<?php
	$gaji = [
		'budi' => 2000000,
		'tono' => 1000000,
		'gadis' => 2500000
	];
	
	echo 'gaji budi = '.$gaji['budi'].'<br>';
	echo 'gaji tono = '.$gaji['tono'].'<br>';
	echo 'gaji gadis = '.$gaji['gadis'].'<br><br>';
	
	echo 'akses pake foreach : <br>';
	foreach ($gaji as $key => $value) {
		echo 'Gaji '.$key.' adalah '.$value.'<br>';
	}
	