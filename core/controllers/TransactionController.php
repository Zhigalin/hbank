<?php

/**
 * @brief Transaction related actions
 */
class TransactionController {
	private $_params = array();
	
	public function __construct($params) {
		$this->_params = $params;
	}
	
/**
 * @brief Check if a transaction is possible
 * 
 * @param int $from Transaction sender(ID)
 * @param int $to Transaction receiver(ID)
 * @param int $hours Number of hours to transfer
 * @return int Return code(see documentation)
 */
	private function checkAction($from, $to, $hours) {
		$toReturn  = 0;
		
		try {
			$from = new DepositorEntity($from);
		} catch(DepositorNotExistsException $e) {
			return 13;
		}
		try {
			$to = new DepositorEntity($to);
		} catch(DepositorNotExistsException $e) {
			return 14;
		}
		
		if (!$to->bind()) {
			
		}
		
		$deltaHours = $from->getHours()-$hours;
		if($deltaHours < 5) {
			$toReturn = 1;
		}
		if($deltaHours = 0) {
			$toReturn = 2;
		} elseif($deltaHours < 0) {
			return 12;
		}
		
		if(!$from->isActive()) {
			return 10;
		}
		if(!$to->isActive()){
			return 11;
		}
		
		return $toReturn;
	}
	
/**
 * @brief Verity and make the transaction
 * 
 * @return int Result code
 */
	public function commitAction() {
		$code = $this->checkAction($this->_params['from'], $this->_params['to'], $this->_params['hours']);
		if($code >= 10) {
			return $code;
		}
	}
	
	public function readAction() {
		#read all the transaction items
	}
	
	public function updateAction() {
		#update a transaction item
	}
	
	public function deleteAction() {
		#delete a transaction item
	}
}