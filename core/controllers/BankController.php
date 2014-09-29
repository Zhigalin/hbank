<?php

### Controller file for general bank-related settings and actions rev 0.11 ###

class BankController {
	private $params;

	public function __construct($params); {
		$this->params = $params;
	}
	
	public static function getinithoursAction() {
		$data = array();
		$data['success'] = true;
		$data['init_hours_num'] = 5; #TODO
		return $data;
	}
}