<?php
	include_once('config.php');

	class UserDAO{
		public static function isUser($emailadd, $password){
			global $db;
			$query = "SELECT user_id, user_fname, user_mname, user_lname FROM users WHERE user_emailadd IN('$emailadd') AND user_password IN('$password')";
			$result = $db->query($query);
			if($result->num_rows != 0){
				return $result->fetch_assoc();
			}else{
				return false;
			}
		}

		public static function saveScore($id, $score){
			global $db;
			$query = "INSERT INTO exam(score, exam_date_taken, exam_time_taken, user_id_fk) VALUES('$score', CURRENT_DATE, CURRENT_TIME, '$id')";
			$result = $db->query($query);
			if($result){
				return true;
			}else{
				return false;
			}
		}

		public static function getRecord($id){
			global $db;
			$query = "SELECT user_fname, user_lname, score, exam_date_taken, exam_time_taken FROM users AS u join exam AS e WHERE u.user_id = e.user_id_fk AND u.user_id = '$id'";
			$result = $db->query($query);
			$record = array();
			while($rec = $result->fetch_assoc()){
				$record[] = $rec;
			}
			$result->free();
			return $record;
		}

		public static function register($fname, $mname, $lname, $emailadd, $password){
			global $db;			
			$query = "INSERT INTO users(user_fname, user_mname, user_lname, user_emailadd, user_password) VALUES('$fname', '$mname', '$lname', '$emailadd', '$password')";
			$result = $db->query($query);
			if($result){
				return true;
			}else{
				return false;
			}
		}
	}
 ?>