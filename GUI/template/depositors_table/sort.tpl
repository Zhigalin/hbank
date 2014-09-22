<div class="panel panel-default" style="margin: 20px;">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$sort_title_text?></h3>
	</div>
	<div class="panel-body">
		<div style="width: 100%;" class="col-lg-6">
			<div class="input-group"> 
				<input type="search" class="form-control" name="search_query">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?=$filter_text?><span class="caret"></span></button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu">
						<li><a href="<?=$sort_depositors_list_state_all_url?>"><?=$all_text?></a></li>
						<li class="divider"></li>
						<li><a href="<?=$sort_depositors_list_state_active_url?>"><?=$active_text?></a></li>
						<li><a href="<?=$sort_depositors_list_state_not_active_url?>"><?=$not_active_text?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<label class="radio-inline">
  			<input type="radio" name="search_for" id="inlineRadio1" value="depositor_number"> <?=$depositor_num_text?>
			</label>
			<label class="radio-inline">
  			<input type="radio" name="search_for" id="inlineRadio2" value="surname"> <?=$surname_text?>
			</label>
			<label class="radio-inline">
			<input type="radio" name="search_for" id="inlineRadio3" value="name"> <?=$name_text?>
			</label>
		</div>
	</div>
</div>