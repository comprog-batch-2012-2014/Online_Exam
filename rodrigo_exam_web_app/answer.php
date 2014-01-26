<?php 
	$answer = array(0, 'd', 'a', 'a', 'b', 'b', 'a', 'c', 'c', 'b', 'a');
	$no_question = $_GET['num'];

	$is_correct = (($answer[$no_question] == $_GET['ans']) ? true:false);

	echo json_encode(
		array('is_correct'=> $is_correct)
		);

 ?>