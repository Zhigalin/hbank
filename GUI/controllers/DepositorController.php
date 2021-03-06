<?php

class DepositorController extends AbstractController {

	protected function get_depositor() {
		$api_params
			=
			@array (
				'controller'     => 'depositor',
				'action'         => 'read',
				'id'             => $this->params['id']
			)
		;

		try {
			$data = $this->_API->sendRequest($api_params);
		} catch( Exception $e ) {
			#catch any exceptions and report the problem
			@ErrorHandling::APIException('depo:get', $data, $api_params, $e, $this->params);
		}

		return $data['result'];
	}

	public function readAction() {
		if(!isset($this->params['id'])) {
			$str = View::render('depositor_read/noid', $this->params, true);
			$this->render($str);
			exit();
		}

		$this->params['page_title'] = $this->params['depositor_data_text'];

		$this->params['depositor'] = $this->get_depositor();

		$str = View::render('depositor_read/main', $this->params, true);
		$this->render($str);
	}

	public function listAction() {
		if(isset($this->params['searchfor'])) {
			if($this->params['searchfor'] === 'id') {
				$this->params['id'] = $this->params['seachtext'];
				$this->readAction();
				exit();
			}
		}

		$this->params['page_title'] = $this->params['members_list_text'];

		$str = View::render('depositors_table/sort', $this->params, true);
		$str .= View::render('depositors_table/table_header', $this->params, true);

		$api_params
			=
			@array (
				'controller'     => 'depositor',
				'action'         => 'list',
				'sortby'         => $this->params['sortby'],
				'sortorder'      => $this->params['sortorder'],
				'state'          => $this->params['state'],
				'page'           => $this->params['page'],
				'perpage'        => $this->params['perpage'],
				'search'         => $this->params['search'],
				'searchfor'      => $this->params['searchfor'],
				'seachtext'      => $this->params['seachtext']
			)
		;

		try {
			$data = $this->_API->sendRequest($api_params);
		} catch( Exception $e ) {
			#catch any exceptions and report the problem
			@ErrorHandling::APIException('depo:list', $data, $api_params, $e, $this->params);
		}

		if (!empty($data['result'])) {
			foreach ($data['result'] as $d) {
				$col = function(&$str, $params, $field) {
					$str .= View::render('depositors_table/column', $params, true);
					$str .= $field;
					$str .= View::render('depositors_table/column_end', $params, true);
				};

				$str .= View::render('depositors_table/row', $this->params, true);

				$col ($str, $this->params, urldecode($d['depositor no.']));
				$col ($str, $this->params, urldecode($d['name']));
				$col ($str, $this->params, urldecode($d['surname']));
				$col ($str, $this->params, urldecode($d['mobile']));
				$col ($str, $this->params, urldecode($d['email']));
				$col ($str, $this->params, urldecode($d['hours no.']));
				$col ($str, $this->params, urldecode($d['state']));
				
				$this->params['depositor_id'] = $d['depositor no.'];
				$col ($str, $this->params, View::render('depositors_table/button', $this->params, true)); #details button
				
				$str .= View::render('depositors_table/row_end', $this->params, true);
			}
		} else {
			$str .= View::render('depositors_table/nodata', $this->params, true);
		}
		
		$str .= View::render('depositors_table/table_footer', $this->params, true);
		
		if ($data['pages'] > 1) {
			
			$url = 'index.php?'.$_SERVER['QUERY_STRING'].'&page=1';
			$page_url = 'index.php?'.$_SERVER['QUERY_STRING'].'&page=';
			
			if(empty($this->params['perpage'])) {
				$this->params['perpage'] = 20;
			}
			
			Pagination::set($this->params, $data['page'], $data['pages'], $this->params['perpage'], $url, $page_url);
			
			$str .= Pagination::display();
		}
		
		$this->render($str);
	}
	
	public function createAction() {
		$this->params['page_title'] = $this->params['insert_a_depositor_text'];
		
		$api_params = array ('controller' => 'depositor', 'action' => 'getlastnum');
		
		try {
			$data = $this->_API->sendRequest($api_params);
		}  catch( Exception $e ) {
			#catch any exceptions and report the problem
			@ErrorHandling::APIException('depo:create:1', $data, $api_params, $e, $this->params);
		}

		$this->params['next_depositor_num'] = $data['result']['depositor no.']+1;

		$api_params = array ('controller' => 'bank', 'action' => 'getinithours');

		try {
			$data = $this->_API->sendRequest($api_params);
		}  catch( Exception $e ) {
			#catch any exceptions and report the problem
			ErrorHandling::APIException('depo:create:2', $data, $api_params, $e, $this->params);
		}

		$this->params['init_hours_num'] = $data['init_hours_num'];

		$str = View::render('depositor_insert/insert', $this->params, true);

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
			  !empty($this->params['state'])
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
					'province'       => $this->params['province'],
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
					'hours'          => $this->params['hours'],
					'notes'          => $this->params['notes']
				)
			;

			try {
				$data = $this->_API->sendRequest($api_params);
			} catch( Exception $e ) {
				#catch any exceptions and report the problem
				@ErrorHandling::APIException('depo:insert', $data, $api_params, $e, $this->params);
			}

			$this->params['page_title'] = $this->params['insert_a_depositor_text'];
			$str = View::render('depositor_insert/success', $this->params, true);
			$this->render($str);
		} else {
			$this->params['page_title'] = $this->params['blank_field_text'];
			$str = View::render('depositor_insert/blank', $this->params, true);
			$this->render($str);
		}
	}

	public function updateAction() {
		if(empty($this->params['id'])) {
			$str = View::render('depositor_update/noid', $this->params, true);
			$this->render($str);
			exit();
		}

		$this->params['page_title'] = $this->params['update_depositor_data_text'];

		$this->params['depositor'] = $this->get_depositor();
		$str = View::render('depositor_update/main', $this->params, true);
		$this->render($str);
	}
}

?>