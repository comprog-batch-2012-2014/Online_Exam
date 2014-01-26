<?php 
	$config = array(
		'host'=> 'localhost',
		'user'=> 'root',
		'pass'=> '',
		'database'=> 'db_rodrigo_exam_web_app'
		);

	$db = new mysqli(
		$config['host'],
		$config['user'],
		$config['pass'],
		$config['database']
		);

	if(mysqli_connect_errno()){
		echo 'There something wrong in connecting database, Please Try Again Later';
		exit;
	}

 ?>