<?php

class TransactionController extends AbstractController {
	
	public function insertAction() {
		$this->params['page_title'] = $this->params['insert_a_transaction_text'];

		$str = View::render('transaction_insert/main', $this->params, true);
		$this->render($str);
	}
}
?>