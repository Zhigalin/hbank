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
<body>
	<div id="container">
		<div id="header">
			<div class="toplinks">
				<div>
					<a href="<?=$application_url?>" ><?=$homepage_text?></a>
					<a href="#" onClick="open_close('spoiler_menu_1')" ><?=$search_text?></a>
					<a href="#" onClick="open_close('spoiler_menu_2')" ><?=$insert_text?></a>
					<a href="<?=$exit_url?>" ><?=$exit_text?></a>
				</div>
			</div>
			<div id="welcome">
				<?=$welcome_text?>, Operatore
			</div>
			<div id="spoiler_menu_1" style="display:none;" >
				<div id='menu'>
					<ul class='org_cat'>
						<li><a href='<?=$search_depositors_url?>' class='expan'><?=$depositors_text?></a></li>
						<li><a href='#' class='expan'><?=$transactions_text?></a></li>
						<li><a href='#' class='expan'><?=$activities_text?></a></li>
						<li><a href='#' class='expan'><?=$classes_text?></a></li>
					</ul>
				</div>
			</div>
			<div id="spoiler_menu_2" style="display:none;" >
				<div id='menu'>
					<ul class='org_cat'>
						<li><a href='<?=$create_depositors_url?>' class='expan'><?=$member_text?></a></li>
						<li><a href='#' class='expan'><?=$transaction_text?></a></li>
						<li><a href='#' class='expan'><?=$activity_text?></a></li>
						<li><a href='#' class='expan'><?=$class_text?></a></li>
					</ul>
				</div>
			</div>
		</div>