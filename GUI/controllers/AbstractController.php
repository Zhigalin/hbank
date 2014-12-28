<?php

abstract class AbstractController {
	protected $params;
	protected $_API;
	
	public function __construct($params) {
		global $_ENV;
		global $_SETTINGS;
		global $_LANG;
		global $PAGES;
		
		$this->params = array_merge($params, $_ENV, $_SETTINGS, $_LANG, $PAGES);
		$this->_API = new ApiCaller($this->params['api']['user_key'], $this->params['api']['api_key'], $this->params['api']['core_api_url']);
		
		if (!isset($_SESSION['email'])) {
			require 'controllers/AuthController.php';
			$obj = new AuthController($this->params);
			$obj->loginAction();
			exit();
		} else {
			if (isset($_SESSION['password'])) {
				global $_OPERATORS;
				
				if ($_OPERATORS[$_SESSION['email']] ==! $_SESSION['password']) {
					$this->params['page_title'] = $this->params['wrong_password_text'];
					View::render('auth/nopasswd', $this->params);
					exit();
				}
			} else {
				$this->params['page_title'] = $this->params['wrong_password_text'];
				View::render('auth/nopasswd', $this->params);
				exit();
			}
		}
	}
	
	protected function render($str) {
		View::render('header', $this->params);
		echo $str;
		View::render('footer', $this->params);
	}
	
	public function notfoundAction() {
		header('HTTP/1.1 404 Not found');
		header('Status: 404 Not found');
		
		$this->params['page_title'] = $this->params['notfound_text'];
		
		$str = View::render('404', $this->params, true);
		
		echo View::render('header', $this->params, true).$str.View::render('footer', $this->params, true);
	}
	
	public function hostinfoAction() {
		View::render('hostinfo');
	}
}

?>