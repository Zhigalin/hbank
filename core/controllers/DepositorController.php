<?php

### Controller file for depositors related actions rev 0.4 ###

class DepositorController {
	private $_params;
	
	public function __construct($params)
	{
		$this->_params = $params;

		try {
			DB::init();
		} catch( Exception $e ) {
			$data['success'] = false;
			$data['errormsg'] = 'DB connection fault: '.$e->getMessage();
		}
	}
	
	public function createAction() {
		##############################################################################
		#                               Fields:                                      #
		#                                                                            #
		#    name               (string)                          required           #
		#    surname            (string)                          required           #
		#    birth_place        (string)                          required           #
		#    birth_date         (date)                            required           #
		#    sex                (m/f)                             required           #
		#    street             (string)                                             #
		#    civic              (string)                                             #
		#    city               (string)                          required           #
		#    index              (number)                          required           #
		#    email              (*@*)(string)                     required           #
		#    mobile             (telephone)                       required           #
		#    telephone          (telephone)                                          #
		#    document           (string)                          required           #
		#    document_type      (id/drivers_license/passport)     required           #
		#    profession         (string)                                             #
		#    degree             (string)                                             #
		#    info_from          (leaflet/internet/word_of_mouth/demonstration)       #
		#    associations       (string)                                             #
		#    available          (boolean)                         required           #
		#    hours              (number)                          default 5*         #
		#    notes              (string)                                             #
		#    state              (active/unactive)                 required           #
		#                                                                            #
		#     *: depends of the bank settings, however the standart is 5 hours PP    #
		##############################################################################
		
		$query = "INSERT INTO `depositors` (`name`, `surname`, `mobile`, `telephone`, `email`, `state`, `hours no.`) ";
		$query .= "VALUES (:name, :surname, :mobile, :telephone, :email, IFNULL(:state, DEFAULT(state)), IFNULL(:hours, DEFAULT(`hours no.`)))";
		$values = 
			array(
				':name'        =>   $this->_params['name'],
				':surname'     =>   $this->_params['surname'],
				':mobile'      =>   $this->_params['mobile'],
				':telephone'   =>   $this->_params['telephone'],
				':email'       =>   $this->_params['email'],
				':state'       =>   $this->_params['state'] === 'unactive' ? 'unactive' : 'null',
				':hours'       =>   $this->_params['hours'] ? $this->_params['hours'] : 'null'
			)
		;

 		if(DB::insert($query, $values) === true) {
			$data['success'] = true;
		} else {
			$data['success'] = false;
		}
		
		return $data;
	}
	
	public function listAction() {
		$data = array();

		if (empty($this->_params['page'])) {
			$this->_params['page'] = 1;
		}
		if (empty($this->_params['perpage'])) {
			$this->_params['perpage'] = 20;
		}
		if (empty($this->_params['sortby'])) {
			$this->_params['sortby'] = 'depositor no.';
		}
		if (empty($this->_params['sortorder'])) {
			$this->_params['sortorder'] = 'DESC';
		}

		if (!empty($this->_params['search'])) {
			#TODO
		} else {
			$from = ( $this->_params['page'] * $this->_params['perpage'] ) - $this->_params['perpage'];
			$query = 'SELECT * FROM depositors ORDER BY `'.$this->_params['sortby'].'` '.$this->_params['sortorder'].' LIMIT '.$from.', '.$this->_params['perpage'];
			$data['pages'] = DB::count('depositors');
			#$data['pages'] = $data['pages'] / $this->_params['perpage'];
			$data['page'] = $this->_params['page'];
			if ($result = DB::exec($query)) {
				$data['success'] = true;
				$data['result'] = $result;
				return $data;
			} else {
				$data['success'] = false;
				$data['errormsg'] = 'DB fault';
				return $data;
			}
		}
	}
	
	public function getlastnumAction() {
		$data = array();

		$query = 'SELECT `depositor no.` FROM depositors ORDER BY `depositor no.` DESC LIMIT 1';
		if ($data = DB::exec($query)) {
			$data['result'] = $data[0];
			$data['success'] = true;
			return $data;
		} else {
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