<?php

### Controller file for depositors related actions rev 0.45

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
		$query = "INSERT INTO `depositors` (`name`, `surname`, `mobile`, `telephone`, `email`, `state`, `hours no.`) ";
		$query .= "VALUES (:name, :surname, :mobile, :telephone, :email, IFNULL(:state, DEFAULT(state)), IFNULL(:hours, DEFAULT(`hours no.`)))";
		$values = 
			array(
				':name'        =>   $this->_params['name'],
				':surname'     =>   $this->_params['surname'],
				':mobile'      =>   $this->_params['mobile'],
				':telephone'   =>   $this->_params['telephone'],
				':email'       =>   $this->_params['email'],
				':state'       =>   $this->_params['state'] === 'unactive' ? 'unactive' : 'active',
				':hours'       =>   isset($this->_params['hours']) ? $this->_params['hours'] : '5'
			)
		;
		
		if(DB::insert($query, $values) === true) {
			$data['success'] = true;
		} else {
			$data['success'] = false;
			return $data;
		}
		
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
		
		
		$query = "INSERT INTO `other_data` (`place of birth`, `date of birth`, `sex`, `adress`, `document`, `document type`, `profession`, `degree`, `channel`, `other associations`, `availability for bank`, `notes`) ";
		$query .= "VALUES (:birth_place, 'STR_TO_DATE(:birth_date, \'%d/%m/%Y\'), :sex, :adress, :document, :document_type, :profession, :degree, :info_from, :associations, :available, :notes)";
		$values = 
			@array(
				':birth_place'    =>   $this->_params['birth_place'],
				':birth_date'     =>   $this->_params['birth_date'],
				':sex'            =>   $this->_params['sex'],
				':adress'         =>   $this->_params['street'].' '.$this->_params['civic'],
				':document'       =>   $this->_params['document'],
				':document_type'  =>   $this->_params['document_type'],
				':profession'     =>   $this->_params['profession'],
				':degree'         =>   $this->_params['degree'],
				':info_from'      =>   $this->_params['info_from'],
				':associations'   =>   $this->_params['associations'],
				':available'      =>   $this->_params['available'],
				':notes'          =>   $this->_params['notes']
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
		
		if (isset($this->_params['search'])) {
			#TODO
		} else {
			$from = ( $this->_params['page'] * $this->_params['perpage'] ) - $this->_params['perpage'];
			$query = 'SELECT * FROM depositors ORDER BY `'.$this->_params['sortby'].'` '.$this->_params['sortorder'].' LIMIT '.$from.', '.$this->_params['perpage'];
			$data['pages'] = DB::count('depositors') / $this->_params['perpage'];
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
		$data = array();
			
		$query = 'SELECT * FROM depositors WHERE `depositor no.` = '.$this->_params['id'].'UNION SELECT * FROM other_data WHERE `depositor no.` = '.$this->_params['id'];
		
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
		
	public function updateAction() {
		#update a depositor
	}
	
	public function deleteAction() {
		#delete a depositor
	}
}