<html>
	<head>
		<title>Register Page</title>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
		<link rel='stylesheet' type='text/css' href='css/my_style.css'>
	</head>
	<body>
		<div class = 'container'>
			<div class = 'row'>
				<div class = 'span12' style = 'margin:73px 16px;'>
					<!-- Start Modal -->
					<div class = 'modal hide fade' id = 'loginModal'>
						<div class = 'modal-header' style = 'height:20%; background-color: lightblue'>
							<h1 style = 'font-size: 83px; margin: 31px 130px;'>Login</h1>
						</div>
						<div class = 'modal-body' style = 'height: 33%; background-color: cornflowerblue;'>
							<div id = 'xemailadd-for-modal'></div>
							<input type = 'text' id = 'emailadd-for-modal' placeholder = 'Email add. . .' class = 'span3' style = 'height: 60px; width: 62%; margin: 6 0px 21px 32px; font-size: larger; font-weight: 900; letter-spacing: 12px;' /><br/>
							<div id = 'xpassword-for-modal' style = 'margin-left:24%;'></div>
							<input type = 'password' id = 'password-for-modal' placeholder = 'Password. . .' class = 'span3' style = 'height: 60px; width: 62%; margin: 6 0px 21px 170px; font-size: larger; font-weight: 900; letter-spacing: 12px; ' /><br/>
						</div>
						<div class = 'modal-footer' style = 'height: 52px; background-color: lightblue;'>
							<button class = 'btn' data-dismiss = 'modal' style = 'width: 35%; height: 55px; font-size: 33px; margin-right:62px' />Cancel</button>
							<input type = 'submit' id = 'submit-for-modal' value = 'Submit' class = 'btn btn-success' style = 'width: 35%; height: 55px; margin-right:45px; font-size: 33px;' />
						</div>
					</div>
					<!-- End Modal -->

					<!-- Start Greet for the new user -->
						<div id = 'greet' style = 'border: 3px solid black; position: absolute; width: 934; height: 77%; background-color: rgb(103, 218, 103);' hidden>
							<center><p id = 'greetText' style = 'font-size: 50; font-family: georgia; font-weight: bold; margin-top: 89; color: rgb(18, 63, 179);'></p></center>
						</div>
					<!-- End Greet for the new user -->

					<!-- Start Registration Form -->
					<div style = 'border: 3px solid black; width: 934; height: 77%;' id = 'registration' >
						<div class = 'navbar'>
							<div class = 'navbar-inner' style = 'height: 114px;'> 
								<h3 style = 'font-size: 75px; margin-left: 15px; padding-top: 52px;'>Register Examinee Page</h3>
							</div>
						</div>
						<div style = 'margin-top:10px'>
							<div class = 'well' style = 'height: 69%'>
								<div class = 'pull-left' style = 'margin-left:90px;'>
									<div id = 'xfname'>&nbsp;&nbsp;</div><input type = 'text' id = 'fname' placeholder = 'First name. . .' class = 'span3' style = 'height:40px;' /><br/>
									<div id = 'xmname'>&nbsp;&nbsp;</div><input type = 'text' id = 'mname' placeholder = 'Middle name. . .' class = 'span3'style = 'height:40px;' /><br/>
									<div id = 'xlname'>&nbsp;&nbsp;</div><input type = 'text' id = 'lname' placeholder = 'Last name. . .' class = 'span3' style = 'height:40px;' /><br/>
								</div>
								<div class = 'pull-right' style = 'margin-right:150px;'>
									<div id = 'xemailadd'>&nbsp;&nbsp;</div><input type = 'email' id = 'emailadd' placeholder = 'Email add. . .' class = 'span3' style = 'height:40px;' /><br/>
									<div id = 'xpassword'>&nbsp;&nbsp;</div><input type = 'password' id = 'password' placeholder = 'Password. . .' class = 'span3' style = 'height:40px;' /><br/>
									<div id = 'xcon_password'>&nbsp;&nbsp;</div><input type = 'password' id = 'con_password' placeholder = 'Confirm password. . .' class = 'span3' style = 'height:40px;' /><br/>
								</div>
								<div class = 'pull-right' style = 'margin-right: -382px; margin-top: 299px;'>
									<p><font size = "4" face = "tahoma" color = "green">Are you already Register?</font> &nbsp; <br/><a href='#loginModal' data-toggle = 'modal' class = "btn btn-primary" style = 'margin-left: 59px; margin-top: 15px; width: 78px; height: 24; padding-top: 8; font-size: 24;'>Login</a></p>
								</div>
								<button class = 'btn btn-success span2' style = 'width:20%; height: 60px; margin-top: 24%; margin-left: -80px; font-size: 40;' id = 'validate'>Submit</button>
								<button class = 'btn span2' style = 'width:20%; height: 60px; margin-top: -60; margin-left: 51%; font-size: 40;' id = 'reset'>Reset</button>
							</div>
						</div>
					</div>
					<!-- End Registration Form -->

					<!-- Start Questions -->
					<div hidden id = 'questions'>
						<div style='border: 18px solid rgb(199, 171, 121); background: rgb(162, 235, 232); margin: -62px 0 -55 0; width: 96.5%; position: relative;'>
							<div style = 'font-style:tahoma; margin:20px;'>
								<div>
									<p id = 'num' style = 'font-size: 54px; padding-top: 9px;'></p>
								</div>
									<p style = 'margin-left: 13em; font-size: 40px;' id = 'time'></p>
								<div style = 'border: 3px solid green; padding: 8px;'>
									<p style = 'font-size:21px; font-weight:700; width: 757px' id = 'question'></p><br/>
								</div>
								<div style = 'border: 3px solid green;'>
									<div style = 'margin: 26px;'>
										<input type = 'radio' value = 'a' id = 'choiceARadio' name = 'choice'/>
										<p style = 'height: 50px; margin-left: 38px; font-size: 20px; font-weight: 900;' id = 'choiceA'></p>
										<input type = 'radio' value = 'b' id = 'choiceBRadio' name = 'choice'/>
										<p style = 'height: 50px; margin-left: 38px; font-size: 20px; font-weight: 900;' id = 'choiceB'></b><br/><br/><br/></p>
										<input type = 'radio' value = 'c' id = 'choiceCRadio' name = 'choice'/>
										<p style = 'height: 50px; margin-left: 38px; font-size: 20px; font-weight: 900;' id = 'choiceC'></b><br/><br/><br/></p>
										<input type = 'radio' value = 'd' id = 'choiceDRadio' name = 'choice'/>
										<p style = 'height: 50px; margin-left: 38px; font-size: 20px; font-weight: 900;' id = 'choiceD'></b><br/><br/><br/></p>
										<button id = 'submit-answer' value = 'Submit Answer' class = 'btn btn-primary' style = 'font-size: 27px; height: 77px; width: 247px; margin: 4px 0 -10px 273px;'>Submit Answer</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Questions -->

					<!-- Start Showing Result -->
					<div id = 'result' hidden>
						<div style='border: 18px solid rgb(40, 185, 105); background: rgb(220, 226, 240); width: 96.5%;'>
							<div style = 'font-family:serif; margin:20px;'>
									<p id = 'percent2' style = 'font-size: 67px; padding-top: 9px; font-family: serif;'></p><br><br>							
								<div style = 'border: 3px solid green; padding: 8px; height: 41;'>
									<p style = 'font-size: 50px; font-weight: 700; width: 763px; padding-top: 12; margin-left: 177;' id = 'fullname'></p><br/>
								</div>
								<div style = 'border: 6px solid blue; width: 75%; float: right; height: 41%; margin-top: 10; overflow-y: scroll;' id = 'tableRecord'>
								</div>
								<div id = 'record' style = 'margin: 26 56;'>
									<p style = 'font-size: 30; font-family: tahoma;' id = '1'></p><br/><p style = 'font-size: 30; font-family: tahoma;' id = '2'></p><br/>
									<p style = 'font-size: 30; font-family: tahoma;' id = '3'></p><br/><p style = 'font-size: 30; font-family: tahoma;' id = '4'></p><br/>
									<p style = 'font-size: 30; font-family: tahoma;' id = '5'></p><br/><p style = 'font-size: 30; font-family: tahoma;' id = '6'></p><br/>
									<p style = 'font-size: 30; font-family: tahoma;' id = '7'></p><br/><p style = 'font-size: 30; font-family: tahoma;' id = '8'></p><br/>
									<p style = 'font-size: 30; font-family: tahoma;' id = '9'></p><br/><p style = 'font-size: 30; font-family: tahoma;' id = '10'></p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Showing Result -->
				</div>
			</div>
		</div>
		<script src = 'js/jquery-1.8.3.js' /></script>
		<script src = 'js/bootstrap.js' /></script>
		<script src = 'js/my_js.js' /></script>
	</body>
</html>