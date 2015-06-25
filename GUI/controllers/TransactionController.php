<?php

class TransactionController extends AbstractController {
	protected function doTransaction($mode, $from, $to, $hours) {
		$api_params
			=
			@array (
				'controller'     => 'transaction',
				'action'         => $mode,
				'from'           => $from,
				'to'             => $to,
				'hours'          => $hours
			)
		;
		
		try {
			$data = $this->_API->sendRequest($api_params);
		} catch( Exception $e ) {
			#catch any exceptions and report the problem
			@ErrorHandling::APIException('tr:verify', $data, $api_params, $e, $this->params);
		}
		
		if($mode === 'commit') {
			LogHandling::logTransaction($from, $to, $hours, $data['result']);
		}
		return $data['result'];
	}
	
	public function fillAction() {
		$this->params['page_title'] = $this->params['insert_a_transaction_text'];
		
		View::render('transaction_insert/main', $this->params);
	}
	
	public function insertAction() {
		if(
			!isset(
				$this->params['from'],
				$this->params['to'],
				$this->params['hours']
				)
		) {
			$this->params['page_title'] = $this->params['insert_a_transaction_text'];
			View::render('transaction_insert/empty', $this->params);
			exit();
		}
		
		$code = $this->doTransaction('check', $this->params['from'], $this->params['to'], $this->params['hours']);
	}
}
?>