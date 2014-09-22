<?php

### Controller file for general bank-related settings and actions rev 0.1 ###

class BankController {
	private $_params;
	
	public function __construct($params)
	{
		$this->_params = $params;
	}
	
	public function createAction() {
		#TODO
	}
	
	public function listAction() {
		#TODO
	}
	
	public function getinithoursAction() {
		$data = array();
		$data['success'] = true;
		$data['init_hours_num'] = 5;
		return $data;
	}
	
	public function readAction() {
		#TODO
	}
	
	public function updateAction() {
		#TODO
	}
	
	public function deleteAction() {
		#TODO
	}
}