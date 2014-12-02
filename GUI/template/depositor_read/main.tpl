<div class="panel panel-default" style="margin: 20px;">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$depositor_data_text?></h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal">
			<input type="hidden" name="controller" value="depositor">
			<input type="hidden" name="action" value="insert">
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$depositor_num_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><b><?=$id?></b></p>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$vital_statistics_text?></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<p style="display: inline-block; width: 50%;" class="form-control-static"><!--#repl--> <b>Nome</b></p>
					<p style="display: inline-block; width: 49%; align-self: flex-end; margin-left: 5px;" class="form-control-static"><!--#repl--> <b>Cognome</b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Nato a</label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<p style="display: inline-block; width: 50%;" class="form-control-static"><!--#repl--> <b>Luogo</b></p>
					<p style="display: inline-block; width: 49%; align-self: flex-end; margin-left: 5px;" class="form-control-static"><!--#repl--> <b>Data</b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$sex_text?></label>
				<div class="btn-group" >
					<label class="btn btn-default btn-primary">
						<?=$male_char_text?>
					</label>
					<label class="btn btn-default"> 
						<?=$female_char_text?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$address_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><!--#repl--> <b>Indirizzo</b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<p style="display: inline-block; width: 30%;" class="form-control-static"><!--#repl--> <b>Citta</b></p>
					<p style="display: inline-block; width: 69%; align-self: flex-end; margin-left: 5px;" class="form-control-static"><!--#repl--> <b>CAP</b></p>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<p class="form-control-static"><!--#repl--> <b>Email</b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$mobile_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><!--#repl--> <b>Cell.</b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$telephone_text?></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<p class="form-control-static"><!--#repl--> <b>Fisso</b></p>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$document_text?></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<p style="display: inline-block; width: 40%; margin-right: 15px;" class="form-control-static"><!--#repl--> <b>№ Documento</b></p>
					<div class="btn-group" >
						<label class="btn btn-default btn-primary">
							<?=$id_card_text?>
						</label>
						<label class="btn btn-default"> 
							<?=$drivers_license_text?>
						</label>
						<label class="btn btn-default"> 
							<?=$passport_text?>
						</label>
					</div>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$profession_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><!--#repl--> <b>Proff.</b></p>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$degree_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><!--#repl--> <b>studio</b></p>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$info_from_text?></label>
				<div class="btn-group">
					<label class="btn btn-default btn-primary">
						<?=$leaflet_text?>
					</label>
					<label class="btn btn-default">
						<?=$internet_text?>
					</label>
					<label class="btn btn-default">
						<?=$word_of_mouth_text?>
					</label>
					<label class="btn btn-default">
						<?=$demonstration_text?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$other_assotiations_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><!--#repl--> <b>Associazioni</b></p>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$the_member_is_text?></label>
				<div class="btn-group" >
					<label class="btn btn-default btn-primary">
						<?=$active_field_text?>
					</label>
					<label class="btn btn-default">
						<?=$not_active_field_text?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$available_for_bank_text?></label>
				<div class="btn-group" >
					<label class="btn btn-default btn-primary">
						<?=$yes_text?>
					</label>
					<label class="btn btn-default">
						<?=$no_text?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$hours_num_text?></label>
				<div class="col-sm-1">
					<p class="form-control-static"><!--#repl--> <b>5</b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$notes_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><!--#repl--> <b>Note</b></p>
				</div>
			</div>
			<br>
			<div style="width: 100px; height: 25px; margin-left: 79%; margin-bottom: 15px; margin-top: 10px;">
				<button class="btn btn-default" name="update"><?=$update_depositor_data_text?></button>
			</div>
		</form>
	</div>
</div>