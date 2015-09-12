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
			@ErrorHandling::APIException('tr:do', $data, $api_params, $e, $this->params);
		}
		
		#LogHandling::logTransaction($from, $to, $hours, $data['result'], $_SESSION['email']);
		
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
		
		$code = $this->doTransaction('commit', $this->params['from'], $this->params['to'], $this->params['hours']);
		
		switch ($code) {
			case 1:
				$this->params['notification'] = $this->params['transaction_sender_less_than_5_hours_left_text'];
				break;
			case 2:
				$this->params['notification'] = $this->params['transaction_sender_no_hours_left_text'];
				break;
			case 10:
				$this->params['error'] = $this->params['transaction_sender_isnt_active_text'];
				break;
			case 11:
				$this->params['error'] = $this->params['transaction_receiver_isnt_active_text'];
				break;
			case 12:
				$this->params['error'] = $this->params['transaction_sender_hasnt_so_many_hours_text'];
				break;
			case 13:
				$this->params['error'] = $this->params['transaction_sender_does_not_exist_text'];
				break;
			case 14:
				$this->params['error'] = $this->params['transaction_receiver_does_not_exist_text'];
				break;
		}
		
		if($code >= 10) {
			View::render('transaction_insert/error', $this->params);
			exit();
		}
		
		View::render('transaction_insert/success', $this->params);
	}
}
?>