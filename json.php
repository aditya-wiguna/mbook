<?php

	$buku = array('Pemrograman php', 'WEN', 'To Founder');

	$jsonBuku = json_encode($buku);

	$b = json_decode($jsonBuku);

	// print_r($b);

	echo $jsonBuku;

?>