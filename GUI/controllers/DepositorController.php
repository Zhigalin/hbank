<?php

class DepositorController extends AbstractController {
	protected function render($str) {
		echo View::render('header', $this->params, true).$str.View::render('footer', $this->params, true);
	}
	
	public function listAction() {
		$this->params['page_title'] = $this->params['members_list_text'];
		
		$str = View::render('depositors_table/sort', $this->params, true);
		$str = $str.View::render('depositors_table/table_header', $this->params, true);
		$str = $str.View::render('depositors_table/nodata', $this->params, true);
		
		$api_params = 'controller=depositor&action=list';
		
		if (!empty($this->params['page'])) {
			$api_params = $api_params.'&page='.$this->params['page'];
		}
		if (!empty($this->params['perpage'])) {
			$api_params = $api_params.'&perpage='.$this->params['perpage'];
		}
		if (!empty($this->params['sortby'])) {
			$api_params = $api_params.'&sortby='.$this->params['sortby'];
		}
		if (!empty($this->params['sortorder'])) {
			$api_params = $api_params.'&sortorder='.$this->params['sortorder'];
		}
		if (!empty($this->params['searchfor'])) {
			switch ($this->params['searchfor']) {
				case 'depnum':
					$api_params = $api_params.'&depnum='.$this->params['search_query'];
				break;
				case 'name':
					$api_params = $api_params.'&name='.$this->params['search_query'];
				break;
				case 'surname':
					$api_params = $api_params.'&surname='.$this->params['search_query'];
				break;
			}
		}
		try { 
			$data = $this->_API->sendRequest($api_params); 
		}  catch( Exception $e ) {
			echo $e->getMessage(); #catch any exceptions and report the problem
		}
		
		$str = $str.View::render('depositors_table/table_footer', $this->params, true);
		$str = $str.View::render('depositors_table/pagination', $this->params, true);
		
		$this->render($str);
	}
	
	public function createAction() {
		$this->params['page_title'] = $this->params['insert_a_depositor_text'];
		
		$api_params = array ('controller' => 'depositor', 'action' => 'getlastnum');
		
		try { 
			$data = $this->_API->sendRequest($api_params); 
		}  catch( Exception $e ) {
			echo $e->getMessage(); #catch any exceptions and report the problem
		}
		
		$this->params['next_depositor_num'] = $data['depositor no.']+1;
		
		$api_params = array ('controller' => 'bank', 'action' => 'getinithours');
		
		try { 
			$data = $this->_API->sendRequest($api_params); 
		}  catch( Exception $e ) {
			echo $e->getMessage(); #catch any exceptions and report the problem
		}
		
		$this->params['init_hours_num'] = $data['init_hours_num'];
		
		$str = View::render('insert_depositor/insert', $this->params, true);
		
		$this->render($str);
	}
	
	public function insertAction() {
		#Refer to the documentation for fields
		if (
			  !empty($this->params['name']) &&
			  !empty($this->params['surname']) &&
			  !empty($this->params['birth_place']) &&
			  !empty($this->params['birth_date']) &&
			  !empty($this->params['sex']) &&
			  !empty($this->params['city']) &&
			  !empty($this->params['index']) &&
			  !empty($this->params['email']) &&
			  !empty($this->params['mobile']) &&
			  !empty($this->params['document']) &&
			  !empty($this->params['document_type']) &&
			  !empty($this->params['state']) &&
			  !empty($this->params['available'])
			 ) {
			
			$api_params 
			=
			@array (
				'controller'     => 'depositor',
				'action'         => 'create',
				'name'           => $this->params['name'],
				'surname'        => $this->params['surname'],
				'birth_place'    => $this->params['birth_place'],
				'birth_date'     => $this->params['birth_date'],
				'sex'            => $this->params['sex'],
				'street'         => $this->params['street'],
				'civic'          => $this->params['civic'],
				'city'           => $this->params['city'],
				'index'          => $this->params['index'],
				'email'          => $this->params['email'],
				'mobile'         => $this->params['mobile'],
				'telephone'      => $this->params['telephone'],
				'document'       => $this->params['document'],
				'document_type'  => $this->params['document_type'],
				'profession'     => $this->params['profession'],
				'degree'         => $this->params['degree'],
				'info_from'      => $this->params['info_from'],
				'associations'   => $this->params['associations'],
				'state'          => $this->params['state'],
				'available'      => $this->params['available'],
				'hours'          => $this->params['hours'],
				'notes'          => $this->params['notes']
			);
			
			
			try { 
				$data = $this->_API->sendRequest($api_params); 
			}  catch( Exception $e ) {
				$error = $e->getMessage();
				$str = View::render('insert_depositor/unknown_failure', $this->params, true);
				
				$this->render($str);
			} 
			$this->params['page_title'] = $this->params['insert_a_depositor_text'];
			$str = View::render('insert_depositor/success', $this->params, true);
			$this->render($str);
			#var_dump($data);#                     DEBUG
		} else {
			#print_r($this->params);#                    DEBUG
			$str = View::render('insert_depositor/blank_field', $this->params, true);
			$this->render($str);
		}
	}
	
}

?>