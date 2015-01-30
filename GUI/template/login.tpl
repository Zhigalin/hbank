<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?=$bootstrap_main_css?>" />
	<link rel="stylesheet" type="text/css" href="<?=$bootstrap_theme_css?>" />
	<link rel="stylesheet" type="text/css" href="<?=$main_stylesheet?>" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Bootstrap js -->
	<script src="<?=$bootstrap_js?>"></script>
	<!-- Main site javascript file -->
	<script src="<?=$main_js?>"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?=$main_stylesheet?>" />
	<title><?=$page_title?></title>
</head>
<body style="padding-top: 40px;padding-bottom: 40px;background-color: #eee;">
	<div class="container">
		<form class="form-signin" role="form" action="index.php" method="POST">
			<input type="hidden" name="controller" value="auth">
			<input type="hidden" name="action" value="authorize">
			<h2 class="form-signin-heading"><?=$please_log_in_text?></h2>
			<input type="email" class="form-control" name="email" placeholder="<?=$email_address_text?>" required autofocus>
			<input type="password" class="form-control" name="password" placeholder="<?=$password_text?>" required>
			<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit"><?=$sign_in_text?></button>
		</form>
	</div>
</body>
</html>