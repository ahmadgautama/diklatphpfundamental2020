<html> 
<body> 
<?php 
	/*$d = date("D"); 
	//var_dump($d);

	if ($d == "Fri") {
		echo "Have a nice weekend!"; 
	} else if ($d == "Wed"){
		echo "Today is Wednesday";
	} else {
		echo "Have a nice day!"; 
	}*/
	
	$nilai_akhir = 99;
	echo 'Nilai Akhir anda = '.$nilai_akhir.'<br>';
	/*
	Persyaratannya :
	A = 90 sd 100
	B = 80 sd 89
	C = 70 sd 79
	D = < 70
	*/
	
	if ($nilai_akhir >=90 && $nilai_akhir <=100) {
		echo 'Nilai Anda A';
	} else if ($nilai_akhir >=80 && $nilai_akhir <=89) {
		echo 'Nilai Anda B';
	}
	
?> 
</body> 
</html>