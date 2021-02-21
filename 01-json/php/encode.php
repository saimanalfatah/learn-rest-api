<?php 
	/*$mahasiswa = [
		[
			"nama" => "Saiman Al-Fatah",
			"nim" => "1555201350",
			"email" => "saimanalfatah212@gmail.com"
		],
		[
			"nama" => "Takumi Minamino",
			"nim" => "1555201355",
			"email" => "minokun@gmail.com"
		]
	];*/

	$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
	$db = $dbh->prepare('SELECT * FROM mahasiswa');
	$db->execute();
	$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);
	
	$data = json_encode($mahasiswa);
	echo $data;

 ?>