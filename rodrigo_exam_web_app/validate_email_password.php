<?php 
	include_once('config.php');
	include_once('UserDAO.php');

	$emailadd = (isset($_POST['email']) ? $_POST['email']: "");
	$password = (isset($_POST['pass']) ? sha1($_POST['pass']): "");

	if($emailadd == "" && $password){
		echo json_encode(
				array(
					'result'=>'Your emailadd is Invalid',
					'is_user'=> false
					)
			);
	}elseif($password == "" && $emailadd){
		echo json_encode(
				array(
					'result'=>'Your password is Invalid',
					'is_user'=> false
					)
			);
	}elseif($password == "" && $emailadd == ""){
		echo json_encode(
				array(
					'result'=>'The emailadd and password is Invalid',
					'is_user'=> false
					)
			);
	}else{
		$user = UserDAO::isUser($emailadd, $password);
		
		if($user != false){
			echo json_encode(
					array(
						'result'=>'"You successfully login"',
						'id_no'=> $user['user_id'],
						'fname'=> $user['user_fname'],
						'mname'=> $user['user_mname'],
						'lname'=> $user['user_lname'],
						'is_user'=> true
						)
				);
		}else{
			echo json_encode(
					array(
						'result'=>'Either Email and Password was incorrect',
						'is_user'=> false
						)
				);
		}
	}
 ?>