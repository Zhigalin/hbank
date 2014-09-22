<?php

### Controller file for depositors related actions rev 0.4 ###

class DepositorController {
	private $_params;
	
	public function __construct($params)
	{
		$this->_params = $params;
	}
	
	public function createAction() {
		##############################################################################
		#                               Fields:                                      #
		#                                                                            #
		#   █name               (string)                          required█         #
		#   █surname            (string)                          required█         #
		#    birth_place        (string)                          required           #
		#    birth_date         (date)                            required           #
		#    sex                (m/f)                             required           #
		#    street             (string)                                             #
		#    civic              (string)                                             #
		#    city               (string)                          required           #
		#    index              (number)                          required           #
		#   █email              (*@*)(string)                     required█         #
		#   █mobile             (telephone)                       required█         #
		#   █telephone          (telephone)                               █         #
		#    document           (string)                          required           #
		#    document_type      (id/drivers_license/passport)     required           #
		#    profession         (string)                                             #
		#    degree             (string)                                             #
		#    info_from          (leaflet/internet/word_of_mouth/demonstration)       #
		#    associations       (string)                                             #
		#    available          (boolean)                         required           #
		#  █hours              (number)                          default 5*█        #
		#    notes              (string)                                             #
		#  █state              (active/unactive)                 required█          #
		#                                                                            #
		#     *: depends of the bank settings, however the standart is 5 hours PP    #
		##############################################################################
		try {
			DB::init();
		} catch( Exception $e ) {
			$data['success'] = false;
			$data['errormsg'] = 'DB connection fault: '.$e->getMessage();
		}
		$values = array();
		$query = 'INSERT INTO `depositors` (`name`, `surname`, `mobile`, `telephone`, `email`';
		$query = $this->_params['state'] === 'active' ? $query : $query.', `state`';
		$query = !empty($this->_params['hours']) ? $query.', `hours no.`' :  $query;
		$query = $query.') ';
		$query = $query."VALUES ('".$this->_params['name']."', '".$this->_params['surname']."', '".$this->_params['mobile']."', '".$this->_params['telephone']."', '".$this->_params['email']."'";
		$query = $this->_params['state'] === 'active' ? $query : $query.", '".$this->_params['state']."'";
		$query = !empty($this->_params['hours']) ? $query.', '.$this->_params['hours'] :  $query;
		$query = $query.')';
		
 		if(DB::insert($query) === true) {
			$data['success'] = true;
		} else {
			$data['success'] = false;
		}
		
		return $data;
	}
	
	public function listAction() {
		try {
			DB::init();
		} catch( Exception $e ) {
			$data['success'] = false;
			$data['errormsg'] = 'DB connection fault: '.$e->getMessage();
		}
		
		if (empty($this->_params['page'])) {
			$this->_params['page'] = 1;
		}
		if (empty($this->_params['perpage'])) {
			$this->_params['perpage'] = 20;
		}
		if (empty($this->_params['sortby'])) {
			$this->_params['sortby'] = 'depnum';
		}
		if (empty($this->_params['sortorder'])) {
			$this->_params['sortorder'] = 'ascending';
		}
		
		if ($data = DB::exec($query, $this->_params)) {
			return $data;
		} else {
			$data = array();
			$data['success'] = false;
			$data['errormsg'] = 'DB fault';
			return $data;
		}
	}
	
	public function getlastnumAction() {
		try {
			DB::init();
		} catch( Exception $e ) {
			$data['success'] = false;
			$data['errormsg'] = 'DB connection fault: '.$e->getMessage();
		}
		$query = 'SELECT `depositor no.` FROM depositors ORDER BY `depositor no.` DESC LIMIT 1';
		if ($data = DB::exec($query)) {
			$data = $data[0];
			$data['success'] = true;
			return $data;
		} else {
			$data = array();
			$data['success'] = false;
			$data['errormsg'] = 'DB fault';
			return $data;
		}
	}
	
	public function readAction() {
		#read all the depositor data
	}
	
	public function updateAction() {
		#update a depositor
	}
	
	public function deleteAction() {
		#delete a depositor
	}
}