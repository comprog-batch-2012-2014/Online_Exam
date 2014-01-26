<?php 
	include_once('config.php');
	include_once('UserDAO.php');

	$score = $_POST['no_correct'];
	$id = $_POST['id_no'];
	$result = UserDAO::saveScore($id, $score);
	$record = UserDAO::getRecord($id);

	if($result){
		echo json_encode(
			array(
				'result'=> 'success',
				'record'=> $record
				)
			);
	}else{
		echo json_encode(
			array(
				'result'=> 'fail'
				)
			);
	}
 ?>