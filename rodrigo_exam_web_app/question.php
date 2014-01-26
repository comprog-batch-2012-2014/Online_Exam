<?php 
	$num_question = $_GET['num'];
	$questions = array(0,
					array('What year Steve Job died? ', '2000', '2001', '2002', '2003'),
					array('What level Java included?', 'High Level Language', 'Medium Level Language', 'Low Level Language', 'All of the Above'),
					array('Do you think Java can build GUI', 'Yes', 'No', 'Maybe', 'None of the above'),
					array('What command do you type if you are going to log in', 'mysql -u - p', 'mysql -uroot -p', 'mysql -u - password', 'mysql -uroot -password'),
					array('In mysql, what command do you type if you are going to show all table?', 'show table', 'show tables', 'shows table', 'shows tables'),
					array('What library in Java that can the user input?', 'Scanner', 'JOption', 'import', 'public static'),
					array('What is the sum of 1, 2, 3, ..., 10000', '5000000', '500500005', '50005000', '55005500'),
					array('Who is the father of Python', 'Gibo Teodoro', 'Guido Teodoro', 'Guido van Rossum', 'Guido Ban Rostum'),
					array('How many kilobyte in 3 megabyte', '30000', '3000000', '300000', '3'),
					array('In the following choices, What is a good password', 'R0Dri60_G57UR5', '000111000', 'inday', 'All of the above')
					);

	echo json_encode(
		array(
			'question'=> $questions[$num_question][0],
			'choiceA'=> $questions[$num_question][1],
			'choiceB'=> $questions[$num_question][2],
			'choiceC'=> $questions[$num_question][3],
			'choiceD'=> $questions[$num_question][4],
			)
		);
 ?>