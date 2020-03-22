
<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="css/stylesheet.css" rel="stylesheet">
		<title>管理员登录</title>
		<meta name="robots" content="noindex, nofollow" />
	</head>
	<body id="login">
		<div class="container-fluid">
			<div class="login-form">
				<div class="login-main-div login-box-shadow">
					<img src="images/logo.gif" width="300px" height="100px" class="login-img">
					<br>
					<form name="loginForm" action="login.php?do=in&camefrom=index.php" method="post" id="loginForm">
						<h2>管理员登录</h2>
						<div class="form-group">
							<input type="text" name="admin_name" class="form-control" id="admin-name-text" autocapitalize="none" spellcheck="false" autocomplete="off" autofocus placeholder="Admin Username" />          
						</div>

						<div class="form-group">
							<input type="password" name="admin_pass" class="form-control" id="admin-pass-text" placeholder="Admin Password" maxlength="40" autocomplete="off" />          
						</div>

						<div class="form-group">
							<input type="submit" name="submit" value="登录" id="btn_submit" class="btn btn-primary" />          
						</div>

		 
						<br class="clearBoth" />
		  
					</form>


		
				</div>
			</div>
		</div>
	</body>
</html>