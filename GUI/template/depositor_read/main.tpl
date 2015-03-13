<div class="panel panel-default" style="margin: 20px;">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$depositor_data_text?></h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal">
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
					<p style="display: inline-block; width: 50%;" class="form-control-static"><b><?=$depositor['name']?></b></p>
					<p style="display: inline-block; width: 49%; align-self: flex-end; margin-left: 5px;" class="form-control-static"><b><?=$depositor['surname']?></b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$born_text?></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<p style="display: inline-block; width: 50%;" class="form-control-static"><?=$born_in_text?><b><?=$depositor['place of birth']?></b></p>
					<p style="display: inline-block; width: 49%; align-self: flex-end; margin-left: 5px;" class="form-control-static"><?=$born_at_text?><b><?=$depositor['date of birth']?></b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$sex_text?></label>
				<div class="btn-group" >
					<label class="btn btn-default btn-primary">
						<?=$depositor['sex']?>
					</label>
				</div>
			</div>
			<br>
			<? if(!empty($depositor['adress'])) { ?>
				<div class="form-group">
					<label class="col-sm-2 control-label"><?=$address_text?></label>
					<div class="col-sm-10">
						<p class="form-control-static"><b><?=$depositor['adress']?></b></p>
					</div>
				</div>
			<? } ?>
			<div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div style="display: flex; padding-right: 11px;" class="col-sm-10">
					<p style="display: inline-block; width: 30%;" class="form-control-static"><b><?=$depositor['city']?></b></p>
					<p style="display: inline-block; width: 69%; align-self: flex-end; margin-left: 5px;" class="form-control-static"><b><?=$depositor['index']?></b></p>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$email_address_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><b><?=$depositor['email']?></b></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$mobile_text?></label>
				<div class="col-sm-10">
					<p class="form-control-static"><b><?=$depositor['mobile']?></b></p>
				</div>
			</div>
			<? if(!empty($depositor['telephone'])) { ?>
				<div class="form-group">
					<label class="col-sm-2 control-label"><?=$telephone_text?></label>
					<div style="display: flex; padding-right: 11px;" class="col-sm-10">
						<p class="form-control-static"><b><?=$depositor['telephone']?></b></p>
					</div>
				</div>
			<? } ?>
			<br>
			<? if(!empty($depositor['document'])) { ?>
				<div class="form-group">
					<label class="col-sm-2 control-label"><? if($depositor['document type']==='id') {echo $id_card_text} elseif($depositor['document type']==='passport') {echo $passport_text} else {echo $drivers_license_text}; echo ':'; ?></label>
					<div style="display: flex; padding-right: 11px;" class="col-sm-10">
						<p style="display: inline-block; width: 40%; margin-right: 15px;" class="form-control-static"><b><?=$depositor['document']?></b></p>
					</div>
				</div>
				<br>
			<? }
			if(!empty($depositor['profession'])) { ?>
				<div class="form-group">
					<label class="col-sm-2 control-label"><?=$profession_text?></label>
					<div class="col-sm-10">
						<p class="form-control-static"><b><?=$depositor['profession']?></b></p>
					</div>
				</div>
				<br>
			<? }
			if(!empty($depositor['degree'])) { ?>
				<div class="form-group">
					<label class="col-sm-2 control-label"><?=$degree_text?></label>
					<div class="col-sm-10">
						<p class="form-control-static"><b><?=$depositor['degree']?></b></p>
					</div>
				</div>
				<br>
			<? }
			if(!empty($depositor['channel'])) { ?>
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
			<? }
			if(!empty($depositor['other associations'])) { ?>
				<div class="form-group">
					<label class="col-sm-2 control-label"><?=$other_associations_text?></label>
					<div class="col-sm-10">
						<p class="form-control-static"><b><?=$depositor['other associations']?></b></p>
					</div>
				</div>
				<br>
			<? } ?>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$the_member_is_text?></label>
				<div class="btn-group" >
					<label class="btn btn-default btn-primary">
						<? echo $depositor['state']==='active' ? $active_field_text : $not_active_field_text ?>
					</label>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-2 control-label"><?=$hours_num_text?></label>
				<div class="col-sm-1">
					<p class="form-control-static"><b><?=$depositor['hours no.']?></b></p>
				</div>
			</div>
			<br>
			<? if(!empty($depositor['notes'])) { ?>
				<div class="form-group">
					<label class="col-sm-2 control-label"><?=$notes_text?></label>
					<div class="col-sm-10">
						<p class="form-control-static"><b><?=$depositor['notes']?></b></p>
					</div>
				</div>
				<br>
			<? } ?>
			<div style="width: 100px; height: 25px; margin-left: 79%; margin-bottom: 15px; margin-top: 10px;">
				<button class="btn btn-default" name="update"><?=$update_depositor_data_text?></button>
			</div>
		</form>
	</div>
</div>