<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
	<div class="container" style="margin-top: 10%">
		<form class="form-signin" role="form" action="index.php" method="POST">
			<input type="hidden" name="controller" value="auth">
			<input type="hidden" name="action" value="login">
			<h2 class="form-signin-heading"><?=$please_log_in_text?></h2>
			<button class="btn btn-lg btn-danger btn-block" name="submit" type="submit"><?=$wrong_mail_text?></button>
			<button class="btn btn-lg btn-default btn-block" name="submit" type="submit"><?=$click_to_return_text?></button>
		</form>
	</div>
</body>
</html>