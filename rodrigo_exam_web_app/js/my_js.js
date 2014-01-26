$(document).ready(function(){
	// Start function for registration
	$('#fname').on('blur', function(){
		if($(this).val() == ""){
			$('#xfname').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}else{
			$('#xfname').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#mname').on('blur', function(){
		if($(this).val() == ""){
			$('#xmname').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}else{
			$('#xmname').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});
		
	$('#lname').on('blur', function(){
		if($(this).val() == ""){
			$('#xlname').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}else{
			$('#xlname').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#emailadd').on('blur', function(){
		if($(this).val() == ""){
			$('#xemailadd').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}else{
			$('#xemailadd').html("<span class = 'icon-question-sign'></span>&nbsp&nbsp");
		}
	});


	$('#password').on('blur', function(){
		if($(this).val().length < 5 || $(this).val() == ""){
			$('#xpassword').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
			alert("Require atleast 5 characters");
		}else{
			$('#xpassword').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#con_password').on('blur', function(){
		if($(this).val() != $('#password').val() || $(this).val() == $('#password').val() && $(this).val().length < 5 || $(this).val() == ""){
			$('#xcon_password').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}else{
			$('#xcon_password').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#validate').on('click', function(){
		var fname =  $('#fname').val();
		var mname = $('#mname').val();
		var lname = $('#lname').val();
		var emailadd = $('#emailadd').val();
		var password = $('#password').val();
		var con_password = $('#con_password').val();
		$.ajax({
			url: 'validate_all.php',
			data: {fname: fname, mname: mname, lname: lname, emailadd: emailadd, password: password, con_password: con_password},
			dataType: 'JSON',
			type: 'POST',

			success:function(r){
				if(r.valid){
					alert(r.result + " " + fname + " " + lname + ". You are now able to login");
				}else{
					alert(r.result);
				}
			}
		});
	});

	// Start function for validation in login
	$('#emailadd-for-modal').on('blur', function(){
		if($(this).val() == ""){
			$('#xemailadd-for-modal').html("<span class = 'icon-remove'></span>");
		}else{
			$('#xemailadd-for-modal').html("<span class = 'icon-ok'></span>");
		}
	});

	$('#password-for-modal').on('blur', function(){
		if($(this).val() == ""){
			$('#xpassword-for-modal').html("<span class = 'icon-remove'></span>");
		}else{
			$('#xpassword-for-modal').html("<span class = 'icon-ok'></span>");
		}
	});
	// End function for validation in login

	$('#reset').on('click', function(){
		$('#xfname').html("");
		$('#xmname').html("");
		$('#xlname').html("");
		$('#xemailadd').html("");
		$('#xpassword').html("");
		$('#xcon_password').html("");
	});
	// End function for registration

	// Start function for submit emailadd and password
	var user_id;
	$('#submit-for-modal').on('click', function(){
		var emailadd = $('#emailadd-for-modal').val();
		var password = $('#password-for-modal').val();
		$.ajax({
			url: 'validate_email_password.php',
			data: {email: emailadd, pass: password},
			dataType: 'JSON',
			type: 'POST',

			success:function(r){
				if(r.is_user){
					$('#loginModal').hide(1000).slideUp(1000);
					$('#greet').slideDown(2000);
					startCountdown(r.fname, r.lname, r.result);
					user_id = r.id_no;
				}else{
					alert(r.result);
				}
			}
		});
	});
	// End function for submit emailadd and password

	// Start function for Countdown
	function startCountdown(fname, lname, greet){
		var setTime = 7;
		var temp = ((greet == "\"You successfully login\"") ? "Please top the screen": "");
		var countdown = setInterval(function(){
			var str = "<center><p style = 'font-size: 60px; font-weight: bold; color: rgb(250, 240, 5); margin-top: 77; font-family: sans;'>"+greet+"</p><br/><br/>\
					<p style = 'font-size: 55px; font-weight: bold; color: orange; font-family: sans;'>"+fname+" "+lname+".</p><p style = 'font-size: 39px; font-weight: bold; color: rgb(250, 249, 248);\
					 font-family: sans;'><br/><br/> Get ready for the quiz. <br/><br/>Wait for a while until finish the count down. <br/><br/>"+temp+"</p>\
					<p style = 'font-size: 192px; font-weight: bold; margin-top: 132; font-family: sans;' id = 'countdown'>"+setTime+"</p></center>";
			$('#greet').html(str);
			setTime--;
			if(setTime == -1){
				clearTimeout(countdown);
				$('#registration').hide(1000);
				$('#greet').fadeOut(2000);
				$('#questions').fadeIn(1000);
				startTime();
				question(1);
			}
				}, 1000);
	}

	function question(num_question){
		// Start Ajax function for showing first question
		$.ajax({
			url: 'question.php',
			data: {num: num_question},
			dataType: 'JSON',
			method: 'GET',

			success:function(r){
				showQuestion(num_question, r.question, r.choiceA, r.choiceB, r.choiceC, r.choiceD);
			}

		});
		// End Ajax function for showing first question
	}

	var timeout;
	function startTime(){
		// Start action for Time
		var min = 10;
		var sec = 0;
		timeout = setInterval(function(){
			if(min == 0 && sec == 0){
				$('#time').html("Time " + min + ":" + sec + "0");
				clearTimeout(timeout);
			}
			if((sec % 60) == 0){
				$('#time').html("Time " + min + ":" + sec + "0");
				min--;
				sec = 59;
			}else if(sec < 10 && sec > 0){
				$('#time').html("Time " + min + ":" + "0" + sec);
				sec--;
			}else{
				$('#time').html("Time " + min + ":" + sec);
				sec--;
			}
		}, 1000);
		// End action for Time
	}

	// Submitting answer and proceed to next question function
	var num_question = 0;
	var correct = 0;
	var answer = 'none';
	$('#choiceARadio').on('click', function(){
		answer = 'a';
	});
	$('#choiceBRadio').on('click', function(){
		answer = 'b';
	});
	$('#choiceCRadio').on('click', function(){
		answer = 'c';
	});
	$('#choiceDRadio').on('click', function(){
		answer = 'd';
	});
	$('#submit-answer').on('click', function(){
		if(answer == 'none'){
			alert("You are not able to proceed in next question while you do not answer the question");
		}else{
			num_question++;
			$.ajax({
				url: 'answer.php',
				data: {ans: answer, num: num_question},
				dataType: 'JSON',
				method: 'GET',

				success:function(r){
					if(r.is_correct){
						$('#'+num_question).html(num_question + " Correct");
						correct++;
					}else{
						$('#'+num_question).html(num_question + " Wrong");
					}
					if(num_question < 10){
						question(num_question+1);
					}else{
						recordAndShowResult(user_id, correct);
						clearTimeout(timeout);
					}
					answer = 'none';
				}
			});
		}	
	});

	// Start function for changing question
	function showQuestion(num ,question, a, b, c, d){
		$('#num').fadeOut(1000).slideDown(1000);
		$('#question').fadeOut(1000).fadeIn(1000);
		$('#choiceA').fadeOut(1000).fadeIn(1000);
		$('#choiceB').fadeOut(1000).fadeIn(1000);
		$('#choiceC').fadeOut(1000).fadeIn(1000);
		$('#choiceD').fadeOut(1000).fadeIn(1000);
		setTimeout(function(){
			$('#num').html("Question #" + num);
			$('#question').html(question);
			$('#choiceA').html(a);
			$('#choiceB').html(b);	
			$('#choiceC').html(c);
			$('#choiceD').html(d);
		}, 1000);
	}
	// End function for changing question

	// Start function for showing result
	function recordAndShowResult(id_no, no_score){
		$.ajax({
			url: 'saveScore.php',
			data: {id_no: id_no, no_correct: no_score},
			dataType: 'JSON',
			type: 'POST',

			success:function(r){
				if(r.result == 'success'){
					str = "";
					var length = r.record.length;
					var score = r.record[length-1]['score'];
					var percentage1 = ((score / 10) * 50 + 50);
					str += "<table class = 'table table-striped'>"
						+ "<caption style = 'font-family: georgia; font-size: 41px; margin: 3px;'>List of your scored</caption>"
						+ "<th>Date</th>"
						+ "<th>Time</th>"
						+ "<th>Score</th>"
						+ "<th>Percentage</th>"
						+ "<th>Result</th>"
						+ "<tr style = 'border: 4px solid rgb(52, 236, 27);'>"
						+ "<td>" + r.record[length-1]['exam_date_taken'] + "</td>"
						+ "<td>" + r.record[length-1]['exam_time_taken'] + "</td>"
						+ "<td>" + score + "</td>"
						+ "<td>" + ((score / 10) * 50 + 50) + "%</td>"
						+ "<td>" + ((percentage1 >= 75) ? "Passed":"Failed") + "</td>"
						+ "</tr>";
					for(i = 0; i < length-1; i++){
						score = r.record[i]['score'];
						percentage2 = ((score / 10) * 50 + 50);
					 	str += "<tr>"
					 		+ "<td>" + r.record[i]['exam_date_taken'] + "</td>"
					 		+ "<td>" + r.record[i]['exam_time_taken'] + "</td>"
					 		+ "<td>" + score + "</td>"
					 		+ "<td>" + ((score / 10) * 50 + 50) + "%</td>"
					 		+ "<td>" + ((percentage2 >= 75) ? "Passed":"Failed") + "</td>"
					 		+ "</tr>";
					}
					str += "</table>";
					$('#questions').fadeOut(1000);
					$('#result').slideDown(2000);
					$('#percent2').html("Result: " + percentage1 + "%");
					$('#fullname').html(r.record[length-1]['user_fname'] + " " + r.record[length-1]['user_lname']);
					$('#tableRecord').html(str);
				}else{
					alert("Not successfully save your score");
				}
			}
		});
	}
	// End function for showing result

});