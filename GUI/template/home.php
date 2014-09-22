<!DOCTYPE html>
<html style="position: relative; min-height: 100%;">
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
	<title>Pagina iniziale</title>
</head>
<body style="margin-bottom: 60px;">
	<div style="height: 100%;">
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
		
		<div class="container row" style="margin: 50px auto 0px;">
		<div class="col-md-6" >
		<div class="panel panel-default" style="padding-left: 0px; padding-right: 0px; margin-right: 12px;">
			
			<div class="panel-heading">
				<h3 class="panel-title">Ultime persone iscritte</h3>
			</div>
			
			<div class="panel-body">
			
			<!-- INSERIRE QUI GLI ULTIMI 5 ISCRITTI -->
			<table class="table table-striped" >
	<thead>
		<tr>
			<th>№ conto</th>
			<th>Nome</th>
			<th>Cognome</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<tr>
					<td>179</td>
					<td>Mario</td>
					<td>Rossi</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
				<tr>
					<td>180</td>
					<td>Matteo</td>
					<td>Abruzzese</td>
					<td><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></td>
				</tr>
				<tr>
					<td>179</td>
					<td>Samuele</td>
					<td>Maccio</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
				<tr>
					<td>180</td>
					<td>Pinco</td>
					<td>Pallo</td>
					<td><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></td>
				</tr>
				<tr>
					<td>179</td>
					<td>Gabriele</td>
					<td>Renzi</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
				<tr>
					<td>180</td>
					<td>Matteo</td>
					<td>Abruzzese</td>
					<td><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></td>
				</tr>
				<tr>
					<td>179</td>
					<td>Samuele</td>
					<td>Maccio</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
				<tr>
					<td>180</td>
					<td>Pinco</td>
					<td>Pallo</td>
					<td><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></td>
				</tr>
				<tr>
					<td>179</td>
					<td>Gabriele</td>
					<td>Renzi</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
	</tbody>
		</table>
			
			</div>
		</div>
		</div>
		<div class="col-md-6">
		<div class="panel panel-default" style="padding-left: 0px; padding-right: 0px; margin-left: 12px;">
			
			<div class="panel-heading">
				<h3 class="panel-title">Ultime transazioni registrate</h3>
			</div>
			
			<div class="panel-body">
			
			<!-- INSERIRE QUI LE ULTIME 5 TRANSAZIONI REGISTRATE -->
			<table class="table table-striped" >
	<thead>
		<tr>
			<th>№ da</th>
			<th>№ a</th>
			<th>Per</th>
			<th>Data</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<tr>
					<td>179</td>
					<td>46</td>
					<td>Giardinaggio</td>
					<td>02/05/14</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
				<tr>
					<td>130</td>
					<td>86</td>
					<td>Yoga</td>
					<td>24/04/14</td>
					<td><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></td>
				</tr>
				<tr>
					<td>46</td>
					<td>163</td>
					<td>Parucchiere</td>
					<td>22/01/14</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
				<tr>
					<td>96</td>
					<td>163</td>
					<td>Parucchiere</td>
					<td>12/01/14</td>
					<td><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></td>
				</tr>
				<tr>
					<td>55</td>
					<td>112</td>
					<td>Assistenza</td>
					<td>10/01/14</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
				<tr>
					<td>130</td>
					<td>86</td>
					<td>Yoga</td>
					<td>24/04/14</td>
					<td><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></td>
				</tr>
				<tr>
					<td>46</td>
					<td>163</td>
					<td>Parucchiere</td>
					<td>22/01/14</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
				<tr>
					<td>96</td>
					<td>163</td>
					<td>Parucchiere</td>
					<td>12/01/14</td>
					<td><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></td>
				</tr>
				<tr>
					<td>55</td>
					<td>112</td>
					<td>Assistenza</td>
					<td>10/01/14</td>
					<td><a href="../index.php" ><button type="button" class="btn btn-info btn-sm" style="padding: 3px 10px;" >dettagli</button></a></td>
				</tr>
	</tbody>
		</table>
			
			</div>
		</div>
		</div>
		</div>
	</div>&nbsp;
	<div id="copyright" style="position: absolute; bottom: 0; width: 100%;"> - Authors: Alexander Zhigalin & Samuele Maccio</div>	
</body>
</html>