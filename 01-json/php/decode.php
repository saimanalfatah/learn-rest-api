<?php 
	$data = file_get_contents('../mahasiswa.json');
	$mahasiswa = json_decode($data, true); //parameer true untuk array, kosong untuk object
	// var_dump($mahasiswa);
	echo $mahasiswa[0]["pembimbing"]["pembimbing2"];
 ?>