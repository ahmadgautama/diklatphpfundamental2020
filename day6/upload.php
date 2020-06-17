<?php

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

$fileSize = $_FILES['berkas']['size'];

if($fileSize > 500000) {
	echo 'File Size maksimal 500Kb';
} else {
	// ambil data file
	$namaFile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];

	// tentukan lokasi file akan dipindahkan
	$dirUpload = "file_upload/";

	// pindahkan file
	$file_upload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

	if ($file_upload) {
	    echo "Upload berhasil!<br/>";
	    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
	} else {
	    echo "Upload Gagal!";
	}
}



?>