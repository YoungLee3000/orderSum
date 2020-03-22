
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
					<form name="loginForm" action="login.php?action=post" method="post" id="loginForm">
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

					<?php 
						require('includes/configure.php');
						$hostName = $_SERVER['HTTP_HOST'];
						$action = (isset($_GET['action']) ? $_GET['action'] : '');
						$admin_name = (isset($_POST['admin_name']) ? trim($_POST['admin_name']) : '');
						$admin_pass = (isset($_POST['admin_pass']) ? trim($_POST['admin_pass']) : '');

						switch ($action) {
            
        					case 'post':
            					
            					if (!file_exists(USERS_DIR . $admin_name . '/')){
            						echo '<p style="color:red;">用户不存在</p>';
            					}
            					else{
            						$myReadfile = fopen(USERS_DIR . $admin_name . '/' . FILENAME_PASSWORD, "r") or die("数据丢失,请检查网站设置!");
    								$real_pass =  fgets($myReadfile);
    								fclose($myReadfile);

    								if ($admin_pass == $real_pass){
    									setcookie('user_name', $admin_name, time()+3600*24*10); //设置cookie有效时间10天
            	
                
                						$url = 'http://' . $hostName . A_FILENAME_INDEX; //网站首页地址 
                						echo '<script language="javascript" type="text/javascript">' .  'window.location.href="' . $url . '"</script>' ; 
                						exit;
    								}
    								else{
    									echo '<p style="color:red;">密码错误</p>';
    								}
            					}
            					break;
   
    					}


					?>

		
				</div>
			</div>
		</div>
	</body>



</html>