<html>
	<head>
		<title>login</title>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
		<link rel='stylesheet' type='text/css' href='css/my_style.css'>
	</head>
	<body>
		<div class = 'container'>
			<div class = 'row'>
				<div class = 'span12' style = 'margin:15px'>
					<div class = 'modal'>
						<form class = 'POST' action = 'questions.php'>
							<div class = 'modal-header' style = 'height:20%; background-color: lightblue'>
								<h1 style = 'font-size: 83px; margin: 31px 130px;'>Login</h1>
							</div>
							<div class = 'modal-body' style = 'height: 33%; background-color: cornflowerblue;'>
								<input type = 'text' id = 'emailadd' placeholder = 'Email add. . .' class = 'span3' style = 'height: 60px; width: 62%; margin: 6 0px 21px 32px; font-size: larger; font-weight: 900; letter-spacing: 12px;' /><br/px>
								<input type = 'texpxt' placeholder = 'Password. . .' class = 'span3' style = 'height: 60px; width: 62%; margin: 6 0px 21px 170px; font-size: larger; font-weight: 900; letter-spacing: 12px; ' /><br/>
							</div>
							<div class = 'modal-footer' style = 'height: 52px; background-color: lightblue;'>
								<button class = 'btn' style = 'width: 35%; height: 55px; font-size: 33px; margin-right:62px' />Cancel</button>
								<input type = 'submit' value = 'Submit' class = 'btn btn-success' style = 'width: 35%; height: 55px; margin-right:45px; font-size: 33px;' />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src = 'js/jquery-1.8.3.js' /></script>
		<script src = 'js/bootstrap.js' /></script>
		<script src = 'js/my_js.js' /></script>
	</body>
</html>