<?php 

	$db = mysqli_connect('localhost', 'root', '', 'khelahobe');

	if($db){
		// echo 'Datebase Connection Established';
	}else{
		die('Datebase Connection Error!'.mysqli_error($db));
	}

?>