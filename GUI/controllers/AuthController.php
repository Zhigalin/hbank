<?php

class AuthController extends AbstractController {

	public function __construct($params) {
		global $_ENV;
		global $_SETTINGS;
		global $_LANG;
		global $PAGES;
		
		$this->params = array_merge($params, $_ENV, $_SETTINGS, $_LANG, $PAGES);
	}

	protected function render($str) {
		#Nope
	}
	
	public function loginAction() {
		if (!isset($_SESSION['email'])) {
			$this->params['page_title'] = $this->params['please_log_in_text'];
			
			$str = View::render('auth/login', $this->params);
		} else {
			$this->authorizeAction();
		}
	}
	
	public function authorizeAction() {
		global $_OPERATORS;
		
		if (!isset($_SESSION['email'])) {
			if (isset($this->params['email']) && isset($this->params['password']) && isset($_OPERATORS[$this->params['email']])) {
				if ($_OPERATORS[$this->params['email']] === $this->params['password']) {
					$_SESSION['email'] = $this->params['email'];
					$_SESSION['password'] = $this->params['password'];
					
					require 'controllers/DefaultController.php';
					$obj = new DefaultController($this->params);
					$obj->indexAction();
				} else {
					$this->params['page_title'] = $this->params['wrong_password_text'];
					View::render('auth/nopasswd', $this->params);
				}
			} else {
				$this->params['page_title'] = $this->params['wrong_mail_text'];
				View::render('auth/nomail', $this->params);
			}
		} elseif (isset($_SESSION['password'])) {
			if ($_OPERATORS[$_SESSION['email']] === $_SESSION['password']) {
				require 'controllers/DefaultController.php';
				$obj = new DefaultController($this->params);
				$obj->indexAction();
			} else {
				$this->params['page_title'] = $this->params['wrong_password_text'];
				View::render('auth/nopasswd', $this->params);
			}
		} else {
			$this->params['page_title'] = $this->params['please_log_in_text'];
			$str = View::render('auth/login', $this->params);
		}
	}
	
	public function exitAction() {
		session_unset();
		$this->loginAction();
	}
}

?>