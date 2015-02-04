<div class="panel panel-default" style="margin: 20px;">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$insert_a_depositor_text?></h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" role="form" action="<?=$insert_depositors_url?>" method="GET">
			<input type="hidden" name="controller" value="depositor">
			<input type="hidden" name="action" value="insert">
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$depositor_num_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><?=$next_depositor_num?></p>
				</div>
  			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$vital_statistics_text?></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<input style="display: inline-block; width: 50%;" class="form-control" name="name" placeholder="<?=$name_text?>" type="text" required>
					<input style="display: inline-block; width: 49%; align-self: flex-end; margin-left: 5px;" class="form-control" name="surname" placeholder="<?=$surname_text?>" type="text" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<input style="display: inline-block; width: 70%;" class="form-control" name="birth_place" placeholder="<?=$birth_place_text?>" type="text" required>
					<input style="display: inline-block; width: 29%; align-self: flex-end; margin-left: 5px;" class="form-control" name="birth_date" placeholder="<?=$date_text?>" type="date" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$sex_text?></label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						<input type="radio" name="sex" value="m" required> <?=$male_char_text?>
					</label>
					<label class="btn btn-default">
						<input type="radio" name="sex" value="f" required> <?=$female_char_text?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$address_text?></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<input style="display: inline-block; width: 80%;" class="form-control" name="street" placeholder="<?=$street_text?>" type="text">
					<input style="display: inline-block; width: 19%; align-self: flex-end; margin-left: 5px;" class="form-control" name="civic" placeholder="<?=$civic_text?>" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<input style="display: inline-block; width: 55%;" class="form-control" name="city" placeholder="<?=$city_text?>" type="text" required>
					<input style="display: inline-block; width: 19%; margin-left: 5px;" class="form-control" name="province" placeholder="<?=$province_text?>" type="text" required>
					<input style="display: inline-block; width: 25%; align-self: flex-end; margin-left: 5px;" class="form-control" name="index" placeholder="<?=$index_text?>" type="number" required>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$contacts_text?></label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="E-mail" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<input style="display: inline-block; width: 60%;" class="form-control" name="mobile" placeholder="<?=$mobile_text?>" type="tel" required>
					<input style="display: inline-block; width: 39%; align-self: flex-end; margin-left: 5px;" class="form-control" name="telephone" placeholder="<?=$telephone_text?>" type="tel">
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$document_text?></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<input style="display: inline-block; width: 40%; margin-right: 15px;" class="form-control" name="document" placeholder="<?=$document_no_text?>" type="text">
 					<label class="radio-inline">
  						<input type="radio" name="document_type" value="id"> <?=$id_card_text?>
					</label>
					<label class="radio-inline">
  						<input type="radio" name="document_type" value="drivers_license"> <?=$drivers_license_text?>
					</label>
					<label class="radio-inline">
  						<input type="radio" name="document_type" value="passport"> <?=$passport_text?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$profession_text?></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="profession" placeholder="<?=$notrequired_text?>">
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$degree_text?></label>
				<div class="col-sm-10">
					<input class="form-control" list="degree_list" name="degree" placeholder="<?=$notrequired_text?>">
					<datalist id="degree_list">
						<option value="<?=$degree_primary_text?>">
						<option value="<?=$degree_mid_text?>">
						<option value="<?=$degree_high_text?>">
					</datalist>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$info_from_text?></label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						<input type="radio" name="info_from" value="leaflet"> <?=$leaflet_text?>
					</label>
					<label class="btn btn-default">
						<input type="radio" name="info_from" value="internet"> <?=$internet_text?>
					</label>
					<label class="btn btn-default">
						<input type="radio" name="info_from" value="word_of_mouth"> <?=$word_of_mouth_text?>
					</label>
					<label class="btn btn-default">
						<input type="radio" name="info_from" value="demonstration"> <?=$demonstration_text?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$other_assotiations_text?></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="associations" placeholder="<?=$notrequired_text?>">
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$the_member_is_text?></label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						<input type="radio" name="state" value="active" required> <?=$active_field_text?>
					</label>
					<label class="btn btn-default">
						<input type="radio" name="state" value="unactive" required> <?=$not_active_field_text?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$init_hours_num_text?></label>
				<div class="col-sm-1">
					<input type="text" class="form-control" name="hours" value="<?=$init_hours_num?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$notes_text?></label>
				<div class="col-sm-10">
					<textarea class="form-control" name="notes" wrap="virtual" placeholder="<?=$notrequired_text?>"></textarea>
				</div>
			</div>
			<br>
			<div style="width: 100px; height: 25px; margin: 0 auto;">
				<button type="submit" class="btn btn-default" name="insert"><?=$insert_text?></button>
			</div>
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center; display: none;" class="alert alert-danger" role="alert">ERRORE: Indirizzo e-mail già presente nel database!</div>
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center; display: none;" class="alert alert-danger" role="alert">ERRORE: Numero di telefono già presente nel database!</div>
			<div style="height: 33px; padding-top: 7px; margin-top: 27px; text-align: center; display: none;" class="alert alert-danger" role="alert">ERRORE: Numero documento già presente nel database!</div>
		</form>
	</div>
</div>