<div class="panel panel-default" style="margin: 20px;">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$insert_a_transaction_text?></h3>
	</div>
	
	<div class="panel-body">
		
		<form class="form-horizontal" role="form">
  			
			<br>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">№ transazione</label>
				<div class="col-sm-10">
					<p class="form-control-static">161234</p>
				</div>
  			</div>
			
			<br>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Data</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="data" placeholder="(gg/mm/aaaa)" required>
				</div>
			</div>
			
			<br>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Da</label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<input style="display: inline-block; width: 60%;" class="form-control" name="da_nome" placeholder="Nome" type="text" required>
					<input style="display: inline-block; width: 39%; align-self: flex-end; margin-left: 5px;" class="form-control" name="da_conto" placeholder="N° Conto" type="number" required>
				</div>
			</div>
			
			
			<br>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Ore</label>
				<div class="col-sm-2">
					<input type="number" class="form-control" name="ore" required>
				</div>
			</div>
			
			<br>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Per</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="per" required>
				</div>
			</div>
			
			<br>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">A favore di</label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<input style="display: inline-block; width: 60%;" class="form-control" name="a_nome" placeholder="Nome" type="text" required>
					<input style="display: inline-block; width: 39%; align-self: flex-end; margin-left: 5px;" class="form-control" name="a_conto" placeholder="N° Conto" type="number" required>
				</div>
			</div>
			
			<br>
			
			
			<div style="width: 100px; height: 25px; margin: 0 auto;">
				<button type="submit" class="btn btn-default">Inserisci</button>
			</div>
			
			
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-success" role="alert">Transazione inserita con successo!</div>
			
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-warning" role="alert">ATTENZIONE: Correntista pagante con numero di ore inferiore a 5!</div>
			
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-danger" role="alert">ERRORE: Correntista pagante non attivo!</div>
			
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-danger" role="alert">ERRORE: Correntista ricevente non attivo!</div>
			
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-danger" role="alert">ERRORE: Nome e numero del correntista pagante non coincidenti!</div>
			
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-danger" role="alert">ERRORE: Nome e numero del correntista ricevente non coincidenti!</div>
			
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center;" class="alert alert-danger" role="alert">ERRORE: Conto del correntista pagante in rosso!</div>
			
		</form>
	</div>
</div>