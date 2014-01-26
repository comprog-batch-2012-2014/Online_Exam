<?php 
	include_once('config.php');
	include_once('UserDAO.php');
	(isset($_POST['email']) ? $_POST['email']: "");

	$fname = (isset($_POST['fname']) ? $_POST['fname']: "");
	$mname = (isset($_POST['mname']) ? $_POST['mname']: "");
	$lname = (isset($_POST['lname']) ? $_POST['lname']: "");
	$emailadd = (isset($_POST['emailadd']) ? $_POST['emailadd']: "");
	$password = (isset($_POST['password']) ? $_POST['password']: "");
	$con_password = (isset($_POST['con_password']) ? $_POST['con_password']: "");

	if($fname == ""){
		echo json_encode(
			array(
				'result'=> 'Your First Name is Invalid',
				'valid'=> false
				)
			);
	}elseif($mname == ""){
		echo json_encode(
			array(
				'result'=> 'Your Middle Name is Invalid',
				'valid'=> false
				)
			);
	}elseif ($lname == "") {
		echo json_encode(
			array(
				'result'=> 'Your Last Name is Invalid',
				'valid'=> false
				)
			);	
	}elseif ($emailadd == "") {
		echo json_encode(
			array(
				'result'=> 'Your Emailadd is Invalid',
				'valid'=> false
				)
			);	
	}elseif ($password == "") {
		echo json_encode(
			array(
				'result'=> 'Your Password name is Invalid',
				'valid'=> false
				)
			);
	}elseif ($con_password == "") {
		echo json_encode(
			array(
				'result'=> 'Your Confirm Password is Invalid',
				'valid'=> false
				)
			);
	}elseif($con_password != $password){
		echo json_encode(
			array(
				'result'=> 'Your Password and Confirm Password is not match',
				'valid'=> false
				)
			);
	}else{
		$isInsert = UserDAO::register($fname, $mname, $lname, $emailadd, sha1($password));
		if($isInsert){
			echo json_encode(
				array(
					'result'=> '"You successfully register"',
					'valid'=> $isInsert
					)
				);
		}else{
			echo json_encode(
				array(
					'result'=> 'Unsuccessfully register',
					'valid'=> $isInsert
					)
				);
		}
	}

 ?>