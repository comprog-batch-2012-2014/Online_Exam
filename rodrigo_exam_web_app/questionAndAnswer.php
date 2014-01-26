<?php 
	$num_question = $_GET['num'];
	$answer = '';
	$questions = array(0,
					array('Who is a', 'a1', 'b1', 'c1', 'd1'),
					array('Who is b', 'a2', 'b2', 'c2', 'd2'),
					array('Who is c', 'a3', 'b3', 'c3', 'd3'),
					array('Who is d', 'a4', 'b4', 'c4', 'd4'),
					array('Who is e', 'a5', 'b5', 'c5', 'd5'),
					array('Who is f', 'a6', 'b6', 'c6', 'd6'),
					array('Who is g', 'a7', 'b7', 'c7', 'd7'),
					array('Who is h', 'a8', 'b8', 'c8', 'd8'),
					array('Who is i', 'a9', 'b9', 'c9', 'd9'),
					array('Who is j', 'a10', 'b10', 'c10', 'd10')
					);
	switch($_GET['answer']){
		case 'a':
			$answer = 'a';
			break;
		case 'b':
			$answer = 'b';
			break;
		case 'c':
			$answer = 'c';
			break;
		case 'd':
			$answer = 'd';
			break;
		default: 
			$answer = 'none';
	}

	$is_correct = (($answer == $questions[$num_question][5]) ? true:false);

	echo json_encode(
		array(
			'question'=> $questions[$num_question][0],
			'choiceA'=> $questions[$num_question][1],
			'choiceB'=> $questions[$num_question][2],
			'choiceC'=> $questions[$num_question][3],
			'choiceD'=> $questions[$num_question][4],
			'is_correct'=> $is_correct
			)
		);
 ?>