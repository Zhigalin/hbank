<?php

class DefaultController extends AbstractController {
	protected function render($str) {
		echo View::render('header', $this->params, true).$str.View::render('footer', $this->params, true);
	}
	
	public function indexAction() {
		$this->params['page_title'] = $this->params['homepage_text']; 
		
		$str = View::render('index/temp', $this->params, true);
		/*$str = View::render('depositors_table/sort', $this->params, true);
		$str = $str.View::render('depositors_table/table_header', $this->params, true);
		$str = $str.View::render('depositors_table/nodata', $this->params, true);
		#TODO
		$str = $str.View::render('depositors_table/table_footer', $this->params, true);
		$str = $str.View::render('depositors_table/pagination', $this->params, true); */
		
		$this->render($str);
	}
	
	public function loginAction() {
		$this->params['page_title'] = $this->params['homepage_text']; 
		
		View::render('login', $this->params);
	}
	
}

?>