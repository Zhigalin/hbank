<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	
	<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" />
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<script src="javascript/main.js"></script>
	<title>Cerca Transazione</title>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="toplinks">
				<div>
					<a href="#" onClick="open_close('spoiler_menu_1')" >Cerca</a>
					<a href="#" onClick="open_close('spoiler_menu_2')" >Inserisci</a>
				</div>
			</div>
			<div id="welcome">
				Buongiorno, Operatore
			</div>
			<div id="spoiler_menu_1" style="display:none;" >
				<div id='menu'>
					<ul class='org_cat'>
						<li><a href='#' class='expan'>Correntisti</a></li>
						<li><a href='#' class='expan'>Transazioni</a></li>
						<li><a href='#' class='expan'>Attivita</a></li>
						<li><a href='#' class='expan'>Corsi</a></li>
					</ul>
				</div>
			</div>
			<div id="spoiler_menu_2" style="display:none;" >
				<div id='menu'>
					<ul class='org_cat'>
						<li><a href='#' class='expan'>Iscritto</a></li>
						<li><a href='#' class='expan'>Transazione</a></li>
						<li><a href='#' class='expan'>Attivita</a></li>
						<li><a href='#' class='expan'>Corso</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		
		<div class="panel panel-default" style="margin: 20px;">
			
			<div class="panel-heading">
				<h3 class="panel-title">Cerca una transazione</h3>
			</div>
			
			<div class="panel-body">
				
				<form class="form-horizontal" role="form">

					<br>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Data</label>
						<div class="col-sm-10">
							<input style="display: inline-block; width: 48%;" class="form-control" name="data_da" placeholder="Da (gg/mm/aaaa)" type="date">
							<input style="display: inline-block; width: 51%; align-self: flex-end; margin-left: 5px;" class="form-control" name="data_a" placeholder="A (gg/mm/aaaa)" type="date">
						</div>
					</div>
					
					<br>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Eseguita da</label>
						<div style="display: flex; padding-right: 11px;" class="col-sm-10">
							<input style="display: inline-block; width: 60%;" class="form-control" name="da_nome" placeholder="Nome" type="text">
							<input style="display: inline-block; width: 39%; align-self: flex-end; margin-left: 5px;" class="form-control" name="da_conto" placeholder="N° Conto" type="number">
						</div>
					</div>
					
					<br>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">A favore di</label>
						<div style="display: flex; padding-right: 11px;" class="col-sm-10">
							<input style="display: inline-block; width: 60%;" class="form-control" name="a_nome" placeholder="Nome" type="text">
							<input style="display: inline-block; width: 39%; align-self: flex-end; margin-left: 5px;" class="form-control" name="a_conto" placeholder="N° Conto" type="number">
						</div>
					</div>
					
					<br>
						
					<div style="width: 100px; height: 25px; margin: 0 auto;">
						<button type="submit" class="btn btn-default">Cerca</button>
					</div>
					
					<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-danger" role="alert">ERRORE: Nessuna transazione soddisfa i criteri di ricerca!</div>
					
					<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-danger" role="alert">ERRORE: Il cognome di uno o più correntisti non coincide con il n. di conto!</div>
					
				</form>
			</div>
		</div>
		
		<div id="copyright"> - Authors: Alexander Zhigalin & Samuele Maccio</div>	
	</div>
</body>
</html>