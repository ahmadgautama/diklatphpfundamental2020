<?php
	$nilai = [
		'tono' => ['matematika' => 70, 'fisika' => 80, 'biologi' => 60],
		'gadis' => ['matematika' => 80, 'fisika' => 90, 'biologi' => 40],
		'budi' => ['matematika' => 100, 'fisika' => 52, 'biologi' => 90],
	];
	
	echo 'Nilai matematika tono adalah '.$nilai['tono']['matematika'];
	
	echo '<br><br>Cetak menggunakan foreach : <br>';
	foreach ($nilai as $key => $value){
		foreach ($value as $k => $v){
			echo 'Nilai '.$k.' ' .$key.' adalah ' .$v.'<br>';
		}
		echo '<br>';
	}
	