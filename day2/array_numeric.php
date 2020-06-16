<?php
	/*$array = array (1,2,3,4,5);
	$lengthArray = count ($array);
	echo 'panjang array = '.$lengthArray,' <br>';
	echo 'Akses indek ke 0 = '.$array[0].'<br>';
	
	foreach($array as $value){
		
		if ($value == 1)
			continue;
			
			echo 'value = '.$value.', ';
		}*/
	
	/*First metode to associate create array*/
	$numbers = array (1,2,3,4,5);
	
	foreach ($numbers as $value){
		echo 'value is '.$value.'<br>';		
	}
	
	echo '<br>';
	
	/*Second Method to create array*/
	$numbers [0] = 'one';
	$numbers [1] = 'two';
	$numbers [2] = 'three';
	$numbers [3] = 'four';
	$numbers [4] = 'five';

	foreach ($numbers as $value){
		echo 'value is '.$value.'<br>';		
	}
	
	echo '<br>';
	
	/*Third Method to create array*/
	$data = [1,2,3,4,5, 'budi', 'tono'];
	
	foreach ($data as $key => $val){
		echo 'value index ke '.$key.' = '.$val.'<br>';	
	}
	
	echo '<br>';
	
	/*forth Method to create array*/
	$numbers [0] = 'satu';
	$numbers [1] = 'dua';
	$numbers [2] = 'tiga';
	array_push ($numbers,'empat');
	array_push ($numbers,'lima');

	foreach ($numbers as $key => $value){
		echo 'value index ke '.$key.' = '.$value.'<br>';		
	}
	
	
	
	
	
	